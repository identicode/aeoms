@extends('admin.layouts.app')

@section('css-top')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset_url()}}plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection

@section('css-bot')
@endsection

@section('page-title')
Training Details
@endsection

@section('page-bread')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <h3 class="text-primary">{{ $training->name }}</h3>
                <p class="text-muted">{{ $training->description }}</p>
                <br>
                <div class="text-muted">
                    <p class="text-sm">Location
                        <b class="d-block">{{ $training->location }}</b>
                    </p>
                    <p class="text-sm">Start
                        <b class="d-block">{{ nice_date($training->start, 'F d, Y h:i A') }}</b>
                    </p>
                    <p class="text-sm">End
                        <b class="d-block">{{ nice_date($training->end, 'F d, Y h:i A') }}</b>
                    </p>
                </div>
                <div class="text-center mt-5 mb-3">
                  <a href="{{ base_url() }}admin/training/{{ $training->id }}/topic/create" class="btn btn-sm bg-gradient-primary">Add Topic</a>
                  <a href="#" class="btn btn-sm bg-gradient-warning">Cancel this Training</a>
                </div>

            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Participants</span>
                            <span class="info-box-number text-center text-muted mb-0">{{ $training->participants->where('approved', 1)->count() }}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Topics</span>
                            <span class="info-box-number text-center text-muted mb-0">{{ $training->topics->count() }}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Speakers</span>
                            <span class="info-box-number text-center text-muted mb-0">{{ $training->topics->unique('speaker_id')->count() }}<span>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Topics</h4>
                        <hr>
                        <table id="topics-dataTable" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Speaker</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach($training->topics as $i => $topic)
                              <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $topic->title }}</td>
                                <td>{{ $topic->speaker->description }}</td>
                                <td>{{ $topic->speaker->fname." ".$topic->speaker->lname }}</td>
                                <td>{{ nice_date($topic->start, 'F d, Y h:i A') }} - {{ nice_date($topic->end, 'F d, Y h:i A') }}</td>
                                <td>
                                  <a href="{{ base_url() }}admin/training/2/topic/{{ $topic->id }}/edit" class="btn btn-xs bg-gradient-warning"> <i class="fa fa-edit"></i> Edit</a>
                                  <a href="{{ base_url() }}admin/training/2/topic/{{ $topic->id }}/delete" class="btn btn-xs bg-gradient-danger"> <i class="fa fa-trash"></i> Delete</a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    $participants = $training->participants->where('approved', 1);
    $pendings = $training->participants->where('approved', 0);
    $x = 0;
    $y = 0;
@endphp

<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h4>Participants</h4>
        <hr>
        <table id="participants-dataTable" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Department - Year</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($participants as $participant)
              <tr>
                <td>{{ ++$x }}</td>
                <td>{{ $participant->student->fname." ".$participant->student->lname }}</td>
                <td></td>
                <td>
                  <a href="{{ base_url() }}admin/participant/{{ $participant->id }}/disapprove" class="btn btn-xs bg-gradient-danger">Remove</a>
                </td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h4>Pending for Approval</h4>
            <hr>
            <table id="pending-participants-dataTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Department - Year</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($pendings as $pending)
                <tr>
                  <td>{{ ++$y }}</td>
                  <td>{{ $pending->student->fname." ".$pending->student->lname }}</td>
                  <td></td>
                  <td>
                    <a href="{{ base_url() }}admin/participant/{{ $pending->id }}/approve" class="btn btn-xs bg-gradient-success">Approve</a>
                    <a href="{{ base_url() }}admin/participant/{{ $pending->id }}/disapprove" class="btn btn-xs bg-gradient-warning">Disapprove</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
      </div>
    </div>
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
    $("#topics-dataTable").DataTable();
    $("#participants-dataTable").DataTable();
    $("#pending-participants-dataTable").DataTable();
  });
</script>
@endsection