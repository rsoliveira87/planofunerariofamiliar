<?php 
/**
* The template for displaying the NOTICIAS page.
*/
get_header(); 

?>

<!-- variáveis -->
<?php $whiterogue_lite_latest_loop = new WP_Query( array('post_type' => 'post',
                                                                    'posts_per_page' => 6,
                                                                    'ignore_sticky_posts' => true,
                                                                    'category_name' => 'Notícias' ) );?>

<div class="main-wrapper-item"> 
    <div class="page-content default-pagetemp">
        <div class="container post-wrap">
            <div class="row-fluid">
                <!-- the loop -->   
                <div id="content" class="span8">
                    <?php echo do_shortcode('[spacer height="-50px"]') ?>
                    <?php while ( $whiterogue_lite_latest_loop->have_posts() ) : $whiterogue_lite_latest_loop->the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <div class="skepost clearfix">
                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php the_excerpt(); ?>
                            <div class="continue continue-blog">
                                <a href="<?php the_permalink(); ?>"><?php echo 'Leia Mais &rarr;';?></a>  
                            </div>
                        </div>
                    </div>
                    <?php echo do_shortcode('[spacer height="-60px"]') ?>
                    <?php endwhile; ?>
                </div>

                <!-- Sidebar -->
                <div id="sidebar" class="span4">
                    <div id="sidebar_2" class="instaapp_widget">
                        <ul class="skeside">
                            <?php dynamic_sidebar( 'noticias-sidebar' ); ?>
                        </ul>
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- resets -->
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>