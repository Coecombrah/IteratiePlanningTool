@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Iteratie Planning</div>

                    <div class="panel-body">
                        </br>
                        <!-- New Task Form -->
                        <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Project -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Project</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Opdrachtgever -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Oprachtgever</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Oprachtgever" id="Oprachtgever" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Uitvoerder -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Uitvoerder</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Uitvoerder" id="Uitvoerder" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Iteratie Nummer -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Iteratie Nummer</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Iteratie Nummer" id="Iteratie Nummer" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- StartDatum -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">StartDatum</label>

                                <div class="col-sm-6">
                                    <input type="date" name="StartDatum" id="StartDatum" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- EindDatum -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">EindDatum</label>

                                <div class="col-sm-6">
                                    <input type="date" name="EindDatum" id="EindDatum" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>


                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Werkdagen -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Werkdagen</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Werkdagen" id="Werkdagen" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Kosten -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Kosten</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Kosten" id="Kosten" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- VersieBeheer -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">VersieBeheer</label>

                                <div class="col-sm-6">
                                    <input type="text" name="VersieBeheer" id="VersieBeheer" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Bugs -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Bugs</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Bugs" id="Bugs" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>



                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Oplevering -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Oplevering</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Oplevering" id="Oplevering" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Volgende Vergadering -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Volgende Vergadering</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Volgende Vergadering" id="Volgende Vergadering" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Bijzonderheden -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Bijzonderheden</label>

                                <div class="col-sm-6">
                                    <input type="textarea" name="Bijzonderheden" id="Bijzonderheden" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            {{--<!--------------------------------------------------------------------------------------------------!>--}}

                            {{--<!-- Features -->--}}
                            {{--<div class="input_fields_wrap">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="task-name" class="col-sm-3 control-label">Features</label>--}}

                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" name="Features" id="Features" class="form-control" value="{{ old('task') }}">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}













                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <form action="1.html">
                                        <button type="submit" class="btn btn-default")>
                                    </form>
                                    <i class="fa fa-btn fa-plus"></i>Maak Planning

                                    </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection