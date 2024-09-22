<?php

use App\Models\Answer;
use App\Models\Classroom;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Score;
use App\Models\Student;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exam', function () {

    return view('exam.login',[
        'classroom' => Classroom::all()
    ]);

    // $exam = Exam::where('is_open', true)->with('questions')->get();

    // return view('exam',[
    //     'exams'=> $exam
    // ]);
})->name('exam.index');

Route::get('/exam/login', function (Request $request) {

    $login = Student::where('name', $request->name)->where('classroom_id', $request->classroom)->first();

    if(!empty($login)){
        $queryExam = Exam::where('is_open', true);

        $exam = $queryExam->with('questions')->get();

        // dd($exam->first()->id);
        // dd($login->id);

        $request->session()->put('exam', $exam->first()->id);
        $request->session()->put('student', $login->id);

        return view('exam.question',[
            'exams'=> $exam
        ]);

    }
    else{
        return "student tidak terdaftar";
    }

})->name('exam.login');

Route::get('/exam/submit', function (Request $request) {


    //// Mengambil semua pertanyaan yang dijawab
    $scores = [];

    foreach ($request->all() as $key => $value) {
        if (strpos($key, 'question_') === 0) {
            $scores[$key] = $value; // Simpan nilai poin ke dalam array
        }
    }

    Score::create([
        'student_id' => $request->session()->get('student'),
        'exam_id' => $request->session()->get('exam'),
        'score' => array_sum($scores),
    ]);

    return view('exam.logout');
})->name('exam.submit');

Route::get('/exam/logout', function (Request $request) {

    $request->session()->forget('student');
    $request->session()->forget('exam');

    return redirect()->route('exam.index');
})->name('exam.logout');
