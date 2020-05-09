@extends('admin.layouts.app')

@section('css-top')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset_url()}}plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection

@section('css-bot')
@endsection

@section('page-title')
Speakers
@endsection

@section('page-bread')
<a href="{{base_url()}}admin/speaker/create" class="btn bg-gradient-primary float-sm-right"><i class="fas fa-plus"></i> Add New Speaker</a>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Speaker Lists</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Descriptions</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($speakers as $i => $speaker)
                  <tr>
                    <td> {{ ++$i }} </td>
                    <td>{{$speaker->fname." ".$speaker->lname}}</td>
                    <td>
                      <a href="{{base_url()}}uploads/speakers/{{$speaker->image}}" target="_blank"><img src="{{base_url()}}uploads/speakers/{{$speaker->image}}" alt="Speaker Image" class="img-thumbnail" width="100px" height="100px"></a>
                    </td>
                    <td>{{ $speaker->description }}</td>
                    <td>
                      <a href="{{base_url()}}admin/speaker/{{$speaker->id}}/edit" class="btn btn-xs bg-gradient-warning">Edit</a>
                      <a href="{{base_url()}}admin/speaker/{{$speaker->id}}/delete" class="btn btn-xs bg-gradient-danger">Delete</a>
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