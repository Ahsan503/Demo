<?php

get_header();
the_post();

?>


<div class="grid-conatiner">
<div class="left-post">
<p style="font-size: 12px">Posted on | <?php the_time( 'l, F jS, Y' ); ?></p> 
<p style="font-size: 12px">Zigron | 8 min read</p>	
<h3><?php the_title(); ?></h3>
<?php 
$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
?>
<img src="<?php echo $imagepath[0];?>" width="600px" height="300px">

<div><p><?php the_content(); ?></p></div>
</div>
<div class="right-post">
	<div class="Most-viewed">
		<h3>Most Viewed</h3>
	</div>
	<br>
	<div class="most-box">
		<h3 class="most-right"><a href="<?php the_permalink(); ?>">Internet of Things</a></h3>
		<h5 class="most-right-h5">Why Pakistan is your next technology Hub ?</h5>
	</div>
	<br>
	<div class="most-box">
		<h3 class="most-right"><a href="<?php the_permalink(); ?>">Internet of Things</a></h3>
		<h5 class="most-right-h5">Why Pakistan is your next technology Hub ?</h5>
	</div>
	<br>
	<div class="most-box">
		<h3 class="most-right"><a href="<?php the_permalink(); ?>">Internet of Things</a></h3>
		<h5 class="most-right-h5">Why Pakistan is your next technology Hub ?</h5>
	</div>
	
</div>
</div>


<?php
get_footer();
?>