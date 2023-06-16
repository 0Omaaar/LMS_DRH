@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold mt-2">
        Liste des Formations Signalées</h3>
    @include('admin.inc.success')
    @include('admin.inc.errors')
    @include('admin.inc.successD')
    <table class="table table-hover table-product" style="width:100%">
        <div class="row">
            <div class="col">
                <thead class="tableau">
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Statut</th>
                        <th>Envoyée à</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formations as $formation)
                        <tr style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $formation->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $formation->formation->titre }}</td>
                            <td>
                                @if ($formation->statut == 'Non Traitée')
                                    <p class="activ etat">Non Traitée</p>
                                @else
                                    <p class="active etat">Traitée</p>
                                @endif
                            </td>
                            <td>{{ $formation->created_at }}</td>
                            <div>
                                <td>
                                    <a style="color: black; font-size: 20px;"
                                        href="{{ route('admin.formations.show', $formation->formation->id) }}"><i
                                            class="mdi mdi-eye"></i></a>
                                    <a style="color: green; font-size: 20px;"
                                        href="{{ route('admin.formations.edit', $formation->formation->id) }}"><i
                                            class="mdi mdi-pencil-circle"></i></a>
                                    <a style="color: red; font-size: 20px;"
                                        href="{{ route('admin.formationsSig.nontraitee', $formation->id) }}"><span
                                            class="mdi mdi-close"></span>
                                    </a>
                                    <a style="color: red; font-size: 20px;"
                                        href="{{ route('admin.formations.delete', $formation->formation->id) }}"><span
                                            class="mdi mdi-delete-circle"></span>
                                    </a>
                                    <a style="color: blue; font-size: 20px;"
                                        href="{{ route('admin.formationsSig.traitee', $formation->id) }}"><span
                                            class="mdi mdi-check-outline"></span>
                                    </a>
                                </td>
                            </div>
                        </tr>
                        <div class="modal fade" id="exampleModal{{ $formation->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Raison</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea name="" id="" cols="30" rows="10" class="form-control" disabled>{{$formation->raison}}</textarea>
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
