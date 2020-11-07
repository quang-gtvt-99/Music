<!---Recently Played Music--->
<div class="ms_rcnt_slider">
    <div class="ms_heading">
        <h1>Gợi ý</h1>
        <span class="veiw_all"><a href="#">Xem thêm</a></span>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($songs as $song)
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="{{$song->img_path}}" alt="">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="MusicLayout/images/svg/more.svg" alt="">
                            </div>
                            <ul class="more_option">
                                @if(Auth::check())
                                <li><a href="#" data-url="{{route('song.favourite',['id'=>$song->id])}}" class="add_favourite" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào thư viện</a></li>
                                <li>
                                    <a href="{{route('download',['file'=>$song->song_path])}}" download="{{$song->song_path}}">
                                        <span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a>
                                </li>
                                <li><a href="#" onClick="get_detail_song({{$song->id}})"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào Playlist</a></li>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000{{$song->song_path}}"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                                @else
                                <li><a href="#save_modal" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào thư viện</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào Playlist</a></li>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000{{$song->song_path}}"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                                @endif
                            </ul>
                            <div class="ms_play_icon">
                                <img src="{{asset('MusicLayout/images/svg/play.svg')}}" class="song_play" onClick="get_detail_song({{$song->id}})" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="javascript:void(0)" class="song_play" onClick="get_detail_song({{$song->id}})">{{$song->name}}</a></h3>
                        @foreach ($song->artists as $sa)
                        <p>{{$sa->name}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music2.jpg" alt="">
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
                        <h3><a href="#">Until I Met You</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music3.jpg" alt="">
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
                        <h3><a href="#">Gimme Some Courage</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music4.jpg" alt="">
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
                        <h3><a href="#">Dark Alley Acoustic</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music5.jpg" alt="">
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
                        <h3><a href="#">Walking Promises</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music6.jpg" alt="">
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
                        <h3><a href="#">Desired Games</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music1.jpg" alt="">
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
                        <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music2.jpg" alt="">
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
                        <h3><a href="#">Until I Met You</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music3.jpg" alt="">
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
                        <h3><a href="#">Gimme Some Courage</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="ms_rcnt_box">
                    <div class="ms_rcnt_box_img">
                        <img src="MusicLayout/images/music/r_music4.jpg" alt="">
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
                        <h3><a href="#">Dark Alley Acoustic</a></h3>
                        <p>Ava Cornish & Brian Hill</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next slider_nav_next"></div>
    <div class="swiper-button-prev slider_nav_prev"></div>
</div>