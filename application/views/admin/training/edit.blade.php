@extends('admin.layouts.app')

@section('css-top')
@endsection

@section('css-bot')
@endsection

@section('page-title')
Update Training
@endsection

@section('page-bread')
@endsection

@section('content')
<div class="row">
    <div class="col-4 offset-4">
        <div id="add-training-whirl" class="card">

            <div class="card-header">
                <h3 class="card-title">Fill Up The Form</h3>
            </div>

            <form role="form" method="POST" action="{{current_url()}}">
              <div class="card-body">
                <div class="form-group">
                  <label for="trainingName">Training Name</label>
                    <input type="text" class="form-control" name="trainingName" value="{{$training->name}}" placeholder="Enter training name" required>
                </div>
                <div class="form-group">
                    <label for="trainingDescription">Description</label>
                    <textarea class="form-control" name="trainingDescription" cols="10" rows="2">{{$training->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="trainingLocation">Location</label>
                    <input type="text" class="form-control" name="trainingLocation" value="{{$training->location}}" placeholder="Enter training location" required>
                </div>
                <div class="form-group">
                    <label for="trainingStart">Start</label>
                    <input type="datetime-local" class="form-control" name="trainingStart" value="{{nice_date($training->start, 'Y-m-d')."T".nice_date($training->start, 'H:i')}}" placeholder="Enter training start date" required>
                </div>
                <div class="form-group">
                    <label for="trainingEnd">End</label>
                    <input type="datetime-local" class="form-control" name="trainingEnd" value="{{nice_date($training->end, 'Y-m-d')."T".nice_date($training->end, 'H:i')}}" placeholder="Enter training end date" required>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn bg-gradient-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js-top')
@endsection

@section('js-bot')

@endsection