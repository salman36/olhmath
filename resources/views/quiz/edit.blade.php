@extends('layouts.master')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">ADD QUIZ</div>
        <div class="card-body card-block">
            <form action="{{url('/quiz/update/'.$quiz_data->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="name" placeholder="Student Class" value="{{$quiz_data->name}}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="cars">Choose Student Class:</label>

                        <select name="stclss">
                            <option value="{{$quiz_data->st_class_id}}">{{$quiz_data->st_class->class_name}}</option>
                            @foreach ($student_class as $student )
                            <option value="{{$student->id}}">{{$student->class_name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
