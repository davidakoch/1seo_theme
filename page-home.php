<?php 

/*
	Template Name: Home
*/

get_header(); ?>

<section>
		<div class="about-us">
		<!---this is where I'm going to have to add get the content, etc. in WordPress-->
		<!--I'm going to have to remove the lorem ipsum text-->
			<div class="about-us-text">

			</div>
			<div class="adt-dealer">
			</div>
		</div>
	</section>
	<section>
		<div class="adt-smart-technology">
			<a href="#"><button type="button" class="btn btn-learn">LEARN MORE...</button></a> 	
		</div>
	</section>
	<section>
		<div class="price-plan">
			<div class="price-plan-text">
				<h2 class="text-center choose-adt-plan">CHOOSE THE ADT PLAN</h2>
				<h2 class="text-center budget-lifestyle">FOR YOUR BUDGET AND LIFESTYLE.</h2>
			</div>
				<div class="plan-options">
					<div class="container">
						<div class="row" id="plans">	
							<div class="col-md-3 text-center" id="option1">
								<p class="option-title">TRADITIONAL</p>
								<div class="option-price">
									<p><i class="fa fa-usd" aria-hidden="true"></i><strong><span>36.99</span>/mo</strong></p>
								</div>
								<ul class="options-list">
  									<li>24/7 Burglery & Theft Monitoring from ADT</li>
  								</ul>
								<a href="#"><button class="btn-contact1">CONTACT TO ORDER</button></a>
							</div>
							<div class="col-md-3 text-center" id="option2">
								<p class="option-title">REMOTE</p>
								<div class="option-price">
									<p><i class="fa fa-usd" aria-hidden="true"></i><strong><span>49.99</span>/mo</strong></p>
								</div>
								<ul class="options-list">
  									<li class>24/7 Burglery & Theft Monitoring from ADT</li>
  									<li class="blue-line">Voice Controlled App</li>
  									<li class="blue-line">Custom Security Alerts</li>
  									<li class="blue-line">Remote Arm & Disarm</li>
  								</ul>
								<a href="#"><button class="btn-contact2">CONTACT TO ORDER</button></a>
							</div>
							<div class="col-md-3 text-center" id="option3">
									<span class="best-value">
									<p class="option-title-video">VIDEO</p>
								<div class="option-price">
									<p><i class="fa fa-usd" aria-hidden="true"></i><strong><span>58.99</span>/mo</strong></p>
								</div>
								<ul class="options-list">
  									<li class>24/7 Burglery & Theft Monitoring from ADT</li>
  									<li class>Voice Controlled App</li>
  									<li class>Custom Security Alerts</li>
  									<li class>Remote Arm & Disarm</li>
  									<li class="blue-video-line">Live Video</li>
  								</ul>
								<a href="#"><button class="btn-contact3">CONTACT TO ORDER</button></a>
							</div>
							<div class="col-md-3 text-center" id="option4">
								<p class="option-title">CONTROL</p>
								<div class="option-price">
									<p><i class="fa fa-usd" aria-hidden="true"></i><strong><span>59.99</span>/mo</strong></p>
								</div>
								<ul class="options-list">
  									<li class>24/7 Burglery & Theft Monitoring from ADT</li>
  									<li class>Voice Controlled App</li>
  									<li class>Custom Security Alerts</li>
  									<li class>Remote Arm & Disarm</li>
  									<li class="video-line">Live Video</li>
  									<li class="blue-line">Remote Door Lock & Unlock</li>
  									<li class="blue-line">Light & Thermostat Control</li>
  									<li class="blue-line">Garage Door Control</li> 
  								</ul>
								<a href="#"><button class="btn-contact4">CONTACT TO ORDER</button></a>
							</div>
						</div>
					</div>
				</div>
		</div>
	</section>

	<?php get_footer(); ?>
