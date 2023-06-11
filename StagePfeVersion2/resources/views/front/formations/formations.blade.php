@extends('base')
@section('title', 'Page de formations')
@section('content')

    @if ($formations && $formations->count() > 0)
        <div class="courses mt-4">
            <div class="container mt-4">
                <div class="row">
                    <!-- Courses Main Content -->
                    <div class="col-lg-8">
                        <div class="courses_search_container">
                            <form  action="{{ route('front.recherche.formations') }}" method="GET" id="courses_search_form"
                                class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                                    <select class="dropdown_item_select home_search_input" id="categorie" name="categorie">
                                        <option>Formations Selon Famille</option>
                                        @foreach ($familles as $famille)
                                            <option value="{{ $famille->id }}"
                                                data-marque="{{ $famille->nom }}">{{ $famille->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <select class="dropdown_item_select home_search_input" id="souscategorie" name="souscategorie">
                                        <option>Formation Selon Sous-Famille</option>
                                        @foreach ($sousfamilles as $sousfamille)
                                        <option value="{{ $sousfamille->id }}" data-marque="{{ $sousfamille->categorie_id }}"
                                            style="display:none">{{ $sousfamille->nom }}</option>
                                        @endforeach
                                    </select>
                                <button action="submit" class="courses_search_button ml-auto">search now</button>
                            </form>
                        </div>
                        <div class="courses_container">
                            <div class="row courses_row">
                                <!-- Course -->
                                @if ($formations && $formations->count() > 0)
                                    @foreach ($formations as $formation)
                                        <div class="col-lg-6 course_col">
                                            <div class="course">
                                                <div class="course_image"><img src="{{asset('images/course_9.jpg')}}" alt="">
                                                </div>
                                                <div class="course_body">
                                                    <h3 class="course_title"><a
                                                            href="course.html">{{ $formation->titre }}</a></h3>
                                                    <div class="course_teacher">{{ $formation->souscategorie->nom }}</div>
                                                    <div class="course_text">
                                                        <p>{{ $formation->description }}</p>
                                                    </div>
                                                </div>
                                                <div class="course_footer">
                                                    <div
                                                        class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                        <div class="course_info">
                                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                            <span>Publié le :
                                                                {{ \Carbon\Carbon::parse($formation->created_at)->format('d-m-Y') }}</span>
                                                        </div>
                                                        <div class="course_price ml-auto"><i class="fa fa-eye"></i> 50</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h4>Aucune Formation pour cette famille.</h4>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Courses Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Categories -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Familles</div>
                                <div class="sidebar_categories">
                                    <ul>
                                        @foreach ($familles as $famille)
                                            <li><a
                                                    href="{{ route('front.formations.famille', $famille->id) }}">{{ $famille->nom }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Latest Course -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Formations Recentes</div>
                                <div class="sidebar_latest">
                                    <!-- Latest Course -->
                                    @foreach ($formationsrecentes->take(3) as $formationsrecente)
                                    <div class="latest d-flex flex-row align-items-start justify-content-start">
                                        <div class="latest_image">
                                            <div><img src="{{asset('images/latest_1.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="latest_content">
                                            <div class="latest_title"><a href="course.html">{{$formation->titre}}</a></div>
                                            <div class="latest_price">Free</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="sidebar_section">
                                <div
                                    class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="sidebar_banner_background"
                                        style="background-image:url(images/banner_1.jpg)"></div>
                                    <div class="sidebar_banner_overlay"></div>
                                    <div class="sidebar_banner_content">
                                        <div class="banner_title">Free Book</div>
                                        <div class="banner_button"><a href="#">download now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    @endif
@endsection
