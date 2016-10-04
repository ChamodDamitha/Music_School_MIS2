<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    public function postAddStudent(Request $request){
        $input=$request->all();
        //$student=new Student($input->fistName,$input->lastName,$input->gender);
        return $input()->firstName;
    }
}
