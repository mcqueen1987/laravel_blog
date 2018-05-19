<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use \Auth;

class FruitsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     $id = Auth::user()->id;
    //     $blogs = DB::table('blogs')->where('author', $id)
    //            ->orderBy('id', 'desc')
    //            ->take(10)
    //            ->get();
    //     return view('home', ['posts' => $blogs]);
    // }

    public function welcome()
    {
        $blogs = DB::table('users')
                ->leftJoin('blogs', 'users.id', '=', 'blogs.author')
                ->take(13)
                ->get();
        return view('fruits', ['blogs' => $blogs]);
    }

}







