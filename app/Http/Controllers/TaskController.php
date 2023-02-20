<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){

        $this->validate($request, [ //inputs are not empty or null
            'title' => 'required',
            'description' => 'required',
        ]);

        $task = new Task;
        $task->title = $request->input('title'); //retrieving user inputs
        $task->description = $request->input('description');  //retrieving user inputs
        $task->save(); //storing values as an object
        return $task; //returns the stored value if the operation was successful.
    }
}
