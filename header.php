<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Mazzali Pizza</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        
        <?php wp_head() ?>
</head>
<body>

<header>
        <div class="container">
                <a class="logo" href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-white.png" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="#">BUYURTMA BERISH +93 637 08 03</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>


                <?php 

                    wp_nav_menu(

                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'main-menu font-mountainsre',
                            'menu_id' => 'main-menu',
                            'container' => 'ul'
                        )
                        
                    );
                ?>


                <div class="clearfix"></div>
        </div><!-- container -->
</header>