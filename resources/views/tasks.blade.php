@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Projecten
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Projectnaam</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text"><div>{{ $task->name }}</div></td>

                                    <!-- ga! knop hieronder -->
                                    <td>
                                        <form action="/iteratieproject/public/tasks/{{ $task->id }}">
                                            <button type="submit" class="btn btn-danger" style="float: right">
                                                <i class="fa fa-btn fa-pencil"></i>Gaan
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection