<?php 
/**
 * The Template for displaying all single posts.
 */

get_header();

?>


<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	
<div class="container post-wrap">
	<div class="row-fluid">
		<div id="container" class="span8">
			<div id="content">  
					<div class="post" id="post-<?php the_ID(); ?>">
					  <div class="single_post_wrap">
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
							<div class="featured-image-shadow-box quote_featured_img">
								<?php the_post_thumbnail('instaapp_standard_img'); ?>
							</div>
						<?php } ?>

						<div class="post_inner_wrap clearfix">

							<div class="skepost-meta clearfix">
							    <span class="date"><?php echo '<i class="fa fa-calendar"></i>';?><?php the_time('j.M, Y'); ?></span>
							    <span class="author-name"><?php echo '<i class="fa fa-user"></i>';?><?php the_author_posts_link(); ?></span>
							    <span class="comments"><?php echo '<i class="fa fa-comment"></i>';?><?php comments_popup_link('0', '1', '%'); ?></span>
								<?php the_tags('<span class="tags"><i class="fa fa-tag"></i>',', ','</span>'); ?>
								<?php if (has_category()) { ?><span class="category"><?php echo '<i class="fa fa-list-ul"></i> ';?><?php the_category(','); ?></span><?php } ?>								
					        </div>
							<!-- skepost-meta -->
							
							<h1 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h1>
							<!-- post title -->

							 <div class="skepost">
								<?php the_content(); ?>
								<br />
								<?php wp_link_pages(array('before' => '<p><strong>'.'Páginas :'.'</strong>','after' => '</p>', 'número',));	?>
								<?php edit_post_link('Editar', '', ''); ?>
					        </div>
					        <!-- skepost -->
				        </div>

				      </div><!-- single-post-wrap -->

						<div class="navigation"> 
							<?php previous_post_link( '<span class="nav-previous"><i class="fa fa-angle-left"></i> %link</span>'); ?>
							<?php next_post_link( '<span class="nav-next">%link <i class="fa fa-angle-right"></i></span>'); ?> 
						</div>

						<div class="clearfix"></div>
						<div class="comments-template">
							<?php comments_template( '', true ); ?>
						</div>
					</div>
				<!-- post -->
				<?php endwhile; ?>
				<?php else :  ?>

				<div class="post">
					<h2><?php echo 'Não encontrado'; ?></h2>
				</div>
				<?php endif; ?>
			</div><!-- content --> 
		</div><!-- container --> 

		<!-- Sidebar -->
		<div id="sidebar" class="span4">
            <?php $postID = get_the_ID();?>
            <?php if (in_category( 'Histórias', $postID )) { ?>
                <div id="sidebar_2" class="instaapp_widget">
                    <ul class="skeside">
                        <?php dynamic_sidebar( 'historias-single-sidebar' ); ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if (in_category( 'Notícias', $postID )) { ?>
            <div id="sidebar_2" class="instaapp_widget">
                <ul class="skeside">
                    <?php dynamic_sidebar( 'noticias-single-sidebar' ); ?>
                </ul>
            </div>
            <?php } ?>
            
		</div>
		<!-- Sidebar --> 

	</div>
 </div>
</div>
<?php get_footer(); ?>