<?php

namespace App\Http\Controllers;

use App\Models\Weight_target;
use Illuminate\Http\Request;

class Weight_targetController extends Controller
{
    public function index()
    {
        return view('weight_targets.index');
    }
}
