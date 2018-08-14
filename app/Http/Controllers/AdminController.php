<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Post;
use App\Comment;
use App\Category;

class AdminController extends Controller
{

	use AuthenticatesUsers;

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$postsCount = Post::count();

    	$commentsCount = Comment::count();

    	$categoriesCount = Category::count();

    	return view("admin.index",compact('postsCount','commentsCount','categoriesCount'));
    }
}
