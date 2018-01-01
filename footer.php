<footer>
		<div class="footer-background">
			<div class="footer-text">
				<div class="container-width" id="footer-info">
					<div class="row">
						<div class="col-md-3" id="footer-address">
							<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
							<p>123 Main Street<br>
							Bristol, PA 19007</p>
						</div>
						<div class="col-md-3" id="footer-phone">
							<i class="fa fa-mobile fa-lg" aria-hidden="true"></i>
							<p>Phone: (215) 900-6217</p>
						</div>
						<div class="col-md-3" id="footer-mail">
							<i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
							<p>info@jalsecurity.com</p>
						</div>
						<div class="col-md-3" id="footer-icons">
							<i class="fa fa-twitter" aria-hidden="true"><a href="#"></a></i>
							<i class="fa fa-facebook" aria-hidden="true"><a href="#"></a></i>
							<i class="fa fa-linkedin" aria-hidden="true"><a href="#"></a></i>
							<i class="fa fa-google-plus" aria-hidden="true"><a href="#"></a></i>
							<i class="fa fa-instagram" aria-hidden="true"><a href="#"></a></i>
							<i class="fa fa-pinterest-p" aria-hidden="true"><a href="#"></a></i>
						</div>
					</div>
				</div>
				<div class="container-width" id="footer-misc">
					<div class="row">
						<div class="col-md-3" id="misc-text">
							<div class="footer_JAL"></div>
							<div class="footer_JAL_text"></div>
						</div>
						<div class="col-md-3">
							<p class="links-title">QUICK LINKS</p>
						<?php   
							$defaults = array(
								'theme_location' => 'new-menu',
								'container_class' => 'new_menu_class' 						
				            );
								wp_nav_menu( $defaults );
						?>
						</div>
						<div class="col-md-3" id="latestNews">
							<p class="news-title">LATEST NEWS</p>
								<?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<!-- gets the code for posts the blog page from content.php-->
									<div class="news-list">
										<a href="<?php the_permalink(); ?>">
										<ul>
										<li><span class="news-post"><?php the_title(); ?></span></li>
										</ul>
									</div>
								<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
						</div>
						<div class="col-md-3" id="newsletter">
							<p class="newsletter-title">NEWSLETTER SIGNUP</p>
							<div class="newsletter-email">
								<form method="get" id="nameform">
										<input type="text" name="email" id="email" placeholder="Enter Your Email">
									<button type="submit" id="newsletter-button" value="Submit">OK</button>
								</form>
							</div>
							<p class="license-number">License #: PA125943</p>
						</div>
						<div class="footer-legal-text">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>	
</body>
</html>