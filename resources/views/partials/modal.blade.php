<div class="ms_lang_popup">
        <div id="lang_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>language selection</h1>
                        <p>Please select the language(s) of the music you listen to.</p>
                        <ul class="lang_list">
                            <li>
                                <label class="lang_check_label">
                                    English
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    hindi
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    punjabi
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    French
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    German
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Spanish
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Chinese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Japanese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Arabic
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Italian
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                        </ul>
                        <div class="ms_lang_btn">
                            <a href="#" class="ms_btn">apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Queue Clear Model ---->
    <div class="ms_clear_modal">
        <div id="clear_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Are you sure you want to clear your queue?</h1>
                        <div class="clr_modal_btn">
                            <a href="#">clear all</a>
                            <a href="#">cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Queue Save Modal---->
    <div class="ms_save_modal">
        <div id="save_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <form action="{{route('signin')}}" method="post">
                    @csrf
                    <!-- Modal content-->
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="fa_icon form_close"></i>
                        </button>
                        <div class="modal-body">
                            <h1>Đăng nhập để tiếp tục!</h1>
                            <div class="save_modal_btn">
                                <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Đăng nhập bằng google </a>
                                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> Đăng nhập bằng facebook</a>
                            </div>
                            <div class="ms_save_email">
                                <h3>Hoặc bằng tài khoản của bạn</h3>
                                <div class="save_input_group">
                                    <input type="text" placeholder="Enter Your Name" name="email" class="form-control">
                                </div>
                                <div class="save_input_group">
                                    <input type="password" placeholder="Enter Password" name="password" class="form-control">
                                </div>
                                <button type="submit">Đăng nhập</button>
                            </div>
                            <div class="ms_dnt_have">
                                <p>Bạn chưa có tài khoản? <a href="#myModal" data-toggle="modal" class="ms_modal1 hideCurrentModel">Đăng kí</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="ms_clear_modal">
        <div id="success_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Thêm bài hát thành công</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ms_clear_modal">
        <div id="error_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Bài hát đã tồn tại trong danh sách</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ms_clear_modal">
        <div id="delete_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Xoá thành công</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>