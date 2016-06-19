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

                        <form action="{{ url('/tasks/{id}/plannings')}}" method="POST" class="form-horizontal">

                        {{ csrf_field() }}

                        <!-- Project -->
                            <div class="form-group">
                                <label for="project-name" class="col-sm-3 control-label">Project</label>

                                <div class="col-sm-6">
                                    <input type="text" name="project" id="project-name" class="form-control" value="{{ old('project') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- opdrachtgever -->
                            <div class="form-group">
                                <label for="opdrachtgever-name" class="col-sm-3 control-label">opdrachtgever</label>

                                <div class="col-sm-6">
                                    <input type="text" name="opdrachtgever" id="opdrachtgever" class="form-control" value="{{ old('opdrachtgever') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Uitvoerder -->
                            <div class="form-group">
                                <label for="Uitvoerder-name" class="col-sm-3 control-label">Uitvoerder</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Uitvoerder" id="Uitvoerder" class="form-control" value="{{ old('Uitvoerder') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- Iteratie Nummer -->
                            <div class="form-group">
                                <label for="iteratienummer-name" class="col-sm-3 control-label">iteratienummer</label>

                                <div class="col-sm-6">
                                    <input type="number" name="iteratienummer" id="iteratienummer" class="form-control" value="{{ old('iteratienummer') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- StartDatum -->
                            <div class="form-group">
                                <label for="startdatum-name" class="col-sm-3 control-label">startdatum</label>

                                <div class="col-sm-6">
                                    <input type="date" name="startdatum" id="startdatum" class="form-control" value="{{ old('startdatum') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- EindDatum -->
                            <div class="form-group">
                                <label for="einddatum-name" class="col-sm-3 control-label">einddatum</label>

                                <div class="col-sm-6">
                                    <input type="date" name="einddatum" id="einddatum" class="form-control" value="{{ old('einddatum') }}">
                                </div>
                            </div>


                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- bijzonderheden -->
                            <div class="form-group">
                                <label for="bijzonderheden-name" class="col-sm-3 control-label">bijzonderheden</label>

                                <div class="col-sm-6">
                                    <input type="text" name="bijzonderheden" id="bijzonderheden" class="form-control" value="{{ old('bijzonderheden') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- werkdagen -->
                            <div class="form-group">
                                <label for="werkdagen-name" class="col-sm-3 control-label">werkdagen</label>

                                <div class="col-sm-6">
                                    <input type="number" name="werkdagen" id="werkdagen" class="form-control" value="{{ old('werkdagen') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- kosten -->
                            <div class="form-group">
                                <label for="kosten-name" class="col-sm-3 control-label">kosten</label>

                                <div class="col-sm-6">
                                    <input type="number" name="kosten" id="kosten" class="form-control" value="{{ old('kosten') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- versiebeheer -->
                            <div class="form-group">
                                <label for="versiebeheer-name" class="col-sm-3 control-label">versiebeheer</label>

                                <div class="col-sm-6">
                                    <input type="text" name="versiebeheer" id="versiebeheer" class="form-control" value="{{ old('versiebeheer') }}">
                                </div>
                            </div>



                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- bugs -->
                            <div class="form-group">
                                <label for="bugs-name" class="col-sm-3 control-label">bugs</label>

                                <div class="col-sm-6">
                                    <input type="text" name="bugs" id="bugs" class="form-control" value="{{ old('bugs') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- features -->
                            <div class="form-group">
                                <label for="features-name" class="col-sm-3 control-label">features</label>

                                <div class="col-sm-6">
                                    <input type="text" name="features" id="features" class="form-control" value="{{ old('features') }}">
                                </div>
                            </div>

                            <!--------------------------------------------------------------------------------------------------!>

                            <!-- oplevering -->
                            <div class="form-group">
                                <label for="oplevering-name" class="col-sm-3 control-label">oplevering</label>

                                <div class="col-sm-6">
                                    <input type="date" name="oplevering" id="oplevering" class="form-control" value="{{ old('oplevering') }}">
                                </div>
                            </div>

                        {{--<!--------------------------------------------------------------------------------------------------!>--}}

                        <!-- volgende_vergadering -->
                            <div class="form-group">
                                <label for="volgende_vergadering-name" class="col-sm-3 control-label">volgende vergadering</label>

                                <div class="col-sm-6">
                                    <input type="date" name="volgende_vergadering" id="volgende_vergadering" class="form-control" value="{{ old('volgende_vergadering') }}">
                                </div>
                            </div>

                        {{--<!--------------------------------------------------------------------------------------------------!>--}}

                        <!-- test
                            <div class="test-group">
                                <label for="test-name" class="col-sm-3 control-label">test</label>

                                <div class="col-sm-6">
                                    <input type="number" name="test" id="test" class="form-control" value="{{ old('test') }}">
                                </div>
                            </div>
-->
                        {{--<!--------------------------------------------------------------------------------------------------!>--}}


                        <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <form action="1.html">
                                        <button type="submit" class="btn btn-default")>
                                    </form>
                                    <i class="fa fa-btn fa-plus"></i>Maak Project

                                    </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection