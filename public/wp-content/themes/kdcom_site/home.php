<?php

/**
 * Template Name: Home
 */

    get_header();
?>
    <section class="row">           
            
        <div id="sidebar_left" class="col-md-3">
            <?php get_sidebar();?>

        </div>
        <div id="primary" class="col-md-6">
            <h1>How can I help you?</h1>
            <p>Interested in training? Lessons may be online or onsite. The COVID-19 pandemic currently requires online training.</p>
            <p>We use webex. It's free!</p>
            <p>To use webex, your PC needs the following audio-visual features: </p>
            <ul>
                <li>a camera</li>
                <li>a microphone (PC, or headset; headset preferred for ESL/EAL)</li>
                <li>audio (PC, headset, or separate speakers)</li>        
            </ul>
            <p>To learn more about my services, please choose your interests from the menu on the right.</p>
        </div>       
        <div id="sidebar_right" class="col-md-3 text-center">
            <?php echo get_the_post_thumbnail(7,'medium');?>
        </div>
    </section>
<?php get_footer(); ?>