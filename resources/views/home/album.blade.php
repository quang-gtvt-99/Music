<div class="ms_fea_album_slider">
    <div class="ms_heading">
        <h1>Albums nổi bật</h1>
        <span class="veiw_all"><a href="#">Xem thêm</a></span>
    </div>
    <div class="ms_album_slider swiper-container">
        <div class="swiper-wrapper">
            @foreach($albums as $album)
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{$album->img_path}}" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="#">{{$album->name}}</a></h3>
                        <!-- @foreach($album->songs as $song)
                        @foreach ($song->artists as $sa)
                        <p>{{$sa->name}}</p>
                        @endforeach
                        @endforeach -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next3 slider_nav_next"></div>
    <div class="swiper-button-prev3 slider_nav_prev"></div>
</div>