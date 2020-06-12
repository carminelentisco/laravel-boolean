<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{

    private $students;
    private $genders;

    public function __construct() {

        $this->students = config('students.students');
        $this->genders = config('students.genders');
    } 

    public function index() {

       $data = [
        'students' => $this->students,
        'genders' => $this->genders
       ];

        return view('students.index', $data);
    }

    public function show($slug) {
        $student = $this->checkStudent($slug, $this->students);

        if ( !$student ) {
            abort('404');
        }


        return view('students.show', compact('student'));
    }

    private function checkStudent($slug, $array) {
        foreach ($array as $student) {
            if ($student['slug'] == $slug ) {
                return $student;
            } 
        }
        return false;
    }
}
