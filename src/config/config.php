<?php
/**
 * Настройки для модуля
 */
return array(

    'blog_title' => 'My simple blog',
    'blog_description' => 'This is just package for Laravel',

    'uri' => '/blog',
    'table_prefix'=>'nbblog_',

    'layout' => 'nbblog::layout',
    'list_view' => 'nbblog::list',
    'post_view' => 'nbblog::post',
    'preview_view' => 'nbblog::preview',

);