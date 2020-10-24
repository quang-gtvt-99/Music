@extends('layouts.main')

@section('title',)
<title>Genres</title>
@endsection

@section('content')
<div class="ms_content_wrapper padder_top80">
<div class="ms_rcnt_slider marger_top60">
    <div class="ms_heading">
        <h1>{{$genres->name}}</h1>
        <span class="veiw_all"><a href="#">Xem thêm</a></span>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($genres->songs as $song)
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{$song->img_path}}" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{asset('MusicLayout/images/svg/more.svg')}}" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{asset('MusicLayout/images/svg/play.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">{{$song->name}}</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next5 slider_nav_next"></div>
    <div class="swiper-button-prev5 slider_nav_prev"></div>
</div>
</div>
    
@endsection