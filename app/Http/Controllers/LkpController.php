<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lkp;
use App\Models\LkpRegistration;
use Illuminate\Http\Request;

class LkpController extends Controller
{
    public function index()
    {
        $data = LkpRegistration::orderBy('created_at','desc')->get();
        return view('admin.lkp.index', compact('data'));
    }

    public function create()
    {
        return view('lkp.daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'program' => 'required',
            'address' => 'required',
        ]);

        LkpRegistration::create([
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'program' => $request->program,
            'address' => $request->address,
        ]);

        return redirect()->route('lkp.create')->with('success', 'Pendaftaran LKP berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $lkp = LkpRegistration::findOrFail($id);
        return view('admin.lkp.edit', compact('lkp'));
    }

    public function update(Request $request, $id)
    {
        $lkp = LkpRegistration::findOrFail($id);
        $lkp->update($request->all());
        return redirect()->route('lkp.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Lkp::findOrFail($id)->delete();
        return redirect()->route('lkp.index')->with('success', 'Data berhasil dihapus!');
    }

    public function show($id)
    {
        $lkp = Lkp::with(['programs', 'registrations'])->findOrFail($id);
        return view('lkp.show', compact('lkp'));
    }

    public function storeProgram(Request $request, $id)
    {
        $request->validate([
            'program' => 'required'
        ]);

        Lkp::create([
            'lkp_id' => $id,
            'program' => $request->program
        ]);

        return back()->with('success', 'Program berhasil ditambahkan.');
    }

    public function program()
    {
        $lkps = Lkp::orderBy('created_at', 'desc')->get();
        return view('lkp.index', compact('lkps'));
    }
}

