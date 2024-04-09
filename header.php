<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo( 'title' )?></title>

    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="description" content="<?php bloginfo("description") ?>">
    <base href="<?php bloginfo("template_url"); ?>/images">

    <link href="<?php bloginfo("stylesheet_url") ?>" rel="stylesheet" type="text/css" />

    <?php wp_head(); ?>
</head>