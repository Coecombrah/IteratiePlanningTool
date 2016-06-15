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
use App\task_user;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');

Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/plannings', 'planningController@index');
Route::get('/geenadmin', 'geenadminController@index');
Route::get('/opleverings', 'opleveringController@index');

Route::auth();
Route::group(['middleware' => ['web']], function () {




    Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
    {
        Route::get('/admin', function()
        {
            $watisadmin = Task::orderBy('created_at', 'asc')->get();

            return view('tasks', ['tasks' => $watisadmin]);
        });

    });

    /**
     * Show Task Dashboard
     */

    Route::get('/tasks', function () {
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
        $user = Auth::user();
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
    });

    /**
     * Delete Task
     */
    Route::delete('/tasks/{id}', function ($id) {
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
