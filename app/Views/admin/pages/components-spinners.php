<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Spinners - NiceAdmin Bootstrap Template</title>
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
            <h1>Spinners</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Spinners</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Border spinner</h5>
                            <p>Use the border spinners for a lightweight loading indicator.</p>

                            <!-- Border spinner -->
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div><!-- End Border spinner -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Colors</h5>

                            <!-- Color spinners -->
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-secondary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-danger" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-warning" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-info" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-light" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-dark" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div><!-- End Color spinners -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Alignment</h5>
                            <p>Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.</p>

                            <!-- Center aligned spinner -->
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div><!-- End Center aligned spinner -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Buttons</h5>
                            <p>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>

                            <!-- Button spinners -->
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span class="visually-hidden">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>

                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                <span class="visually-hidden">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                            <!-- End Button spinners -->

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Growing spinner</h5>
                            <p>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>

                            <!-- Growing spinner -->
                            <div class="spinner-grow" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div><!-- End Growing spinner -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Growing Color spinners</h5>

                            <!-- Growing Color spinnersr -->
                            <div class="spinner-grow text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-secondary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-danger" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-warning" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-info" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-light" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-dark" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div><!-- End Growing Color spinners -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sizes</h5>
                            <p>Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components. Or, use custom CSS or inline styles to change the dimensions as needed.</p>

                            <!-- Sized spinners -->
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <div class="spinner-border" style="width: 30px; height: 30px;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <div class="spinner-border" style="width: 40px; height: 40px;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <div class="spinner-border" style="width: 50px; height: 50px;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <div class="spinner-grow" style="width: 30px; height: 30px;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <div class="spinner-grow" style="width: 40px; height: 40px;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <div class="spinner-grow" style="width: 50px; height: 50px;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <!-- End Sized spinners -->

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