<?php get_header(); ?>
<?php /* Start the Loop */
while ( have_posts() ) :
    the_post();
?>
<div class="Card_info">
    <h1 class=""><?php the_title(); ?></h1>
    <?php
    $celular = get_post_custom_values('Celular');
    $email = get_post_custom_values('Email');
    ?>
    <p class=""><?php  echo $celular[0]; ?></p>
    <p class=""><?php  echo $email[0]; ?></p>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>