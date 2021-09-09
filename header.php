<!DOCTYPE Html>
<html>
    <head>

        <?php wp_head();?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    </head>

<body <?php body_class();?>>









<header class = "sticky-top">


    <?php
    $image = get_field('logo');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>


        <div class = "container">



    <?php wp_nav_menu (



            array(



                    'theme_location' => 'top-menu',
                    'menu_class' => 'navigation'
            )
        );?>
        </div>
</header>