<?php

namespace App\Http\Controllers;

use App\Models\Weight_log;
use Illuminate\Http\Request;

class Weight_logController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('weight_logs.create');
    }

    public function store()
    {
        return view('weight_logs.create');
    }

    public function search()
    {
        return view('weight_logs.search');
    }

    public function show()
    {
        return view('weight_logs.show');
    }

    public function edit()
    {
        return view('weight_logs.edit');
    }

    public function destroy()
    {
        return view('weight_logs.destroy');
    }
}
