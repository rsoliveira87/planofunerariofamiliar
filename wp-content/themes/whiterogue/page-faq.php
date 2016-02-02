<?php 
/**
* The template for displaying the FAQ page
*/
get_header(); 

?>

<!-- variáveis -->
<?php $whiterogue_latest_loop = new WP_Query( array('post_type' => 'post', 
                                                                    'posts_per_page' => 6,
                                                                    'ignore_sticky_posts' => true,
                                                                    'category_name' => 'FAQ' ) );?>

<div class="main-wrapper-item"> 
    <div class="page-content default-pagetemp">
        <div class="container post-wrap">
            <div class="row-fluid">
                <!-- the loop -->   
                <div id="content" class="span8">
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <div class="skepost  whiterogue-faq-header clearfix">
                            <ul class="skeside" >
                                <li>
                                    <h3><?php the_title(); ?></h3>
                                </li>
                            </ul>
                            <div class="page-container clearfix">
                                <?php while ( $whiterogue_latest_loop->have_posts() ) : $whiterogue_latest_loop->the_post(); ?>
                                <div class="ske_container" id="accordion">
                                    <div class="whiterogue-faq-set">
                                        <div class="whiterogue-faq-title">
                                            <a data-toggle="collapse"
                                               data-parent="#accordion"
                                               href="#collapse-<?php echo the_ID(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div id="collapse-<?php echo the_ID(); ?>" class="whiterogue-faq-content collapse">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div id="sidebar" class="span4">
                    <div id="sidebar_2" class="instaapp_widget">
                        <ul class="skeside">
                            <?php dynamic_sidebar( 'faq-sidebar' ); ?>
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