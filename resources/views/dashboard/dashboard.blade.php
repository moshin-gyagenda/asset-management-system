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
      <h3>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @hasrole('Admin')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
              <div class="row">
                <!-- Assets Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card assets-card">
                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">All Assets</a></li>
                        <li><a class="dropdown-item" href="#">Office Equipment</a></li>
                        <li><a class="dropdown-item" href="#">IT Devices</a></li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Assets</h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-archive"></i>
                        </div>
                        <div class="ps-3">
                          <h6>524</h6>
                          <span class="text-success small pt-1 fw-bold">10%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Assets Card -->

                <!-- Maintenance Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card maintenance-card">
                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Maintenance</h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-wrench"></i>
                        </div>
                        <div class="ps-3">
                          <h6>42</h6>
                          <span class="text-danger small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Maintenance Card -->

                <!-- Categories Card -->
                <div class="col-xxl-4 col-xl-6">
                  <div class="card info-card categories-card">
                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">All Categories</a></li>
                        <li><a class="dropdown-item" href="#">Office Equipment</a></li>
                        <li><a class="dropdown-item" href="#">IT Devices</a></li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Categories</h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-tags"></i>
                        </div>
                        <div class="ps-3">
                          <h6>15</h6>
                          <span class="text-success small pt-1 fw-bold">+3</span> <span class="text-muted small pt-2 ps-1">new</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Categories Card -->

                <!-- Employees Card -->
                <div class="col-xxl-4 col-xl-6">
                    <div class="card info-card employees-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">All Employees</a></li>
                        <li><a class="dropdown-item" href="#">Managers</a></li>
                        <li><a class="dropdown-item" href="#">Staff</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Employees</h5>
                        <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>50</h6>
                            <span class="text-success small pt-1 fw-bold">+5</span> <span class="text-muted small pt-2 ps-1">new</span>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Employees Card -->


                <!-- Top Maintenance -->
                <div class="col-12">
                  <div class="card top-maintenance overflow-auto">
                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                      </ul>
                    </div>
                    <!-- Top Maintenance content goes here -->
                  </div>
                </div>
                <!-- End Top Maintenance -->
              </div>
            </div>
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">
              <!-- Recent Activity -->
              <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem exercitationem
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div>
              <!-- End Recent Activity -->
            </div>
            <!-- End Right side columns -->
          </div>
        </div>
      </div>
      <!-- End Asset Management System -->
      <div class="row">
        <!-- Asset Management -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Asset Management <span>/Today</span></h5>

              <!-- Asset Chart -->
              <div id="assetChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#assetChart"), {
                    series: [{
                      name: 'Assets',
                      data: [15, 20, 18, 25, 22, 28, 20],
                    }, {
                      name: 'Maintenance',
                      data: [5, 12, 8, 15, 10, 16, 12]
                    }, {
                      name: 'Damages',
                      data: [3, 8, 5, 7, 6, 10, 8]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Asset Chart -->

            </div>

          </div>
        </div><!-- End Asset Management -->
      </div>

    </section>
    @endhasrole

    @hasrole('Employee')
    <section class="section dashboard">
        <div class="row">
          <!-- Assigned to You Card -->
          <div class="col-md-4">
            <div class="card info-card assigned-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Pending</a></li>
                  <li><a class="dropdown-item" href="#">In Progress</a></li>
                  <li><a class="dropdown-item" href="#">Completed</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Assigned to You</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journal-check"></i>
                  </div>
                  <div class="ps-3">
                    <h6>8</h6>
                    <span class="text-primary small pt-1 fw-bold">Tasks</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Assigned to You Card -->

          <!-- Maintenance Card -->
          <div class="col-md-4">
            <div class="card info-card maintenance-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Week</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Maintenance</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-wrench"></i>
                  </div>
                  <div class="ps-3">
                    <h6>42</h6>
                    <span class="text-danger small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Maintenance Card -->

          <!-- Assigned Asset Card -->
          <div class="col-md-4">
            <div class="card info-card assigned-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Pending</a></li>
                  <li><a class="dropdown-item" href="#">In Progress</a></li>
                  <li><a class="dropdown-item" href="#">Completed</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Assigned Asset</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-briefcase"></i>
                  </div>
                  <div class="ps-3">
                    <h6>3</h6>
                    <span class="text-primary small pt-1 fw-bold">Assets</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Assigned Asset Card -->

          <!-- Categories Card -->
          <div class="col-md-4">
            <div class="card info-card categories-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Filter 1</a></li>
                  <li><a class="dropdown-item" href="#">Filter 2</a></li>
                  <li><a class="dropdown-item" href="#">Filter 3</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Categories</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-folder"></i>
                  </div>
                  <div class="ps-3">
                    <h6>10</h6>
                    <span class="text-primary small pt-1 fw-bold">Categories</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Categories Card -->

          <!-- Team Members Card -->
          <div class="col-md-4">
            <div class="card info-card team-members-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Active</a></li>
                  <li><a class="dropdown-item" href="#">Inactive</a></li>
                  <li><a class="dropdown-item" href="#">All</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Team Members</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>6</h6>
                    <span class="text-primary small pt-1 fw-bold">Members</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Team Members Card -->

          <!-- Top Maintenance Activities Card -->
          <div class="col-md-4">
            <div class="card info-card top-maintenance-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">This Week</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Top Maintenance Activities</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-bar-chart-line"></i>
                  </div>
                  <div class="ps-3">
                    <h6>5</h6>
                    <span class="text-primary small pt-1 fw-bold">Activities</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Top Maintenance Activities Card -->


        </div>
      </section>



    @endhasrole

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; 2023 Copyright <strong><span>Asset Management</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection
