<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shop</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/user/assets/img/favicon.png');?>">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/all.min.css');?>">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/bootstrap/css/bootstrap.min.css');?>">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/owl.carousel.css');?>">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/magnific-popup.css');?>">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/animate.css');?>">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/meanmenu.min.css');?>">
	<!-- main style -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/main.css');?>">
	<!-- responsive -->
	<link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/responsive.css');?>">
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php echo $this->include('user/template/header'); ?>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
            <?php foreach ($name as $key => $value) : ?>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="<?= base_url('single-product/'.$value['id']); ?>"><img src="public/uploads/<?php echo ($value['product_img']); ?>" alt=""></a>
						</div>
						<h3><?php echo($value['product_name']); ?></h3>
						<p class="product-price"><span>Per piece </span> &#x20B9 <?php echo ($value['product_price']); ?> </p>
						<a href="<?php echo base_url('buy/' . $value['id']); ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
                <?php endforeach; ?>
				<!-- <div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="public/user/assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="public/user/assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="public/user/assets/img/products/product-img-4.jpg" alt=""></a>
						</div>
						<h3>Avocado</h3>
						<p class="product-price"><span>Per Kg</span> 50$ </p>
						<a href="cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="public/user/assets/img/products/product-img-5.jpg" alt=""></a>
						</div>
						<h3>Green Apple</h3>
						<p class="product-price"><span>Per Kg</span> 45$ </p>
						<a href="cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product"><img src="public/user/assets/img/products/product-img-6.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 80$ </p>
						<a href="cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div> -->
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="public/user/assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="public/user/assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="public/user/assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="public/user/assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="public/user/assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<?php echo $this->include('user/template/footer'); ?>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="<?php echo base_url('public/user/assets/js/jquery-1.11.3.min.js');?>"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url('public/user/assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<!-- count down -->
	<script src="<?php echo base_url('public/user/assets/js/jquery.countdown.js');?>"></script>
	<!-- isotope -->
	<script src="<?php echo base_url('public/user/assets/js/jquery.isotope-3.0.6.min.js');?>"></script>
	<!-- waypoints -->
	<script src="<?php echo base_url('public/user/assets/js/waypoints.js');?>"></script>
	<!-- owl carousel -->
	<script src="<?php echo base_url('public/user/assets/js/owl.carousel.min.js');?>"></script>
	<!-- magnific popup -->
	<script src="<?php echo base_url('public/user/assets/js/jquery.magnific-popup.min.js');?>"></script>
	<!-- mean menu -->
	<script src="<?php echo base_url('public/user/assets/js/jquery.meanmenu.min.js');?>"></script>
	<!-- sticker js -->
	<script src="<?php echo base_url('public/user/assets/js/sticker.js');?>"></script>
	<!-- main js -->
	<script src="<?php echo base_url('public/user/assets/js/main.js');?>"></script>

</body>
</html>