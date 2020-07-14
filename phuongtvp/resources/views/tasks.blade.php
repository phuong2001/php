<?php

?>
{{--thua ke tu app.blade template --}}
@extends('layouts.app');

{{--noi dung trang con --}}
{{--dung app.css --}}
@section('content')

    {{--định nghĩa phần nội dung của trang task--}}
    <div class="panel-body">
        {{--hiên thị thông báo lỗi--}}
        @include('errors.503')
{{--form nhập task mới --}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            {{csrf_field()}}
{{--tên task --}}
        <div class="form-group">
            <lable for="task" class="col-sm-3 control-label">Task</lable>
            <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control">
        </div>
    </div>
            {{--nut task --}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add Task
                    </button>

                </div>
            </div>
    </form>
        {{--hien thi task co trong database--}}

        @if(count($tasks)>0)
          <div class="panel panel-default">
          <div class="panel-heading">Current Task</div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    {{--tao tieu de cua cac cot--}}
                    <thead>
                    <td>Task</td>
                    <td>&nbsp;</td>
                    </thead>
                    {{--tao phan than--}}
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{$task->name}}</div>
                            </td>
                            <td>
                            <form action="/task/{{$task->id}}" method="post">
                                {{$csrf-field()}}
                                {{$method->field('DELETE')}}
                                <button>Delete Task</button>
                                <input type="hidden" name="method" value="DELETE" >
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

    @endsection