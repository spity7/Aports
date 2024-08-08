@extends('layouts.home')

@section('title', ' News Details || Aports || Aports HTML 5 Template ')

@section('content')

    @include('partials.news_details.header')

    @include('partials.news_details.page_header')

    @include('partials.news_details.news_details')

    @include('partials.news_details.footer')

@endsection
