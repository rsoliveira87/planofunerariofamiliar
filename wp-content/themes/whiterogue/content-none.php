<?php
/**
 * The template for displaying a "No posts found" message.
 */
?>
<div class="post">
	<h2>
	  <?php echo 'Nada Encontrado'; ?>
	</h2>
</div>
<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
		<p><?php printf( 'Pronto para publicar seu primeiro post? <a href="%1$s">Get started here</a>.', admin_url( 'post-new.php' ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php echo 'Desculpe, mas nada foi encontrado para esta pesquisa. Por favor, tente novamente com outras palavras.'; ?></p>
	<?php get_search_form(); ?>
	<?php else : ?>
		<p><?php echo 'Desculpe, mas nada foi encontrado para esta pesquisa. Por favor, tente novamente com outras palavras.'; ?></p>
	<?php get_search_form(); ?>
	<?php endif; ?>
</div><!-- page-content -->