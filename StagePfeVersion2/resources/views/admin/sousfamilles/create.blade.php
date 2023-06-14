@extends('admin.base')
@section('content')
    <div class="f-flex justify-content-between mb-3">
        @include('admin.inc.errors') 
    </div>

    <form action="{{route('admin.sousfamilles.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nom de la sous famille</label>
            <input type="text" name="nom" class="form-control">
            <label for="" class="mt-2">Famille</label>
            <select name="categorie_id" id="categorie_id" class="form-control mt-4">
                <option value=""></option>
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                @endforeach
            </select>

        </div>
        <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
    </form>
@endsection