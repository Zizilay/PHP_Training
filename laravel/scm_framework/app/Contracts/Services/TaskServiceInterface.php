<?php

namespace App\Contracts\Services\Task;

use Illuminate\Http\Request;

/**
 * Interface for post service
 */
interface TaskServiceInterface
{
  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function addList(Request $request);

  /**
   * To get post list
   * @return array $postList Post list
   */
  public function showList();

  /**
   * To delete post by id
   * @param string $id post id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function deleteList($id);
}
