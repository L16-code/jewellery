<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="public/admin/assets/img/favicon.png" rel="icon">
    <link href="public/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/admin/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?php echo $this->include('admin/template/header'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php echo $this->include('admin/template/sidebar'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Elements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CATEGORY </h5>

                            <!-- General Form Elements -->
                            <form action="maincategory1" method="post">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">category-name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="category" class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Add category</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add category</button>
                                    </div>
                                </div> -->

                                <!-- <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">subcategory-name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="subcategory" class="form-control">
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Add category</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add </button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php echo $this->include('admin/template/footer'); ?><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/admin/assets/vendor/chart.js/chart.min.js"></script>
    <script src="public/admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="public/admin/assets/vendor/quill/quill.min.js"></script>
    <script src="public/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="public/admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="public/admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="public/admin/assets/js/main.js"></script>

</body>

</html>