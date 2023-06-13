<footer class="footer">
    <div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
    <div class="container">
        <div class="row footer_row">
            <div class="col">
                <div class="footer_content">
                    <div class="row">

                        <div class="col-lg-3 footer_col">

                            <!-- Footer About -->
                            <div class="footer_section footer_about">
                                <div class="footer_logo_container">
                                    <a href="#">
                                        <div class="footer_logo_text">E<span>formation</span></div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Votre Plateforme de formation en ligne.</p>
                                </div>
                                <div class="footer_social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 footer_col">

                            <!-- Footer Contact -->
                            <div class="footer_section footer_contact">
                                <div class="footer_title">Contactez-Nous</div>
                                <div class="footer_contact_info">
                                    <ul>
                                        <li>Email:masirh_sup@yahoo.fr</li>
                                        <li>Telephone: 0537778867
                                        </li>
                                        <li>Avenue Mohamed Ben Abdellah Regragui, Rabat
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row copyright_row">
            <div class="col">
                <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    <div class="cr_text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This Project is made with <i
                            class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{route('admin.index')}}"
                            target="_blank">Omar</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // fonction pour afficher les sous-catégories correspondantes à la catégorie sélectionnée
    $('#categorie').change(function() {
        var marque_id = $(this).children("option:selected").val();
        $('#souscategorie option').each(function() {
            if ($(this).attr('data-marque') == marque_id) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        $('#souscategorie').val('');
    });
</script>
<script>
    // Handle the video type selection
    var youtubeVideo = document.getElementById('youtube_video');
    var uploadedVideos = document.getElementById('uploaded_videos');

    document.getElementsByName('video_type').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.value === 'youtube') {
                youtubeVideo.style.display = 'block';
                uploadedVideos.style.display = 'none';
            } else if (this.value === 'upload') {
                youtubeVideo.style.display = 'none';
                uploadedVideos.style.display = 'block';
            }
        });
    });
</script>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('plugins/colorbox/jquery.colorbox-min.js') }}"></script>

{{-- @if (Request::is('/formations')) --}}
    <script src="{{ asset('js/courses.js') }}"></script>
    <script src="{{asset('js/course.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('plugins/marker_with_label/marker_with_label.js')}}"></script>
{{-- @endif --}}
</body>

</html>
