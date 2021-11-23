@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{url('/updateList/'.$task->id)}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{$task->name}}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-6">
                                <input type="text" name="email" id="task-name" class="form-control" value="{{$task->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Address</label>

                            <div class="col-sm-6">
                                <input type="text" name="address" id="task-name" class="form-control" value="{{$task->address}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">PhoneNumber</label>

                            <div class="col-sm-6">
                                <input type="text" name="phno" id="task-name" class="form-control" value="{{$task->phno}}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default" >
                                    <i class="fa fa-btn fa-upload"></i>Update Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection