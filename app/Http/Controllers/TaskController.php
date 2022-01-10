<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Task as TaskResource;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'description' =>'required',
            
        ]
        );
        $task =new Task([
            'title' =>$request->title,
            'description' =>$request->description,
            
        ]);
        $task ->save();
        return response()->json([
            'data'=>'Tarea creada'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return new TaskResource(Task::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' =>'required',
            'description' =>'required',
            'status_id' =>'required',
        ]
        );
            $task =Task::findOrFail($id);
            $task->title =$request->title;
            $task->description =$request->description;
            $task->status_id =$request->status_id;
        
            $task ->save();
            return response()->json([
            'data'=>'Tarea actualizada'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task =Task::findOrFail($id);
        $task ->delete();
        return response()->json([
            'data'=>'Tarea eliminada'
        ]);
    }
}
