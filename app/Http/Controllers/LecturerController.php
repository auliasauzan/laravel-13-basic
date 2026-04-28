<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Http\Request;

#[Fillable(['name' , 'lecturer_id'])]
class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                 return view('lecturer.index', [
            'title' => 'Lecturer',
            'lecturer' => lecturer::latest()->get(),
            //'lecturers' => Lecturer::orderBy('name', 'asc')->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}