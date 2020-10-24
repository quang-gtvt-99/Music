<!---Weekly Top 15--->
<div class="ms_weekly_wrapper">
    <div class="ms_weekly_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Top 15</h1>
                </div>
            </div>
            @foreach($songs as $key=> $song)
            <div class="col-lg-12 col-md-12 padding_right40">
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <span class="w_top_no">
                            {{$key+1}}
                        </span>
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{$song->img_path}}" alt="" class="img-fluid">
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="MusicLayout/images/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="javascript:void(0)" class="song_play" onClick="get_detail_song({{$song->id}})">{{$song->name}}</a></h3>
                                @foreach ($song->artists as $sa)
                                <p>{{$sa->name}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">{{$song->time}}</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="MusicLayout/images/svg/more.svg" alt="">
                        </span>
                    </div>
                    <ul class="more_option">
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                    </ul>
                </div>
                <div class="ms_divider"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
