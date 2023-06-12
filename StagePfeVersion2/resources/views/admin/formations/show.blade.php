@extends('admin.base')

@section('content')
    <div class="f-flex justify-content-between mb-3">

    </div>
    <div class="form-group">
        <label for="">Titre</label>
        <input type="text" name="titre" class="form-control" value="{{ $formation->titre }}" disabled>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control" value="{{ $formation->description }}" disabled>
    </div>
    <div class="form-group">
        <label for="">Objectif</label>
        <input type="text" name="objectif" class="form-control" value="{{ $formation->objectif }}" disabled>
    </div>
    <div class="form-group mt-3">
        <label for="">Image</label><br>
        <img class="mt-4" src="{{ asset('img/imgann/' . $formation->image) }}" alt="{{ $formation->titre }}"
            width="400px">
    </div>
    <div class="form-group mt-3">
        <label for="">Sous categorie</label>
        <input type="text" value="{{ $souscategorie }}" disabled class="form-control">
    </div>
    @if ($formation->youtube_url)
        <div class="form-group mt-3">
            <label for="youtube_url">URL de la vidéo YouTube</label>
            <input type="text" name="youtube_url" class="form-control" id="youtube_url"
                value="{{ $formation->youtube_url }}" disabled>
        </div>
        <div class="form-group mt-3">
            <iframe width="420" height="315" src="{{ $video_url }}" allow="fullscreen">
            </iframe>
        </div>
    @else
        <input disabled class="form-control mt-3" value="Aucun url de video sur Youtube.">
    @endif
    @if ($formation->pdf_chemin)
        <div class="form-group mt-3">
            <label for="">PDF :</label>
            <a href="{{ asset('pdf/' . $formation->pdf_chemin) }}" class="btn btn-warning mr-3" download>
                <i class="fas fa-file-pdf"></i>
                Télécharger <b>PDF</b>
            </a>
        </div>
    @else
        <input type="text" class="form-control mt-3" value="Aucun pdf pour cette formation" disabled>
    @endif
    @if ($formation->videos()->count() > 0)
        @foreach ($formation->videos as $video)
            <label for="" class="mt-3">Vidéo :</label>
            <div class="form-group">
                <video width="420" height="315" controls>
                    <source src="{{ asset('videos/' . $video->chemin) }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo demandée.
                </video>
            </div>
        @endforeach
    @else
        <div class="form-group mt-3">
            <label for="">Vidéos :</label>
            <input type="text" class="form-control mt-3" value="Aucune vidéo pour cette formation" disabled>
        </div>
    @endif
    <a href="{{ route('admin.formations') }}" class="btn btn-danger mt-4">Annuler</a>
@endsection
