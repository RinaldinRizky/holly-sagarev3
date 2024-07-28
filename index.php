<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon_holly.png">

		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v5.5.2 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- jquery-ui.min css -->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css">
		<link rel="stylesheet" href="lib/css/preview.css">
		<!-- slick css -->
		<link rel="stylesheet" href="css/slick.min.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="css/lightbox.min.css">
		<!-- material-design-iconic-font css -->
		<link rel="stylesheet" href="css/material-design-iconic-font.css">
		<!-- All common css of theme -->
		<link rel="stylesheet" href="css/default.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.min.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
		<script src="js/vendor/modernizr-3.11.2.min.js"></script>
		<!-- Alpine Js -->
		<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
		<!-- App -->
		<script src="/js/app.js" async></script>
		<!-- Midtrans -->
		<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/v1/transactions" data-client-key="SB-Mid-client-Z8-p-m2XpB-3iXOQ"></script>
	</head>
	<body>
		<!-- WRAPPER START -->
		<div class="wrapper">
			<!-- Mobile-header-top Start -->
			<div class="mobile-header-top d-block d-md-none">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- header-search-mobile start -->
							<div class="header-search-mobile">
								<div class="table">
									<div class="table-cell">
										<ul>
											<li><a href="register.php"><i class="zmdi zmdi-lock"></i></a></li>
											<li><a href="welcome.php"><i class="zmdi zmdi-account"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header-top End -->
			<!-- HEADER-AREA START -->
			<header id="sticky-menu" class="header" x-data>
				<div class="header-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 offset-md-4 col-7">
								<div class="logo text-md-center">
									<a href="index.html"><img src=" img/logo/logoholly.png " alt="" /></a>
								</div>
							</div>
							<div class="col-md-4 col-5">
								<div class="mini-cart text-end">
									<ul>
										<li>
											<a class="cart-icon" href="#">
												<i class="zmdi zmdi-shopping-cart"></i>
												<span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
											</a>
											<div class="mini-cart-brief text-left">
												<div class="cart-items">
													<p class="mb-0">You have <span x-text="$store.cart.quantity"></span> in your shopping bag</p>
												</div>
												<div class="all-cart-product clearfix">
													<template x-for="item in $store.cart.items" :key="item.id">
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<img :src="`img/product/${item.img}`" :alt="item.name" />
														</div>
														<div class="cart-info">
															<h5 x-text="item.name"></h5>
															<p class="mb-0">Price : <span x-text="rupiah(item.price)"></span></p>
															<p class="mb-0">Qty : 01 </p>
															<span class="cart-delete"><i @click="$store.cart.remove(item)" class="zmdi zmdi-close"></i></span>
														</div>
													</div>
													</template>
												</div>
												<div class="cart-totals">
													<h5 class="mb-0">Total <span class="floatright" x-text="rupiah($store.cart.total)"></span></h5>
												</div>
												<div class="form-container" x-show="$store.cart.items.length">
													<form action="" id="checkoutForm">
														<input type= "hidden" name="items" x-model="JSON.stringify($store.cart.items)">
														<input type= "hidden" name="total" x-model="$store.cart.total">
														<h5>Customer Detail</h5>
														<label for="name">
															<span>Name</span>
															<input type="text" name="name" id="name"> 
														</label>
														<label for="email">
															<span>Email</span>
															<input type="email" name="email" id="email"> 
														</label>
														<div class="cart-bottom  clearfix">
															<button href="#" class="button-one floatright text-uppercase disabled" data-text="Check out">Check out</button>
														</div>
													</form>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<!-- MAIN-MENU START -->
				<div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<div class="main-menu  d-none d-md-block">
					<nav>
						<ul>
							<li><a href="index.html">home</a></li>
							<li><a href="about.html">about us</a></li>
							<li><a href="contact.html">contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- MAIN-MENU END -->
			</header>
			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 d-block d-md-none">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.php">home</a></li>
										<li><a href="about.html">about us</a></li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->
			<!-- SLIDER-BANNER-AREA START -->
			<section class="slider-banner-area clearfix">
				<!-- Sidebar-social-media start -->
				<div class="sidebar-social d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
								<li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
								<li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
				<div class="banner-left floatleft">
					<!-- Slider-banner start -->
					<div class="slider-banner">
						<div class="single-banner banner-1">
							<a class="banner-thumb" href="#"><img src="img/banner/sacrifice.png" alt="" /></a>
							<span class="text-white pro-label new-label">new</span>
							<span class="price">Rp.600.000.00</span>
							<div class="banner-brief">
								<h2 class="banner-title">Sacrifice</h2>
								<p class="mb-0">Design T-Shirt</p>
							</div>
						</div>
						<div class="single-banner banner-2">
							<a class="banner-thumb" href="#"><img src="img/banner/grunge.png" alt="" /></a>
							<div class="banner-brief">
								<h2 class="banner-title">Women Grunge </h2>
								<p class="hidden-md hidden-sm d-none d-md-block">This is the new gallery 2024 for Design T-Shirt Trends</p>
							</div>
						</div>
					</div>
					<!-- Slider-banner end -->
				</div>
				<div class="sidebar-account d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a href="register.php" title="Login"><i class="zmdi zmdi-lock"></i></a>
							</li>
								<li><a href="welcome.php" title="My-Account"><i class="zmdi zmdi-account"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="slider-right floatleft">
					<!-- Slider-area start -->
					<div class="slider-area">
						<div class="bend niceties preview-2">
							<div id="ensign-nivoslider" class="slides">
								<img src="img/slider/slider-1/summer-slider.png" alt="" title="#slider-direction-1"  />
								<img src="img/slider/slider-1/aura.png" alt="" title="#slider-direction-2"  />
								<img src="img/slider/slider-1/wild-bunch.png" alt="" title="#slider-direction-3"  />
							</div>
							<!-- direction 1 -->
							<div id="slider-direction-1" class="t-cn slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0" >we present</h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
												<h2 class="	slider-title1 text-uppercase mb-0">summer adventure</h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
												<h3 class="slider-title2 text-uppercase" >t-shirt design</h3>
											</div>
											<div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- direction 2 -->
							<div id="slider-direction-2" class="slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0" >we present</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
												<h2 class="slider-title1 text-uppercase">aura glow</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
												<h3 class="slider-title2 text-uppercase" >T-Shirt Design</h3>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- direction 3 -->
							<div id="slider-direction-3" class="slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0" >we present</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
												<h2 class="slider-title1 text-uppercase mb-0">wild bunch</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
												<h3 class="slider-title2 text-uppercase" >T-Shirt Design</h3>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider-area end -->
				</div>
			</section>
			<!-- End Slider-section -->
			<!-- Logo START -->
			<div class="brand-logo-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="brand">
								<div class="brand-slider">
									<div class="single-brand">
										<a href="#" target="_blank"><img src="img/brand/ps.png" alt="" /></a>
									</div>
									<div class="single-brand">
										<a href="#" target="_blank"><img src="img/brand/ai.png" alt="" /></a>
									</div>
									<div class="single-brand">
										<a href="#" target="_blank"><img src="img/brand/4K.png" alt="" /></a>
									</div>
									<div class="single-brand">
										<a href="#" target="_blank"><img src="img/brand/HD.png" alt="" /></a>
									</div>
									<!-- <div class="single-brand">
										<a href="https://psdrightsell.com/" target="_blank"><img src="img/brand/5.png" alt="" /></a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Logo END -->
			<!-- DISCOUNT-PRODUCT START -->
			<div class="discount-product-area">
				<div class="container">
					<div class="row">
						<div class="discount-product-slider dots-bottom-right">
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="img/discount/disc.png" alt="" />
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">Rp.150.000</span>
										</div>
										<div class="discount-info">
											<h1 class="d-none d-md-block">Discount 60%</h1>
											<p class="d-none d-md-block">Masuki era baru dengan t-shirt "Future Vision" yang dirancang untuk pecinta gaya modern dan futuristik, menampilkan motif abstrak dan elemen digital terinspirasi teknologi terkini dan dunia virtual.</p>
											
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="img/discount/disc2.png" alt="" />
									<div class="discount-img-brief">
										<!-- <div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div> -->
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Make your own design</h1>
											<p class="d-none d-md-block">kami mendorong kreativitas dan kebebasan berekspresi dalam mendesain kaos yang mencerminkan gaya dan kepribadian Anda. Entah itu untuk acara khusus, hadiah, atau sekadar menambah koleksi pakaian, desain kaos Anda akan menjadi karya orisinal yang membedakan Anda dari yang lain. Jadilah desainer untuk diri Anda sendiri dan buatlah kaos yang benar-benar Anda miliki!</p>
									
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="img/discount/disc-3.png" alt="" />
									<div class="discount-img-brief">
										<!-- <div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div> -->
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">4K Quality</h1>
											<p class="d-none d-md-block">menjamin hasil cetak desain kaos dengan kualitas yang luar biasa tinggi, setara dengan resolusi 4K. Dengan teknologi canggih dan perhatian pada detail, kami memastikan setiap garis, warna, dan elemen desain tampil tajam dan jelas. Anda akan mendapatkan kaos dengan gambar yang hidup dan nyata, seakan-akan desain tersebut melompat keluar dari kain. Nikmati pengalaman memakai kaos yang tidak hanya nyaman tetapi juga memukau dengan kejelasan gambar yang sempurna.</p>
											
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
						</div>
					</div>
				</div>
			</div>
			<!-- DISCOUNT-PRODUCT END -->
			<!-- PURCHASE-ONLINE-AREA START -->
			<div class="purchase-online-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">Purchase Online on <span>Holly Saga</span></h2>
							</div>
						</div>
					</div>
					<div class="row" x-data="products">
						<div class="col-lg-12 text-center">
							<!-- Nav tabs -->
							<ul class="tab-menu nav clearfix">
								<li><a class="active" href="#new-arrivals" data-bs-toggle="tab">Catalog</a></li>
								<!-- <li><a href="#best-seller"  data-bs-toggle="tab">Best Seller </a></li>
								<li><a href="#most-view" data-bs-toggle="tab">Most View </a></li>
								<li><a href="#discounts" data-bs-toggle="tab">Discounts</a></li> -->
							</ul>
						</div>
						<div class="col-lg-12">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="new-arrivals">
									<div class="row">
										<template x-for="(item, index) in items" x-key="index">
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<!-- <span class="pro-label new-label">new</span> -->
												<a @click="goToProductPage(item.id)"><img :src="`img/product/${item.img}`" :alt="item.name" /></a>
												<div class="product-action clearfix">
													<a @click.prevent="checkLoginAndAddToCart(item)" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 x-text="item.name" class="post-title floatleft"></h4>
													<p class="floatright hidden-sm">T-Shirt Design</p>
												</div>
												<div class="fix">
													<span x-text="rupiah(item.price)" class="pro-price floatleft"></span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
											</template>
										</div>
										<!-- Single-product end -->
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PURCHASE-ONLINE-AREA END -->
			<!-- FOOTER START -->
			<footer>
				<!-- Footer-area start -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">Contact Us</h3>
									<ul class="footer-contact">
										<li><span>Address :</span>Permata Depok Sektor Nilam 3 Blok F13<br>Depok, Indonesia</li>
										<li><span>Cell-Phone :</span>085161181837</li>
										<li><span>Email :</span>hollysaga@gmail.com</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">holly best products</h3>
									<div class="footer-product">
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="img/footer/y2k_2.png" alt="" /></a>
													<div class="footer-thumb-info">
														<p><a href="#">Confused Y2K<br>T-Shirt Design</a></p>
														<h4 class="price-3">Rp 700.000</h4>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="img/footer/hollystore_2.png" alt="" /></a>
													<div class="footer-thumb-info">
														<p><a href="#">Holly Store<br>T-Shirt Design</a></p>
														<h4 class="price-3">Rp 600.000</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer-area end -->
				<!-- Copyright-area start -->
				<div class="copyright-area">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="copyright">
									<p class="mb-0">&copy; <a href=" https://themeforest.net/user/codecarnival/portfolio " target="_blank"> Holly Saga  </a> 2024. All Rights Reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="payment  text-md-end">
									<a href="#"><img src="img/payment/1.png" alt="" /></a>
									<a href="#"><img src="img/payment/2.png" alt="" /></a>
									<a href="#"><img src="img/payment/3.png" alt="" /></a>
									<a href="#"><img src="img/payment/4.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Copyright-area start -->
			</footer>
			<!-- FOOTER END -->
		</div>
		<!-- WRAPPER END -->

		<!-- all javascript -->
		<!-- jquery latest version -->
		<script src="js/vendor/jquery-3.6.0.min.js"></script>
		<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- jquery.meanmenu js -->
		<script src="js/jquery.meanmenu.js"></script>
		<!-- slick.min js -->
		<script src="js/slick.min.js"></script>
		<!-- jquery.treeview js -->
		<script src="js/jquery.treeview.js"></script>
		<!-- lightbox.min js -->
		<script src="js/lightbox.min.js"></script>
		<!-- jquery-ui js -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- jquery.nivo.slider js -->
		<script src="lib/js/jquery.nivo.slider.js"></script>
		<script src="lib/home.js"></script>
		<!-- jquery.nicescroll.min js -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- countdon.min js -->
		<script src="js/countdon.min.js"></script>
		<!-- wow js -->
		<script src="js/wow.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.min.js"></script>
	</body>
</html>
