@extends('admin.base')
@section('content')
    <div class="f-flex justify-content-between mb-3">
        @include('admin.inc.errors')
    </div>

    <form action="{{route('admin.evenements.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name="titre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Jour</label>
            <input type="number" name="jour" class="form-control" placeholder="00">
        </div>
        <div class="form-group">
            <label for="">Mois</label>
            <select name="mois" id="" class="form-control">
                <option value="Jan">Jan</option>
                <option value="Fev">Fev</option>
                <option value="Mars">Mars</option>
                <option value="Avr">Avr</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juil">Juil</option>
                <option value="Aout">Aout</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Horaire</label>
            <input type="text" name="horaire" class="form-control" value="00:00 - 00:00">
        </div>
        <div class="form-group">
            <label for="">Lieu</label>
            <input type="text" name="lieu" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">
        </div> 
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
        </div> 
        <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
    </form>
@endsection