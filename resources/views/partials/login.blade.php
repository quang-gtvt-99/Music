<div id="myModal1" class="modal  centered-modal" role="dialog">
    <div class="modal-dialog login_dialog">
        <form action="{{route('signin')}}" method="post">
            @csrf
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                @if(Session::has('message'))
                <div class="alert">{{Session::get('message')}}</div>
                @endif
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="{{asset('MusicLayout/images/register_img.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div class="ms_register_form">
                        <h2>Đăng nhập</h2>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Email" name="email" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" name="password" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="remember_checkbox">
                            <label>Lưu thông tin
                                <input type="checkbox" name="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="save_modal_btn">
                            <!-- <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Đăng nhập bằng google </a> -->
                            <a href="{{route('loginfb',['provider'=>'facebook'])}}"><i class="fa fa-facebook-square"></i> Đăng nhập bằng facebook</a>
                        </div>
                        <button type="submit" class="ms_btn">Đăng nhập</button>
                        <div class="popup_forgot">
                            <a href="#">Quên mật khẩu ?</a>
                        </div>
                        <p>Bạn chưa có tài khoản? <a href="#myModal" data-toggle="modal" class="ms_modal1 hideCurrentModel">Đăng kí</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>