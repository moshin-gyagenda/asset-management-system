@extends('layouts.master')

@section('content')
<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="{{ asset('assets/img/epicle_logo.svg')}}" alt="" height="120px">

                  </a>
            </div><!-- End Logo -->

            <div class="progress" style="margin-bottom: 20px">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200">Progress..................................................................................</div>
              </div>

            <div class="card mb-3" id="company-details">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Step 1: Company Details</h5>
                    <p class="text-center small">Enter your company details</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="">
                    @csrf
                    <div class="col-12">
                      <label for="companyName" class="form-label">Company Name</label>
                      <input type="text" name="company_name" :value="old('company_name')" required autocomplete="company_name" class="form-control" id="companyName">
                      <div class="invalid-feedback">Please enter your company name!</div>
                      @error('company_name')
                      <div class="text-danger small">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="logo" class="form-label">Logo</label>
                      <input type="file" name="logo" accept="image/*" required class="form-control" id="logo">
                      <div class="invalid-feedback">Please upload your company logo!</div>
                      @error('logo')
                      <div class="text-danger small">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-12">
                        <label for="country" class="form-label">Country</label>
                        <select name="country" required class="form-select" id="country">
                          <option value="">Select your country</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="South Sudan">South Sudan</option>
                          <option value="Tanzania">Tanzania</option>
                        </select>
                        <div class="invalid-feedback">Please select your country!</div>
                        @error('country')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-12">
                      <label for="emailDomain" class="form-label">Email Domain</label>
                      <input type="text" name="email_domain" :value="old('email_domain')" required class="form-control" id="emailDomain">
                      <div class="invalid-feedback">Please enter your email domain!</div>
                      @error('email_domain')
                      <div class="text-danger small">{{ $message }}</div>
                      @enderror
                    </div>

                    <!-- Add more company details fields here -->

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="button" onclick="showUserRegistration()">Next</button>
                    </div>
                  </form>
                </div>
              </div>

            <div class="card mb-3" id="user-registration" style="display: none;">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Step 2: User Registration</h5>
                  <p class="text-center small">Enter your personal details to create an account</p>
                </div>

                <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="col-12">
                    <label for="name" class="form-label">Enter Name</label>
                    <input type="text" name="name" :value="old('name')" required autocomplete="name" class="form-control" id="name">
                    <div class="invalid-feedback">Please enter your name!</div>
                    @error('name')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Your Email</label>
                    <input class="form-control" id="email" type="email" name="email" :value="old('email')" required>
                    <div class="invalid-feedback">Please enter a valid Email address!</div>
                    @error('email')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password">
                    <div class="invalid-feedback">Please enter your password!</div>
                    @error('password')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input class="form-control" id="password" type="password" name="password_confirmation" required autocomplete="new-password">
                    <div class="invalid-feedback">Please enter your password!</div>
                    @error('password_confirmation')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                      <div class="invalid-feedback">You must agree before submitting.</div>
                      @error('terms')
                      <div class="text-danger small">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="credits" style="color: blue">
              &copy; 2023 Copyrights All Rights Reserved
              <a></a>
            </div>

          </div>
        </div>
      </div>
    </section>

  </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script>
    function showUserRegistration() {
      document.getElementById('company-details').style.display = 'none';
      document.getElementById('user-registration').style.display = 'block';

      // Update progress bar
      document.querySelector('.progress-bar').style.width = '100%';
      document.querySelector('.progress-bar').setAttribute('aria-valuenow', '100');
    }
  </script>
@endsection
