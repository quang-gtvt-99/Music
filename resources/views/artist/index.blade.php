@extends('layouts.main')

@section('title',)
<title>Ca sĩ</title>
@endsection

@section('content')
<div class="ms_content_wrapper padder_top80">

    @include('artist.artistFE')
    <!----Top Artist Section---->
    @include('artist.artistTop')
    <!----Live Radio Section Start---->
</div>

@endsection
@section('js')
<script>
    $(function() {
        $('.ms_nav_wrapper ul li a').removeClass('active');
        $('#tab3').addClass('active');
    });
</script>
@endsection