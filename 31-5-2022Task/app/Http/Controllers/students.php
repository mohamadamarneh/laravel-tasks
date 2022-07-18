<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class students extends Controller
{
    public function getall()
    {
        $data = student::all();
        return view('read_data', compact('data'));
    }

    public function getid()
    {
        $id = request('id');
        $data = student::where('id', $id)->first();
        return view('read_id', compact('data'));
    }
}
