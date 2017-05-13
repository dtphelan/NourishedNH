@extends('layouts.master')

@section('title')
Nourished Nutrition Counseling
@endsection

@section('content')
<!-- Header -->
  <header>
      <div class="container">
          <div class="intro-text">
              <div class="intro-heading"><img class='img-splash' src='img/logos/nourished-logo.jpg'></div>
              <a href="#about" class="page-scroll btn btn-xl">Tell Me More</a>
          </div>
      </div>
  </header>
    @include('pages.about')
    @include('pages.work')
    @include('pages.contact')
    @include('pages.blog')
    @include('pages.map')
@stop
