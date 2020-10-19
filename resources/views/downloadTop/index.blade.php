@extends('layouts.main')

@section('title',)
<title>Top download</title>
@endsection

@section('content')
    @include('downloadTop.topSong')

    @include('downloadTop.topAlbum')

@endsection
@section('js')
<script>
    $(function() {
        $('.ms_nav_wrapper ul li a').removeClass('active');
        $('#tab6').addClass('active');
    });
</script>
@endsection