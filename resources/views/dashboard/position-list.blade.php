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
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Position List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('create-position')}}" class="btn btn-sm btn-primary float-end" style="margin-top: 40px;"><i class="fa fa-plus"></i> Add Position</a>
                            <a href="#" class="btn btn-sm btn-warning float-left" style="margin-top: 40px; margin-left: 10px; color:#fff;"><i class="fa fa-file-pdf"></i> PDF</a>
                            <a href="#" class="btn btn-sm btn-primary float-left" style="margin-top: 40px; margin-left: 10px;"><i class="fa fa-file-excel"></i> Excel</a>
                            <h5 class="card-title" style="color: #fff;">Position List</h5>

                            <table class="table table-bordered datatable custom-table">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Position Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($positions as $position)
                                    <tr>
                                        <td>{{ $position->id }}</td>
                                        <td>{{ $position->position_name }}</td>
                                        <td>{{ $position->description }}</td>
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
            &copy; 2023 Copyright <strong><span>Asset Management</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
