<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use DB;
use Auth;
use App\Http\Requests;

class TaskController extends Controller
{
    // route says: /tasks/
    function index() {
        @if (isset(Auth::user->id(1))
        $watisadmin = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', ['tasks' => $watisadmin]);
    }
    @else
        echo"wat";
    @endif
    }

    // if route is /task/
    function insert_task (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/tasks');
    }

    function delete_task ($id) {
        Task::findOrFail($id)->delete();

        return redirect('/tasks');
    }
}
