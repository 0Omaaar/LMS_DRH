@extends('admin.base')

@section('content')
    <a class="btn btn-primary mb-5" href="{{ route('admin.sousfamilles.create') }}">Ajouter Une Sous Famille</a>
    @include('admin.inc.success')
    @include('admin.inc.successD')
    <div class="row">

    </div>
    <table id="myTable" class="display">
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
                                    <a style="color: red; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.sousfamilles.delete', $souscategorie->id) }}"><span
                                            class="mdi mdi-delete-circle"></span>
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
