<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/11
 * Time: 14:15
 */
$siteUrl = get_bloginfo( 'url', 'display' );//网站地址
$templateUrl=get_bloginfo('template_url','display');//主题地址
$args =array(
    'container'	=> false,
    'echo'	=> false,
    'items_wrap' => '%3$s',
    'depth'	=> 0,
);

$navInfo = strip_tags(wp_nav_menu($args), '<a>' ); //打印带<a>的菜单导航
$slugs = is_page() ? get_post($post->ID, ARRAY_A)['post_name'] : '';//页面的标题
$category = get_categories();         //所有分类
$categoryNameToId = array();      //分类名字找id
$categoryIdToName = array();      //分类id找名字
foreach ($category as $item){
    $categoryNameToId[trim($item->name)] = $item->term_id;
    $categoryIdToName[$item->term_id] = trim($item->name);
}

