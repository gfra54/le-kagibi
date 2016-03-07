<?php get_header(); ?>


        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading"><?php logo_kagibi();?></h1>
                            <div class="intro-text"><?php echo get_page_content('accueil');?></div>
                            <a href="#about" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="about" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>En savoir plus</h2>
                    <p><?php echo get_page_content('en-savoir-plus');?></p>
                    </div>
                </div>
            </section>

            <section id="join-us" class="container content-section">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Rejoignez-nous</h2>
                        <p>A l'heure actuelle, notre collectif se sent un peu à l’étroit dans ses 3m².<br>
                        Nous sommes de fait à la recherche d'ici janvier d'un local de plus de 100m² susceptible de nous accueillir tous quelque part dans le centre de Nancy, et de gens cool qui ont envie de nous rejoindre.<br>
                            <p>Donc, si tu&nbsp;es un riche propriétaire qui a des m² en trop à louer pas cher ou si tu&nbsp;es un travailleur en pyjama chez toi, n'hésite pas à <a href="#contact">nous contacter</a>.
                                Pour info, le montant du loyer moyen par personne est aujourd'hui autour de 120€ et permet l’accès à chacun d'un espace de bureau perso, une salle de réunion (et de pause), une cuisine, etc...</p>
                                <p>A tout bientôt<br>
                                    <b><i>La direction</i></b>.</p>

                                </div>
                            </div>
                        </section>


    <!-- Download Section 
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contacter le Kagibi</h2>
                <p>Si vous avez des questions sur le Kagibi, ou si vous<br>souhaitez nous rejoindre, envoyez vos mails à</p>
                <p><a href="mailto:contact@lekagibi.fr">contact@lekagibi.fr</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/kagibinancy" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Le-Kagibi-384622661685366" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    <div id="map">

        <iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/gfra54.ngodl51g/attribution,zoompan,geocoder,share.html?access_token=pk.eyJ1IjoiZ2ZyYTU0IiwiYSI6ImNpZXZlNWp4MTAwYjh0Ym0wa2swaWNtZmQifQ.xaaRxB4KJtY-sDFPE2qNhw'></iframe>

    </div>
    </section>

    <!-- Map Section -->
<?php get_footer(); ?>
