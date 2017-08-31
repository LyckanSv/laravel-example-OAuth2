<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Task as Task;

class TaskController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tasks = Task::all(); 
        return    array("tasks"=> $tasks);
    }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
    public function create()
    {
        //
    }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  Request  $request
      * @return Response
      */
    
    public function store(Request   $request)
    {
        $validator  =   Validator::make($request->all(), [
            'name'  =>  'required|max:10',
            ]);

        if ($validator->fails()) {
                      return    array("error"=>"Fields	Required",  "fields"    =>  $validator->errors()->all());
        }else{
            $task = new Task;
            $task->name = $request->name;
            $task->save();
            return "Ok :)";
        }
    }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
    public function show($id)
    {
        //
    }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
    public function edit($id)
    {
        //
    }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  Request  $request
      * @param  int  $id
      * @return Response
      */
    public function update(Request $request, $id)
    {
        //
    }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return Response
      */
    public function destroy($id)
    {
        //
    }
}
