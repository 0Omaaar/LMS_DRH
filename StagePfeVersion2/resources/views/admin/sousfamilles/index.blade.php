@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold">Listes des Sous Familles</h3>
    @include('admin.inc.success')
    @include('admin.inc.successD')
    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary btn" href="{{route('admin.sousfamilles.create')}}">Ajouter Une Sous Famille</a>
        </div>
    </div>
    <table  class="table table-hover table-product" style="width:100%">
        <div class="row">
            <div class="col">
                <thead class="tableau">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Categorie</th>
                        <th>Crée à</th>
                        <th>Modifée à</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($souscategories as $souscategorie)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $souscategorie->nom }}</td>
                            <td>{{ $souscategorie->categorie->nom }}</td>
                            <td>{{ $souscategorie->created_at }}</td>
                            <td>{{ $souscategorie->updated_at }}</td>
                            <div>
                                <td>
                                    {{-- <a class="btn btn btn-dark btn-sm"
                                        href="{{route('admin.sousfamilles.show', $souscategorie->id)}}"><i class="mdi mdi-eye"></i></a> --}}
                                    <a class="btn btn btn-danger btn-sm"
                                        href="{{route('admin.sousfamilles.delete', $souscategorie->id)}}"><span class="mdi mdi-delete-circle"></span>
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
