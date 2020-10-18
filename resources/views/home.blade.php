<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title',)
<title>Trang chủ</title>
@endsection



@section('content')

<script type="text/javascript">
 $(document).ready(function(){
  $("#jquery_jplayer_1").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
     mp3: "/storage/song/Am-Tham-Ben-Em-Son-Tung-M-TP.mp3",
    });
   },
   swfPath: "/js",
   supplied: "m4a, oga"
  });
 });
</script>

@include('home.banner')

@include('home.recentplay')

@include('home.top15')

@include('home.artistFE')


<!----Add Section Start---->
<div class="ms_advr_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#"><img src="MusicLayout/images/adv.jpg" alt="" class="img-fluid" /></a>
            </div>
        </div>
    </div>
</div>
@include('home.newrelase')

@include('home.album')

@include('home.genres')


@endsection