@extends('dashboard.layouts.master')

<!-- Page Content -->

@section('content')

<div class="wrapper">
            <div class="container-fluid">



<!-- Page-Title -->
<div class="row">
                    <div class="col-sm-12">
                 
                        <div class="page-title-box">
                            <div class="row align-items-center">
                            
                                <div class="col-md-8 p-4">
                              
                                    <h4 class="page-title m-0">Mora Logistics    Policy</h4>
                                 
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
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
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row col-12">
                               
                    <div class="col-xl-4">
                    @if(Session::has('successMsg'))
                                <div class="alert alert-success">{{Session::get('successMsg')}}</div>
                    @endif
                        <div class="card m-b-30">
                       
                            <h5 class="card-header mt-0">As Mora Logistics we hava this Ploicy :</h5>
                            <div class="card-body">
                                @foreach($policy as $policy)
                                <p class="card-text">{{$policy->text}}</p>
                                
                                <a href="{{route('policy.edit',$policy->id)}}" class="btn btn-primary">Edit Policy</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->






            
            </div>
</div>

@endsection