<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / List Group - NiceAdmin Bootstrap Template</title>
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
            <h1>List Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">List Group</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Default List Group</h5>

                            <!-- Default List group -->
                            <ul class="list-group">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul><!-- End Default List group -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Links and buttons</h5>

                            <!-- List group with Links and buttons -->
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                                    The current button
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">A second item</button>
                                <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                                <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
                            </div><!-- End List group with Links and buttons -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With Icons</h5>

                            <!-- List group With Icons -->
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-star me-1 text-success"></i> An item</li>
                                <li class="list-group-item"><i class="bi bi-collection me-1 text-primary"></i> A second item</li>
                                <li class="list-group-item"><i class="bi bi-check-circle me-1 text-danger"></i> A third item</li>
                                <li class="list-group-item"><i class="bi bi-exclamation-octagon me-1 text-warning"></i> A fourth item</li>
                            </ul><!-- End List group With Icons -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Numbered</h5>

                            <!-- List group Numbered -->
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Cras justo odio</li>
                            </ol><!-- End List group Numbered -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With badges</h5>

                            <!-- List group With badges -->
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    A list item
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    A second list item
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    A third list item
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul><!-- End List With badges -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With Contextual Classes</h5>

                            <!-- List group With Contextual classes -->
                            <ul class="list-group">
                                <li class="list-group-item">A simple default list group item</li>

                                <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                                <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                                <li class="list-group-item list-group-item-success">A simple success list group item</li>
                                <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                            </ul><!-- End List Group With Contextual classes -->

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With active and disabled items</h5>

                            <!-- List group with active and disabled items -->
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">An active item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                            </ul><!-- End ist group with active and disabled items -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Clean list group</h5>
                            <p>Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>

                            <!-- List group with active and disabled items -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                            </ul><!-- End Clean list group -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With custom content</h5>

                            <!-- List group with custom content -->
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </ol><!-- End with custom content -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Advanced Content</h5>

                            <!-- List group with Advanced Contents -->
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                    <small>And some small print.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                    <small class="text-muted">And some muted small print.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                    <small class="text-muted">And some muted small print.</small>
                                </a>
                            </div><!-- End List group Advanced Content -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">With Checkboxes and radios</h5>

                            <!-- List group With Checkboxes and radios -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    First checkbox
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Second checkbox
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Third checkbox
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Fourth checkbox
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Fifth checkbox
                                </li>
                            </ul><!-- End List Checkboxes and radios -->

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