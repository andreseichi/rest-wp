<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<!-- Início loop posts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="<?php the_field_cmb2('mapa_rest_link') ?>" target="_blank"><img src="<?php the_field_cmb2('mapa_rest') ?>" alt="<?php the_field_cmb2('alt_mapa_rest') ?>"></a>
			</div>

			<?php
			$contato_coluna = get_field_cmb2('contato');
			if (isset($contato_coluna)) {
				foreach ($contato_coluna as $contato) {
			?>
			<div class="grid-1-3 contato-item">
				<h2><?php echo $contato['titulo']; ?></h2>
				<p><?php echo $contato['dado1']; ?></p>
				<p><?php echo $contato['dado2']; ?></p>
				<p><?php echo $contato['dado3']; ?></p>
			</div>
			<?php } } ?>
			
		</section>

		<!-- Fim do loop posts -->
	<?php endwhile;
else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>