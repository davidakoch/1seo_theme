<!DOCTYPE html>
<html>
<head>
	<title>
		<?php bloginfo('name'); ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>	
	</title>
	<meta name="keywords" content="JAL ADT Security Bristol authorized dealer"/>
	<meta name="description" content="JAL is an authorized dealer in Bristol of ADT Security."/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header-text">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7 top-header">
					</div>
					<div class="col-md-5 header-info">
						<span><i class="fa fa-envelope-o" id="header-envelope" aria-hidden="true"></i><p>info@jalsecurity.com</p></span>
						<span><i class="fa fa-phone" aria-hidden="true"></i><p>215-900-6217</p></span>
					</div>	
				</div>	
			</div>
				        <?php   
							$defaults = array(
								'theme_location' => 'primary',
								'container_class' => 'primary_menu' 	
								   						
				            );
								wp_nav_menu( $defaults );
						?>
			<div class="slider">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7 security-text">
							<h2>GET ADT MONITORED</h2>
							<h1>SECURITY</h1>
							<p>It's amazing how little it costs to have the piece of mind of ADT monitored security. A single ADT monitored security system can help protect you and your family from burglary, fire and high levels of carbon monoxide - 24 hours a day, seven days a week.</p>
							<button type="button" class="btn btn-default btn-what">WHAT DO I GET?</button>
							<button type="button" class="btn btn-transparent">LEARN MORE!</button>
						</div>
						<div class="col-md-5">
							<div class="free-quote-form">
								<!--please note: that I could not find a home icon with font awesome-->
								
								<div class="top">
									<p class="contact-us"><i class="fa fa-home" aria-hidden="true"></i>       CONTACT US FOR A FREE QUOTE!</p>
								</div>
								<div class="middle-form">
									<p class="starting">Starting at <span class="yellow-number">$36.99/mo</span></p>
									<p class="36month">36-month monitoring contract required. Termination fee applies. For full terms and conditions <span class="yellow-words">click here.</span></p>
								  <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name*" required>
								  </div>
								  <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email*" required>
								  </div>
								   <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone*" required>
								  </div>
								   <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="BestTime to Reach Me*" required>
								  </div>
								</div>
								<!--I did this late and realized that I needed a submit button for later. I hope to get around to it.-->
								<div class="free-quote-bottom">

									<!--please note: that I could not find the appropriate arrow icon with font awesome-->
									<button type="submit" class="free-quote-bottom" value="Submit">SUBMIT FREE QUOTE!</button><a href="#"<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</header>