@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold">Listes des Reclamations</h3>
    @include('admin.inc.successD')
    <table  id="myTable" class="display">
        <div class="row">
            <div class="col">
                <thead class="tableau">
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Envoyée à</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reclamations as $reclamation)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reclamation->titre }}</td>
                            <td>{{ $reclamation->description }}</td>
                            <td>
                                @if ($reclamation->statut == 'En Attente')
                                    <p class="activ etat">En Attente</p>
                                @elseif ($reclamation->statut == 'En Cours de traitement')
                                    <p class="desactive etat">En Cours de traitement</p>
                                @else
                                    <p class="active etat">Traitée</p>
                                @endif
                            </td>
                            <td>{{ $reclamation->created_at }}</td>
                            <div>
                                <td>
                                    <a style="color: red; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.reclamations.delete', $reclamation->id) }}"><span
                                            class="mdi mdi-delete-circle"></span>
                                    </a>
                                    <a style="color: blue; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.reclamations.enAttente', $reclamation->id) }}"><span
                                            class="mdi mdi-information"></span>
                                    </a>
                                    <a style="color: grey; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.reclamations.enCoursDeTraitement', $reclamation->id) }}"><span
                                            class="mdi mdi-blender"></span>
                                    </a>
                                    <a style="color: green; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.reclamations.traitee', $reclamation->id) }}"><span
                                            class="mdi mdi-check-outline"></span>
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
