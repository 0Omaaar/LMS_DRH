@extends('admin.base')

@section('content')
    <h3 class="text text-center pb-3 text-uppercase fw-bold">Liste des messages de contact</h3>
    <div class="row">
        @include('admin.inc.success')
        @include('admin.inc.errors')
        @include('admin.inc.successD')
    </div>
    <table id="myTable" class="display">
        <div class="row">
            <div class="col">
                <thead class="tableau">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Sujet</th>
                        <th>Envoyé à</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $contact->nom }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->sujet }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <div>
                                <td>
                                    <button type="button"
                                        style="color: black; font-size: 30px; margin-left: 2px;"data-toggle="modal"
                                        data-target="#exampleModal{{ $contact->id }}">
                                        <span class="mdi mdi-message"></span>
                                    </button>
                                    <a style="color: red; font-size: 30px; margin-left: 2px;"
                                        href="{{ route('admin.contacts.delete', $contact->id) }}"><span
                                            class="mdi mdi-delete-circle"></span></a>
                                </td>
                            </div>
                        </tr>
                        <div class="modal fade" id="exampleModal{{ $contact->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="" cols="30" rows="10" disabled>{{ $contact->message }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </div>
        </div>
    </table>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
@endsection
