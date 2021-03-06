<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta Description>
  <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/img/logo.png" rel="icon">
</head>

<body <?php body_class(); ?>>

      <?php wp_body_open(); ?>

    <!--Logo et Menu Du site-->

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>
    </nav>




    <!--Logo et Menu Du site-->
