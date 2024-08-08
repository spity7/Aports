@extends('layouts.home')

@section('title', ' Apartment Details || Aports || Aports HTML 5 Template ')

@section('content')
    @include('partials.apartment_details.header')

    @include('partials.apartment_details.page_header')

    @include('partials.apartment_details.apartment_details')

    @include('partials.apartment_details.floor_plan_two')

    @include('partials.apartment_details.cta_one')

    @include('partials.apartment_details.footer')

@endsection
