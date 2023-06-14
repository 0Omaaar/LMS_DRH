<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Formations Recentes</h2>
                </div>
            </div>
        </div>
        <div class="row courses_row">     
            <!-- Course -->
            @if ($formations  && $formations->count() > 0)
                @foreach ($formations->take(3) as $formation)
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('img/imgann/'.$formation->image)}}" alt=""></div>
                        <div class="course_body">
                            <h3 class="course_title"><a href="{{route('front.formation', $formation->id)}}">{{$formation->titre}}</a></h3>
                            <div class="course_teacher">{{$formation->souscategorie->nom}}</div>
                            <div class="course_text">
                                <p>{{$formation->description}}</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>Publié le : {{ \Carbon\Carbon::parse($formation->created_at)->format('d-m-Y') }}</span>
                                </div>
                                <div class="course_price ml-auto"><i class="fa fa-eye"></i> {{$formation->vues}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <h4>Aucune Formation n'est disponible.</h4>
            @endif
        </div>
        {{-- <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="#">view all courses</a></div>
            </div>
        </div> --}}
    </div>
</div>