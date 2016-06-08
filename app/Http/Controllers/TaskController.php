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
        $tasks = Task::where('active', 1)->orderBy('created_at', 'asc')->get();
        //$kaas = DB::table('task_user')
          //      ->JOIN('user_id', Auth::user()
          //          ->ON(users.id = task_user.user_id)
          //          ->where(user_id = auth::)
        //     ->id )->first();
        //$u = User::find(1)->tasks;
        //$waarom = DB::table('task_user')
        //    ->join('users')->on('task_user', '=', task_user.user_id)->get();

        return view('tasks', ['tasks' => $tasks]);




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
