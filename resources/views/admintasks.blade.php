@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Current Tasks -->
            @if (count($admintasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Projecten
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Projectnaam</th>
                            <th>id</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach ($admintasks as $admintask)
                                <tr>
                                    <td class="table-text"><div>{{ $admintask->name }}</div></td>
                                    <td class="table-text"><div>{{ $admintask->id }}</div></td>
                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="/iteratieproject/public/tasks/{{ $admintask->id }}">
                                            <button type="submit" class="btn btn-danger" style="float: right">
                                                <i class="fa fa-btn fa-cog"></i>iets
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