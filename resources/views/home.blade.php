@extends('layouts.master')

@section('content')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Admin Dashboard</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-cog me-2"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{ url('assets/images/services-icon/01.png') }}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Total Users</h5>
                            <h4 class="fw-medium font-size-24"> {{ $users }}</h4>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{ url('assets/images/services-icon/02.png') }}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Workers</h5>
                            <h4 class="fw-medium font-size-24"> {{ $workersCount }} </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{ url('assets/images/services-icon/03.png') }}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Members</h5>
                            <h4 class="fw-medium font-size-24"> {{ $memberCount }} </h4>
                           
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="{{ url('assets/images/services-icon/04.png') }}" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Users</h5>
                            <h4 class="fw-medium font-size-24">{{$usersCount}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

      


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection