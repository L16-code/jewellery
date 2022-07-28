<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data</title>
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
            <h1>Category Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin">Home</a></li>
                    <li class="breadcrumb-item">Category</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="overflow-x: auto;">
                        <div class="table table-responsive">
                            <table class="table table-striped w-100">
                                <thead>
                                    <tr>
                                        <th class="text-left">id</th>
                                        <th class="text-left">Sub Category</th>
                                        <th class="text-left">Main Category</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($name as $key => $value) : ?>
                                        <tr>
                                            <td><?php echo ($value['id']); ?></td>
                                            <td><?php echo ($value['subcategory_name']); ?></td>
                                            <td>
                                                <?php foreach ($maincategory as $key => $val) : ?>
                                                    <?php 
                                                        if ($val['id'] == $value['category_id']){
                                                            echo ($val['category_name']);
                                                        }
                                                    ?>
                                                <?php endforeach; ?>
                                            </td>
                                            <td><a href="<?php echo base_url('edit/' . $value['id']); ?>">Edit</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php echo $this->include('admin/template/footer'); ?>
    <!-- End Footer -->

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