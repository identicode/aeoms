@extends('admin.layouts.app')

@section('css-top')
@endsection

@section('css-bot')
@endsection

@section('page-title')
Header Title
@endsection

@section('page-bread')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Layout</a></li>
    <li class="breadcrumb-item active">Top Navigation</li>
</ol>
@endsection

@section('content')
<!-- Info boxes -->
<div class="row">

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">10<small>%</small></span>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
            </div>
        </div>
    </div>

    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
            </div>
        </div>
    </div>

    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
            </div>
        </div>
    </div>
    
</div>
  
@endsection

@section('js-top')
@endsection

@section('js-bot')
@endsection