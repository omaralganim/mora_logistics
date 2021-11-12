@extends('dashboard.layouts.master')

<!-- Page Content -->

@section('content')

<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                        @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                            @endif
                            <div class="row align-items-center">
                            
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Update About Us : </h4>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                       <form action="{{route('aboutus.update',$aboutus->id)}}" method="post">
                       @method('PUT')    
                       @csrf        
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Abou us Text</label>
                                    <div class="col-sm-10">
                                    <textarea  name="text" class="form-control" rows="6">
                                           {{$aboutus->text}}    
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">City</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{$aboutus->city}}" type="text" placeholder="City" name="city">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Adress</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{$aboutus->adress}}" type="text" placeholder="Adress" name="adress">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{$aboutus->email}}" type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{$aboutus->phone}}" type="text" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Workdays</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{$aboutus->workdays}}" type="text" placeholder="Workdays" name="workdays">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Worktimes</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{$aboutus->worktimes}}" type="text" placeholder="Worktimes" name="worktimes">
                                    </div>
                                </div>
                                 
                                <div class="form-group">
                                        <div>
                                           
                                            <button type="submit" class="btn btn-primary waves-effect m-l-5">
                                                Update
</button>
                                        </div>
                                    </div>
                                </form>
                       </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->

</div>
@endsection