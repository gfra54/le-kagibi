<?php 

$meta = array(
    'title' => 'Bienvenue au Kagibi - Bureau partagé à Nancy',
    'description' => 'Le Kagibi est un espace de bureau partagé par des indépendants, salariés, ingénieurs et architectes qui préfère ne pas travailler en pyjama à la maison. A mi-chemin entre le professionnalisme du coworking et la douceur de la maison, le Kagibi réunit le meilleur des deux mondes.',
    'keywords' => 'coworking, bureau, indépendants, freelance, location, nancy, lorraine'
    );

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta property="og:url" content="http://www.lekagibi.fr">
        <link rel="canonical" href="http://www.lekagibi.fr">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?php echo $meta['keywords'];?>">
        <meta name="description" content="<?php echo $meta['description'];?>">
        <meta name="author" content="KAGIBI">

        <meta property="og:image" content="http://www.lekagibi.fr/images/logo.png">
        <meta property="og:title" content="<?php echo $meta['title'];?>" >

        <meta property="og:description" content="<?php echo $meta['description'];?>">
        <meta property="og:type" content="website" >
        <meta property="og:site_name" content="KAGIBI" >
        <meta property="og:locale" content="fr_FR">


        <title><?php echo $meta['title'];?></title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/grayscale.css" rel="stylesheet">
        
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-play-circle"></i>  <span class="light">Bienvenue au</span> Kagibi
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">à propos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#join-us">Nous rejoindre</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading"><?php readfile('images/logo.svg');?></h1>
                            <p class="intro-text">Un bureau partagé<br>par des freelances et des télé-travailleurs<br>en plein coeur de Nancy.</p>
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
                    <h2><?php readfile('images/logo.svg');?></h2>
                    <h2>En savoir plus</h2>
                    <p>Ouvert en 2014 par un collectif de freelance, télé-travailleurs et gérants de petites entreprises, le Kagibi est un espace de bureaux partagés installé à Nancy.</p>
                    <p>Le Kagibi n'est pas qu'un bureau, et n'est pas totalement un espace de coworking. Il est pour l'instant occupé par 3 architectes, 3 graphistes, un designer web et un ingénieur.
                    </div>
                </div>
            </section>

            <section id="join-us" class="container content-section text-center">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Rejoignez-nous</h2>
                        <p>A l'heure actuelle, notre collectif se sent un peu à l’étroit dans ses 3m². Nous sommes de fait à la recherche d'ici janvier d'un local de plus de 100m² susceptible de nous accueillir tous quelque part dans le centre de Nancy, et de gens cool qui ont envie de nous rejoindre.
                            <p>Donc, si tu es un riche propriétaire qui a des m² en trop à louer pas cher ou si tu es un travailleur en pyjama chez toi, n'hésite pas à <a href="#contact">nous contacter</a>.
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
    </section>

    <!-- Map Section -->
    <div id="map">

        <iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/gfra54.ngodl51g/attribution,zoompan,geocoder,share.html?access_token=pk.eyJ1IjoiZ2ZyYTU0IiwiYSI6ImNpZXZlNWp4MTAwYjh0Ym0wa2swaWNtZmQifQ.xaaRxB4KJtY-sDFPE2qNhw'></iframe>

    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p><small>Venez au Kagibi</small></p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
