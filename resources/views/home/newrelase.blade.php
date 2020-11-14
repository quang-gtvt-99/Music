<div class="ms_releases_wrapper">
    <div class="ms_heading">
        <h1>Mới phát hành</h1>
        <span class="veiw_all"><a href="{{ route('song.index') }}">Xem thêm</a></span>
    </div>
    <div class="ms_release_slider swiper-container">
        <div class="ms_divider"></div>
        <div class="swiper-wrapper">
            @foreach($songRelase as $sL)
            <div class="swiper-slide">
                <div class="ms_release_box">
                    <div class="w_top_song">
                        <span class="slider_dot"></span>
                        <div class="w_tp_song_img">
                            <img src="{{$sL->img_path}}" alt="">
                            <div class="ms_song_overlay">
                            </div>
                            <div class="ms_play_icon">
                                <img src="MusicLayout/images/svg/play.svg" alt="">
                            </div>
                        </div>
                        <div class="w_tp_song_name">
                            <h3><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$sL->id])}}" class="song_play" onClick="get_detail_song({{$sL->id}})">{{$sL->name}}</a></h3>
                            @foreach ($sL->artists as $art)
                            <p>{{$art->name}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">{{$sL->time}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next2 slider_nav_next"></div>
    <div class="swiper-button-prev2 slider_nav_prev"></div>
</div>