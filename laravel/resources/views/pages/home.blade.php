@extends('layout.main-layout')

@section('content')
  <div class="content">
    <h1>HOME</h1>
    <a href="{{route('blog')}}">BLOG</a>
    <a href="{{route('about')}}">ABOUT</a>

  </div>
@endsection
