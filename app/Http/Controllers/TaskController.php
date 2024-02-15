<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add_task($id)
    {
        $project = Project::find($id);
        return view('project.add_task', compact('project', 'id'));
    }


    public function store_task(Request $request, $id)
    {
        try{
            $data_insert = Task::create([
                'project_id' => $id,
                'name' => $request->name,
                'description' => $request->description,
                'due_date' => $request->due_date,
                'status' => $request->status,
            ]);
            
            return redirect()->route('add.task', $id)->with('success', 'Task added successful');
        }
        catch(\Exception $e){
            return redirect()->route('add.task, $id')->with('failed', 'Task add failed');
        }
    }
}
