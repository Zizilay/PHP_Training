<?php

namespace App\Services\Task;

use App\Contracts\Dao\Task\TaskDaoInterface;
use App\Contracts\Services\Task\TaskServiceInterface;
use Illuminate\Http\Request;


/**
 * Service class for post.
 */
class TaskService implements TaskServiceInterface
{
  /**
   * post dao
   */
  private $taskDao;
  /**
   * Class Constructor
   * @param TaskDaoInterface
   * @return
   */
  public function __construct(TaskDaoInterface $taskDao)
  {
    $this->taskDao = $taskDao;
  }

  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function addList($request)
  {
    return $this->taskDao->addList($request);
  }

  /**
   * To get post list
   * @return array $postList Post list
   */
  public function showList()
  {
    return $this->taskDao->showList();
  }

  /**
   * To delete post by id
   * @param string $id post id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function deleteList($id)
  {
    return $this->taskDao->deleteList($id);
  }

    /**
   * To get post by id
   * @param string $id post id
   * @return Object $post post object
   */
  public function editList($id)
  {
    return $this->taskDao->editList($id);
  }
  
  public function updateList($request,$id)
  {
    $this->taskDao->updateList($request, $id);
  }
}
