<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::get();

        return response()->json($data);
    }
}
