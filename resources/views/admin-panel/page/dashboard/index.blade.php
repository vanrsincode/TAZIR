@extends('admin-panel.layouts.main')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-success">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>Users</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>News</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>Reports</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-assistive-listening-systems"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>Feedback</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
