<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Trang Chủ</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
	<link href="assets/assets-for-demo/demo.css" rel="stylesheet" />

</head>

<body class="index-page">
	<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" " id="sectionsNav">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="presentation.html">LOGO</a>
        	</div>

        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
						<a href="index.php">
							<i class="material-icons">account_balance</i> Trang Chủ
						</a>
					</li>
					<li>
						<a href="introduce.php">
							<i class="material-icons">assessment</i> Giới Thiệu
						</a>
					</li>
					<li>
						<a href="index.php">
							<i class="material-icons">assignment</i> Dự Án
						</a>
					</li>
					<li>
						<a href="index.php">
							<i class="material-icons">import_contacts</i> Blog
						</a>
					</li>
					<li>
						<a href="contact.php">
							<i class="material-icons">contact_phone</i> Liên Hệ
						</a>
					</li>
					<li>
						<form class="navbar-form navbar-right" role="search">
	                        <div class="form-group form-white is-empty">
	                        	<input type="text" class="form-control" placeholder="Tìm kiếm">
	                        	<span class="material-input"></span>
	                        </div>
		                    <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini">
		                       	<i class="material-icons">search</i>
		                    </button>
	                    </form>
					</li>

					
        		</ul>
        	</div>
    	</div>
    </nav>

	<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/img/bgr.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>Dịch Vụ Thiết Kế
							<div class="pro-badge">
								Web
							</div>
						</h1>

						<h3 class="title">Chất Lượng - Uy Tín - Nhanh Chóng</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contactus-1 section-image" style="background-image: url('assets/img/examples/city.jpg')">

		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="title">Liên Hệ Chúng Tôi</h2>
					<h5 class="description">Để biết thêm thông tin thì hãy liên hệ với chúng tôi</h5>
					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">pin_drop</i>
						</div>
						<div class="description">
							<h4 class="info-title">Địa Chỉ</h4>
							<p> 154 Ngõ Chợ Khâm Thiên,<br>
								Đống Đa,<br>
								Hà Nội
							</p>
						</div>
					</div>
					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">phone</i>
						</div>
						<div class="description">
							<h4 class="info-title">Số Điện Thoại</h4>
							<p>	0345.46.96.96<br>
								T2-T7, 8:00-22:00
							</p>
						</div>
					</div>

				</div>
				<div class="col-md-5 col-md-offset-2">
					<div class="card card-contact">
						<form role="form" id="contact-form" method="post">
							<div class="header header-raised header-primary text-center">
								<h4 class="card-title">Gửi E-mail</h4>
							</div>
							<div class="card-content">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Họ</label>
											<input type="text" name="name" class="form-control">
										<span class="material-input"></span></div>
									</div>
									<div class="col-md-6">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Tên</label>
											<input type="text" name="name" class="form-control">
										<span class="material-input"></span></div>
									</div>
								</div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">E-mail</label>
									<input type="email" name="email" class="form-control">
								<span class="material-input"></span></div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">Nội dung</label>
									<textarea name="message" class="form-control" id="message" rows="6"></textarea>
								<span class="material-input"></span></div>

								<div class="row">
									<div class="col-md-6">
										
									</div>
									<div class="col-md-6">
										<button type="submit" class="btn btn-primary pull-right">Send Message</button>
									</div>
								</div>
							</div>

						</form>
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

	

	    

	

	
			</div>
		</div>

	



   
</div>




<footer class="footer footer-white footer-big">
		<div class="container">

			<div class="content">
				<div class="row">

					<div class="col-md-3">
						<a href="#pablo"><h5>LOGO</h5></a>
						<p>Probably the best UI Kit in the world! We know you've been waiting for it, so don't be shy!</p>
					</div>
					<div class="col-md-2">
						<h5>About</h5>
						<ul class="links-vertical">
							<li>
								<a href="#pablo">
									Blog
								</a>
							</li>
							<li>
								<a href="#pablo">
									About Us
								</a>
							</li>
							<li>
								<a href="#pablo">
									Presentation
								</a>
							</li>
							<li>
								<a href="#pablo">
									Contact Us
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5>Market</h5>
						<ul class="links-vertical">
							<li>
								<a href="#pablo">
									Sales FAQ
								</a>
							</li>
							<li>
								<a href="#pablo">
									How to Register
								</a>
							</li>
							<li>
								<a href="#pablo">
									Sell Goods
								</a>
							</li>
							<li>
								<a href="#pablo">
									Receive Payment
								</a>
							</li>
							<li>
								<a href="#pablo">
									Transactions Issues
								</a>
							</li>
						</ul>
					</div>

					<div class="col-md-2">
						<h5>Legal</h5>
						<ul class="links-vertical">
							<li>
								<a href="#pablo">
									Transactions FAQ
								</a>
							</li>
							<li>
								<a href="#pablo">
									Terms &amp; Conditions
								</a>
							</li>
							<li>
								<a href="#pablo">
									Licenses
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Đăng ký tin</h5>
						<p>
							Nhận thông tin về dự án, tin tức của chúng tôi
						</p>
						<form class="form form-newsletter" method="" action="">

							<div class="form-group is-empty">
								<input type="email" class="form-control" placeholder="E-mail">
								<span class="material-input"></span></div>

								<button type="button" class="btn btn-primary btn-just-icon" name="button">
									<i class="material-icons">mail</i>
								</button>

							</form>
						</div>

					</div>
				</div>

				<hr>

				<ul class="social-buttons">
	            				<li>
	            					<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter">
	            						<i class="fa fa-twitter"></i>
	            					</a>
	            				</li>
	            				<li>
	            					<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook">
	            						<i class="fa fa-facebook-square"></i>
	            					</a>
	            				</li>
	            				<li>
	            					<a href="#pablo" class="btn btn-just-icon btn-simple btn-youtube">
	            						<i class="fa fa-youtube-play"></i>
	            					</a>
	            				</li>
	            			</ul>

				<div class="copyright pull-center">
					Copyright © <script>document.write(new Date().getFullYear())</script>2019 B3T.
				</div>
			</div>
		</footer>








</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="assets/js/moment.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="assets/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/js/jasny-bootstrap.min.js"></script>

	<!-- Plugin For Google Maps -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>

	<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
	<script src="assets/assets-for-demo/modernizr.js" type="text/javascript"></script>
	<script src="assets/assets-for-demo/vertical-nav.js" type="text/javascript"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			var slider = document.getElementById('sliderRegular');

	        noUiSlider.create(slider, {
	            start: 40,
	            connect: [true,false],
	            range: {
	                min: 0,
	                max: 100
	            }
	        });

	        var slider2 = document.getElementById('sliderDouble');

	        noUiSlider.create(slider2, {
	            start: [ 20, 60 ],
	            connect: true,
	            range: {
	                min:  0,
	                max:  100
	            }
	        });



			materialKit.initFormExtendedDatetimepickers();

		});
	</script>
</html>
