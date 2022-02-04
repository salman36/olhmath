@extends('layouts.master')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">ADD QUIZ</div>
        <div class="card-body card-block">
            <form action="{{url('/quiz-create')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="name" placeholder="Student Class" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="cars">Choose Student Class:</label>

                        <select name="stclss">
                            @foreach ($student_class as $student )

                            <option value="">Select Option</option>
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
