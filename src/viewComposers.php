<?php
    /**
     * Не забываем использовать имя своего пакета перед названием вида
     */
    View::composer(array(Config::get('nbblog::list_view'), Config::get('nbblog::post_view')), function($view){
        $view->with('uri', Config::get('nbblog::uri'));
    });

    View::composer(Config::get('nbblog::list_view'), function ($view) {
        $view->with('count', \Cherryoff\Nbblog\Post::count())->with('posts', \Cherryoff\Nbblog\Post::all());
    });