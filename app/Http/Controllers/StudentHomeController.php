<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentHomeController extends Controller
{
    /**
     * Show a list of all departments.
     *
     * @return \Illuminate\Http\Response
     */
    // public function dept()
    // {
    //     $dept_data = DB::table('department')->get();
    //     return view('studenthome', compact('dept_data'));
    // }
    //$student_details=DB::table('students_table_u')->get();
    public $course_id= 'c01';
    public $college_id='c1';
    public function course_name()
    {
        $coursename=DB::table('m_courses_u')
                        ->where('course_id','=',$this->course_id)
                        ->get();
       return view('studenthome', compact('coursename'));
    }
    
    public function to_subject($sem = null)
    {   
        $subid=DB::table('course_subject')
                        ->where('course_id','=',$this->course_id)
                        ->where('sem','=',$sem)
                        ->pluck('subject_id');
        
        $subs=DB::table('m_subjects_u')
                        ->whereIn('sub_id',$subid)
                        ->get();
       
        return view('StudentSubjects', compact('subs'));
    }
    public function materials()
    {
        $data = DB::table('materials')->get();
        
        return view('StudentSubjects', compact('data'));
    }
}