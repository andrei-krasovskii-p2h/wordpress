<!doctype html>
<html lang="">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/good-things-foundation-logo.png">
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <div class="pre-head">
        <div class="search">
            <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z">
                </path>
            </svg>
            <span class="search__text">Search</span>
        </div>
        <div class="pre-menu">
            <a href="/learn/" class="pre-menu__btn pre-menu__btn--secondary">Learn</a>
            <a href="/donate/" class="pre-menu__btn pre-menu__btn--primary">Donate</a>
        </div>
    </div>
    <div class="head">
        <div class="logo">
            <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/images/good-things-foundation-logo.png" alt="Good Thinks Foundation">
        </div>

        <?php
        wp_nav_menu(
            array(
                'menu' => 'nav-menu',
                'container' => '',
                'theme_location' => 'nav-menu',
                'items_wrap' => '<ul class="nav-bar">%3$s</ul>',
                'add_li_class'  => 'nav-bar__li',
                'add_link_class'  => 'nav-bar__btn'
            )
        );
        ?>
    </div>
</div>
