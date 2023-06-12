@extends('admin.base')
@section('content')
    <div class="form-group">
        <label class=""><strong>Nom</strong></label>
        <input type="text" name="nom" class="form-control" value="{{ $categorie->nom }}" disabled>
        <label for=""><strong>Nombre de sous familles liees :</strong></label>
        <input type="text" name="nom" class="form-control" value="{{ $souscategorie }}" disabled>
        <label for=""><strong>Liste des sous familles liees :</strong></label><br>
        <select name="" id="">
            @foreach ($souscategories as $souscategorie)
                <option disabled selected>{{ $souscategorie->nom }}</option>
            @endforeach
        </select><br>
        <label for=""><strong>Nombre de formations liees :</strong></label>
        <input disabled type="text" name="nom" class="form-control" value="{{ $formations }}">
        <label for=""><strong>Liste des formations liees :</strong></label><br>
        <select name="" id="">
            @foreach ($formation as $f)
                <option disabled selected>{{ $f->titre }}</option>
            @endforeach
        </select><br>
        <label for=""><strong>Cree a</strong></label>
        <input type="text" name="nom" class="form-control" value="{{ $categorie->created_at }}" disabled>
        <label for=""><strong>Modifie a</strong></label>
        <input type="text" name="nom" class="form-control" value="{{ $categorie->updated_at }}" disabled>
    </div>
    <a href="{{ route('admin.familles.index') }}" class="btn btn-danger mt-4">Annuler</a>
@endsection
