<?php

    namespace App\Contracts\Services\Student;

    use Illuminate\Http\Request;

    /**
     * Interface for student service
     */
    interface StudentServiceInterface
    {
        /**
         * To get student list
         * @return array $studentList list of students
         */
        public function getStudentList();
    }

?>