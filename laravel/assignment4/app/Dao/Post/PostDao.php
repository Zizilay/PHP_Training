<?php

namespace App\Dao\Post;

use App\Models\Post;
use App\Contracts\Dao\Post\PostDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Data accessing object for post
 */
class PostDao implements PostDaoInterface
{


  /**
   * To save post via API
   * @param array $validated Validated values from request
   * @return Object created post object
   */
  public function savePostAPI($validated)
  {
    $post = new Post();
    $post->title = $validated['title'];
    $post->description = $validated['description'];
    $post->created_user_id = 1;
    $post->updated_user_id = 1;
    $post->save();
    return $post;
  }

  /**
   * To update post by id via api
   * @param array $validated Validated values from request
   * @param string $postId Post id
   * @return Object $post Post Object
   */
  public function updatedPostByIdAPI($validated, $postId)
  {
    $post = Post::find($postId);
    $post->title = $validated['title'];
    $post->description = $validated['description'];
    $post->status = $validated["status"];
    // $post->updated_user_id = Auth::guard('api')->user()->id;
    $post->save();
    return $post;
  }
}
