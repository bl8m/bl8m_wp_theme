{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('featured')
@include('bloom.band-slider',['taxonomy_id' => get_option('blm_homepage_slider_taxonomy_id')])
@endsection



@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
