<?php namespace Cherryoff\Nbblog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;

/**
 * Post
 */

class Post extends Model {

    protected $table = 'posts';
    protected $appends = array('cut');
    protected $fillable = array('header', 'link', 'article');

    public function __construct($attributes = array(), $exists = false){
        parent::__construct($attributes, $exists);
        $this->table = Config::get('nbblog::table_prefix').$this->table;
    }

    public static $rules = array(
        'header' => 'required|max:256',
        'link' => 'required|between:2,32|unique',
        'article' => 'required'
    );

//    public function tags(){
//        return $this->belongsToMany('Tag', 'articles_tags');
//    }

    public function getCutAttribute(){
        return Str::limit($this->attributes['article'], 120);
    }

}