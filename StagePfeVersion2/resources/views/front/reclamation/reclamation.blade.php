@extends('base')
@section('title', 'Page de reclamation')
@section('content')


@include('sweetalert::alert')

<div class="reclamation mt-5">
		
    <div class="contact_info_container">
        <div class="container">
            <div class="row">
                <!-- Reclamation Form -->
                <div class="col-lg-6">
                    <div class="contact_form">
                        <div class="contact_info_title">Formulaire Reclamation</div>
                        <form action="{{route('front.reclamation.submit')}}" method="POST" class="comment_form">
                            @csrf
                            <div>
                                <div class="form_title">Titre</div>
                                <input type="text" class="comment_input" name="titre" required="required" placeholder="Votre Nom..">
                            </div>
                            <div>
                                <div class="form_title">Description</div>
                                <textarea class="comment_input comment_textarea" name="description" required="required" placeholder="Description de votre Réclamation.."></textarea>
                            </div>
                            <div>
                                <button type="submit" class="comment_button trans_200">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection