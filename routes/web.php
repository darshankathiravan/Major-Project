<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentHomeController;
use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',
// function () {
//     return view('studenthome');
// });
Route::view('/', "index")->name('index');


Route::get('/studenthome',[StudentHomeController::class, 'course_name'])->name('student.home');
Route::get('/studenthome/{sem?}', [StudentHomeController::class, 'to_subject']);

// Route::view('/studenthome123', "studenthome")->name('student.home');
Route::view('/profile', "StudentProfile")->name('profile');
Route::view('/Help&Support', 'Help&Support')->name('help&Support');
//Route::view('/studentsubjects', 'studentsubjects')->name('studentsubjects');
Route::view('/index', "Index")->name('index');
Route::view('/teachersubject', "TeacherSubjects")->name('teacherssubjects');
Route::get('/studentsubject',[UserController::class, 'list'])->name('student.subjects');



Route::view('/studentprofile', "StudentProfile")->name('stud_prof');


// Route::get('/generate-pdf', [StudentHomeController::class,'pdf'])->name('generate.pdf');
Route::get('/studentsubject',[StudentHomeController::class, 'materials'])->name('student.subjects');
