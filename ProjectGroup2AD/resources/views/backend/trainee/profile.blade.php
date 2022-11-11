@extends('layouts.admin')

@section('title','Trainee')

@section('slidebar')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Home</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                {{-- <h6 class="mb-0">Jhon Doe</h6> --}}
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Home</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Update Profile </a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>View course</a>
        </div>
    </nav>
</div>
@endsection

@section('maincontent')
<form action="">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Profile</h6>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Username</span>
                <input type="text" class="form-control" placeholder="" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" placeholder="" aria-label="password"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">FullName</span>
                <input type="text" class="form-control" placeholder="" aria-label="fullname"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Phone</span>
                <input type="text" class="form-control" placeholder="" aria-label="phone"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Address</span>
                <input type="text" class="form-control" placeholder="" aria-label="address"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@email.com</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Education</span>
                <input type="number" class="form-control" placeholder="" aria-label="education"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Workingplace</span>
                <input type="text" class="form-control" placeholder="" aria-label="ưorkingplace"
                    aria-describedby="basic-addon1">
            </div>
        <button type="submit" class="btn btn-success rounded-pill m-2">Submit</button>
    </div>

    </div>
        </form>
@endsection
    