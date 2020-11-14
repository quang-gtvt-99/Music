<div class="ms_fea_album_slider">
    <div class="ms_heading">
        <h1>Albums nổi bật</h1>
        <span class="veiw_all"><a href="{{ route('album.index') }}">Xem thêm</a></span>
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
                            <div class="ms_play_icon">
                                <img src="{{asset('MusicLayout/images/svg/play.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="{{route('album.detail',['id'=>$album->id])}}">{{$album->name}}</a></h3>
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