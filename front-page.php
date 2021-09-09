<?php get_header();?>


<div class = "container pt-5 pb-5">

    <div class="col">
        <p class="bluebackground"><?php the_title();?></p>


        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content() ;?>

        <?php endwhile;endif;?>
    </div>


    <?php
    $image = get_field('logo');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>




<?php get_footer();?>
