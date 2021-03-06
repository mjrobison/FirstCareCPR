<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' | '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?> ">
	<!--<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'> -->
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	 
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=100%, initial-scale=1, user-scalable=no">
	
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	    
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<!-- <?php wp_head(); ?> -->
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
		<header>
		<div class="contentCon">
		<div class="logo">
			<a href="<?php echo get_option('home'); ?>"><img src="<?php echo site_url(); ?>/images/logo-red-no-font.png" /></a>
			<h1>First Care <span class="logoFont">CPR Training</span></h1>
		</div>
		<nav class="nav-menu-wrap">
			<ul class="nav-menu menu">
				<li class="close">
					<div>Close Menu <i class="fa icon fa-times"></i></li>
				<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
				<li><a href="<?php echo get_page_link(80);?>">About</a></li>
				<li><a href="<?php echo get_page_link(53);?>">Contact</a></li>
				<li><a href="<?php echo get_page_link(56);?>">Registration</a></li>
				<li><div class="mobileCourses">Courses</div>
					<ul class="sub-menu menu">
						<li><a href="<?php echo get_page_link(99);?>"><img class="mobileMenuIcon" src="<?php echo site_url(); ?>/images/firstAidLogo.png" />First Aid</a></li>
						<li><a href="<?php echo get_page_link(96);?>"><img class="mobileMenuIcon" src="<?php echo site_url(); ?>/images/cprLogo.png" />CPR &amp; AED</a></li>
						<li><a href="<?php echo get_page_link(103);?>"><img class="mobileMenuIcon" src="<?php echo site_url(); ?>/images/bloodborneLogo.png" />Bloodborne Pathogens</a></li>
						<li><a href="<?php echo get_page_link(101);?>"><img class="mobileMenuIcon" src="<?php echo site_url(); ?>/images/survivalLogo.png" />Wilderness</a></li>
                        <li><a href="http://osmanager4.com/summit/landing.aspx?id=25856"><img class="mobileMenuIcon" src="<?php echo site_url(); ?>/test.jpg" />OSHA</a></li>
						<li><a href="<?php echo get_page_link(150);?>"><img class="mobileMenuIcon" src="<?php echo site_url(); ?>/images/healthcareLogo.png" />Health Care CPR</a></li>
						<li><a href="<?php echo get_page_link(152);?>"><img class="mobileMenuIcon" src="<?php echo site_url(); ?>/images/earlychildhoodLogo.png" />Early Childhood Emergency</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		
		<div class="nav-menu-background"></div>    
		<div class="nav-menu-toggle box-shadow-menu">
			<i class="fa fa-bars toggle"></i>
		</div>
		<nav>
			<div class="nav">				
				 <div class="menuItem"><a href="<?php echo get_page_link(80);?>">About</a></div>
				<div class="menuItem"><a href="<?php echo get_page_link(53);?>">Contact</a></div>
				<div class="menuItem dropdown">
					<a class="dropbtn" href="#">Courses</a>
						<div class="dropdown-content">
							<div class="itemCon">
								<div class="dropdownItem">
									<a href="<?php echo get_page_link(99);?>">
										<div class="menuPicCon firstAidPic">
											
										</div>
										<p>First Aid</p>
									</a>
								</div>
								<div class="dropdownItem">
									<a href="<?php echo get_page_link(96);?>">
										<div class="menuPicCon cprPic">
											
										</div>
										<p>CPR &amp; AED</p>
									</a>
								</div>
								<div class="dropdownItem">
									<a href="<?php echo get_page_link(103);?>">
										<div class="menuPicCon pathPic">
												
										</div>
										<p>Bloodborne Pathogens</p>
									</a>
								</div>
								<div class="dropdownItem">
									<a href="<?php echo get_page_link(101);?>/">
										<div class="menuPicCon survivalPic">
											</div>
										<p>Survival/Wilderness</p>
									</a>
								</div>
                                <div class="dropdownItem">
									<a href="http://osmanager4.com/summit/landing.aspx?id=25856" target="_blank">
										<div class="menuPicCon ashiPic ">
											</div>
										<p>OSHA 10/30hr</p>
									</a>
								</div>
								<div class="dropdownItem">
									<a href="<?php echo get_page_link(150);?>/">
										<div class="menuPicCon HealthCareProvider">
											</div>
										<p>Health Care Provider CPR</p>
									</a>
								</div>
								<div class="dropdownItem">
									<a href="<?php echo get_page_link(152);?>/">
										<div class="menuPicCon EarlyChildhoodEmergency">
											</div>
										<p>Early Childhood Emergency</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				<div class="menuItem"><a href="<?php echo get_page_link(56);?>">Registration</a></div>
			</div>
		</nav>
		</div>
	</header>