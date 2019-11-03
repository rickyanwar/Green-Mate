<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Darul Abror NW Gunung Rajak">
    <meta property="og:title" content="    <?php if 	( is_home() ) 		{ bloginfo('name');}
				elseif 	( is_category() ) 	{ single_cat_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_single() ) 	{ single_post_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_page() ) 		{ single_post_title(); echo ' - '; bloginfo('name'); }
                else 						{ wp_title('', true); } ?>" />
    <link rel="shortcut icon" type="image/png" href="<?php echo get_bloginfo( 'template_directory' );?>/img/icon.png"/>
    <!-- reuse same icon for Safari -->
    <link rel="apple-touch-icon" href="<?php echo get_bloginfo( 'template_directory' );?>/img/icon.png">
    <meta name="theme-color" content="#0d8279">
    <link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' );?>/manifest.json">
    <title>
    <?php if 	( is_home() ) 		{ bloginfo('name');}
				elseif 	( is_category() ) 	{ single_cat_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_single() ) 	{ single_post_title(); echo ' - '; bloginfo('name'); }
				elseif 	( is_page() ) 		{ single_post_title(); echo ' - '; bloginfo('name'); }
                else 						{ wp_title('', true); } ?>
    </title>  
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/senna-debug.js" type="text/javascript"></script>    
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/senna-debug.js" type="text/javascript"></script>
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/mystyle.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/animate.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head();?>
</head>

<body data-senna="data-senna" data-senna-surface="data-senna-surface"  class="bg-light">
<div class="senna-loading-bar"></div>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark gradasi">
        <div class="container">

            <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><img
                    src="<?php echo get_bloginfo( 'template_directory' );?>/img/icon.png" width="30" height="30"
                    class="d-inline-block align-top rounded-circle" alt=""><?php echo get_bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_bootstrap_main_nav(); 
                      get_search_form();
                ?>
            </div>
        </div>
    </nav>
