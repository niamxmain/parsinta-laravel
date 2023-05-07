<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index() 
    {
        // dd(DB::table('tasks')->get());
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function addTask(Request $request) 
    {
        // if use [insert] will return bool, and if [create] will return datas
        Task::create([
            'tugas' => $request->newTask,
            'mark' => true,
        ]);
        return back();
    }

    public function editTask($id)
    {
        // use [where]->first() if condition more than 1, and use [find] if just find id 
        return view('tasks.edit', [
            'task' => Task::find($id),
        ]);
    }
    public function updateTask(Request $request, $id)
    {
        Task::find($id)->update([
            'tugas' => $request->task
        ]);
        return redirect('/tasks');
    }
    public function deleteTask($id) 
    {
        Task::find($id)->delete();
        return redirect('/tasks');
    }
}
