<?php

    namespace App\Contracts\Dao\Student;

    use Illuminate\Http\Request;

    /**
     * Interface for Data Accessing Object of Student
     */
    interface StudentDaoInterface
    {
        /**
         * To get student list
         * @return array $studentList Student list
         */
        public function getStudentList();
    }
?>