@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-9">
        <div class="table-responsive table--no-card m-b-30">
            <div class="form-actions form-group">
                <a class="btn btn-primary" style="margin-left: 20px;" href="{{url('/quiz-create')}}" >Create Quiz</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }} </p>
                </div>
            @endif
            <table class="table table-borderless table-striped table-earning" style="margin-left: 20px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Class Name</th>
                        <th>Quiz Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($quiz_data as $data )
                    </tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->st_class->class_name}}</td>
                    <td>{{$data->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('quiz.edit', $data->id) }}">Edit</a>

                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ URL::to('/quiz/delete/' . $data->id) }}"
                            onclick="return confirm('are you sure?')">Delete</a>
                    </td>


                    <tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
