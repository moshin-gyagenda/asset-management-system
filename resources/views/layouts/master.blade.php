<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Asset Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-... your integrity value ..." crossorigin="anonymous" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table thead th,
        .table tbody td {
            padding: 10px;
            /* text-align: center; */
        }

        .table thead th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .table th .fa,
        .table th .fa-caret-up {
        color: #fff;
        }
        /* .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        } */

        .table-bordered {
            border: 1px solid #ddd;
        }

        .table-bordered thead th,
        .table-bordered tbody td {
            border: 1px solid #ddd;
        }

          .center {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        }

        .card-icon {
        margin-bottom: 5px;
        }

        .card-icon {
            margin-top: 20px;
        }
        .card {
      border: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    </style>

<style>
    /* Add custom styles for the table */
    .card {
      border: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      margin-bottom: 20px;
      font-size: 20px;
      font-weight: bold;
    }

    .datatable {
      width: 100%;
      margin-bottom: 0;
      border: 1px solid #dee2e6;
    }




    .datatable tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }

    .datatable tbody tr:hover {
      background-color: #f2f5f8;
    }

    .datatable .btn {
      padding: 5px 10px;
    }

    .datatable .btn i {
      margin-right: 0;
    }
  </style>


@livewireStyles()
</head>

<body>


    @yield('content')
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Auto-hide success message after 5 seconds
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 5000);

            // Auto-hide error message after 5 seconds
            setTimeout(function() {
                $('#error-alert').fadeOut('slow');
            }, 5000);
        });
    </script>

<script>
    $(document).ready(function() {
    $('.submenu-toggle').click(function(e) {
        e.preventDefault(); // Prevent the default behavior of the anchor tag
        $(this).find('.submenu-chevron').toggleClass('bi-chevron-down bi-chevron-up');
        $(this).siblings('.submenu').slideToggle();
    });

    // Hide the submenus by default
    $('.submenu').hide();
});


</script>
@livewireScripts
<script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 5000); // 5000 milliseconds = 5 seconds
</script>
<script>
    Livewire.on('refresh-page', function () {
        location.reload();
    });
</script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

</body>

</html>
