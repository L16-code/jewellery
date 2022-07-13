<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Badges - NiceAdmin Bootstrap Template</title>
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
  * Template URL: https://bootstrapmade.com/nice-public/admin-bootstrap-admin-html-template/
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
            <h1>Badges</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Badges</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Default Badges</h5>

                            <span class="badge bg-primary">Primary</span>
                            <span class="badge bg-secondary">Secondary</span>
                            <span class="badge bg-success">Success</span>
                            <span class="badge bg-danger">Danger</span>
                            <span class="badge bg-warning text-dark">Warning</span>
                            <span class="badge bg-info text-dark">Info</span>
                            <span class="badge bg-light text-dark">Light</span>
                            <span class="badge bg-dark">Dark</span>
                        </div>
                    </div><!-- End Default Badges -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pill Badges</h5>
                            <span class="badge rounded-pill bg-primary">Primary</span>
                            <span class="badge rounded-pill bg-secondary">Secondary</span>
                            <span class="badge rounded-pill bg-success">Success</span>
                            <span class="badge rounded-pill bg-danger">Danger</span>
                            <span class="badge rounded-pill bg-warning text-dark">Warning</span>
                            <span class="badge rounded-pill bg-info text-dark">Info</span>
                            <span class="badge rounded-pill bg-light text-dark">Light</span>
                            <span class="badge rounded-pill bg-dark">Dark</span>
                        </div>
                    </div><!-- End Pill Badges -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Icon Badges</h5>
                            <span class="badge bg-primary"><i class="bi bi-star me-1"></i> Primary</span>
                            <span class="badge bg-secondary"><i class="bi bi-collection me-1"></i> Secondary</span>
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Success</span>
                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Danger</span>
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Warning</span>
                            <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i> Info</span>
                            <span class="badge bg-light text-dark"><i class="bi bi-star me-1"></i> Light</span>
                            <span class="badge bg-dark"><i class="bi bi-folder me-1"></i> Dark</span>
                        </div>
                    </div><!-- End Icon Badges -->

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Border Badges</h5>
                            <span class="badge border-primary border-1 text-primary">Primary</span>
                            <span class="badge border-secondary border-1 text-secondary">Secondary</span>
                            <span class="badge border-success border-1 text-success">Success</span>
                            <span class="badge border-danger border-1 text-danger">Danger</span>
                            <span class="badge border-warning border-1 text-warning">Warning</span>
                            <span class="badge border-info border-1 text-info">Info</span>
                            <span class="badge border-light border-1 text-black-50">Light</span>
                            <span class="badge border-dark border-1 text-dark">Dark</span>
                        </div>
                    </div><!-- End Border Badges -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Button Badges</h5>

                            <button type="button" class="btn btn-primary mb-2">
                                Primary <span class="badge bg-white text-primary">4</span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-2">
                                Secondary <span class="badge bg-white text-secondary">4</span>
                            </button>
                            <button type="button" class="btn btn-success mb-2">
                                Success <span class="badge bg-white text-success">4</span>
                            </button>
                            <button type="button" class="btn btn-danger mb-2">
                                Danger <span class="badge bg-white text-danger">4</span>
                            </button>
                            <button type="button" class="btn btn-warning mb-2">
                                Warning <span class="badge bg-white text-warning">4</span>
                            </button>
                            <button type="button" class="btn btn-info mb-2">
                                Info <span class="badge bg-white text-info">4</span>
                            </button>
                            <button type="button" class="btn btn-light mb-2">
                                Light <span class="badge bg-secondary text-light">4</span>
                            </button>
                            <button type="button" class="btn btn-dark mb-2">
                                Dark <span class="badge bg-white text-dark">4</span>
                            </button>
                        </div>
                    </div><!-- End Button Badges -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Heading Badges</h5>

                            <h1>Example h1 heading <span class="badge bg-primary">Primary</span></h1>
                            <h2>Example h2 heading <span class="badge bg-secondary">Secondary</span></h2>
                            <h3>Example h3 heading <span class="badge bg-success">Success</span></h3>
                            <h4>Example h4 heading <span class="badge bg-danger">Danger</span></h4>
                            <h5>Example h5 heading <span class="badge bg-warning">Warning</span></h5>
                            <h6>Example h6 heading <span class="badge bg-info">Info</span></h6>
                        </div>
                    </div><!-- End Heading Badges -->

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