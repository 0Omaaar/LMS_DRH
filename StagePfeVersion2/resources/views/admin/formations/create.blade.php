@extends('admin.base')

@section('content')
    <div class="f-flex justify-content-between mb-3">
        @include('admin.inc.errors')
    </div>

    <form action="{{route('admin.formations.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name="titre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Objectif</label>
            <input type="text" name="objectif" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group mt-3">
            <label for="">Pdf</label>
            <input type="file" name="pdf" class="form-control-file">
        </div>
        <div class="form-group mt-3">
            <label for="">Sous categorie</label>
            <select name="souscategorie_id" id="souscategorie_id">
                <option value="">Choisissez une sous categorie</option>
                @foreach ($souscategories as $souscategorie)
                    <option value="{{$souscategorie->id}}">{{$souscategorie->nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="youtube_url">URL de la vidéo YouTube</label>
            <input type="text" name="youtube_url" class="form-control" id="youtube_url" placeholder="Entrez l'URL de la vidéo YouTube">
        </div>
        <div class="form-group mt-3">
            <label for="">La/Les vidéos de la Formation</label>
            <input type="file" name="videos[]" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
    </form>
@endsection