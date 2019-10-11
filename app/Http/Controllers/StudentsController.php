<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|size:9',
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/students')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nis' => 'required|size:9',
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'
        ]);

        Student::where('id', $student->id)
            ->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'email' => $request->email,
                'nohp' => $request->nohp,
                'jurusan' => $request->jurusan,
                'alamat' => $request->alamat
            ]);
        return redirect('/students')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('danger', 'Data Mahasiswa Berhasil Dihapus');;
    }
}
