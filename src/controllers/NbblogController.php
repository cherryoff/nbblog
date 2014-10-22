<?php namespace Cherryoff\Nbblog;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class NbblogController extends Controller {

    public function __construct(){
        $this->layout = View::make(Config::get('nbblog::layout'));
    }

    public function showList()
    {
        $this->layout->content = View::make(Config::get('nbblog::list_view'));
    }

    public function showPost($link)
    {
        $post = Post::where('link', '=', $link)->firstOrFail();
        $this->layout->{Config::get('nbblog::layout')} = View::make(Config::get('nbblog::post_view'), $post);
    }

}
