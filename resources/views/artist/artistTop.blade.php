<div class="ms_top_artist">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Top ca sĩ</h1>
                </div>
            </div>
            @foreach($artistAll as $artAll)
            <div class="col-lg-2 col-md-6">
                <div class="ms_rcnt_box marger_bottom30">
                    <div class="ms_rcnt_box_img">
                        <img src="{{$artAll->img_path}}" alt="" class="img-fluid">
                        <div class="ms_main_overlay">
                            <div class="ms_box_overlay"></div>
                            <div class="ms_more_icon">
                                <img src="{{asset('MusicLayout/images/svg/more.svg')}}" alt="">
                            </div>
                            <!-- <ul class="more_option">
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                            </ul> -->
                            <div class="ms_play_icon">
                                <img src="{{asset('MusicLayout/images/svg/play.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ms_rcnt_box_text">
                        <h3><a href="{{route('artist.detail',['id'=>$artAll->id])}}" class="artist_play" data-url="{{route('artist.update',['id'=>$artAll->id])}}">{{$artAll->name}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>