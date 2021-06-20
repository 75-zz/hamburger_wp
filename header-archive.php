<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="l-wrapper">
        <div class="l-container">
            <main class="l-main">
                <header class="l-header">
                    <div class="p-header">
                        <p class="p-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
                        <?php get_search_form(); ?>
                    </div>
                </header>
