<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('skill');
    }

    public function skillhasil(Request $request){
    $this->validate($request, [
        'nama' => 'required',
        'email' => 'required',
        'lokasi' => 'required',
        'jenis_kelamin' => 'required',
        'skill' => 'required',
    ]);
    return view('skillhasil', ['data' => $request]);
    }
}
