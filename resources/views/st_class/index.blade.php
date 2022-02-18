@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-9">
        <div class="table-responsive table--no-card m-b-30">
            <div class="form-actions form-group">
                <a class="btn btn-primary" style="margin-left: 20px;" href="{{url('/stClass')}}" >Create Class</a>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($student_data as $data )
                    </tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->class_name}}</td>
                    <td>
                        <a class="btn btn-primary"
                        href="{{ URL::to('/class/edit/' . $data->id) }}">Edit</a>

                    </td>

                    <tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
