<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PagesController extends Controller
{
    public function index(){

        $posts = DB::select('SELECT id, title, SUBSTRING(body,1,100) AS body FROM posts WHERE id IN (SELECT post_id FROM (SELECT COUNT(*), post_id FROM comments GROUP BY post_id ORDER BY COUNT(*) DESC LIMIT 3) foo )');

        $title = "Welcome to The Hub";

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year', 'month')->get();

        return view('pages.index', compact('title','posts','archives'));
    }

    public function about(){
        $title = 'The about page';

        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']
        );
        
        return view('pages.services')->with($data);
    }

}
