@extends('admin.layouts.app')

@section('css-top')

@endsection

@section('css-bot')
@endsection

@section('page-title')
Create New Topic For  <span class="text-primary">'{{ $training->name }}'</span>
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
                  <label for="trainingName">Topic Name</label>
                  <input type="text" class="form-control" name="topic-name" placeholder="Enter topic name" required>
                </div>
                <div class="form-group">
                    <label for="trainingDescription">Description</label>
                    <textarea class="form-control" name="topic-desc" cols="10" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="trainingLocation">Speaker</label>
                    <select name="topic-speaker" id="" class="form-control select2">
                        <option></option>
                        @foreach($speakers as $speaker)
                            <option value="{{ $speaker->id }}">{{ $speaker->fname." ".$speaker->lname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="trainingStart">Start</label>
                    <input type="datetime-local" class="form-control" name="topic-start" placeholder="Enter topic start date" required>
                </div>
                <div class="form-group">
                    <label for="trainingEnd">End</label>
                    <input type="datetime-local" class="form-control" name="topic-end" placeholder="Enter topic end date" required>
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