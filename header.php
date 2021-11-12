<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <script src="js/slide.js"></script>
    <title>Document</title>
    <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
        
    <header>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-12 text-center">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?= get_template_directory_uri() . '/public/images/logo.png' ?>" class="d-block w-100" alt="..."></a>
                    </section>
                    <nav class="main-menu col-md-10 text-end"><?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?></nav>
                </div>
            </div>
        </section>
    </header>