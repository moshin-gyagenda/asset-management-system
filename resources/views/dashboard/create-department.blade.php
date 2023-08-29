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
            {{-- <h1>Department Management</h1> --}}
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Department</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @if (session('success'))
            <div id="success-alert" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div id="error-alert" class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('department-list')}}" class="btn btn-sm btn-primary float-end" style="margin-top: 20px;"><i class="fa fa-eye"></i> View Departments</a>

                            <h5 class="card-title">Department Registration</h5>

                            <!-- Department Registration Form -->
                            <form class="row g-3" action="{{ route('store-department') }}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <label for="department_name" class="form-label">Department name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="department_name" name="department_name"
                                        placeholder="Enter department name" required value="{{ old('department_name') }}">
                                </div>


                                <div class="col-md-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea rows="5" class="form-control" id="description" name="description"
                                        placeholder="Enter department description" required>{{ old('description') }}</textarea>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Create Department</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>



                            <!-- End Department Registration Form -->



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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
