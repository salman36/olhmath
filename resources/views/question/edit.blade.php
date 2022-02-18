@extends('layouts.master')
@section('content')
{{-- <style>
                        .item {white-space: nowrap;display:inline  }
                      </style> --}}
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">ADD QUESTION</div>
        <div class="card-body card-block">
            <form action="{{url('/question/update/'.$question_data->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <label for="cars">Choose Quiz:</label>

                        <select name="quiz_id">
                            <option value="{{$question_data->quiz_id}}">{{$question_data->quiz->name}}</option>

                            @foreach ($quiz_data as $quiz )
                            <option value="{{$quiz->id}}">{{$quiz->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="input-group">

                    <textarea class="form-control rounded-0" rows="8" placeholder="Enter Question" name="question_statement"  style="height:100%;" required>{{$question_data->question_name}}</textarea>

                </div>
                <div class="input-group">


                      {{-- <fieldset>
                      <div class="item">
                          <input type="checkbox" name="option_a">
                          <label for="b">A</label>

                      </div>
                      <div class="item">
                         <input type="checkbox" name="option_b">
                          <label for="b">B</label>
                      </div>
                      <div class="item">
                          <input type="checkbox" name="option_c">
                          <label for="c">C</label>
                      </div>
                      <div class="item">
                        <input type="checkbox" name="option_d">
                        <label for="d">D</label>
                    </div>
                      </fieldset> --}}

                </div>

                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="option_a" placeholder="Option A" value="{{$question_data->option_a}}" class="form-control" required>
                        <input type="text" name="option_b" placeholder="Option B" value="{{$question_data->option_b}}" class="form-control" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="option_c" placeholder="Option C" value="{{$question_data->option_c}}" class="form-control" required>
                        <input type="text" name="option_d" placeholder="Option D" value="{{$question_data->option_d}}" class="form-control" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="correct" placeholder="Correct Answer" value="{{$question_data->correct}}" class="form-control" required>

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
