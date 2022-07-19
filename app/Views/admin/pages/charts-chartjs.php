<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Charts / Chart.js - NiceAdmin Bootstrap Template</title>
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
<?php
        include 'check_session.php';
        class check1 extends check
        {
            //....
        }
        $obj = new check1;
        $obj->check_login();
        ?>

    <!-- ======= Header ======= -->
    <?php echo $this->include('admin/template/header'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php echo $this->include('admin/template/sidebar'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Chart.js</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Charts</li>
                    <li class="breadcrumb-item active">Chart.js</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <p>Chart.JS Examples. You can check the <a href="https://www.chartjs.org/docs/latest/samples/" target="_blank">official website</a> for more examples.</p>

        <section class="section">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Line Chart</h5>

                            <!-- Line Chart -->
                            <canvas id="lineChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#lineChart'), {
                                        type: 'line',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                            datasets: [{
                                                label: 'Line Chart',
                                                data: [65, 59, 80, 81, 56, 55, 40],
                                                fill: false,
                                                borderColor: 'rgb(75, 192, 192)',
                                                tension: 0.1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Line CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bar CHart</h5>

                            <!-- Bar Chart -->
                            <canvas id="barChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#barChart'), {
                                        type: 'bar',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                            datasets: [{
                                                label: 'Bar Chart',
                                                data: [65, 59, 80, 81, 56, 55, 40],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 205, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(201, 203, 207, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 159, 64)',
                                                    'rgb(255, 205, 86)',
                                                    'rgb(75, 192, 192)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(153, 102, 255)',
                                                    'rgb(201, 203, 207)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Bar CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pie Chart</h5>

                            <!-- Pie Chart -->
                            <canvas id="pieChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#pieChart'), {
                                        type: 'pie',
                                        data: {
                                            labels: [
                                                'Red',
                                                'Blue',
                                                'Yellow'
                                            ],
                                            datasets: [{
                                                label: 'My First Dataset',
                                                data: [300, 50, 100],
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(255, 205, 86)'
                                                ],
                                                hoverOffset: 4
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Pie CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Doughnut Chart</h5>

                            <!-- Doughnut Chart -->
                            <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#doughnutChart'), {
                                        type: 'doughnut',
                                        data: {
                                            labels: [
                                                'Red',
                                                'Blue',
                                                'Yellow'
                                            ],
                                            datasets: [{
                                                label: 'My First Dataset',
                                                data: [300, 50, 100],
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(255, 205, 86)'
                                                ],
                                                hoverOffset: 4
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Doughnut CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Radar Chart</h5>

                            <!-- Radar Chart -->
                            <canvas id="radarChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#radarChart'), {
                                        type: 'radar',
                                        data: {
                                            labels: [
                                                'Eating',
                                                'Drinking',
                                                'Sleeping',
                                                'Designing',
                                                'Coding',
                                                'Cycling',
                                                'Running'
                                            ],
                                            datasets: [{
                                                label: 'First Dataset',
                                                data: [65, 59, 90, 81, 56, 55, 40],
                                                fill: true,
                                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                borderColor: 'rgb(255, 99, 132)',
                                                pointBackgroundColor: 'rgb(255, 99, 132)',
                                                pointBorderColor: '#fff',
                                                pointHoverBackgroundColor: '#fff',
                                                pointHoverBorderColor: 'rgb(255, 99, 132)'
                                            }, {
                                                label: 'Second Dataset',
                                                data: [28, 48, 40, 19, 96, 27, 100],
                                                fill: true,
                                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                                borderColor: 'rgb(54, 162, 235)',
                                                pointBackgroundColor: 'rgb(54, 162, 235)',
                                                pointBorderColor: '#fff',
                                                pointHoverBackgroundColor: '#fff',
                                                pointHoverBorderColor: 'rgb(54, 162, 235)'
                                            }]
                                        },
                                        options: {
                                            elements: {
                                                line: {
                                                    borderWidth: 3
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Radar CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Polar Area Chart</h5>

                            <!-- Polar Area Chart -->
                            <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#polarAreaChart'), {
                                        type: 'polarArea',
                                        data: {
                                            labels: [
                                                'Red',
                                                'Green',
                                                'Yellow',
                                                'Grey',
                                                'Blue'
                                            ],
                                            datasets: [{
                                                label: 'My First Dataset',
                                                data: [11, 16, 7, 3, 14],
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(75, 192, 192)',
                                                    'rgb(255, 205, 86)',
                                                    'rgb(201, 203, 207)',
                                                    'rgb(54, 162, 235)'
                                                ]
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Polar Area Chart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Stacked Bar Chart</h5>

                            <!-- Stacked Bar Chart -->
                            <canvas id="stakedBarChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#stakedBarChart'), {
                                        type: 'bar',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                            datasets: [{
                                                    label: 'Dataset 1',
                                                    data: [-75, -15, 18, 48, 74],
                                                    backgroundColor: 'rgb(255, 99, 132)',
                                                },
                                                {
                                                    label: 'Dataset 2',
                                                    data: [-11, -1, 12, 62, 95],
                                                    backgroundColor: 'rgb(75, 192, 192)',
                                                },
                                                {
                                                    label: 'Dataset 3',
                                                    data: [-44, -5, 22, 35, 62],
                                                    backgroundColor: 'rgb(255, 205, 86)',
                                                },
                                            ]
                                        },
                                        options: {
                                            plugins: {
                                                title: {
                                                    display: true,
                                                    text: 'Chart.js Bar Chart - Stacked'
                                                },
                                            },
                                            responsive: true,
                                            scales: {
                                                x: {
                                                    stacked: true,
                                                },
                                                y: {
                                                    stacked: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Stacked Bar Chart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bubble Chart</h5>

                            <!-- Bubble Chart -->
                            <canvas id="bubbleChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#bubbleChart'), {
                                        type: 'bubble',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                            datasets: [{
                                                    label: 'Dataset 1',
                                                    data: [{
                                                            x: 20,
                                                            y: 30,
                                                            r: 15
                                                        },
                                                        {
                                                            x: 40,
                                                            y: 10,
                                                            r: 10
                                                        },
                                                        {
                                                            x: 15,
                                                            y: 37,
                                                            r: 12
                                                        },
                                                        {
                                                            x: 32,
                                                            y: 42,
                                                            r: 33
                                                        }
                                                    ],
                                                    borderColor: 'rgb(255, 99, 132)',
                                                    backgroundColor: 'rgba(255, 99, 132, 0.5)'
                                                },
                                                {
                                                    label: 'Dataset 2',
                                                    data: [{
                                                            x: 40,
                                                            y: 25,
                                                            r: 22
                                                        },
                                                        {
                                                            x: 24,
                                                            y: 47,
                                                            r: 11
                                                        },
                                                        {
                                                            x: 65,
                                                            y: 11,
                                                            r: 14
                                                        },
                                                        {
                                                            x: 11,
                                                            y: 55,
                                                            r: 8
                                                        }
                                                    ],
                                                    borderColor: 'rgb(75, 192, 192)',
                                                    backgroundColor: 'rgba(75, 192, 192, 0.5)'
                                                }
                                            ]
                                        },
                                        options: {
                                            responsive: true,
                                            plugins: {
                                                legend: {
                                                    position: 'top',
                                                },
                                                title: {
                                                    display: true,
                                                    text: 'Chart.js Bubble Chart'
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Bubble Chart -->

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