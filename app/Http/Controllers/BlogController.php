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

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        $initData = [
            'title' => "input title here",
            'content' => "input content here",
        ];
        return view('add', ['post' => $initData]);
    }

    public function update(Request $request, $id) 
    {
        $post = Blog::find($id);
        $initData = [
            'title' => $post->title,
            'content' => $post->content,
            'id' => $post->id,
        ];
        return view('update', ['post' => $initData]);
    }

    public function updatePost(Request $request) 
    {
        $post = Blog::find($id);
        $initData = [
            'title' => $post->title,
            'content' => $post->content,
            'id' => $post->id,
        ];
        return view('update', ['post' => $initData]);
    }

    public function saveData(Request $request)
    {
        $id = $request['id'];
        $post = Blog::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        if(Auth::user()->id !== $post->author){
            return redirect()->route('home')->with('alert', 'Sorry, You could not modify others\' articles!');
        }
        return redirect()->route('home')->with('alert', 'Post has been updated successfully!');
    }

    public function create(Request $request)
    {
        $post = Blog::create(array(
            'title' => $request->title,
            'content' => $request->content,
            'author' => Auth::user()->id
        ));
        return redirect()->route('home')->with('alert', 'Post has been successfully added!');
    }

    public function delete($id)
    {
        $post = Blog::find($id);
        if(Auth::user()->id !== $post->author){
            return redirect()->route('home')->with('alert', 'Sorry, You could not modify others\' articles!');
        }
        $post->delete();
        return redirect()->route('home')->with('alert', 'Post has been deleted successfully!');
    }

}







