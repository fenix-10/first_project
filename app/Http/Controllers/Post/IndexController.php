<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Faker\Provider\Base;

class IndexController extends BaseController
{
    public function __invoke()
    {

        $post = Post::find(1);
        $category = Category::find(1);
        $tag = Tag::find(1);
        dd($post->tags);
        return view('post.index', compact('posts'));
    }
}
