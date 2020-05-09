@extends('admin.layouts.app')

@section('css-top')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset_url()}}plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection

@section('css-bot')
@endsection

@section('page-title')
Trainings
@endsection

@section('page-bread')
<a href="{{base_url()}}admin/training/create" class="btn bg-gradient-primary float-sm-right"><i class="fas fa-plus"></i> Add New Training</a>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Training Lists</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Training</th>
                  <th>Description</th>
                  <th>Participants</th>
                  <th>Topics</th>
                  <th>Speakers</th>
                  <th>Start</th>
                  <th>End</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($trainings as $i => $training)
                    <tr>
                      <td>{{++$i}}</td>
                      <td><a target="_blank" href="{{base_url()}}admin/training/{{$training->id}}/show">{{$training->name}}</a></td>
                      <td>{{word_limiter($training->description, 15)}}</td>
                      <td>10</td>
                      <td>{{ $training->topics->count() }}</td>
                      <td>{{ $training->topics->unique('speaker_id')->count() }}</td>
                      <td>{{nice_date($training->start, 'F d, Y h:i A')}}</td>
                      <td>{{nice_date($training->end, 'F d, Y h:i A')}}</td>
                      <td>
                        <a href="{{base_url()}}admin/training/{{$training->id}}/show" class="btn btn-xs bg-gradient-primary">View</a>
                        <a href="{{base_url()}}admin/training/{{$training->id}}/edit" class="btn btn-xs bg-gradient-warning">Edit</a>
                        <a href="#" class="btn btn-xs bg-gradient-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div>
</div>
@endsection

@section('js-top')
<!-- DataTables -->
<script src="{{asset_url()}}plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset_url()}}plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
@endsection

@section('js-bot')
<script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>
@endsection