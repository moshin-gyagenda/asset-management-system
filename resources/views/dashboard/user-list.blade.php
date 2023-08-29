@extends('layouts.master')

@section('content')
    <!-- ======= Topbar Header ======= -->
    @include('layouts.topbar')
    <!-- End of Topbar Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.sidebar')
    <!-- End Sidebar-->
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb" >
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">User List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('create-user')}}" class="btn btn-sm btn-primary float-end" style="margin-top: 40px;"><i class="fa fa-plus"></i> Add User</a>
                            <a href="#" class="btn btn-sm btn-warning float-left" style="margin-top: 40px; margin-left: 10px; color:#fff;"><i class="fa fa-file-pdf"></i> PDF</a>
                            <a href="#" class="btn btn-sm btn-primary float-left" style="margin-top: 40px; margin-left: 10px;"><i class="fa fa-file-excel"></i> Excel</a>
                            <h5 class="card-title" style="color: #fff;">User List</h5>

                            <table class="table table-bordered datatable custom-table">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->department->department_name }}</td>
                                        <td>{{ $user->position->position_name }}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye" style="color: white;"></i></a>
                                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; 2023 Copyright <strong><span>Asset Management</span></strong>.
            All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
@endsection
