<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function enterAttempts(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('attempts', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
        ]);
    }

    protected function computeAverageScore($score1, $score2)
    {
        $average = ($score1 + $score2) / 2;
        return round($average, 2);
    }

    protected function getRemarks($grade_remarks)
    {
        if($grade_remarks >= 75)
        {
            $remarks = "PASSED";
        }
        else 
        {
            $remarks = "FAILED"; 
        }
        return $remarks;
    }


    public function computePower(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $s1_average = $this->computeAverageScore($request->s1_Midterm, $request->s1_Finals);
        $s2_average = $this->computeAverageScore($request->s2_Midterm, $request->s2_Finals);
        $s3_average = $this->computeAverageScore($request->s3_Midterm, $request->s3_Finals);
        $s4_average = $this->computeAverageScore($request->s4_Midterm, $request->s4_Finals);
        $s5_average = $this->computeAverageScore($request->s5_Midterm, $request->s5_Finals);

        $s1_remarks = $this->getRemarks($s1_average);
        $s2_remarks = $this->getRemarks($s2_average);
        $s3_remarks = $this->getRemarks($s3_average);
        $s4_remarks = $this->getRemarks($s4_average);
        $s5_remarks = $this->getRemarks($s5_average);

        return view('scores', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // student 1 attempts
            's1_Midterm' => $request->s1_Midterm,
            's1_Finals' => $request->s1_Finals,
            's1_average' => $s1_average,
            's1_remarks' => $s1_remarks,
            // student 2 attempts
            's2_Midterm' => $request->s2_Midterm,
            's2_Finals' => $request->s2_Finals,
            's2_average' => $s2_average,
            's2_remarks' => $s2_remarks,
            // student 3 attempts
            's3_Midterm' => $request->s3_Midterm,
            's3_Finals' => $request->s3_Finals,
            's3_average' => $s3_average,
            's3_remarks' => $s3_remarks,
            // student 4 attempts
            's4_Midterm' => $request->s4_Midterm,
            's4_Finals' => $request->s4_Finals,
            's4_average' => $s4_average,
            's4_remarks' => $s4_remarks,
            // student 5 attempts
            's5_Midterm' => $request->s5_Midterm,
            's5_Finals' => $request->s5_Finals,
            's5_average' => $s5_average,
            's5_remarks' => $s5_remarks,

        ]);
    }
}