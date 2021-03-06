<?php
/*
 * Template Name: PHP Browser Detection Tests
 *
 * This file contains tests and is not used in production.
 *
 *
 * @created 4/9/13 4:00 PM
 * @author Mindshare Studios, Inc.
 * @copyright Copyright (c) 2013
 * @link http://www.mindsharelabs.com/documentation/
 * 
 */
include_once('php-browser-detection.php');
include_once('../../../../wp-blog-header.php');
$q = new WP_Query('page_id=2');
get_header();
?>
<div id="primary">
	<div id="content" role="main">
		<?php if($q->have_posts()) : ?>
			<?php while($q->have_posts()) : $q->the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php //the_content(); ?>

				<div style="padding:5px; margin:10px 0; border-radius:5px; background:#E6E6E6">
					<p>Get all browser info:</p>
					<?php
					$browserInfo = php_browser_info();
					echo '<pre>php_browser_info() = ';
					print_r($browserInfo);
					echo '</pre>';
					?>
				</div>

				<div style="padding:5px; margin:10px 0; border-radius:5px; background:#E6E6E6">
					<p>Get browser name:</p>
					<?php
					echo '<pre>get_browser_name() = ';
					echo get_browser_name();
					echo '</pre>';
					?>
				</div>

				<div style="padding:5px; margin:10px 0; border-radius:5px; background:#E6E6E6">
					<p>Get browser version:</p>
					<?php
					echo '<pre>get_browser_version() = ';
					echo get_browser_version();
					echo '</pre>';
					?>
				</div>

				<div style="padding:5px; margin:10px 0; border-radius:5px; background:#E6E6E6">
					<p>Test for specific browsers:</p>
					<?php
					echo '<pre>is_firefox() = ';
					echo is_firefox();
					echo '</pre>';

					echo '<pre>is_safari() = ';
					echo is_safari();
					echo '</pre>';

					echo '<pre>is_chrome() = ';
					echo is_chrome();
					echo '</pre>';

					echo '<pre>is_opera() = ';
					echo is_opera();
					echo '</pre>';

					echo '<pre>is_ie() = ';
					echo is_ie();
					echo '</pre>';
					?>
				</div>

				<div style="padding:5px; margin:10px 0; border-radius:5px; background:#E6E6E6">
					<p>Test for mobile/iphone/ipad:</p>
					<?php
					echo '<pre>is_mobile() = ';
					echo is_mobile();
					echo '</pre>';

					echo '<pre>is_ipad() = ';
					echo is_ipad();
					echo '</pre>';

					echo '<pre>is_ipod() = ';
					echo is_ipod();
					echo '</pre>';

					echo '<pre>is_iphone() = ';
					echo is_iphone();
					echo '</pre>';

					?>
				</div>

				<div style="padding:5px; margin:10px 0; border-radius:5px; background:#E6E6E6">
					<p>Test for specific versions of a browser:</p>
					<?php
					echo '<pre>if(is_ie(7)) = ';
					if(is_ie(7)) {
						echo TRUE;
					};
					echo '</pre>';
          
          	echo '<pre>if(is_ie(11)) = ';
					if(is_ie(11)) {
						echo TRUE;
					};
					echo '</pre>';

					echo '<pre>if(is_firefox(20)) = ';
					if(is_firefox(20)) {
						echo TRUE;
					};
					?>
				</div>
			<?php endwhile; endif; ?>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

