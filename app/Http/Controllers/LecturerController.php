<?php

namespace App\Http\Controllers;

use App\Models\Department;
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

$lecturers = Lecturer::latest();
$keyword = request('keyword');

if ($keyword) {
    $lecturers->where('name', 'like', '%' . $keyword . '%');
}

$department_id = request('department_id');

if ($department_id) {
    $lecturers->where('department_id', $department_id);
}

    return view('lecturer.index', [
    'title' => 'Lecturer',
       'departments' => Department::all(),
    'lecturers' => $lecturers->paginate(5)->withQueryString(),
]);
}

public function create()
{
    // Fungsi ini untuk halaman yang ada form inputnya
    return view('lecturer.create', [
        'title' => 'Create Lecturer',
        'departments' => Department::all(),
    ]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
       {
        $validated = $request->validate([
       'name' => 'required|max:255',
    'department_id' => 'required|exists:departments,id',
], [
        'name.required' => 'Nama tidak boleh kosong',
'name.max' => 'Nama tidak boleh lebih dari :max karakter',
'department_id.required' => 'Program Studi tidak boleh kosong',
'department_id.exists' => 'Program Studi yang dipilih tidak ditemukan',
    ]
    );

    Lecturer::create($validated);
 
    return to_route('lecturer.index')->withSuccess('Data Berhasil Ditambahkan');
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
         return view('lecturer.edit', [
        'title' => 'Edit Lecturer',
        'departments' => Department::all(),
        'lecturer' => $lecturer,
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
                $validated = $request->validate([
       'name' => 'required|max:255',
    'department_id' => 'required|exists:departments,id',
], [
        'name.required' => 'Nama tidak boleh kosong',
'name.max' => 'Nama tidak boleh lebih dari :max karakter',
'department_id.required' => 'Program Studi tidak boleh kosong',
'department_id.exists' => 'Program Studi yang dipilih tidak ditemukan',
    ]
    );
    

  $lecturer->update($validated);

return to_route('lecturer.index')->withSuccess('Data berhasil diubah');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
$lecturer->delete($lecturer);

return to_route('lecturer.index')->withSuccess('Data berhasil dihapus');
    }

}