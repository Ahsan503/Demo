<?php 
/* 
Template Name: test 
*/ 

get_header();
?>
<div class="grid-container1">
		<div class="grid-contact1">
			<div id="img-mobl">
			<img src="<?php echo get_template_directory_uri();?>/images/mobile.png" width="60px" height="80px">
		    </div>
		    <div id="phone">
		    	<p><strong>Phone Number : </strong><?php the_field('Phone_ Number_ 1',57); ?> ,<?php the_field('Phone_ Number_ 2',57); ?></p>
		    </div>
		    	<div id="Email">
		    		<p><strong>Email : </strong><a href="mailto :"><?php the_field('email',57); ?></a></p>
		    	</div>
		    	<div id="Website">
		    		<p><strong>Website :</strong><?php the_field('website',57); ?></p>
		    	</div>
		</div>


		<div class="grid-contact2">
			<div id="img-add">
				<img src="<?php echo get_template_directory_uri();?>/images/address.png" width="60px" height="80px">
			</div>
			<div>
				<p><?php the_field('Address',57); ?></p>
			</div>
			

		</div>
		<div class="grid-contact3">
			<div>
				<h3>Find us on map</h3>
			</div>
			<div id="map">
			<div style="width: 100%"><iframe src="<?php the_field('map link',57); ?>" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
		</div>
		</div>
	
</div>






<?php 

get_footer();

?>