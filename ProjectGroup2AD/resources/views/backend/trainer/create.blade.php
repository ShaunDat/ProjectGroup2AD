@extends('layouts.admin')

@section('title','Trainer Create')

@section('slidebar')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('trainer') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Home</a>
            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>List course</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Assign trainee</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>List Trainee</a>
        </div>
    </nav>
</div>
@endsection

@section('maincontent')

    <div class="col-sm-12 col-xl-6">
        <form action="{{ route('trainer.store') }}" method="POST">
            @csrf
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Profile</h6>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">UserID</span>
                <input type="text" class="form-control" name="UserID" placeholder="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Username</span>
                <input type="text" class="form-control" name="UserName" placeholder="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" name="Password" placeholder="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">FullName</span>
                <input type="text" class="form-control" name="FullName" placeholder="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Phone</span>
                <input type="text" class="form-control" name="Phone" placeholder="" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Address</span>
                <input type="text" class="form-control" name="Address" placeholder="" >
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="Email" placeholder="">
                <span class="input-group-text" id="basic-addon2">@email.com</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Education</span>
                <input type="number" class="form-control" name="Education" placeholder="" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Workingplace</span>
                <input type="text" class="form-control" name="WorkingPlace" placeholder="">
            </div>
        <button type="submit" class="btn btn-success rounded-pill m-2">Submit</button>
    </form>
    </div>

</div>
@endsection