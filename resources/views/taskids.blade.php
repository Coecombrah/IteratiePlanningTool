@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Current Tasks -->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        @foreach ($taskids as $taskid)
                            <tr>
                                <th class="table-text"><div>{{ $taskid->name }}</div></th>
                            <td>
                        @endforeach
                    </div>


                    <div class="panel-body">
                        @foreach ($taskids as $taskid)
                        <tr>
                                <th class="table-text"><div>{{ $taskid->beschrijving }}</div></th>
                        <td>
                        @endforeach
</br>
                            <th>&nbsp;</th>

                            <form action="/iteratieproject/public/tasks/{{ $taskid->id }}/plannings">
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-cog"></i>Maak planning
                            </button>
                        </form>

                        <form action="/iteratieproject/public/tasks/{{ $taskid->id }}/opleverings">
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-cog"></i>Maak opleverangg
                            </button>
                        </form>

                    </div>
                </div>

        </div>
    </div>
@endsection