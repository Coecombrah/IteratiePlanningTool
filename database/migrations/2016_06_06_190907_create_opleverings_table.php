<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpleveringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opleverings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project');
            $table->string('opdrachtgever');
            $table->string('uitvoerder');
            $table->integer('iteratienummer');
            $table->dateTime('startdatum');
            $table->dateTime('einddatum');
            $table->integer('werkdagen_gepland');
            $table->integer('werkdagen_progameren');
            $table->integer('werkdagen_onderzoek');
            $table->string('bijzonerheden');
            $table->string('versiebeheer');
            $table->string('bugs');
            $table->string('features');
            $table->dateTime('oplevering');
            $table->dateTime('volgende_vergadering');
            $table->timestamps();
        });

        Schema::create('oplevering_task', function(Blueprint $table)
        {
            $table->integer('oplevering_id')->unsigned()->index();
            $table->foreign('oplevering_id')->references('id')->on('opleverings')->onDelete('cascade');

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
