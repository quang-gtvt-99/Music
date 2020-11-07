@extends('layouts.main')

@section('title',)
<title>Top download</title>
@endsection

@section('content')
<div class="ms_content_wrapper padder_top90">
    @include('downloadTop.topSong')

    @include('downloadTop.topAlbum')
</div>
@endsection
@section('js')
<script>
    $(function() {
        $('.ms_nav_wrapper ul li a').removeClass('active');
        $('#tab6').addClass('active');
    });
</script>
@endsection