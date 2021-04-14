<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Foogra - Discover & Book the best restaurants at the best price">
    <meta name="author" content="Ansonika">
    <title>InstaApp</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?=base_url('assets/assets1/css/bootstrap_customized.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/assets1/css/style.css');?>" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="<?=base_url('assets/assets1/css/home.css');?>" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=base_url('assets/assets1/css/custom.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/assets1/css/booking-sign_up.css');?>" rel="stylesheet">
</head>

<style type="text/css">
	.hero_single.version_2{
		background: url(<?=base_url('assets/images/slide-01.jpg');?>);
	}
	#alert_gagal{
    background-color: red;
    color: white;
  }
  #alert_sukses{
    background-color: green;
    color: white;
  }
</style>
<body>
				
	<header class="header clearfix element_to_stick">
		<div class="container">
		<div id="logo">
			<a href="index.html">
				<h3 style="font-family: Ink Free;font-size: 40px;color: white;" class="logo_normal">.InstaApp</h3>
				<h3 style="font-family: Ink Free;font-size: 40px;" class="logo_sticky">.InstaApp</h3>
				<!-- <img src="<?=base_url('assets/assets1/img/logo.svg')?>" width="140" height="35" alt="" class="logo_normal">
				<img src="<?=base_url('assets/assets1/img/logo_sticky.svg');?>" width="140" height="35" alt="" class="logo_sticky"> -->
			</a>
		</div>
		
		<!-- <ul id="top_menu">
			<li><a href="<?=base_url('login/do_logout')?>"></a><a id="sign-in" class="login">Sign In</a></li>
		</ul> -->
	
		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
			<div id="header_menu">
				<a href="#0" class="open_close">
					<i class="icon_close"></i><span>Menu</span>
				</a>
				<a href="index.html"><img src="<?=base_url('assets/assets1/img/logo.svg');?>" width="140" height="35" alt=""></a>
			</div>
			<ul>
				<?php if($this->session->userdata('status')) {?>
				<li class="submenu">
					<a href="<?=base_url('post');?>" class="show-submenu">Home</a>
					
				</li>
				<li class="submenu">
					<a href="<?php echo base_url('post/posts');?>" class="show-submenu">Posting</a>
					
				</li>
				<li class="submenu">

					<a href="<?php echo base_url('post/search');?>" class="show-submenu"><div class="fs1" aria-hidden="true" data-icon="&#x55;"></div></a>
					
				</li>
				<?php }?>
				<li class="submenu">
					<a href="#0" class="show-submenu"><div class="fs1" aria-hidden="true" data-icon="&#xe08a;"><span aria-hidden="true" class="arrow_carrot-down"></span></div></a>
					<ul>

						
						<?php if($this->session->userdata('status')) {?>
						<li><a href="#">Setting</a></li>
						<li><a href="<?=base_url('login/do_logout')?>">Logout</a></li>
						<?php }else{?>
						<li><a href="<?=base_url('login')?>">Login</a></li>
						<li><a href="<?=base_url('login/signup')?>">Sign Up</a></li>
						<?php }?>
						
					</ul>
				</li>
			</ul>
		</nav>
	</div>
	</header>

	<?php $this->load->view($view);?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="about.html">About us</a></li>
							<li><a href="help.html">Add your restaurant</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="account.html">My account</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contacts.html">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="listing-grid-1-full.html">Top Categories</a></li>
							<li><a href="listing-grid-2-full.html">Best Rated</a></li>
							<li><a href="listing-grid-1-full.html">Best Price</a></li>
							<li><a href="listing-grid-3.html">Latest Submissions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="icon_mobile"></i>+94 423-23-221</li>
							<li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<ul class="footer-selector clearfix">
						<li>
							<div class="styled-select lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2019 Foogra</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
	
	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
	
	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" value="Log In" class="btn_1 full-width mb_5">
					Don’t have an account? <a href="account.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Modal -->
	
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url('assets/assets1/js/common_scripts.min.js');?>"></script>
    <script src="<?=base_url('assets/assets1/js/common_func.js');?>"></script>
    <script src="<?=base_url('assets/assets1/assets/validate.js');?>"></script>

</body>
</html>