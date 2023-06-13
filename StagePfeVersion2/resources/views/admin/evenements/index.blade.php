@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold">Listes des evenements</h3>
    @include('admin.inc.success')
    @include('admin.inc.successD')
    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary btn" href="{{route('admin.evenements.create')}}">Ajouter Un Evenement</a>
        </div>
    </div>
    <table  class="table table-hover table-product" style="width:100%">
        <div class="row">
            <div class="col">
                <thead class="tableau">
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Jour</th>
                        <th>Mois</th>
                        <th>Horaire</th>
                        <th>Lieu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($evenements as $evenement)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $evenement->titre }}</td>
                            <td>{{ $evenement->jour }}</td>
                            <td>{{ $evenement->mois }}</td>
                            <td>{{ $evenement->horaire }}</td>
                            <td>{{ $evenement->lieu }}</td>
                            <div>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$evenement->id}}">
                                        <span class="mdi mdi-message"></span>
                                    </button>
                                    <a class="btn btn btn-danger"
                                        href="{{route('admin.evenements.delete', $evenement->id)}}"><span class="mdi mdi-delete-circle"></span></a>
                                </td>
                            </div>
                        </tr>
                        <div class="modal fade" id="exampleModal{{ $evenement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="" cols="10" rows="10" disabled>{{ $evenement->description }}</textarea>
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
