<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header-top">
    <div class="container box">
        <div class="logo">
            <a href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_theme_mod('logo') ?>" alt="">
            </a>
        </div>
        <div class="menu-main">
            <?php
                echo wp_nav_menu('menu-main');
            ?>
        </div>
    </div>
</div>

<!--  slider top  -->
<div class="owl-carousel owl-theme">
    <?php
    $slider = get_theme_mod('item_gallery');
    $slider = json_decode($slider);
    if(is_array($slider)){
        foreach ($slider as $item){
                $link = "";
                if($item->link){
                    $link = json_decode($item->link);
                    $link = $link->external;
                }
            ?>
            <div class="item">
                <a href="<?php echo $link; ?>">
                    <img src="<?php echo $item->image; ?>" alt="">
                </a>
            </div>
        <?php }
    }
    ?>
</div>
