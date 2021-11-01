<?php

namespace App\Dao\Task;

use App\Models\Task;
use App\Contracts\Dao\Task\TaskDaoInterface;
use Illuminate\Http\Request;


/**
 * Data accessing object for post
 */
class TaskDao implements TaskDaoInterface
{
  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function addList(Request $request)
  {
    $task = new Task;
        $task->name = $request->name;
        $task->save();
        return $task;
    
  }

  /**
   * To get post list
   * @return array $postList Post list
   */
  public function showList()
  {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    return $tasks;
  }

  /**
   * To delete post by id
   * @param string $id post id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function deleteList($id)
  {
    Task::findOrFail($id)->delete();
  }


 /**
   * To get post by id
   * @param string $id post id
   * @return Object $post post object
   */
  public function editList($request, $id)
  {
    $tasks = Task::find($request, $id);
    return $tasks;
  }
}