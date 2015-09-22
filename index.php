<?php 
$MENU = array(
    array(
        "lib" => 'Nous rejoindre',
        "w" => 'recrutement'
    ),
    array(
        "lib" => 'Contact',
        "w" => 'contact'
    ),
    array(
        "lib" => 'Facebook',
        "url" => 'https://www.facebook.com/Le-Kagibi-384622661685366'
    )
    
);

$w = isset($_GET['w']) ? $_GET['w'] : false;
?>
<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Le Kagibi est un espace de bureau partagés par des indépendants, salariés, ingénieurs et architectes qui préfère ne pas travailler en pyjama à la maison. A mi-chemin entre le coworking et la maison, le Kagibi réunit le meilleur des deux mondes.">
    <meta name="author" content="Kagibi">
    <meta name="keywords" content="coworking, bureau, indépendants, freelance, location, nancy, lorraine">

    <title>Bienvenue au Kagibi - Bureau partagé à Nancy</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="logo-small"><?php readfile('images/logo.svg');?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php foreach($MENU as $menu){if(empty($menu['url'])) { $menu['url'] = $menu['w'].'.html';}?>
                    <li>
                        <a <?php echo !empty($menu['w']) && $menu['w'] == $w ? 'class="selected"' : '';?> href="<?php echo $menu['url'];?>"><?php echo $menu['lib'];?></a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php if($w) {
        include $w.'.php';
    }else {?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <center>Bienvenue au </center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="logo-big"><?php readfile('images/logo.svg');?></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    <?php }?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
