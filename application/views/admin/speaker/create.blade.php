@extends('admin.layouts.app')

@section('css-top')
@endsection

@section('css-bot')
@endsection

@section('page-title')
Create New Speaker
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
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter first name" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter last name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" cols="10" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Enter last name" required>
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