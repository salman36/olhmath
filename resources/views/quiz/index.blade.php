@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-9">
        <div class="table-responsive table--no-card m-b-30">
            <div class="form-actions form-group">
                <a class="btn btn-primary" href="{{url('/quiz-create')}}" >Create Quiz</a>
            </div>
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Class Name</th>
                        <th>Quiz Name</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($quiz_data as $data )
                    </tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->st_class->class_name}}</td>
                    <td>{{$data->name}}</td>

                    <tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
