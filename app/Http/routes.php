<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Task;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');

Route::auth();
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    //Route::get('/tasks', function () {
    //    return view('tasks', [
     //       'tasks' => Task::orderBy('created_at', 'asc')->get()
     //   ]);
    //});


    // route says: /tasks/
    Route::get('/tasks', function () {
        //$tasks = Task::where('active', 1)->orderBy('created_at', 'asc')->get();
        //$kaas = DB::table('task_user')
        //      ->JOIN('user_id', Auth::user()
        //          ->ON(users.id = task_user.user_id)
        //          ->where(user_id = auth::)
        //     ->id )->first();
        //$u = User::find(1)->tasks;
        //$waarom = DB::table('task_user')
        //    ->join('users')->on('task_user', '=', task_user.user_id)->get();




        $watisdit = DB::table('task_user')->join('tasks', function($join)
            { $user = Auth::user();
                $join->on('tasks.id', '=', 'task_user.task_id')->where('user_id', '=', $user["id"]);
	        })->get();





        return view('tasks', ['tasks' => $watisdit]);
    });





    /**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
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

        return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();

        return redirect('/');
    });


});







/**Route::group(['middleware' => ['web']], function () {
    // Show Task Dashboard
    Route::get('/tasks', 'TaskController@index');

    // Add New Task
    Route::post('/task', 'TaskController@insert_task');

    // Delete Task
    Route::delete('/task/{id}', 'TaskController@delete_task');
});
 */
