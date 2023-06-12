@extends('admin.base')

@section('content')
    <div class="f-flex justify-content-between mb-3">
        @include('admin.inc.errors')
    </div>

    <form action="{{route('admin.formations.update', $formation->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ $formation->titre }}">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $formation->description }}">
        </div>
        <div class="form-group">
            <label for="">Objectif</label>
            <input type="text" name="objectif" class="form-control" value="{{ $formation->objectif }}">
        </div>
        <div class="form-group mt-3">
            <label for="">Image</label>
            <img src="{{ asset('img/imgann/' . $formation->image) }}" alt="{{ $formation->titre }}"
                class="img-fluid mt-3 w-25 img-thumbnail mb-1"
                onclick="showImage('{{ asset('img/imgann/' . $formation->image) }}')">
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group mt-3">
            <label for="">Sous categorie</label>
            <select name="souscategorie_id" id="souscategorie_id">
                <option value="">Choisissez une sous categorie</option>
                @foreach ($souscategories as $souscategorie)
                    <option value="{{ $souscategorie->id }}" selected>{{ $souscategorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="youtube_url">URL de la vidéo YouTube</label>
            <input type="text" name="youtube_url" class="form-control" id="youtube_url"
                placeholder="Entrez l'URL de la vidéo YouTube" value="{{$formation->youtube_url}}">
        </div>
        <div class="form-group mt-3">
            <label for="">Pdf</label>
            <input type="file" name="pdf" class="form-control-file">
        </div>
        <div class="form-group mt-3">
            <label for="">La/Les vidéos de la Formation</label>
            <input type="file" name="videos[]" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Modifier</button>
    </form>


    <script>
        function showImage(src) {
            var modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            modal.style.zIndex = '999';
            modal.style.display = 'flex';
            modal.style.justifyContent = 'center';
            modal.style.alignItems = 'center';

            var img = document.createElement('img');
            img.src = src;
            img.style.maxWidth = '90%';
            img.style.maxHeight = '90%';
            img.style.objectFit = 'contain';
            modal.appendChild(img);

            document.body.appendChild(modal);

            modal.addEventListener('click', function() {
                modal.parentElement.removeChild(modal);
            });
        }
    </script>
@endsection
