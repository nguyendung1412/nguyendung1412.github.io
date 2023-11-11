<?php
	error_reporting(0);
    if(isset($_POST["search"])){
        $select = $_POST["troom"];
    }
    
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
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->
</head>
<body>
<div class="plans-section" id="rooms">
			<div class="container">
				<h3 class="title-w3-agileits title-black-wthree">Đặt phòng và đánh giá</h3>
				<div style="display:flex;" class="priceing-table-main">
                    <?php 
                        if($select=="2"){
                    ?>
                        <div class="col-md-3 price-grid" style="margin:auto;">
                            <div class="price-block agile">
                                <div class="price-gd-top">
                                    <img src="../images/r1.jpg" alt=" " class="img-responsive" />
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
                                        <a href="../admin/reservation.php">Đặt ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }elseif($select=="3"){
                    ?>
                        <div class="col-md-3 price-grid " style="margin:auto;">
                            <div class="price-block agile">
                                <div class="price-gd-top">
                                    <img src="../images/r2.jpg" alt=" " class="img-responsive" />
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
                                        <a href="../admin/reservation.php">Đặt ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }elseif($select=="4"){
                    ?>
					<div class="col-md-3 price-grid " style="margin:auto;">
						<div class="price-block agile">
							<div class="price-gd-top">
								<img src="../images/r3.jpg" alt=" " class="img-responsive" />
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
									<a href="../admin/reservation.php">Đặt ngay</a>
								</div>
							</div>
						</div>
					</div>
                    <?php
                        }elseif($select=="1"){
                    ?>
					<div class="col-md-3 price-grid " style="margin:auto;">
						<div class="price-block agile">
							<div class="price-gd-top ">
								<img src="../images/r4.jpg" alt=" " class="img-responsive" />
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
									<a href="../admin/reservation.php">Đặt ngay</a>
								</div>
							</div>
						</div>
					</div>
                    <?php
                        } 
                    ?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
</body>
</html>