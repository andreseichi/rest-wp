<?php
// Template Name: Menu da Semana
?>

<?php get_header(); ?>

<!-- Início loop posts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="menu-item grid-8">
				<h2><?php the_field_cmb2('comida'); ?></h2>
				<ul>
					<?php
					$pratos = get_field_cmb2('pratos');
					if (isset($pratos)) {
						foreach ($pratos as $prato) {
					?>
						<li>
							<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
							<div>
								<h3><?php echo $prato['nome']; ?></h3>
								<p><?php echo $prato['descricao']; ?></p>
							</div>
						</li>
					<?php } } ?>
				</ul>
			</div>

			<div class="menu-item grid-8">
				<h2><?php the_field_cmb2('comida_direita'); ?></h2>
				<ul>
					<?php
						$pratos_direita = get_field_cmb2('pratos_direita');
						if (isset($pratos_direita)) {
							foreach ($pratos_direita as $prato) {
					?>
					<li>
						<span><sup>R$</sup><?php echo $prato['preco'] ?></span>
						<div>
							<h3><?php echo $prato['nome']; ?></h3>
							<p><?php echo $prato['descricao']; ?></p>
						</div>
					</li>
					<?php } } ?>
				</ul>
			</div>

		</section>

		<!-- Fim do loop posts -->
	<?php endwhile;
else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>