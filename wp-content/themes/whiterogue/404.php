<?php 
/**
 * The template for displaying Error 404 page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?> 
<!-- BreadCrumb Section // -->
<div class="bread-title-holder">
	<div class="container">
		<div class="row-fluid">
			<div class="container_inner clearfix">
				<h1 class="title"><?php the_title(); ?></h1>
				<?php 
				if ((class_exists('whiterogue_breadcrumb_class'))) {$instaapp_breadcumb->whiterogue_custom_breadcrumb();}
				?>
			</div>
		</div>
	</div>
</div>	
<!-- \\ BreadCrumb Section -->

<div class="page-content">
	<div class="container" id="error-404">
		<div class="row-fluid">
			<div id="content" class="span12">
				<div class="post">
					<div class="skepost _404-page">
						<div class="error-txt-first"><img src="<?php echo get_template_directory_uri().'/images/404-image.png'; ?>"></div>
						<div class="error-txt"><?php echo 'PÁGINA NÃO ENCONTRADA'; ?></div>
						<p><?php echo 'oops! Aparentemente a página que você está procurando não existe mais </br> Você pode tentar procurar algo diferente no site.'; ?></p>
						<?php get_search_form(); ?>
					</div>
					<!-- post --> 
				</div>
				<!-- post -->
			</div>
			<!-- content --> 
		</div>
	</div>
</div>
<?php get_footer(); ?>