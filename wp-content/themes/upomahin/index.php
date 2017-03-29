<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">    
        <?php wp_head(); ?>
    </head>
    <body  <?php body_class(); ?>>
        <?php get_template_part( 'template-parts', 'browserupgrade' ); ?>
        <div id="page" class="clearfix">
            <header id="page-header">
                <div class="top-nav clearfix">
                    <div class="container">
                        I am here
                    </div>
                </div>
            </header>
        </div>
         <?php wp_footer(); ?>
    </body>
</html>
