<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug) {
      // fetch from DB basedd on slug
      $post = Post::where('slug', '=' , $slug)->first();

      // return the view
      return view('blog.single')->withPost($post);
    }
}
