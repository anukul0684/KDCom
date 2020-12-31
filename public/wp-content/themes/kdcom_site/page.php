<?php
/**
 * Index template for blog page
 */
get_header();
?>
    <section class="row">           
            
        <div id="sidebar_left" class="col-md-3">
            <?php get_sidebar();?>

        </div>
        <div id="primary" class="col-md-6">
            <article>
                <!-- show the page name called -->
                <h3><?php the_title(); ?></h3>

                <!-- show the page content -->
                <?php the_content(); ?>

            </article>
        </div>       
        <div id="sidebar_right" class="col-md-3 text-center">
            <?php the_post_thumbnail('medium');?>
        </div>
    </section>
<?php get_footer(); ?>