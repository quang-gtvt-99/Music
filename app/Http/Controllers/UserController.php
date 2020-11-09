<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{

    private  $user;
    public function __construct(User $user,Song $song)
    {
        $this->song=$song;
        $this->user = $user;
    }

    public function signup(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'name' => 'required',
            'confirmpass' => 'required|same:password'
        ], [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'name.required' => 'Vui lòng nhập tên',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'confirmpass.required' => 'Vui lòng nhập lại mật khẩu',
            'confirmpass.same' => 'Mật khẩu không giống nhau',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->active = 0;
        $user->save();
        return with('success', 'Tạo tài khoản thành công');
    }

    public function signin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Không đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('home');
        } else {
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Đăng nhập thất bại']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }

    public function index()
    {
        $user = Auth::user();
        $songT1 = $this->song->orderBy('number_listen', 'desc')->take(2)->get();
        return view('home.user', compact('user','songT1'));
    }

    public function update($id, Request $request)
    {
        $fileName = $request->img_path->getClientOriginalName();
        $this->user->find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'img_path' => Storage::url($request->file('img_path')->storeAs('public/user', $fileName)),
        ]);
        return redirect()->action('App\Http\Controllers\UserController@index');
    }

    //dang nhap facebook
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        Auth::login($user);
        return redirect()->to('/home');
    }
    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $avatar = $getInfo->getAvatar();
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'img_path'=>  $avatar,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
