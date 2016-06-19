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
use App\planning;
use App\planning_task;
use App\User;
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

            return view('admintasks', ['admintasks' => $watisadmin]);
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
     * Show TaskID page
     */


    Route::get('/tasks/{id}', function ($id) {
        $watisdit = DB::table('tasks')->where('tasks.id', '=', $id)->get();

        return view('taskids', ['taskids' => $watisdit]);


    });

    //Route::get('/tasks/{id}/opleverings', 'opleveringController@index');
    Route::get('/tasks/{id}/plannings', 'planningController@index');

    Route::post('/tasks/{id}/plannings', function (Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'project' => 'required|max:255',
            'opdrachtgever' => 'required|max:255',
            'Uitvoerder' => 'required|max:255',
            'iteratienummer' => 'required|max:255',
            'startdatum' => 'required|max:255',
            'einddatum' => 'required|max:255',
            'bijzonderheden' => 'required|max:255',
            'werkdagen' => 'required|max:255',
            'kosten' => 'required|max:255',
            'versiebeheer' => 'required|max:255',
            'bugs' => 'required|max:255',
            'features' => 'required|max:255',
            'oplevering' => 'required|max:255',
            'volgende_vergadering' => 'required|max:255',
            //'test' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }


        $planning_task = new planning_task;
        $planning = new planning;
        $planning->project = $request->project;
        $planning->opdrachtgever = $request->opdrachtgever;
        $planning->Uitvoerder = $request->Uitvoerder;
        $planning->iteratienummer = $request->iteratienummer;
        $planning->startdatum = $request->startdatum;
        $planning->einddatum = $request->einddatum;
        $planning->bijzonderheden = $request->bijzonderheden;
        $planning->werkdagen = $request->werkdagen;
        $planning->versiebeheer = $request->versiebeheer;
        $planning->kosten = $request->kosten;
        $planning->bugs = $request->bugs;
        $planning->features = $request->features;
        $planning->oplevering = $request->oplevering;
        $planning->volgende_vergadering = $request->volgende_vergadering;
        $planning->save();
        //$idee = planning::find($id);

        //$planning_task->planning_id = $idee;
        //$planning_task->task_id = $request->test;
       // $planning_task->save();
       // $planning->save();

        return redirect('/tasks');

    });

    Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
    {
        Route::get('/adminroles', function(Request $request)
        {
            $adminaccount = User::orderBy('created_at', 'asc')->get();


            return view('users', ['users' => $adminaccount]);
        });

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