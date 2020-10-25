<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            'name'=>'required',
            'confirmpass'=>'required|same:password'
        ],[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng',
            'email.unique'=>'Email đã tồn tại',
            'name.required'=>'Vui lòng nhập tên',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'confirmpass.required'=>'Vui lòng nhập lại mật khẩu',
            'confirmpass.same'=>'Mật khẩu không giống nhau',
        ]);
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->active=0;
        $user->save();
        return back()->with('success','Tạo tài khoản thành công');

    }

    public function signin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ],[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('home');
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
}
