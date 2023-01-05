<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Halaman Awal');
        return view('dosen.index', $data);
    }
    public function ampu()
    {
        $data = array('title' =>  'Data Ampuh');
        return view('dosen.v_ampu', $data);
    }
    public function profil()
    {
        $data = array('title' => 'Profil Dosen');
        return view('dosen.v_profil', $data);
    }
}
