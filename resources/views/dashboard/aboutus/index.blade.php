@extends('dashboard.layouts.master')

<!-- Page Content -->

@section('content')

<div class="wrapper">
            <div class="container-fluid">



<!-- Page-Title -->
<div class="row">
                    <div class="col-sm-12">
                 
                <!-- end page title end breadcrumb -->

                <div class="account-pages">
            <div class="container">
            @if(Session::has('successMsg'))
                                <div class=" text-center alert alert-success">{{Session::get('successMsg')}}</div>
            @endif
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center ">
                            <div class="about-us-title-container">
                               <h2 class="about-us-title">Mora Logistics</h2> 
                            </div>
                            <h4 class="mt-4">We are !!! </h4>
                        
                            <p>{{$aboutus->text}}</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="card text-center mb-4">
                            <div class="card-body about-us-box">
                                <h6 class="text-uppercase mb-3 about-us-box-title">Adress</h6>
                                <p class="mb-0 about-us-box-text text-muted">{{$aboutus->adress}}</p>
                                <p class="mb-0 about-us-box-text text-muted">{{$aboutus->city}}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center mb-4">
                            <div class="card-body about-us-box">
                                <h6 class="text-uppercase mb-3 about-us-box-title">Email / Phone</h6>
                                <p class="about-us-box-text mb-0 text-muted">{{$aboutus->email}}</p>
                                <p class="about-us-box-text mb-0 text-muted">{{$aboutus->phone}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center mb-4">
                            <div class="card-body about-us-box">
                                <h6 class="text-uppercase mb-3 about-us-box-title">Workdays / times</h6>
                                <p class=" text-muted mb-0 about-us-box-text">{{$aboutus->workdays}}</p>
                                <p class=" text-muted mb-0 about-us-box-text">{{$aboutus->worktimes}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                <a href="{{route('aboutus.edit',$aboutus->id)}}" type="button" class="btn btn-primary">Edit</a>
                <a href="{{url('/')}}" type="button" class="btn btn-secondary">Home</a>

                </div>

            </div>
        </div>

               
                <!-- end row -->






            
            </div>
</div>

@endsection
