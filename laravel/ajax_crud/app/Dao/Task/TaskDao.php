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
        $task->email = $request->email;
        $task->address = $request->address;
        $task->phno = $request->phno;
        $task->save();
        return $task;
    
  }

  /**
   * To get task list
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
  public function editList($id)
  {
    $tasks = Task::find($id);
    return $tasks;
  }

  public function updateList(Request $request, $id){
    $tasks=Task::find($id);
    // $tasks->update($request->all());
      $tasks->name=$request->name;
      $tasks->email=$request->email;
      $tasks->address=$request->address;
      $tasks->phno=$request->phno;
      $tasks->update();
    return $tasks;
  }
}
