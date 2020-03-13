@extends('admin.layouts.app')

@section('css-top')
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

                <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{ $training->name }}</h3>
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
                  <a href="#" class="btn btn-sm bg-gradient-primary">Add Topic</a>
                  <a href="#" class="btn btn-sm bg-gradient-warning">Cancel this Training</a>
                </div>

            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Participants</span>
                            <span class="info-box-number text-center text-muted mb-0">2300</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Topics</span>
                            <span class="info-box-number text-center text-muted mb-0">1</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Speakers</span>
                            <span class="info-box-number text-center text-muted mb-0">20 <span>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Topics</h4>
                        <hr>
                        <div class="post">
                            <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{base_url()}}uploads/speakers/default.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Ricardo D. Dalisay</a>
                              </span>
                              <span class="description">Teacher I</span>
                            </div>
                            <!-- /.user-block -->
                            <p><strong>Topic: </strong> Human Anatomy</p>
                            <p><strong>Date: </strong> March 01, 2020 01:01 AM - March 01, 2020 01:01 AM</p>
                           
                          </div>
                          <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-top')
@endsection

@section('js-bot')
@endsection