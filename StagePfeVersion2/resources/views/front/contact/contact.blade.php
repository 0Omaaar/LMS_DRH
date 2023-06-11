@extends('base')
@section('title', 'Page de contact')
@section('content')

@include('sweetalert::alert')

<div class="contact mt-5">
		
    <!-- Contact Map -->

    <div class="contact_map mt-5">

        <!-- Google Map -->
        
        <div class="map pt-4">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map" class="mt-5">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1151.6447090485678!2d-6.862077596078266!3d33.98879160985495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1682267314707!5m2!1sfr!2sma"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact Info -->

    <div class="contact_info_container">
        <div class="container">
            <div class="row">

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact_form">
                        <div class="contact_info_title">Formulaire Contact</div>
                        <form action="{{route('front.contact.submit')}}" method="POST" class="comment_form">
                            @csrf
                            <div>
                                <div class="form_title">Nom Complet</div>
                                <input type="text" class="comment_input" name="nom" required="required" placeholder="Votre Nom..">
                            </div>
                            <div>
                                <div class="form_title">Email</div>
                                <input type="text" class="comment_input" name="email" required="required"placeholder="Votre Email..">
                            </div>
                            <div>
                                <div class="form_title">Sujet</div>
                                <input type="text" class="comment_input" name="sujet" required="required" placeholder="Votre Sujet.."> 
                            </div>
                            <div>
                                <div class="form_title">Message</div>
                                <textarea class="comment_input comment_textarea" name="message" required="required" placeholder="Votre Message.."></textarea>
                            </div>
                            <div>
                                <button type="submit" class="comment_button trans_200">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-6">
                    <div class="contact_info">
                        <div class="contact_info_title">Contact Infos</div>
                        <div class="contact_info_location">
                            <div class="contact_info_location_title">Lieu Et Contact</div>
                            <ul class="location_list">
                                <li>Avenue Mohamed Ben Abdellah Regragui, Rabat</li>
                                <li>0537778867</li>
                                <li>masirh_sup@yahoo.fr</li>
                            </ul>
                        </div>
                        <div class="contact_info_location">
                            <div class="contact_info_location_title">Horaire</div>
                            <ul class="location_list">
                                <li><p>De Lundi à Vendredi : 9:00 -> 16:00 </p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection