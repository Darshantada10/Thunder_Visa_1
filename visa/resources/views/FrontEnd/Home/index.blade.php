@extends('Layouts.FrontEnd.app')


@section('content')

    @include('FrontEnd.Home.visabox')

    @include('FrontEnd.Home.about')
    
    @include('FrontEnd.Home.counts')

    @include('FrontEnd.Home.faq')
    
    @include('FrontEnd.Home.universities')

    @include('FrontEnd.Home.benefits')
    
    @include('FrontEnd.Home.process')
    
    @include('FrontEnd.Home.blogs')

    @endsection