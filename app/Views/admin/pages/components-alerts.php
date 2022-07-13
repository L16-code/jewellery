<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Alerts - NiceAdmin Bootstrap Template</title>
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
            <h1>Alerts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Alerts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Default</h5>

                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                A simple primary alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                A simple secondary alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                A simple success alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                A simple danger alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                A simple warning alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                A simple info alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
                                A simple light alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                A simple dark alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With Icon</h5>

                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="bi bi-star me-1"></i>
                                A simple primary alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <i class="bi bi-collection me-1"></i>
                                A simple secondary alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                A simple success alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-octagon me-1"></i>
                                A simple danger alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle me-1"></i>
                                A simple warning alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="bi bi-info-circle me-1"></i>
                                A simple info alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <i class="bi bi-folder me-1"></i>
                                A simple dark alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Outlined</h5>

                            <div class="alert border-primary alert-dismissible fade show" role="alert">
                                A simple primary outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert border-secondary alert-dismissible fade show" role="alert">
                                A simple secondary outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert border-success alert-dismissible fade show" role="alert">
                                A simple success outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert border-danger alert-dismissible fade show" role="alert">
                                A simple danger outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert border-warning alert-dismissible fade show" role="alert">
                                A simple warning outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert border-info alert-dismissible fade show" role="alert">
                                A simple info outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert border-light alert-dismissible fade show" role="alert">
                                A simple light outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert border-dark alert-dismissible fade show" role="alert">
                                A simple dark outlined alert—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Default Solid Color</h5>

                            <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                                A simple primary alert with solid color—check it out!
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-secondary bg-secondary text-light border-0 alert-dismissible fade show" role="alert">
                                A simple secondary alert with solid color—check it out!
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                                A simple success alert with solid color—check it out!
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                                A simple danger alert with solid color—check it out!
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                                A simple warning alert with solid color—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-info bg-info border-0 alert-dismissible fade show" role="alert">
                                A simple info alert with solid color—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-light bg-light border-0 alert-dismissible fade show" role="alert">
                                A simple light alert with solid color—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-dark bg-dark text-light border-0 alert-dismissible fade show" role="alert">
                                A simple dark alert with solid color—check it out!
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With Heading &amp Separator</h5>

                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Primary Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Secondary Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Success Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Danger Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Warning Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-info  alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Info Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Lignt Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-dark  alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading">Dark Heading</h4>
                                <p>Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                                <hr>
                                <p class="mb-0">Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

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