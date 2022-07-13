<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Progress - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('public/admin/assets/img/favicon.png');?>" rel="icon">
    <link href="<?php echo base_url('public/admin/assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/vendor/quill/quill.snow.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/vendor/quill/quill.bubble.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/vendor/remixicon/remixicon.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/vendor/simple-datatables/style.css');?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('public/admin/assets/css/style.css');?>" rel="stylesheet">

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
            <h1>Progress</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Progress</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Default</h5>

                            <!-- Default Progress Bars-->
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- End Default Progress Bars-->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Labels</h5>

                            <!-- Progress Bars with labels-->
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div><!-- End Progress Bars with labels -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Backgrounds</h5>

                            <!-- Progress Bars with Backgrounds-->
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- End Progress Bars with Backgrounds -->

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Height</h5>
                            <p>We only set a height value on the .progress, so if you change that value the inner .progress-bar will automatically resize accordingl</p>

                            <!-- Progress Bars with heights-->
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3" style="height: 15px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3" style="height: 25px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- End Progress Bars with heights -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Striped Backgrounds</h5>

                            <!-- Progress Bars with Striped Backgrounds-->
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- End Progress Bars with Striped Backgrounds -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Striped Animated Backgrounds</h5>

                            <!-- Progress Bars with Striped Backgrounds-->
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- End Progress Bars with Striped Animated Backgrounds -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('public/admin/assets/vendor/apexcharts/apexcharts.min.js');?>"></script>
    <script src="<?php echo base_url('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('public/admin/assets/vendor/chart.js/chart.min.js');?>"></script>
    <script src="<?php echo base_url('public/admin/assets/vendor/echarts/echarts.min.js');?>"></script>
    <script src="<?php echo base_url('public/admin/assets/vendor/quill/quill.min.js');?>"></script>
    <script src="<?php echo base_url('public/admin/assets/vendor/simple-datatables/simple-datatables.js');?>"></script>
    <script src="<?php echo base_url('public/admin/assets/vendor/tinymce/tinymce.min.js');?>"></script>
    <script src="<?php echo base_url('public/admin/assets/vendor/php-email-form/validate.js');?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('public/admin/assets/js/main.js');?>"></script>

</body>

</html>