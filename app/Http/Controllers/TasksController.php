<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index() 
    {
        // dd(DB::table('tasks')->get());
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function addTask(Request $request) 
    {
        DB::table('tasks')->insert([
            'tugas' => $request->newTask
        ]);
        return back();
    }
}
