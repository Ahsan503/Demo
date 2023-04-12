<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Custom Theme</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<header>
      <div class="container">
      	<div class="grid-container">
      		<div class="grid-item">
      			<?php $logoimg= get_header_image() ; ?>
      		<div class="logo-site"><a href="<?php echo site_url();?>"><img src="<?php echo $logoimg;?>"></a></div>
      	      </div>
      	 <div class="grid-item1">
      	       <?php wp_nav_menu(array('theme_location'=>'Primary-menu'));?>
      	 </div>

             </div>
      </div>
</header>