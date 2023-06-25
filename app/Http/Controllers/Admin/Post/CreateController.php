<?php

namespace App\Http\Controllers\Admin\Post;


use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $postsCount = Post::all()->count();
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();

        return view('admin.post.create', compact('categories', 'tags', 'posts', 'postsCount'));
    }
}
