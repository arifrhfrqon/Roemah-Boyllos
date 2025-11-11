<?php

namespace App\Http\Controllers;

use App\Models\ProgramLkp;
use Illuminate\Http\Request;

class ProgramLkpController extends Controller
{
    public function index()
    {
        $programs = ProgramLkp::orderBy('created_at', 'desc')->get();
        return view('admin.program.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lkp' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'alamat' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'fitur' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'program_name' => 'required|string|max:255',
        ]);

        $data = $request->only('nama_lkp','deskripsi','alamat','email','phone','fitur','program_name');

        if($request->hasFile('foto')){
            $fotoName = time().'_'.$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('uploads/lkp'), $fotoName);
            $data['foto'] = 'uploads/lkp/'.$fotoName;
        }

        ProgramLkp::create($data);

        return redirect()->route('program.index')->with('success','Program LKP berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $program = ProgramLkp::findOrFail($id);
        return view('admin.program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lkp' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'alamat' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'fitur' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'program_name' => 'required|string|max:255',
        ]);

        $program = ProgramLkp::findOrFail($id);
        $data = $request->only('nama_lkp','deskripsi','alamat','email','phone','fitur','program_name');

        if($request->hasFile('foto')){
            $fotoName = time().'_'.$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('uploads/lkp'), $fotoName);
            $data['foto'] = 'uploads/lkp/'.$fotoName;
        }

        $program->update($data);

        return redirect()->route('program.index')->with('success','Program LKP berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $program = ProgramLkp::findOrFail($id);
        $program->delete();
        return redirect()->route('program.index')->with('success','Program LKP berhasil dihapus!');
    }
}
