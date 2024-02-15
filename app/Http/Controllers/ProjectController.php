<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function new_project()
    {
        return view('project.new_project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_project(Request $request)
    {
        try{
            $data_insert = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status,
            ]);
            return redirect()->route('new.project')->with('success', 'Project successful');

        }
        catch(\Exception $e){
            return redirect()->route('new.project')->with('failed', 'Project failed');
        }
    }

}
