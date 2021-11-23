<?php

    namespace App\Dao\Student;

    use App\Models\Student;
    use App\Contracts\Dao\Student\StudentDaoInterface;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    /**
     * Data accessing object for student
     */
    class StudentDao implements StudentDaoInterface
    {
        /**
         * To get student list
         * @return array $studentList Student list
         */
        public function getStudentList()
        {
            $studentList = DB::table('students as student')
                ->select('student.*')
                ->whereNull('student.deleted_at')
                ->get();
            return $studentList;
        }
    }
?>