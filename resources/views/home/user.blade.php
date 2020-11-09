@extends('layouts.main')

@section('title',)
<title>Trang cá nhân</title>
@endsection



@section('content')
<div class="ms_profile_wrapper">
    <h1>Chỉnh sửa thông tin cá nhân</h1>
    <form action="{{route('user.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="ms_profile_box">
            <div class="ms_pro_img">
                <img src="{{$user->img_path}}" alt="" class="img-fluid">
                <input type="file" name="img_path" id="">
            </div>
            <div class="ms_pro_form">
                <div class="form-group">
                    <label>Tên của bạn</label>
                    <input type="text" value="{{$user->name}}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" value="{{$user->email}}" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" value="{{$user->password}}" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Xác nhận mật khẩu</label>
                    <input type="password" placeholder="******" name="comfirmpass" class="form-control">
                </div>
                <div class="pro-form-btn text-center marger_top15">
                    <button class="ms_btn" data-url="{{route('signin')}}" style="border:none">Lưu</button>
                    <a href="#" class="ms_btn">Huỷ bỏ</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection