@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold mt-2">Liste des Formations</h3>
    @include('admin.inc.success')
    @include('admin.inc.errors')
    @include('admin.inc.successD')
    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary btn" href="{{route('admin.formations.create')}}">Ajouter Une Formation</a>
        </div>
    </div>
    <table class="table table-hover table-product" style="width:100%">
        <div class="row">
            <div class="col">
                <thead class="tableau">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Crée à</th>
                        <th>Modifée à</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formations as $formation)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $formation->titre }}</td>
                            <td>{{ $formation->created_at }}</td>
                            <td>{{ $formation->updated_at }}</td>
                            <div>
                                <td>
                                    <a class="btn btn btn-dark btn-sm"
                                        href="{{route('admin.formations.show', $formation->id)}}"><i class="mdi mdi-eye"></i></a>
                                    <a class="btn btn btn-success btn-sm"
                                        href="{{route('admin.formations.edit', $formation->id)}}"><i class="mdi mdi-pencil-circle"></i></a>
                                    <a class="btn btn btn-danger btn-sm"
                                        href="{{route('admin.formations.delete', $formation->id)}}"><span class="mdi mdi-delete-circle"></span>
                                    </a>
                                </td>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </table>
@endsection
