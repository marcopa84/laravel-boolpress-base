<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::All();
      return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('post.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $request->validate([
        'content' => 'required',
        'author' => 'required|max:255',
        'content_img' => 'required|URL',
        'author_img' => 'required|URL',
      ]);
      $newpost = new Post;
      $newpost->content = $data['content'];
      $newpost->author = $data['author'];
      $newpost->content_img = $data['content_img'];
      $newpost->author_img = $data['author_img'];

      $saved = $newpost->save();

      if ($saved) {
          return redirect()->route("posts.index")->with('insert', $newpost );;
      } else {
          return back();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      if(empty($post)) {
        abort('404');
      }
      return view('post.show', compact('post') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      if(empty($post)) {
        abort('404');
      }
      return view('post.edit', compact('post') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      if(empty($post)) {
        abort('404');
      }
      $request->validate([
        'content' => 'required',
        'author' => 'required|max:255',
        'content_img' => 'required|URL',
        'author_img' => 'required|URL',
      ]);
      $data = $request->all();
      $post->update($data);
      return redirect()->route("posts.index")->with('update', $post );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      if(empty($post)) {
        abort('404');
      }

        $deleted = $post->delete();

      if ($deleted) {
        return redirect()->route("posts.index")->with('delete', $post );
      }
    }
}
