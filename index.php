<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>LUXYRY HOTEL</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!-- header -->
	<div class="w3_navigation" style="height: 100px; margin:0px">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list" style="display: flex;">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Trang Chủ</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">Thông Tin</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Ban Quản Trị</a></li>
							<div class="navbar-header" style="margin-left: 90px;">
								<h1><a class="navbar-brand" href="index.php">Luxyry</span>
								<p class="logo_w3l_agile_caption">Your Dreamy Resort</p>
							</a></h1>
							<img class="imgss" style="width: 60px; height:60px; position:relative; right:70px; bottom:50%" src="./images/IconHotel.png" alt="">
							</div>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Bộ Sưu Tập</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Phòng</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Liên Hệ</a></li>
							<?php 
							if(isset($_SESSION['dangnhap']["id"])){
								$id_user = $_SESSION['dangnhap']["id"];
								$rows_user = mysqli_query($con,"SELECT * FROM tbl_dangki WHERE '".$id_user."' = id_dangki");
								$row_user = mysqli_fetch_array($rows_user);
							?>
								<div class="user" style="color:white">
									<img style="width: 20px; height: 20px; border-radius: 50%;line-height:40px; " src="images/avater.png" alt="">
									<p style="display:inline;">
										<?php echo ($_SESSION['dangnhap']["name"]) ?>
									</p>
									<a href="php_hotel/login.php?account=dangxuat"  class="logout" >Đăng xuất</a>
								</div>
							<?php
							}else{
							?>
								<div class="user menu__item"><a href="php_hotel/login.php" >Đăng nhập</a></div>
							<?php
							}
							?>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
	<form style="width:40%; margin:0 auto 16px; " method="POST" action="php_hotel/search.php">
		<label style="position:absolute; top:15%">Loại Phòng*</label>
		<select style="width:40%; margin:auto;" name="troom"  class="form-control" required>
			<option selected value="1">Phòng Đơn</option>
			<option value="2">Phòng Đôi</option>
			<option value="3">Phòng Víp</option>
			<option value="4">Phòng Thiên Nhiên</option>
		</select>
		<button type="submit" name="search" class="search-btn">Tìm kiếm</button>
	</form>
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h4>LUXYRY</h4>
									<h3>We know what you love</h3>
									<p>Welcome to our hotels</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>LUXYRY</h4>
									<h3>Stay with friends & families</h3>
									<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>LUXURY</h4>
									<h3>want luxurious vacation?</h3>
									<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<!-- //banner -->
	<!--//Header-->
	<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>LUXURY</h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<h5>We know what you love</h5>
					<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<div id="availability-agileits">
		<div class="col-md-12 book-form-left-w3layouts">
			<a href="admin/reservation.php">
				<h2>ĐẶT PHÒNG</h2>
			</a>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_banner_bottom">
				<h3><span>Trải nghiệm một kì nghỉ với những ưu đãi lớn</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">PHÒNG NGỦ</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">BAN CÔNG BIỂN</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">CAFE</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI FREE</h4>
							<span class="cbp-ig-category">LUXYRY</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- /about -->
	<div class="about-wthree" id="about">
		<div class="container">
			<div class="ab-w3l-spa">
				<h3 class="title-w3-agileits title-black-wthree">Thông tin về LUXURY</h3>
				<p class="about-para-w3ls"> Với vị trí đắc địa cạnh bở biển và không gian sang trọng LUXYRY đem đến cho bạn một trải nghiệm tuyệt vời khi đặt chân đến đây </p>
				<img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
				<div class="w3l-slider-img">
					<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
				</div>
				<div class="w3ls-info-about">
					<h4>Bạn sẽ hài lòng với những dịch vụ mà chúng tôi cung cấp</h4>
					<p>Hân hạnh được phục vụ</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
	<!--sevices-->
	<div class="advantages">
		<div class="container">
			<div class="advantages-main">
				<h3 class="title-w3-agileits">Những dịch vụ của chúng tôi</h3>
				<div class="advantage-bottom">
					<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
						<div class="advantage-block ">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>Trải nghiệm trước,Thanh toán sau!</h4>
							<p><i class="fa fa-check" aria-hidden="true"></i>Không gian sang trọng độc đáo,Đầy đủ tiện nghi</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Ban công riêng tư</p>

						</div>
					</div>
					<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
						<div class="advantage-block">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h4>Dịch vụ thường trực 24/7</h4>
							<p><i class="fa fa-check" aria-hidden="true"></i>Hỗ trợ dịch vụ phòng 24/24</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Hướng dẫn tận tình khách hàng 24/7</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//sevices-->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Ban quản lý</h3>
			<div id="horizontalTab">
				<ul class="resp-tabs-list" style="display: flex;">
					<li>
						<img src="images/anh.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/anh1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/anh2.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
				<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 team_img">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Đình Duy</h4>
							<span>Quản lý</span>
							<p>Với kinh nghiệm quản lý nhiều năm .....</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab2">
						<div class="col-md-6 team_img">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Hải Nguyên</h4>
							<span>Lễ tân</span>
							<p>Với kinh nghiệm phục vụ nhiều năm....</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 team_img">
							
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Duy Mạnh</h4>
							<span>Quản Lý</span>
							<p>Với kinh nghiệm làm phục vụ ...</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
					</div>
				</div>
			</div>
		</div>
		<!-- //team -->
		<!-- Gallery -->
		<section class="portfolio-w3ls" id="gallery">
			<h3 class="title-w3-agileits title-black-wthree">Không gian của chúng tôi</h3>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
					<div class="textbox">
						<h4>LUXYRY</h4>
						<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					</div>
				</a>
			</div>
			<div class="clearfix"> </div>
		</section>
		<!-- //gallery -->
		<!-- rooms & rates -->
		<div class="plans-section" id="rooms">
			<div class="container">
				<h3 class="title-w3-agileits title-black-wthree">Đặt phòng và đánh giá</h3>
				<div class="priceing-table-main">
					<div class="col-md-3 price-grid">
						<div class="price-block agile">
							<div class="price-gd-top">
								<img src="images/r1.jpg" alt=" " class="img-responsive" />
								<h4>Phòng Đôi</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

									</ul>
								</div>
								<div class="price-selet">
									<h4>1.800.000 <span>VND</span></h4>
									<a href="admin/reservation.php">Đặt ngay</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid ">
						<div class="price-block agile">
							<div class="price-gd-top">
								<img src="images/r2.jpg" alt=" " class="img-responsive" />
								<h4>Phòng vip</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h4>4.500.000 <span>VND</span></h4>
									<a href="admin/reservation.php">Đặt ngay</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid lost">
						<div class="price-block agile">
							<div class="price-gd-top">
								<img src="images/r3.jpg" alt=" " class="img-responsive" />
								<h4>Phòng thiên nhiên</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h4>2.500.000 <span>VND</span></h4>
									<a href="admin/reservation.php">Đặt ngay</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 price-grid wthree lost">
						<div class="price-block agile">
							<div class="price-gd-top ">
								<img src="images/r4.jpg" alt=" " class="img-responsive" />
								<h4>Phòng đơn</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h4>1.500.000 <span>VND</span></h4>
									<a href="admin/reservation.php">Đặt ngay</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--// rooms & rates -->
		<!-- visitors -->
		<div class="w3l-visitors-agile">
			<div class="container">
				<h3 class="title-w3-agileits title-black-wthree">Trải nghiệm của khách hàng</h3>
			</div>
			<div class="w3layouts_work_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="images/c1.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										Đáng để trở lại
									</h4>
									<p>Tôi rất là vui khi trải nghiệm ....</p>
									<h5>Sơn Tùng MTP</h5>
									<p>VN</p>
								</div>
								<div class="clearfix"> </div>
							</li>
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="images/c2.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										Đáng để trở lại
									</h4>
									<p>Tôi rất là vui khi trải nghiệm ....</p>
									<h5>Sơn Tùng MTP</h5>
									<p>VN</p>
								</div>
								<div class="clearfix"> </div>
							</li>
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="images/c3.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										Đáng để trở lại
									</h4>
									<p>Tôi rất là vui khi trải nghiệm ....</p>
									<h5>Sơn Tùng MTP</h5>
									<p>VN</p>
								</div>
								<div class="clearfix"> </div>
							</li>
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="images/5.jpg" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="images/c4.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										Đáng để trở lại
									</h4>
									<p>Tôi rất là vui khi trải nghiệm ....</p>
									<h5>Sơn Tùng MTP</h5>
									<p>VN</p>
								</div>
								<div class="clearfix"> </div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
		<!-- visitors -->
		<!-- contact -->
		<section class="contact-w3ls" id="contact">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
					<div class="contact-agileits">
						<h4>Liên hệ</h4>
						<p class="contact-agile2">Đăng kí để nhận thêm thông tin</p>
						<form method="post" name="sentMessage" id="contactForm">
							<div class="control-group form-group">

								<label class="contact-p1">Họ Tên:</label>
								<input type="text" class="form-control" name="name" id="name" required>
								<p class="help-block"></p>

							</div>
							<div class="control-group form-group">

								<label class="contact-p1">SDT:</label>
								<input type="tel" class="form-control" name="phone" id="phone" required>
								<p class="help-block"></p>

							</div>
							<div class="control-group form-group">

								<label class="contact-p1">Email:</label>
								<input type="email" class="form-control" name="email" id="email" required>
								<p class="help-block"></p>

							</div>


							<input type="submit" name="sub" value="Send Now" class="btn btn-primary">
						</form>
						<?php
						if (isset($_POST['sub'])) {
							$name = $_POST['name'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$approval = "Not Allowed";
							$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";


							if (mysqli_query($con, $sql))
								echo "OK";
						}
						?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
					<h4>Liên Hệ với chúng tôi</h4>
					<p class="contact-agile1"><strong>SDT :</strong>+94 (65)222-44-55</p>
					<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@LUXYRY.COM</a></p>
					<p class="contact-agile1"><strong>ĐỊA CHỈ :</strong> Hà Nội</p>

					<div class="social-bnr-agileits footer-icons-agileinfo">
						<ul class="social-icons3">
							<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

						</ul>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662"></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
		<!-- /contact -->
		<div class="copy">
			<p>© 2022 LUXURY . All Rights Reserved | Design by HAUI <a href="index.php">LUXURY</a> </p>
		</div>
		<!--/footer -->
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- contact form -->
		<script src="js/jqBootstrapValidation.js"></script>

		<!-- /contact form -->
		<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
			});
		</script>
		<!-- //Calendar -->
		<!-- gallery popup -->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
		<!-- //gallery popup -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- flexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- //flexSlider -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function() {
				// Slideshow 4
				$("#slider4").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function() {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function() {
						$('.events').append("<li>after event fired.</li>");
					}
				});

			});
		</script>
		<!--search-bar-->
		<script src="js/main.js"></script>
		<!--//search-bar-->
		<!--tabs-->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function() {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function(event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!--//tabs-->
		<!-- smooth scrolling -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
				$().UItoTop({
					easingType: 'easeOutQuart'
				});
			});
		</script>

		<div class="arr-w3ls">
			<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<!-- //smooth scrolling -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>