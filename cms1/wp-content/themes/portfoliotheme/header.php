<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/main.css"/>

    <?php wp_head(); ?>
</head>
<body class="landing">

<!-- Header -->
<header id="header" class="alt">
    <h1><strong><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></strong></h1>
    <nav id="nav">
        <ul>
            <?php wp_nav_menu(array('theme_location' => 'Header')); ?>
        </ul>
    </nav>
</header>

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
<main id="main">