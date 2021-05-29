<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">

    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <div class="l-wrapper">
        <div class="l-container">
            <main class="l-main">
                <header class="l-header">
                    <div class="p-header">
                        <h1 class="p-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <?php get_search_form(); ?>
                    </div>
                </header>