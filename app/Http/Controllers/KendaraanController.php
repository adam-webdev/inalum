<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        return view('jadwal.index');
    }
    public function create()
    {
        return view('jadwal.create');
    }
    public function store(Request $request)
    {
        ddd($request->all());
    }
}