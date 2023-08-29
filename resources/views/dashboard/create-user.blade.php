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
            {{-- <h3>User Management</h1> --}}
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" style="color: ">User Management</li>
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
                            <a href="{{ route('user-list')}}" class="btn btn-sm btn-primary float-end mb-4" style="margin-top: 20px;"><i class="fa fa-eye"></i>View UserList</a>
                            <h5 class="card-title">User Registration</h5>

                            <!-- User Registration Form -->
                            <form  action="{{ route('store-user') }}" method="POST">
                                @csrf

                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="validationDefault01" class="form-label">Full Name<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Enter full name" required value="{{ old('name') }}">
                                        @error('name')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationDefault03" class="form-label">Email<span style="color: red">*</span></label>
                                        <input type="email" class="form-control" id="validationDefault03" name="email" placeholder="Enter email" required value="{{ old('email') }}">
                                        @error('email')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationDefault06" class="form-label">Username<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="validationDefault06" name="username" placeholder="Enter username" required value="{{ old('username') }}">
                                        @error('username')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="validationDefault08" class="form-label">Position<span style="color: red">*</span></label>
                                        <select class="form-select" id="validationDefault08" name="position_id" required>
                                            <option selected disabled value="">Select position...</option>
                                            @foreach ($positions as $position)
                                            <option value="{{ $position->id }}" {{ old('position_id') == $position->id ? 'selected' : '' }}>{{ $position->position_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('position_id')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationDefault09" class="form-label">Department<span style="color: red">*</span></label>
                                        <select class="form-select" id="validationDefault09" name="department_id" required>
                                            <option selected disabled value="">Select department...</option>
                                            @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>{{ $department->department_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('department_id')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationDefault10" class="form-label">Assign Role<span style="color: red">*</span></label>
                                        <select class="form-select" id="validationDefault10" name="role" required>
                                            <option selected disabled value="">Select a role...</option>
                                            @foreach (Spatie\Permission\Models\Role::all() as $role)
                                            <option value="{{ $role->name }}" {{ old('role') == $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="validationDefault04" class="form-label">Password<span style="color: red">*</span></label>
                                        <input type="password" class="form-control" id="validationDefault04" name="password" placeholder="Enter password" required>
                                        @error('password')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationDefault05" class="form-label">Confirm Password<span style="color: red">*</span></label>
                                        <input type="password" class="form-control" id="validationDefault05" name="password_confirmation" placeholder="Confirm password" required>
                                        @error('password_confirmation')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationDefault07" class="form-label">Location/Branch<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="validationDefault07" name="location" placeholder="Enter location/branch" required value="{{ old('location') }}">
                                        @error('location')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle"></i>Create User</button>
                                        <button class="btn btn-warning" type="reset" style="color: white;"><i class="bi bi-trash"></i> Clear</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End User Registration Form -->
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
