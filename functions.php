<?php

// امکان تصویر شاخص برای پست ها:
if (function_exists("add_theme_support"))
    add_theme_support("post-thumbnails");

// dinamic menu:
function dinamicMenu()
{
    register_nav_menus(
        array(
            'top_menu' => __('منو بالایی'),
            'footer_menu' => __('منو پایینی')
        )
    );
}
add_action("init", "dinamicMenu");

// ابزارک ها:
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'بخش اول',
        'id' => 'column-1',
        'description' => 'توضیحات بخش اول',
        'before_title' => '<div id="subject">',
        'after_title' => '</div><div class="main">',
        'before_widget' => '<div class="widgetItem">',
        'after_widget' => '</div></div>'
    ));

    register_sidebar(array(
        'name' => 'دسته بندي ها',
        'id' => 'column-2',
        'description' => 'ابزارک نمايش دسته بندي',
        'before_title' => '<div id="subject">',
        'after_title' => '</div><div class="main noLMargin">',
        'before_widget' => '<div class="widgetItem">',
        'after_widget' => '</div></div>'
    ));

    register_sidebar(array(
        'name' => 'پاصفحه',
        'id' => 'footer_side',
        'description' => 'ابزار پاصفحه',
        'before_title' => '<h4>',
        'after_title' => '</h4><div id="fc">',
        'before_widget' => '<div id="f_set">',
        'after_widget' => '</div></div>'
    ));
}

// پست های پرطرفدار:
function popularID()
{
    // SELECT * FROM wp_popularpostsdata AS popular,wp_posts AS post WHERE popular.postid = post.ID LIMIT 8;

    global $wpdb, $table_prefix;
    $result[] = null;

    $popID = $wpdb->get_results(
        "SELECT postid FROM {$table_prefix}popularpostsdata AS popular,{$table_prefix}posts AS post 
        WHERE popular.postid = post.ID 
        ORDER BY popular.pageviews DESC LIMIT 8;"
    );

    foreach ($popID as $k => $v) {
        $result[$k] = $v->postid;
    }

    // echo "<pre>";print_r($popID);echo "</pre>";die();
    if ($popID)
        return $result;
    else
        return false;
}
function chickImage($ID)
{
    global $wpdb, $table_prefix;
    $popimage = $wpdb->get_results(
        "SELECT * FROM `{$table_prefix}postmeta` AS pMeta_1, `{$table_prefix}postmeta` AS pMeta_2
        WHERE pMeta_1.meta_key='_thumbnail_id'
        AND pMeta_1.post_id={$ID}
        AND pMeta_2.meta_key='_wp_attached_file'
        AND pMeta_1.meta_value=pMeta_2.post_id
        LIMIT 1;"
    );

    foreach ($popimage as $k => $v) {
        $result[$k] = $v->meta_value;
    }
    // print_r($result);
    return $result;
}
