@extends('base')
@section('title', 'Page d\'acceuil')
@section('content')

@include('includes.home')
@include('includes.features')
@include('includes.courses')
@include('includes.counter')
@include('sweetalert::alert')
@include('includes.events')


@endsection