<div class="events">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Evènements à venir
                    </h2>
                    <div class="section_subtitle">
                        <p>Découvrez les événements passionnants à venir ! Notre plateforme offre une expérience
                            d'apprentissage en ligne dynamique et enrichissante. Consultez notre calendrier pour des
                            conférences inspirantes, des ateliers interactifs et des webinaires informatifs. Ne manquez
                            pas ces opportunités stimulantes pour élargir vos connaissances, développer de nouvelles
                            compétences et rencontrer des experts renommés. /p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row events_row">
            @if ($evenements && $evenements->count() > 0)
                @foreach ($evenements->take(3) as $evenement)
                    <!-- Event -->
                    <div class="col-lg-4 event_col">
                        <div class="event event_left">
                            <div class="event_image"><img src="{{ asset('img/even/' . $evenement->image) }}"
                                    alt="">
                            </div>
                            <div class="event_body d-flex flex-row align-items-start justify-content-start">
                                <div class="event_date">
                                    <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                        <div class="event_day trans_200">{{ $evenement->jour }}</div>
                                        <div class="event_month trans_200">{{ $evenement->mois }}</div>
                                    </div>
                                </div>
                                <div class="event_content">
                                    <div class="event_title"><a href="#">{{ $evenement->titre }}</a></div>
                                    <div class="event_info_container">
                                        <div class="event_info"><i class="fa fa-clock-o"
                                                aria-hidden="true"></i><span>{{ $evenement->horaire }}</span></div>
                                        <div class="event_info"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i><span>{{ $evenement->lieu }}</span></div>
                                        <div class="event_text">
                                            <p>{{ $evenement->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4>Aucun evènement n'est disponible.</h4>
            @endif
        </div>
    </div>
</div>
