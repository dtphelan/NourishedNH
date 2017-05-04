@extends('layouts.master')

@section('title')
Nourished Nutrition Counseling
@endsection

@section('content')
<!-- Header -->
  <header>
      <div class="container">
          <div class="intro-text">
              <div class="intro-lead-in">Something to Say</div>
              <div class="intro-heading">Nourished Nutrition Counseling</div>
              <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
          </div>
      </div>
  </header>
    @include('pages.about')
    @include('pages.work')
    @include('pages.love')
    @include('pages.contact')
    @include('pages.blog')
@stop
