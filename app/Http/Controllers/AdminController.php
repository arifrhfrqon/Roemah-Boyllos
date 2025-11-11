<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function administrasi()
    {
        return view('admin.administrasi');
    }

    public function laporan()
    {
        return view('admin.laporan');
    }

    public function lkp()
    {
        return view('admin.lkp');
    }

}
