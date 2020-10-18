@extends('layouts.main')

@section('title',)
<title>Top download</title>
@endsection

@section('content')
    @include('downloadTop.topSong')

    @include('downloadTop.topAlbum')

@endsection