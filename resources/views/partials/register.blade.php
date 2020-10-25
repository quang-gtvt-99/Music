<form action="{{route('signup')}}" method="post">
    @csrf
    <div id="myModal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog register_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="{{asset('MusicLayout/images/register_img.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div class="ms_register_form">
                        <h2>Đăng kí / Đăng nhập</h2>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Nhập tên của bạn" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-user" aria-hidden="true"></i>
                            </span>
                            @if($errors->has('name'))
                            <div class="alert alert-danger">
                                {{$errors->first('name')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Nhập email" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-envelope" aria-hidden="true"></i>
                            </span>
                            @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{$errors->first('email')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                            @if($errors->has('password'))
                            <div class="alert alert-danger">
                                {{$errors->first('password')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirmpass" placeholder="Nhập lại mật khẩu" class="form-control">
                            <span class="form_icon">
                                <i class=" fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                            @if($errors->has('confirmpass'))
                            <div class="alert alert-danger">
                                {{$errors->first('confirmpass')}}
                            </div>
                            @endif
                        </div>

                        <button type="submit" class="ms_btn register">
                            Đăng kí
                        </button>
                        <p>Bạn đã có tài khoản? <a href="#myModal1" data-toggle="modal" class="ms_modal hideCurrentModel">Đăng nhập</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
