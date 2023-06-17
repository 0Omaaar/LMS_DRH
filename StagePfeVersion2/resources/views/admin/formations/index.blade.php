@extends('admin.base')

@section('content')
<a class="btn btn-primary mb-5" href="{{route('admin.formations.create')}}">Ajouter Une formation</a>
@include('admin.inc.success')
    @include('admin.inc.errors')
    @include('admin.inc.successD')
    <div class="row">
       
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
                    @foreach ($formations as $formation)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $formation->titre }}</td>
                            <td>{{ $formation->created_at }}</td>
                            <td>{{ $formation->updated_at }}</td>
                            <div>
                                <td>
                                    <a style="color: black; font-size: 30px; margin-left: 2px;"
                                        href="{{route('admin.formations.show', $formation->id)}}"><i class="mdi mdi-eye"></i></a>
                                    <a style="color: green; font-size: 30px; margin-left: 2px;"
                                        href="{{route('admin.formations.edit', $formation->id)}}"><i class="mdi mdi-pencil-circle"></i></a>
                                    <a style="color: red; font-size: 30px; margin-left: 2px;"
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
