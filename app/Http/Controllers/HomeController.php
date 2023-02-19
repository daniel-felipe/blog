<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $posts = Post::with(['author', 'tags', 'category'])->latest()->paginate(9);

        return Inertia::render('Home', [
            'posts' => PostResource::collection($posts),
            'categories' => Category::get(),
        ]);
    }
}
