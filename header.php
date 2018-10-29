<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="Website Goalevents" />
	<meta name="keywords" content="Goalevents" />
	<meta name="author" content="Steije Hillewaert" />
	<meta name="theme-color" content="#bdc3c7">
	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
	<!--CSS-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<!--FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

	<!--SCRIPTS-->
	<script language="JavaScript">
		<!--
		// ==============================================
		// Copyright 2003 by jsCode.com
		// Source: jsCode.com
		// Author: etLux
		// Free for all; but please leave in the header.
		// ==============================================

		// Set up the image files to be used.
		var theImages = new Array() // do not change this
		// To add more image files, continue with the
		// pattern below, adding to the array. Rememeber
		// to increment the theImages[x] index!

		theImages[0] = '<?php echo get_bloginfo('template_directory');?>/images/adviesbureau.jpg'
		theImages[1] = '<?php echo get_bloginfo('template_directory');?>/images/arcelormittal.gif'
		theImages[2] = '<?php echo get_bloginfo('template_directory');?>/images/argos.jpg'
		theImages[3] = '<?php echo get_bloginfo('template_directory');?>/images/era.jpg'
		theImages[4] = '<?php echo get_bloginfo('template_directory');?>/images/groendecor.jpg'
		theImages[5] = '<?php echo get_bloginfo('template_directory');?>/images/grontmij.jpg'
		theImages[6] = '<?php echo get_bloginfo('template_directory');?>/images/kantoormeuleman.jpg'
		theImages[7] = '<?php echo get_bloginfo('template_directory');?>/images/madera.jpg'
		theImages[8] = '<?php echo get_bloginfo('template_directory');?>/images/mosselman.jpg'
		theImages[9] = '<?php echo get_bloginfo('template_directory');?>/images/rouwcentrumverhoeven.jpg'
		theImages[10] = '<?php echo get_bloginfo('template_directory');?>/images/vanheckesite.gif'
		theImages[11] = '<?php echo get_bloginfo('template_directory');?>/images/zps.jpg'
		theImages[12] = '<?php echo get_bloginfo('template_directory');?>/images/seghers.jpg'
		theImages[13] = '<?php echo get_bloginfo('template_directory');?>/images/neckermann.jpg'

		// ======================================
		// do not change anything below this line
		// ======================================

		var j = 0
		var p = theImages.length;

		var preBuffer = new Array()
		for (i = 0; i < p; i++){
		   preBuffer[i] = new Image()
		   preBuffer[i].src = theImages[i]
		}

		var whichImage = Math.round(Math.random()*(p-1));
		function showImage(){
		document.write('<img src="'+theImages[whichImage]+'">');
		}

		//-->
	</script>
	<?php wp_head(); ?>
</head>
<body class="site">
	<header>
		<div class="header_content">
			<div class="logo_mobile">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo.png"></a>
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_bloginfo('template_directory');?>/images/logo.png"></a>
			<nav class="menu main">
  				  <?php shailan_dropdown_menu(); ?>
			</nav>
		</div>
	</header>
	<div class="spacer">
    &nbsp;
	</div>
	<div class="slider">
		<div class="headerslider">
			<?php
    echo do_shortcode("[metaslider id=227]");
?>
		</div>
	</div>
