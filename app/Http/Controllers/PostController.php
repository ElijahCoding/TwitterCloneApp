<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index(Request $request, Post $post)
    {
      $allPosts = $post->whereIn('user_id',
      $request->user()->following()->lists('users.id')->push($request->user()->id)
      )->with('user');

      dd($allPosts->get());
    }

    public function create(Request $request, Post $post)
    {
      $this->validate($request, [
        'body' => 'required|max:140'
      ]);

      $createdPost = $request->user()->posts()->create([
        'body' => $request->body
      ]);

      return response()->json($post->with(['user'])->find($createdPost->id));
    }
}
