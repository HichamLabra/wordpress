<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> <?php wp_title(); ?> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
</head>

<body>

    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>