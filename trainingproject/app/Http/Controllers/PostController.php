<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\Cache\Store;


class PostController extends Controller
{
    public function index()
{
    $userId = auth()->id();

    $posts = Post::with('user')
        ->where('category', 'Type 2')
        ->orWhere(function ($query) use ($userId) {
            $query->where('category', 'Type 1')
                  ->where('user_id', $userId);
        })
        ->latest()
        ->get();

    return view('post.posts', ['posts' => $posts]);
}

    // where data is stored
    public function store(Request $request){
        
        $validated = $request->validate(
            ['title'=>'required|min:3',
            'category'=>'required',
            'body'=>'required|min:10']
        );
        // Post::create($validated);
        auth()->user()->posts()->create($validated);
        // return view('post.posts');
         return redirect()->route('post.index');
    }
    public function create(){
        return view('post.create');
    }

     public function edit(Post $post){
        return view('post.edit',compact('post'));
    }

     public function update(Request $request,Post $post){
         $validated = $request->validate(
            ['title'=>'required|min:3',
            'category'=>'required',
            'body'=>'required|min:10']);

        $post-> update($validated);
        return redirect()->route('post.index');
    }

    public function destroy(Post $post){
       $post-> delete();
        return redirect()->route('post.index');
    }

}
