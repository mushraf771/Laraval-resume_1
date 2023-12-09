<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    function show(){
        // DB::insert('insert into resume_1 (name,email,password) values (?, ?,?)', ['azeem', 'b@b.com', 'kbbngmad']);
        // DB::insert('insert into resume_1 (name,email,password) values (?, ?,?)', ['azeem', 'b@b.com', 'kbbngmad']);
        // $student = DB::select('select * from resume_1 where id=?',['1']);
        // DB::update('update resume_1 set name = ? where name = ?', ['Royal Mad','Mushraf']);
        DB::delete('delete from resume_1 where id = :id', [7]);
        $student = DB::select('select * from resume_1');
        return view('student',['student'=>$student]);
    }
    function showquery(){
        // $student = '';
        // $student = DB::table('resume_1')->where('name','king');
        // $student = DB::table('resume_1')->where('name', 'king')->first();
        // $student = DB::table('resume_1')->find(2);
        $student = DB::table('resume_1')->pluck('password');
        dd($student);
        // $student = DB::table('resume_1')->first();
        // return view('student',['student'=>$student]);
        return view('student');
    }
}