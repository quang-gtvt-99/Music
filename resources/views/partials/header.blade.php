<!---Header--->
<div class="ms_header">
    <div class="ms_top_left">
        <div class="ms_top_search">
            <form action="/search" method="get">
                <input type="text" class="form-control" name="key" placeholder="Tìm kiếm">
                <button type="submit" class="fa fa-search search_icon"></button>
                <!-- <span class="search_icon" type="submit">
                    <img src="{{asset('MusicLayout/images/svg/search.svg')}}" alt="">
                </span> -->
            </form>
        </div>
        <div class="ms_top_trend">
            <span><a href="#" class="ms_color">Ca khúc HOT :</a></span> <span class="top_marquee"><a href="#">Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley (+8 More)</a></span>
        </div>
    </div>
    <div class="ms_top_right">
        <div class="ms_top_lang">
            <span data-toggle="modal" data-target="#lang_modal">Ngôn ngữ <img src="MusicLayout/images/svg/lang.svg" alt=""></span>
        </div>
        <div class="ms_top_btn">
            @if(Auth::check())
            <a href="javascript:;" class="ms_admin_name">Hello Bella <span class="ms_pro_name">ns</span>
            </a>
            <ul class="pro_dropdown_menu">
                <li><a href="profile.html">Profile</a></li>
                <li><a href="manage_acc.html" target="_blank">Pricing Plan</a></li>
                <li><a href="blog.html" target="_blank">Blog</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
            @else
            <a href="javascript:;" class="ms_btn reg_btn" data-toggle="modal" data-target="#myModal"><span>Đăng kí</span></a>
            <a href="javascript:;" class="ms_btn login_btn" data-toggle="modal" data-target="#myModal1"><span>Đăng nhập</span></a>
            @endif
        </div>
    </div>
</div>