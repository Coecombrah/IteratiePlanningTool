<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plannings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project');
            $table->string('opdrachtgever');
            $table->string('uitvoerder');
            $table->integer('iteratienummer');
            $table->dateTime('startdatum');
            $table->dateTime('einddatum');
            $table->string('bijzonderheden');
            $table->integer('werkdagen');
            $table->integer('kosten');
            $table->string('versiebeheer');
            $table->string('bugs');
            $table->string('features');
            $table->dateTime('oplevering');
            $table->dateTime('volgende_vergadering');
            $table->timestamps();
        });

        Schema::create('planning_task', function(Blueprint $table)
        {
            $table->integer('planning_id')->unsigned()->index();
            $table->foreign('planning_id')->references('id')->on('plannings')->onDelete('cascade');

            $table->integer('task_id')->unsigned()->index();
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
