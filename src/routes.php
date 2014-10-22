<?php
    /**
     * Роуты нашего модуля
     */

    Route::group(array('prefix'=>Config::get('nbblog::uri')), function()
    {
        Route::get('/', array(
            'as' => 'posts_list',
            'uses' => 'Cherryoff\Nbblog\NbblogController@showList'
        ));

        Route::get('/{link}', array(
            'as' => 'post',
            'uses' => 'Cherryoff\Nbblog\NbblogController@showPost'
        ))->where('link', '[A-Za-z-_]+');

    });