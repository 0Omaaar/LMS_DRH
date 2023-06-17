@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold">Listes des demandes de formation</h3>
    @include('admin.inc.success')
    @include('admin.inc.errors')
    @include('admin.inc.successD')
    <table  id="myTable" class="display">
        <div class="row">
            <div class="col">
                <thead class="tableau">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Objet</th>
                        <th>Statut</th>
                        <th>Envoyée à</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($demandes as $demande)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $demande->nom }}</td>
                            <td>{{ $demande->email }}</td>
                            <td>{{ $demande->objet }}</td>
                            <td>
                                @if ($demande->statut == 'En Attente')
                                    <p class="activ etat">En Attente</p>
                                @elseif ($demande->statut == 'En Cours de traitement')
                                    <p class="desactive etat">En Cours de traitement</p>
                                @else
                                    <p class="active etat">Traitée</p>
                                @endif
                            </td>
                            <td>{{ $demande->created_at }}</td>
                                <td>
                                    <a  href="#" style="color: black; font-size: 30px; margin-left: 2px;" data-toggle="modal" data-target="#exampleModal{{$demande->id}}">
                                        <span class="mdi mdi-message"></span>
                                    </a>
                                    <a style="color: red; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.demandes.delete', $demande->id) }}"><span
                                            class="mdi mdi-delete-circle"></span>
                                    </a>
                                    <a style="color: blue; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.demandes.enAttente', $demande->id) }}"><span
                                            class="mdi mdi-information"></span>
                                    </a>
                                    <a style="color: grey; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.demandes.enCoursDeTraitement', $demande->id) }}"><span
                                            class="mdi mdi-blender"></span>
                                    </a>
                                    <a style="color: green; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.demandes.traitee', $demande->id) }}"><span
                                            class="mdi mdi-check-outline"></span>
                                    </a>
                                </td>
                        </tr>
                        <div class="modal fade" id="exampleModal{{ $demande->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="" cols="30" rows="10" disabled>{{ $demande->message }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </div>
        </div>
    </table>
@endsection
