@extends('admin.base')

@section('content')
    <a class="btn btn-primary mb-5" href="{{route('admin.familles.create')}}">Ajouter Une Famille</a>
    @include('admin.inc.success')
    @include('admin.inc.successD')
    <div class="row">
        <div class="col-6">
            <a class="" ></a>
        </div>
    </div>
    <table  id="myTable" class="display">
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
                                    <a style="color: black; font-size: 30px; margin-left: 2px;"
                                        href="{{route('admin.familles.show', $categorie->id)}}"><i class="mdi mdi-eye"></i></a>
                                    <a style="color: red; font-size: 30px; margin-left: 2px;"
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
    {{-- <div class="pagin">
        {{ $categories->links() }}
    </div> --}}
@endsection
