<?php

/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */

?>
<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
	        <div class="featured-image-shadow-box quote_featured_img">
				<?php
					$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'instaapp_standard_img');
				?>
				<a href="<?php the_permalink(); ?>" class="image">
					<img src="<?php echo esc_url($thumbnail[0]);?>" alt="<?php the_title(); ?>" class="featured-image alignnon"/>
				</a>	
			</div>
		<?php } ?>
		<div class="post_inner_wrap clearfix">
		
			<div class="skepost-meta clearfix">
			    <span class="date"><?php echo '<i class="fa fa-calendar"></i>';?><?php the_time('j.M, Y') ?></span>
			    <span class="author-name"><?php echo '<i class="fa fa-user"></i>';?><?php the_author_posts_link(); ?></span>
			    <span class="comments"><?php echo '<i class="fa fa-comment"></i>';?><?php comments_popup_link('0', '1', '%') ; ?></span>
	        </div>
			<!-- skepost-meta -->

			<h1 class="post-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<!-- post title -->

			 <div class="skepost">
				<?php the_excerpt(); ?>
	        </div>
	        <!-- skepost -->
        </div>
</div>
<!-- post -->