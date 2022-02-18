@extends('layouts.master')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">ADD CLASS</div>
        <div class="card-body card-block">
            <form action="{{url('/stclass/update/'.$class_data->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="name" placeholder="Student Class" value="{{$class_data->class_name}}" class="form-control" required>
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
