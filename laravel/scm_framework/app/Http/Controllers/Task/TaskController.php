<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Contracts\Services\Task\TaskServiceInterface;
use App\Http\Requests\TaskCreateRequest;

class TaskController extends Controller
{
    private $taskInterface;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(TaskServiceInterface $taskServiceInterface)
  {
    $this->taskInterface = $taskServiceInterface;
  }

  /**
   * To show create post view
   * 
   * @return View create post
   */
  public function showList()
  {
    $tasks = $this->taskInterface->showList();
    return view('tasks', [
                'tasks' => $tasks
            ]);
  }

  /**
   * To check post create form and redirect to confirm page.
   * @param TaskCreateRequest $request Request form post create
   * @return View post create confirm
   */
  public function addList(TaskCreateRequest $request)
  {
    // validation for request values
    $validated = $request->validated();
    $this->taskInterface->addList($request);
    return redirect('/');
    
  }

  /**
   * To delete post by id
   * @return View post list
   */
  public function deleteList($id)
  {
    $this->taskInterface->deleteList($id);
    return redirect('/');
  }
}
