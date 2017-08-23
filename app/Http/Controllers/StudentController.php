<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\student_detail;
use Session;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = \DB::table('students')
            ->join('student_details', 'students.studentdetail_id', '=', 'student_details.id')
            ->select(
                'students.id',
                'students.name',
                'students.studentdetail_id',
                'students.class_id',
                'students.schedule_id',
                'students.presence_id',
                'students.study_program_id',
                'student_details.id',
                'student_details.age',
                'student_details.address',
                'student_details.pob',
                'student_details.dob',
                'student_details.sambung_id',
                'student_details.hobby',
                'student_details.blood_type',
                'student_details.phone',
                'student_details.father',
                'student_details.mother',
                'student_details.brothers'
            )->paginate(10);

        // $student = student::paginate(10);

        // $student = student::paginate(10); // get data dgn paginasi 
        // return view('kbm.student_input',compact('student')); // load view dan kirim data
        return view('siswa.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        \App\student::create($request->all());
        \Session::flash('flash_message',' Data Saved'); //<--FLASH MESSAGE
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = \DB::table('students')
            ->join('student_details', 'students.studentdetail_id', '=', 'student_details.id')
            ->select(
                'students.*',
                'student_details.*'
            )->where("students.id", $id)->first();
        // $student = student::with(["studentdetail","studentdetail.id"])->find($id); //coba coba eager loading
        return view('siswa.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $student = student::findOrFail($id);
        $student = \DB::table('students')
            ->leftjoin('student_details', 'students.studentdetail_id', '=', 'student_details.id')
            ->select('*') //
            ->where('students.id', '=', $id)->first();
        return view('siswa.edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = student::findOrFail($id);
        $student->update($request->all());
        \Session::flash('flash_message',' successfully Updated.'); //<--FLASH MESSAGE

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student::find($id)->delete();

        // return redirect()->route('siswa.index');  
        \Session::flash('flash_message',' successfully delete.'); //<--FLASH MESSAGE

        return redirect()->route('siswa.index');
    }
}
