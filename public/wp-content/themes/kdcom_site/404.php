<?php

/** 
 * 404 template for page not found view
 */

    get_header();

?>   
        <article class="text-light">
            <h1 id="not-found">404 - Page Not Found</h1>
            <p>Page not found. Please use navigation for view or search box below to find what you seek.</p>
			<div class="search_box">
				<?php get_search_form(); ?>
			</div>
        </article>    
    </section>
<?php get_footer(); ?>