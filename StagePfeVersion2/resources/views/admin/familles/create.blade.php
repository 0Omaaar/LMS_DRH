@extends('admin.base')
@section('content')
    <div class="f-flex justify-content-between mb-3">
        @include('admin.inc.errors')
    </div>

    <form action="{{route('admin.familles.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
    </form>
@endsection