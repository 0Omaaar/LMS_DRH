@extends('base')
@section('title', 'Page d\'acceuil')
@section('content')

@include('includes.home')
<div class="mt-5">
    @include('includes.courses')
</div>

@endsection