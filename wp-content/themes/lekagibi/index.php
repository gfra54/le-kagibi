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
                    <!-- <h2><?php logo_kagibi();?></h2> -->
                    <h2>En savoir plus</h2>
                    <p><?php echo get_page_content('en-savoir-plus');?></p>
                    </div>
                </div>
            </section>

            <section id="join-us" class="container content-section">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Rejoignez-nous</h2>
                        <p><?php echo get_page_content('rejoignez-nous');?></p>


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
                <?php echo get_page_content('nous-contacter');?>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/kagibicowo" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Le-Kagibi-384622661685366" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
<?php get_footer(); ?>
