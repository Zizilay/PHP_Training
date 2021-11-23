<?php

    namespace App\Services\Student;

    use App\Contracts\Dao\Student\StudentDaoInterface;
    use App\Contracts\Services\Student\StudentServiceInterface;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Storage;

    /**
     * Service class for service.
     */
    class StudentService implements StudentServiceInterface
    {
        /**
         * service dao
         */
        private $serviceDao;
        /**
         * Class Constructor
         * @param StudentDaoInterface
         * @return
         */
        public function __construct(StudentDaoInterface $serviceDao)
        {
            $this->serviceDao = $serviceDao;
        }

        /**
         * To get student list
         * @return array $studentList list of students
         */
        public function getStudentList()
        {
            return $this->studentDao->getStudentList();
        }
    }
?>
