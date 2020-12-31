<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
</head>
<body>    
    <div class="container">
        <header class="row">  
            <img width="75" height="75" 
                                src="<?=get_template_directory_uri(); ?>/images/kdcomv.png" 
                                alt="home_pic" />    
            <h1 class="self-align-center"><a href ="/">KDcom</a></h1>       
                     
        </header>
        <hr/>   