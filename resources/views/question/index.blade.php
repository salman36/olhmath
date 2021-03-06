@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <div class="form-actions form-group">
                <a class="btn btn-primary" style="margin-left: 20px;" href="{{url('/question')}}" >Create Question</a>
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
                        <th>Quiz Name</th>
                        <th>Question Statement</th>
                        <th>Option A</th>
                        <th>Option B</th>
                        <th>Option C</th>
                        <th>Option D</th>
                        <th>Correct</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($question_data as $data )
                    </tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->quiz->name}}</td>
                    <td>{{$data->question_name}}</td>
                    <td>{{$data->option_a}}</td>
                    <td>{{$data->option_b}}</td>
                    <td>{{$data->option_c}}</td>
                    <td>{{$data->option_d}}</td>
                    <td>{{$data->correct}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('question.edit', $data->id) }}">Edit</a>

                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ URL::to('/question/delete/' . $data->id) }}"
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
