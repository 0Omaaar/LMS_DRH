@extends('admin.base')
@section('content')
    <div class="form-group">
        <label class=""><strong>Nom</strong></label>
        <input type="text" name="nom" class="form-control" value="{{$souscategorie->nom}}" disabled>
        <label for=""><strong>Nom de la famille liee :</strong></label>
        <input type="text" name="nom" class="form-control" value="{{$categorie->nom}}" disabled>
        <label for=""><strong>Nombre de formations liees :</strong></label>
        <input type="text" name="nom" class="form-control" value="{{$formation}}">
        <label for=""><strong>Liste des formations liees :</strong></label><br>
        <select name="" id="">
            @foreach ($formations as $formation)
                <option disabled selected>{{$formation->titre}}</option>
            @endforeach
        </select><br>
        <label for=""><strong>Cree a</strong></label>
        <input type="text" name="nom" class="form-control" value="{{$souscategorie->created_at}}">
        <label for=""><strong>Modifie a</strong></label>
        <input type="text" name="nom" class="form-control" value="{{$souscategorie->updated_at}}">
    </div>
    <a href="{{ route('admin.sousfamilles.index') }}" class="btn btn-danger mt-4">Annuler</a>
@endsection
