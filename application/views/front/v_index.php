<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Website SobatDifabel</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?php echo base_url();?>assets2/img/bgsd.png');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="<?php echo base_url('home');?>">
							<img class="logo" src="<?php echo base_url();?>assets2/img/logosobat.png" alt="logo" >
							<img class="logo-alt" src="<?php echo base_url();?>assets2/img/logo-trans.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">Tentang Kami</a></li>
					<ul class="dropdown">
						<li><a href="#">blog post</a></li>
					</ul>
					<!-- <li><a href="#team">Struktur Organisasi</a></li> -->
					<li><a href="#portfolio">Sobat Store</a></li>
					<li><a href="#service">Layanan</a></li>
					<li class="has-dropdown"><a href="#blog">Berita</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">Event</a></li>
							<li><a href="blog-single.html">Blog </a></li>
							</ul
						</li>
						<li><a href="#contact">Contact</a></li>
						<li class="has-dropdown"><a href="<?php echo base_url('home/register') ?>"><b>Sign Up</b></a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('login');?>">Login</a></li>
								<li><a href="<?php echo base_url('login/register');?>">Register</a></li>
							</ul>
						</li>
					</ul>
					<!-- /Main navigation -->

				</div>
			</nav>
			<!-- /Nav -->

			<!-- home wrapper -->
			<div class="home-wrapper">
				<div class="container">
					<!-- home content -->
					<div class="row">
						<br><br><br><br><br><br>
						<h2 class="white-text">Sobat Difabel</h2>
						<p>Platform teknologi yang menyediakan berbagai layanan yang bertujuan mewujudkan lingkungan yang ramah difabel</p>
						<div class="col-md-4 col-md-offset">	
							<a href="#service"><button  class="btn-lg btn-primary" style="width: 250px; height: 100px; margin-bottom: 10px;"><b style="font-size: 50px;">Layanan</b></button></a>
						</div>
						<div class="col-md-4 col-md-offset">	
							<a  href="<?php echo base_url('login') ?>"> <button class="btn-lg btn-danger" style="width: 250px; height: 100px; margin-bottom: 10px;"><b style="font-size: 50px;">Login</b></button></a>
						</div>
						<div class="col-md-4 col-md-offset">	
							<a href="<?php echo base_url('login/register') ?>"><button  class="btn-lg btn-warning" style="width: 250px; height: 100px; margin-bottom: 10px;"><b style="font-size: 50px;">Daftar</b></button></a>
						</div>	
					</div>
					<br><br><br><br>
					<!-- /home content -->
				</div>
			</div>
			<!-- /home wrapper -->

		</header>
		<!-- /Header -->

		<!-- Tentang Kami -->
		<div id="about" class="section md-padding">

			<!-- Container -->
			<div class="container">

				<!-- Tentang Kami -->
				<div class="row">

					<!-- Section header -->
					<div class="section-header text-center">
						<h2 class="title">Tentang Kami</h2>
					</div>
					<!-- /Section header -->

					<!-- about -->
					<div class="col-md-6">
						<div class="about">
							<i class="fa fa-users"></i>
							<h3>Profil</h3>
							<p>SOBAT DIFABEL (Semua Orang BAnTu Difabel/Different Ability People) merupakan platform penyedia berbagai layanan yang menghubungkan difabel dan non difabel. Tujuan hadirnya Sobat Difabel yakni mewujudkan lingkungan yang inklusi melalui program-program yang mempermudah difabel untuk mengakses aktivitas publik.</p>
							<a href="#">Read more</a>
						</div>
					</div>
					<!-- /about -->

					<!-- about -->
					<div class="col-md-6">
						<div class="about">
							<i class="fa fa-rocket"></i>
							<h3>Visi</h3>
							<p>Platform teknologi bagi individu, komunitas, organisasi, perusahaan, maupun instansi negeri/swasta untuk membantu difabel mengakses aktivitas publik demi mewujudkan lingkungan yang ramah difabel menuju inklusi yang berkelanjutan.</p>
							<br><br> 
							<a href="#">Read more</a>
						</div>
					</div>

					<!-- /about -->

				</div>
				<!-- /Tentang Kami -->

				<!-- Row -->
				<div class="row">

					<!-- about -->
					<div class="col-md-6">
						<div class="about">
							<i class="fa fa-bullseye"></i>
							<h3>Misi</h3>
							<p>
								Menciptakan dan menyinambungkan sebuah lingkungan inklusi bagi difabel.
								Menyediakan layanan fisik maupun non fisik bagi difabel.
								Memastikan aksesibilitas yang sesuai dengan kebutuhan.
								Menyebarluaskan pemahaman hak asasi manusia bagi difabel dalam masyarakat.
							</p>
							<a href="#">Read more</a>
						</div>
					</div>
					<!-- /about -->
					<!-- about -->
					<div class="col-md-6">
						<div class="about">
							<i class="fa fa-quote-left"></i>
							<h3>Moto</h3>
							<p>Solutif Optimis Berani Aksesibel Teruji</p><br><br><br><br>
							<a href="#">Read more</a>
						</div>
					</div>
					<!-- /about -->

				</div>

				<!-- /Row -->
				<!-- Team -->
				<!-- /Team -->
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Tentang Kami -->

		<!-- Sobat Store -->
		<div id="portfolio" class="section md-padding bg-grey">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<!-- Section header -->
					<div class="section-header text-center">
						<h2 class="title">Sobat Store</h2>
					</div>
					<!-- /Section header -->

					<!-- Work -->
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work1.jpg" alt="">
						<div class="overlay"></div>
						<div class="work-content">
							<span>Category</span>
							<h3>Nama Barang</h3>
							<div class="work-link">
								<a href="#"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo base_url();?>assets2/img/work1.jpg"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
					<!-- /Work -->

					<!-- Work -->
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work2.jpg" alt="">
						<div class="overlay"></div>
						<div class="work-content">
							<span>Category</span>
							<h3>Nama Barang</h3>
							<div class="work-link">
								<a href="#"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo base_url();?>assets2/img/work2.jpg"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
					<!-- /Work -->

					<!-- Work -->
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work3.jpg" alt="">
						<div class="overlay"></div>
						<div class="work-content">
							<span>Category</span>
							<h3>Nama Barang</h3>
							<div class="work-link">
								<a href="#"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo base_url();?>assets2/img/work3.jpg"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
					<!-- /Work -->

					<!-- Work -->
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work4.jpg" alt="">
						<div class="overlay"></div>
						<div class="work-content">
							<span>Category</span>
							<h3>Nama Barang</h3>
							<div class="work-link">
								<a href="#"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo base_url();?>assets2/img/work4.jpg"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
					<!-- /Work -->

					<!-- Work -->
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work5.jpg" alt="">
						<div class="overlay"></div>
						<div class="work-content">
							<span>Category</span>
							<h3>Nama Barang</h3>
							<div class="work-link">
								<a href="#"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo base_url();?>assets2/img/work5.jpg"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
					<!-- /Work -->

					<!-- Work -->
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work6.jpg" alt="">
						<div class="overlay"></div>
						<div class="work-content">
							<span>Category</span>
							<h3>Nama Barang</h3>
							<div class="work-link">
								<a href="#"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo base_url();?>assets2/img/work6.jpg"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
					<!-- /Work -->

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Sobat Store -->

		<!-- Service -->
		<div id="service" class="section md-padding">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<!-- Section header -->
					<div class="section-header text-center">
						<h2 class="title">Layanan</h2>
					</div>
					<!-- /Section header -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-handshake-o"></i>
							<h3>Pendampingan</h3>
							<p>Layanan yang disediakan untuk mengupayakan perlakuan fasilitas bagi difabel agar tercapainya partisipasi penuh dalam masyarakat disegala aspek kehidupan.</p> <br>
							<a href="<?php echo base_url('home/layanan_pendampingan') ?>" class="btn-lg btn-info">Lihat Detailnya</a>
						</div>

					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-headphones"></i>
							<h3>Konsultasi</h3>
							<p>Layanan yang disediakan oleh sobat difabel dengan memberikan saran atau rekomendasi kepada user atau pihak pihak terkait mengenai hak-hak dasar yang dibutuhkan dan pengetahuan lebih mendalam terkait inklusifitas.</p>
							<a href="<?php echo base_url('home/layanan_konsultasi') ?>" class="btn-lg btn-info">Lihat Detailnya</a>
						</div>

					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-wheelchair" aria-hidden="true"></i>
							<h3>Alat Bantu</h3>
							<p>Layanan yang menyediakan peminjaman alat bantu difabel untuk mempermudah mobilitas difabel serta menjamin akomodasi yang layak untuk difabel dalam mengikuti kegiatan tertentu</p><br>
							<a href="#" class="btn-lg btn-info">Lihat Detailnya</a>
						</div>

					</div>
					<!-- /service -->

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Service -->


		<!-- Sekolah Inklusi Nusantara -->

		<!-- /Sekolah Inklusi Nusantara -->


		<!-- Numbers -->
		<div id="numbers" class="section sm-padding">

			<!-- Background Image -->
			<div class="bg-img" style="background-image: url('<?php echo base_url();?>assets2/img/bgsd.png');">
				<div class="overlay"></div>
			</div>
			<!-- /Background Image -->

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<!-- number -->
					<div class="col-sm-3 col-xs-6">
						<div class="number">
							<i class="fa fa-users"></i>
							<h3 class="white-text"><span class="counter">100</span></h3>
							<span class="white-text">Tutor</span>
						</div>
					</div>
					<!-- /number -->

					<!-- number -->
					<div class="col-sm-3 col-xs-6">
						<div class="number">
							<i class="fa fa-trophy"></i>
							<h3 class="white-text"><span class="counter">12</span></h3>
							<span class="white-text">Awards won</span>
						</div>
					</div>
					<!-- /number -->

					<!-- number -->
					<div class="col-sm-3 col-xs-6">
						<div class="number">
							<i class="fa  fa-video-camera"></i>
							<h3 class="white-text"><span class="counter">154</span>K</h3>
							<span class="white-text">Tutorial Video</span>
						</div>
					</div>
					<!-- /number -->

					<!-- number -->
					<div class="col-sm-3 col-xs-6">
						<div class="number">
							<i class="fa fa-graduation-cap"></i>
							<h3 class="white-text"><span class="counter">500</span></h3>
							<span class="white-text">Lulusan</span>
						</div>
					</div>
					<!-- /number -->

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Numbers -->



		<!-- Testimonial -->

		<!-- /Testimonial -->



		<!-- Blog -->
		<div id="blog" class="section md-padding bg-grey">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<!-- Section header -->
					<div class="section-header text-center">
						<h2 class="title">Berita Terkini</h2>
					</div>
					<!-- /Section header -->

					<!-- blog -->
					<div class="col-md-4">
						<div class="blog">
							<div class="blog-img">
								<img class="img-responsive" src="<?php echo base_url();?>assets2/img/blog1.jpg" alt="">
							</div>
							<div class="blog-content">
								<ul class="blog-meta">
									<li><i class="fa fa-user"></i>John doe</li>
									<li><i class="fa fa-clock-o"></i>18 Oct</li>
									<li><i class="fa fa-comments"></i>57</li>
								</ul>
								<h3>Molestie at elementum eu facilisis sed odio</h3>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								<a href="blog-single.html">Read more</a>
							</div>
						</div>
					</div>
					<!-- /blog -->

					<!-- blog -->
					<div class="col-md-4">
						<div class="blog">
							<div class="blog-img">
								<img class="img-responsive" src="<?php echo base_url();?>assets2/img/blog2.jpg" alt="">
							</div>
							<div class="blog-content">
								<ul class="blog-meta">
									<li><i class="fa fa-user"></i>John doe</li>
									<li><i class="fa fa-clock-o"></i>18 Oct</li>
									<li><i class="fa fa-comments"></i>57</li>
								</ul>
								<h3>Molestie at elementum eu facilisis sed odio</h3>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								<a href="blog-single.html">Read more</a>
							</div>
						</div>
					</div>
					<!-- /blog -->

					<!-- blog -->
					<div class="col-md-4">
						<div class="blog">
							<div class="blog-img">
								<img class="img-responsive"  src="<?php echo base_url();?>assets2/img/blog3.jpg" alt="">
							</div>
							<div class="blog-content">
								<ul class="blog-meta">
									<li><i class="fa fa-user"></i>John doe</li>
									<li><i class="fa fa-clock-o"></i>18 Oct</li>
									<li><i class="fa fa-comments"></i>57</li>
								</ul>
								<h3>Molestie at elementum eu facilisis sed odio</h3>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								<a href="blog-single.html">Read more</a>
							</div>
						</div>
					</div>
					<!-- /blog -->

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Blog -->

		<!-- Contact -->
		<div id="contact" class="section md-padding">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<!-- Section-header -->
					<div class="section-header text-center">
						<h2 class="title">Hubungi Kami</h2>
					</div>
					<!-- /Section-header -->

					<!-- contact -->
					<div class="col-sm-4">
						<div class="contact">
							<i class="fa fa-whatsapp"></i>
							<h3>Whatsapp</h3>
							<small>Call/Message</small>
							<p>+6289606769465</p>
						</div>
					</div>
					<!-- /contact -->

					<!-- contact -->
					<div class="col-sm-4">
						<div class="contact">
							<i class="fa fa-envelope"></i>
							<h3>Email</h3>
							<p>sobatdifabel@gmail.com</p>
						</div>
					</div>
					<!-- /contact -->

					<!-- contact -->
					<div class="col-sm-4">
						<div class="contact">
							<i class="fa fa-map-marker"></i>
							<h3>Alamat</h3>
							<p>Jl Pemuda No.1 - Surabaya</p>
						</div>
					</div>
					<!-- /contact -->

					<!-- contact form -->
					<div class="col-md-8 col-md-offset-2">
						<form class="contact-form">
							<input type="text" class="input" placeholder="Name">
							<input type="email" class="input" placeholder="Email">
							<input type="text" class="input" placeholder="Subject">
							<textarea class="input" placeholder="Message"></textarea>
							<button class="main-btn">Send message</button>
						</form>
					</div>
					<!-- /contact form -->

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Contact -->


		<!-- Footer -->
		<footer id="footer" class="sm-padding" style="background-color: #0b0f0e;">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<div class="col-md-12">

						<!-- footer logo -->
						<div class="footer-logo">
							<a href="<?php echo base_url('home');?>"><img src="<?php echo base_url();?>assets2/img/logosobatf.png" alt="logo"></a>
						</div>
						<!-- /footer logo -->

						<!-- footer follow -->
						<ul class="footer-follow">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
						<!-- /footer follow -->

						<!-- footer copyright -->
						<div class="footer-copyright">
							<p>Copyright © <?php echo date("Y") ?>. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						</div>
						<!-- /footer copyright -->

					</div>

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</footer>
		<!-- /Footer -->
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- /Back to top -->

		<!-- Preloader -->
		<div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- /Preloader -->

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="<?php echo base_url();?>assets2/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets2/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets2/js/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets2/js/main.js"></script>
		<script data-account="7KDD9cRL1J" src="https://cdn.userway.org/widget.js"></script>

	</body>

	</html>


