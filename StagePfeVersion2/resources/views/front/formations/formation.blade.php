@extends('base')
@section('title', 'Page de formation')
@section('content')
    <div class="course mt-5">
        <div class="container mt-5">
            <div class="row">

                <!-- Course -->
                <div class="col-lg-8">

                    <div class="course_container">
                        <div class="course_title">{{ $formation->titre }}</div>
                        <div
                            class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                            <!-- Course Info Item -->
                            <div class="course_info_item">
                                <div class="course_info_title">Categorie:</div>
                                <div class="course_info_text"><a
                                        href="#">{{ $formation->souscategorie->categorie->nom }}</a></div>
                            </div>
                            <div class="course_info_item">
                                <div class="course_info_title">Sous Categorie:</div>
                                <div class="course_info_text"><a href="#">{{ $formation->souscategorie->nom }}</a>
                                </div>
                            </div>
                            <div class="course_info_item">
                                <div class="course_info_title">Publié le :</div>
                                <div class="course_info_text"><a
                                        href="#">{{ \Carbon\Carbon::parse($formation->created_at)->format('d-m-Y') }}</a>
                                </div>
                            </div>

                        </div>

                        <!-- Course Image -->
                        <div class="course_image"><img src="images/course_image.jpg" alt=""></div>

                        <!-- Course Tabs -->
                        <div class="course_tabs_container">
                            <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                <div class="tab active">Description</div>
                                <div class="tab">Video/s</div>
                                <div class="tab">Support/s</div>
                            </div>
                            <div class="tab_panels">

                                <!-- Description -->
                                <div class="tab_panel active">
                                    <div class="tab_panel_title">{{ $formation->titre }}</div>
                                    <div class="tab_panel_content">
                                        <div class="tab_panel_text">
                                            <p>{{ $formation->objectif }}</p>
                                            <p>{{ $formation->description }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- VIDEOS -->
                                <div class="tab_panel tab_panel_2">
                                    <div class="tab_panel_content">
                                        <div class="tab_panel_title">{{ $formation->titre }}</div>
                                        <div class="tab_panel_content">
                                            @if ($formation->youtube_url || $formation->videos()->count() > 0)
                                                <div class="mt-5 ml-3">
                                                    <div id="youtube_video" class="ml-5">
                                                        <iframe width="90%" height="300" src="{{ $video_url }}"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div id="uploaded_videos" style="display: none;">
                                                        @foreach ($formation->videos as $video)
                                                            <div>
                                                                <video width="90%" height="300" controls>
                                                                    <source src="{{ asset('videos/' . $video->chemin) }}"
                                                                        type="video/mp4">
                                                                    Votre navigateur ne supporte pas la vidéo demandée.
                                                                </video>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @else
                                                <div>
                                                    <h5>Aucune vidéo pour le moment.</h5>
                                                </div>
                                            @endif
                                            <div class="mt-4 text text-center">
                                                <label>
                                                    <input type="radio" name="video_type" value="youtube" checked
                                                        style="cursor: pointer"> YOUTUBE
                                                </label>
                                                <label>
                                                    <input type="radio" name="video_type" value="upload"
                                                        style="cursor: pointer; margin-left: 20px"> TELECHARGEE
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PDF -->
                                <div class="tab_panel tab_panel_3">
                                    <div class="tab_panel_title">Support PDF</div>
                                    @if ($formation->pdf_chemin)
                                        <div class="content_wrapper py-5">
                                            <div class="form-group mt-3">
                                                <a href="{{ asset('pdf/' . $formation->pdf_chemin) }}" class="courses_button_pdf"
                                                    download>
                                                    {{-- <i class="fa fa-file-pdf"></i> --}}
                                                    Télécharger PDF
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="content_wrapper py-5">
                                            <b>
                                                Aucun pdf a télécharger
                                            </b>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Feature -->
                        <div class="sidebar_section">
                            <div class="sidebar_section_title">Infos Formation</div>
                            <div class="sidebar_feature">

                                <!-- Features -->
                                <div class="feature_list">

                                    <!-- Feature -->
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-users"
                                                aria-hidden="true"></i><span>Nombre de vues:</span></div>
                                        <div class="feature_text ml-auto">{{$formation->vues}}</div>
                                    </div>
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-users"
                                                aria-hidden="true"></i><span>Nombre de videos:</span></div>
                                        <div class="feature_text ml-auto">{{$formation->videos->count()}}</div>
                                    </div>
                                    <div class="feature d-flex flex-row align-items-center justify-content-start">
                                        <div class="feature_title"><i class="fa fa-users"
                                                aria-hidden="true"></i><span>Support:</span></div>
                                        <div class="feature_text ml-auto">PDF</div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Latest Course -->
                        <div class="sidebar_section">
                            <div class="sidebar_section_title">Formations Recentes</div>
                            <div class="sidebar_latest">

                                <!-- Latest Course -->
                                @foreach ($formations->take(3) as $formation)
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_image">
                                        {{-- <div><img src="images/latest_1.jpg" alt=""></div> --}}
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="{{route('front.formation', $formation->id)}}">{{$formation->titre}}</a></div>
                                        <div class="latest_price">{{$formation->souscategorie->nom}}</div>
                                    </div>  
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
