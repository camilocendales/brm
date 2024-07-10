<?php get_header(); ?>
<!-- Muestra el formulario de búsqueda estándar -->
<div class="search-form-container">
    <?php get_search_form(); ?>
</div>

<!-- Muestra los resultados de la búsqueda -->
<div class="search-results">
    <?php if (have_posts()) : ?>
        <h2>Resultados de la búsqueda:</h2>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No se encontraron resultados.</p>
    <?php endif; ?>
</div>


<?php get_footer(); ?>