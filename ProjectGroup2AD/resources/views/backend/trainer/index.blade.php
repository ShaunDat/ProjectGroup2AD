@extends('layouts.admin')

@section('title','Trainer')

@section('slidebar')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
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
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <a href="{{ route('trainer.create') }}" class="btn btn-outline-success m-2">Create</a>
        @if (Session::has('Note'))
        <div class="alert alert-success">
            {{ Session::get('Note') }}
        </div>
            
        @endif
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">#</th>
                        <th scope="col">UserID</th>
                        <th scope="col">UserName</th>
                        <th scope="col">FullName</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Education</th>
                        <th scope="col">WorkingPlace</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainer as $tn)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$tn->  UserID}}</td>
                        <td>{{$tn->  UserName}}</td>
                        <td>{{$tn->  FullName}}</td>
                        <td>{{$tn->  Phone}}</td>
                        <td>{{$tn->  Address}}</td>
                        <td>{{$tn->  Email}}</td>
                        <td>{{$tn->  Education}}</td>
                        <td>{{$tn->  WorkingPlace}}</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
    