@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold">Listes des Familles</h3>
    @include('admin.inc.success')
    @include('admin.inc.successD')
    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary btn" href="{{route('admin.familles.create')}}">Ajouter Une Famille</a>
        </div>
    </div>
    <table  class="table table-hover table-product" style="width:100%">
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
                    @foreach ($categories as $categorie)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $categorie->nom }}</td>
                            <td>{{ $categorie->created_at }}</td>
                            <td>{{ $categorie->updated_at }}</td>
                            <div>
                                <td>
                                    <a class="btn btn btn-dark btn-sm"
                                        href="{{route('admin.familles.show', $categorie->id)}}"><i class="mdi mdi-eye"></i></a>
                                    <a class="btn btn btn-danger btn-sm"
                                        href="{{route('admin.familles.delete', $categorie->id)}}"><span class="mdi mdi-delete-circle"></span>
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
