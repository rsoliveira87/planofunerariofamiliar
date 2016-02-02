<?php get_header(); ?>

<div class="main-wrapper-item"> 
    <div class="container post-wrap">
        <div class="row-fluid">   
            <div id="content" class="span12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="whiterogue-jigoshop-title">
                    <?php if(is_page('cart')) echo 'início da contratação'; ?>
                </div>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
