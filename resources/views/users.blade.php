@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Current Tasks -->
            @if (count($users) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Admin Rechten
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Gebruikers</th>
                            <th>Status</th>
                            </thead>
                            <tbody>
                            @foreach ($users as $admin)
                                <tr>
                                    <td class="table-text"><div>{{ $admin->name }}</div>
                                    </td>


                                    <td class="table-text" style="float: left;">{{ $admin->type }}</td>
                                                <td style="float: right;">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-cog" style="float: middle"></i>User
                                            </button>

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-cog" style="float: middle"></i>Admin
                                            </button>
                                                </td>

                                        </form>

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
