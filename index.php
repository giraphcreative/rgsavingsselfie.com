<!DOCTYPE html>
<html lang="en">
<head>
	<title>#rgsavingsselfie | R-G FCU</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/main.css?v=8">
	<script src="js/respond.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148819852-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-148819852-1');
	</script>
</head>
<body>
<div class="wrap">
	<div class="bg-container group">
	
	<nav>
		<img src="img/logo-white.png">
		<ul>
			<li><a href="#connect">Connect</a></li>
			<li><a href="#rgsavingsselfie">#rgsavingsselfie</a></li>
			<li><a href="#about">About</a></li>
		</ul>
	</nav>

	<header>
		<a href="https://www.rgfcu.com/" target="_blank"><img src="img/header.png" alt="Your Moments Matter"></a>
	</header>
	
	<a name="about"></a>
	<div class="intro pad">
		<div class="ratebox">
			<img src="img/ratebox.png" />
			<a href="https://twitter.com/RGFCU" target="_blank"><img src="img/icon-twitter.png" class="social" /></a>
			<a href="https://www.instagram.com/rgfcu/" target="_blank"><img src="img/icon-insta.png" class="social" /></a>
			<a href="https://www.facebook.com/RGFCU/" target="_blank"><img src="img/icon-facebook.png" class="social" /></a>
		</div>
		<h3>We've got a really grand idea.</h3>
		<p>If you've got an auto loan financed somewhere other than R-G Federal Credit Union...put us to the test. 
		<p>We'll not only work to lower your monthly car payment - we'll also pay you $25 when you let us share your savings story on social media.</p>
	</div>

	<a name="connect"></a>
	<div class="contact pad">
		<h3>Start the Savings Conversation:</h3>
		<form id="contact" name="contact">
			<strong><div class="error text-red"></div></strong>
			<div class="group">
				<div class="half">
					<p>Your Name:
						<input type="text" name="name" placeholder="Jane Smith" /></p>
					<p>Your Email:
						<input type="text" name="email" placeholder="jane@smith.com" /></p>
					<p>Your Phone:
						<input type="text" name="phone" placeholder="123-456-7890" /></p>
					<p><label><input type="radio" name="member" value="yes" /> Current member</label>
						<label><input type="radio" name="member" value="no" checked="checked" /> Not a member.. yet!</label></p>
				</div>
				<div class="half">
					<p>Message:
						<textarea name="message" placeholder="Your message."></textarea></p>
				</div>
			</div>
			<p class="text-center"><input type="submit" name="submit" value="Submit" class="btn" /></p>
		</form>
	</div>

	<a name="rgsavingsselfie"></a>
	<div class="photos pad">
		<h3>#rgsavingsselfie</h3>
		<p>See how much people near you are saving by moving their car loans to R-G!</p>
		<?php

		function scan_dir($dir) {
		    $ignored = array('.', '..', '.svn', '.git', '.DS_Store', '.htaccess');

		    $files = array();    
		    foreach (scandir($dir) as $file) {
		        if (in_array($file, $ignored)) continue;
		        $files[$file] = filemtime($dir . '/' . $file);
		    }

		    arsort($files);
		    $files = array_keys($files);

		    return ($files) ? $files : false;
		}

		$photos = scan_dir( './photos/');
		foreach ( $photos as $photo ) {
			$ext = pathinfo( "./photos/" . $photo )['extension'];
			$label = str_replace( $ext, '', $photo );
			$label = str_replace( '--', '^', $label );
			$label = str_replace( '-', ' ', $label );
			$label = str_replace( '^', '-', $label );
			?><div class="photo">
				<div class="insta-link"><a href="https://www.instagram.com/rgfcu/" target="_blank"><img src="img/icon-rgfcu.png"> rgfcu</a></div>
				<img src="photos/<?php print $photo; ?>" />
				<div class="insta-icons"><img src="img/icons-insta.png" ></div>
				<div class="insta-label"><?php print $label; ?></div>
			</div><?php
		}
		?>
	</div>

	<div class="apply-content">
		<a href="https://www.netit.financial-net.com/rgfcu-loan/cgi-bin/ebs?OLB_CMD-SLN-164&loan_file=../loan_master" onClick="ga('send', 'event', 'Apply Click', 'App started');"><img src="img/promo-apply.png" class="apply" /></a>
	</div>

	<div class="footer group">
		<a href="https://www.rgfcu.com/" target="_blank"><img src="img/logo-footer.png" class="footer-logo" /></a>
		<h3>Stop by or call to learn more</h3>
		<p class="large"><a href="tel:8668526478">866.852.6478</a> | <a href="https://www.rgfcu.com/" target="_blank">rgfcu.com</a></p>
		<p class="address">128 w. Markey Road, belton, MO<br>
			603 N. Highway 23, Knob Noster, MO</p>

	</div>

	<footer class="fineprint">
		<div class="pad">*APR = Annual Percentage Rate. Your rate may differ based on creditworthiness and other qualifying factors. Rate subject to change at any time without notice *Loans currently financed with the credit union are not eligible. $25 incentive will be given to member in the form of a check after: 1.) A photo has been taken of the member 2.) The member has signed the credit union's photo release form. Membership eligibility required. Offer available 10/1/19-12/31/19. Credit union reserves the right to discontinue, change, and/or update the promotion without notice. Average $580 savings based on data from the Missouri Q1 2019 CUNA Membership Benefits Report. Your savings may vary. All loans subject to approval. Rates subject to change at any time.</div> 
	</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js?v=5"></script>
</body>
</html>