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
            
        </div>       
        <div id="sidebar_right" class="col-md-3 text-center">
            <?php echo get_the_post_thumbnail(7,'medium');?>
        </div>
    </section>
<?php get_footer(); ?>