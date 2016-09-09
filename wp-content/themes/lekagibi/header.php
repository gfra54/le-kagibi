<?php


	$meta = array(
    'title' => 'Bienvenue au Kagibi - Espace de Co-Working et de bureau partagé à Nancy',
    'description' => 'Le Kagibi est un presqu\'espace de coworking, bureau partagé par des indépendants, salariés, ingénieurs et architectes qui préfèrent ne pas travailler en pyjama à la maison. A mi-chemin entre le professionnalisme du coworking et la douceur de la maison, le Kagibi réunit le meilleur des deux mondes.',
    'keywords' => 'coworking, bureau, indépendants, freelance, location, nancy, lorraine'
    );

    ?>
    <!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">

    <head>


	<title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
	echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
	echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	  <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri();?>/css/grayscale.css" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <!-- Custom Fonts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <meta property="og:image" content="<?php echo site_url();?>/wp-content/uploads/2016/03/2016-03-04-10_25_36-1-Rue-du-Joli-C%C5%93ur-Google-Maps-1024x678.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:title" content="Le Kagibi coworking" >

    <meta property="og:description" content="Le Kagibi n'est pas qu'un bureau, et n'est pas totalement un espace de coworking. Il est pour l'instant occupé par des architectes, des graphistes, des développeurs web et des ingénieurs. Pour en savoir plus, consultez notre page de présentation.">
    <meta property="og:type" content="website" >
    <meta property="og:site_name" content="lekagibi.fr" >
    <meta property="og:locale" content="fr_FR">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@kagibicowo">
    <meta name="twitter:creator" content="@kagibicowo">
    <meta name="twitter:title" content="lekagibi.fr">
    <meta name="twitter:description" content="Le Kagibi n'est pas qu'un bureau, et n'est pas totalement un espace de coworking. Il est pour l'instant occupé par des architectes, des graphistes, des développeurs web et des ingénieurs. Pour en savoir plus, consultez notre page de présentation.">
    <meta name="twitter:image" content="<?php echo site_url();?>/wp-content/uploads/2016/03/2016-03-04-10_25_36-1-Rue-du-Joli-C%C5%93ur-Google-Maps-1024x678.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

	<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="/">
                        <i class="fa fa-building"></i>  <span class="light">Bienvenue au</span> Kagibi
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <?php foreach(getMenu('primary') as $item) {?>
                        <li>
                            <a class="page-scroll" href="<?php echo $item->url;?>"><?php echo $item->title;?></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>