<?php

namespace App\Http\Controllers;

use App\Models\Weight_log;
use Illuminate\Http\Request;

class Weight_logController extends Controller
{
    public function index()
    {
        $weightLogs = Weight_Log::all();
        return view('home', ['weightLogs' => $weightLogs]);
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

    public function edit(Request $request, $weightLogId)
    {
        $weightLog = WeightLog::findOrFail($weightLogId);
    
    // ここに編集ロジックを追加

        return redirect()->route('some.route')->with('success', '更新が完了しました');
    }

    public function destroy()
    {
        return view('weight_logs.destroy');
    }
}
