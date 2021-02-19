<?php get_header(); ?>
<!-- Início loop posts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <!-- Fim do loop posts -->
    <?php endwhile;
else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<p>aqui está fora do loop</p>
<?php get_footer(); ?>