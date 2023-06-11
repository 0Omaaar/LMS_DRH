<div class="counter">
    <div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="counter_content">
                    <h2 class="counter_title">Demander Votre Formation</h2>
                    <div class="counter_text">
                        <p>Si vous avez identifié un problème au niveau de votre application et que vous souhaitez
                            obtenir une formation pour mieux le comprendre, vous pouvez faire une demande ici en
                            utilisant le formulaire ci-dessous. Nous sommes là pour vous aider à acquérir les
                            connaissances nécessaires afin de résoudre efficacement vos problèmes. Remplissez simplement
                            le formulaire avec les détails de la formation que vous souhaitez recevoir et nous
                            traiterons votre demande dans les plus brefs délais.</p>
                    </div>
                    <!-- Milestones -->

                    <div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

                        <!-- Milestone -->
                        <div class="milestone">
                            <div class="milestone_counter" data-end-value="{{ $nombre_familles }}">
                                {{ $nombre_familles }}</div>
                            <div class="milestone_text">Familles</div>
                        </div>

                        <!-- Milestone -->
                        <div class="milestone">
                            <div class="milestone_counter" data-end-value="{{ $nombre_sousfamilles }}">
                                {{ $nombre_sousfamilles }}</div>
                            <div class="milestone_text">Sous-Familles</div>
                        </div>

                        <!-- Milestone -->
                        <div class="milestone">
                            <div class="milestone_counter" data-end-value="{{ $nombre_formations }}"
                                data-sign-after="+">{{ $nombre_formations }}</div>
                            <div class="milestone_text">Formations</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="counter_form">
            <div class="row fill_height">
                <div class="col fill_height">
                    <form class="counter_form_content d-flex flex-column align-items-center justify-content-center"
                        action="{{route('front.demandeFormation')}}" method="POST">
                        @csrf
                        <div class="counter_form_title">Demander Formation</div>
                        <input type="text" class="counter_input" name="nom" placeholder="Nom Du Cadre" required="required">
                        <input type="text" class="counter_input" name="email" placeholder="Email Du Cadre" required="required">
                        <input type="tel" class="counter_input" name="objet" placeholder="Objet De La Formation"
                            required="required">
                        <textarea class="counter_input counter_text_input" name="message" placeholder="Message" required="required"></textarea>
                        <button type="submit" class="counter_form_button">Demander</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
