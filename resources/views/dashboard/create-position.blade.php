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
            {{-- <h3>Position Management</h1> --}}
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Position Registration</li>
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
                            <h5 class="card-title">Position Registration</h5>

                            <!-- Position Registration Form -->
                            <form class="row g-3" action="{{ route('store-position')}}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <label for="position_name" class="form-label">Position Name</label>
                                    <input type="text" class="form-control" id="position_name" name="position_name"
                                        placeholder="Enter position name" required value="{{ old('position_name') }}">
                                </div>


                                <div class="col-md-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea rows="5" class="form-control" id="description" name="description"
                                        placeholder="Enter position description" required>{{ old('description') }}</textarea>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Create Position</button>
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
