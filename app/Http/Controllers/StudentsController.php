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
            'student_3' => $student_3
            'student_4' => $student_4,
            'student_5' => $student_5,
        ]);
    }

    protected function computeAverageScore($score1, $score2)
    {
        $average = ($score1 + $score2 + $score3) / 3;
        return round($average, 2);
    }

    public function computePower(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $p1_average = $this->computeAverageScore($request->p1_attempt1, $request->p1_attempt2, $request->p1_attempt3);
        $p2_average = $this->computeAverageScore($request->p2_attempt1, $request->p2_attempt2, $request->p2_attempt3);
        $p3_average = $this->computeAverageScore($request->p3_attempt1, $request->p3_attempt2, $request->p3_attempt3);
        $p3_average = $this->computeAverageScore($request->p4_attempt1, $request->p4_attempt2, $request->p4_attempt3);
        $p3_average = $this->computeAverageScore($request->p5_attempt1, $request->p5_attempt2, $request->p5_attempt3);

        return view('scores', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            // student 1 attempts
            'p1_attempt1' => $request->p1_attempt1,
            'p1_attempt2' => $request->p1_attempt2,
            'p1_attempt3' => $request->p1_attempt3,
            'p1_average' => $p1_average,
            // student 2 attempts
            'p2_attempt1' => $request->p2_attempt1,
            'p2_attempt2' => $request->p2_attempt2,
            'p2_attempt3' => $request->p2_attempt3,
            'p2_average' => $p2_average,
            // student 3 attempts
            'p3_attempt1' => $request->p3_attempt1,
            'p3_attempt2' => $request->p3_attempt2,
            'p3_attempt3' => $request->p3_attempt3,
            'p3_average' => $p3_average
        ]);
    }
}