<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

<!-- Início loop posts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field_cmb2('foto_rest'); ?>" alt="<?php the_field_cmb2('alt_foto_rest') ?>">
			</div>

			<div class="grid-8">
			<?php 
				$sobre = get_field_cmb2('sobre');
				if(isset($sobre)) {
					foreach ($sobre as $about) {
			?>
			<h2><?php echo $about['titulo']; ?></h2>
			<?php echo wpautop($about['texto']); ?>
			<?php } } ?>
			</div>
		</section>

		<!-- Fim do loop posts -->
	<?php endwhile;
else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>