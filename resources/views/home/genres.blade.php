<div class="ms_genres_wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="ms_heading">
                <h1>Thể loại</h1>
                <span class="veiw_all"><a href="{{ route('genres.index') }}">Xem thêm</a></span>
            </div>
        </div>
        @foreach($genres as $key=> $gr)
        <div class="{{$key==0 && $key==1 ? 'col-lg-6' : 'col-lg-4'}}">
            <div class="ms_genres_box">
                <img src="{{$gr->img_path}}" alt="" class="img-fluid" />
                <div class="ms_main_overlay">
                    <div class="ms_box_overlay"></div>
                    <div class="ms_play_icon">
                        <img src="MusicLayout/images/svg/play.svg" alt="">
                    </div>
                    <div class="ovrly_text_div">
                        <span class="ovrly_text1"><a href="{{route('genres.detail',['id'=>$gr->id])}}">{{$gr->name}}</a></span>
                        <span class="ovrly_text2"><a href="{{route('genres.detail',['id'=>$gr->id])}}">Xem</a></span>
                    </div>
                </div>
                <div class="ms_box_overlay_on">
                    <div class="ovrly_text_div">
                        <span class="ovrly_text1"><a href="{{route('genres.detail',['id'=>$gr->id])}}">{{$gr->name}}</a></span>
                        <span class="ovrly_text2"><a href="{{route('genres.detail',['id'=>$gr->id])}}">Xem</a></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>