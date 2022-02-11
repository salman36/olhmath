@extends('layouts.master')
@section('content')
{{-- <style>
                        .item {white-space: nowrap;display:inline  }
                      </style> --}}
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">ADD QUESTION</div>
        <div class="card-body card-block">
            <form action="{{url('/question-create')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <label for="cars">Choose Quiz:</label>

                        <select name="quiz_id">
                            <option value="">Select Option</option>
                            @foreach ($quiz_data as $quiz )
                            <option value="{{$quiz->id}}">{{$quiz->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-group">

                    <textarea rows="8" placeholder="Enter Question" name="question_statement" style="height:100%;" required></textarea>

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

                        <input type="text" name="option_a" placeholder="Option A" class="form-control" required>
                        <input type="text" name="option_b" placeholder="Option B" class="form-control" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="option_c" placeholder="Option C" class="form-control" required>
                        <input type="text" name="option_d" placeholder="Option D" class="form-control" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="correct" placeholder="Correct Answer" class="form-control" required>

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
