<?php
/* 
Template Name: zigron blog
*/
get_header();
?>

<div class="zig-container">
	<div>
		<h2 style="text-align: center; padding-top: 5px; padding-bottom: 5px;" >Blogs</h2>
	</div>
   <div>
	<p style="text-align:center; margin-top: 5px; margin-bottom: 5px;">Welcome to our blog page. Stay updated with newest development and insights in the IT world.
            </p>
   </div>

 <!-- category -->

     <?php
   if (isset($_POST['save'])) {
  $id=wp_insert_post(
  	array(
  		'post_type'=>'Posts',
  		'post_status'=>'draft',
  )
  );
  wp_set_object_terms($id , $_POST['newCat'],'category');
}

?>


<!-- category end -->

   <div class="seach-bar">
   	<input type="search" name="search-text" placeholder="Search Anything" style="width: 40%;
    height: 35px; padding-left: 10px;">
   
    <select name="newCat" class="cat-zig">
			<option>All Categories</option>
			<?php
			$newCat=get_terms(['taxonomy'=>'category', 
	                            'hide_empty'=>false,
	                            'orderby'=>'name',
	                            'order'=>'DESC']);
         foreach ($newCat as $newcatdata) {
         ?>
         <option value="<?php echo $newcatdata->name; ?>">
         	<?php echo $newcatdata->name; ?>
         	
         </option>
     <?php } ?>
		</select>
   </div>

   <section>
   	<div class="tw-col">
   		<div class="post-zig">
		<?php
           
           $wpnews=array(
           	'post_type'=>'service',
           	'post_status'=>'publish',
             'posts_per_page' => '1',
              'order' => 'DESC',);

           $newsquery=new wp_Query($wpnews);
           while ($newsquery->have_posts()) 
           {
           	
           $newsquery->the_post();
           $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');

           ?>


      <div class="news-zig">
		<img src="<?php echo $imagepath[0] ?> " class="img-zig">
		<div>
			<h1 style="padding-left:10px; width:440px"><?php the_title(); ?></h1>
		</div>
		<div style="padding-bottom: 25px;">
		<small style="padding-left:10px ; ">zigron |  6  min read </small>
	    </div>
       <div style="margin-bottom: 10px; padding-bottom: 50px;">
	    <hr>

	 </div>
        </div>
		
		 
	    <?php } ?>

   			
     </div>

     <div class="post-zig2">
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
   		

   </section>

   <section>
   	<div class="container-middle1">
   			<?php
           
           $wpnews=array(
           	'post_type'=>'service',
           	'post_status'=>'publish');

           $newsquery=new wp_Query($wpnews);
           while ($newsquery->have_posts()) 
           {
           	
           $newsquery->the_post();
           $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'small');

           ?>
         

      <div class="mid-zig-blog">
        	<div class="box-blog">
       <a href="<?php the_permalink();?>" style="text-decoration: none; color: black;">
		  <img src="<?php echo $imagepath[0] ?> " class="img-zig-blog">
		  	<small>
		  		<h3><?php the_title(); ?></h3>
		  	</small>
		  	<small>
		  		<p><?php the_excerpt(); ?></p>
		  	</small>
		  	<small>
		  		<p style="font-size: 80%; color: #888888;"> zigron | 6 min read</p>
		  	</small>
		 </a>
          </div>
       </div>
   		<?php } ?>
   	

   </div>
   	
   </section>

<section>

	
		<div class="head-cont">
			<h3>We’d Love To Hear From You</h3>
			<p>Send us your questions and ideas</p>
		</div>

	<div class="cont">
		<div class="cont-info">
			<h1 id="h1-cont">Contact Information</h1>

                                

			<ul class="text-sm font-light text-gray-200 flex flex-col">
				<li class="flex items-center mb-6">
					<img src="<?php echo get_template_directory_uri();?>/images/phone.svg" height="20px" width="30px" class="blg-img">
					<span class="material-icons mr-2">+1.703.536.8351</span>
			  	</li>
			  	<li class="flex items-center mb-6">
					<img src="<?php echo get_template_directory_uri();?>/images/message.svg" height="20px" width="30px" class="blg-img">
					<span class="material-icons mr-2">info@zigron.com</span>
			  	</li>
			  	<li class="flex items-center mb-6">
					<img src="<?php echo get_template_directory_uri();?>/images/location.svg" height="20px" width="30px" class="blg-img">
					<span class="material-icons mr-2">3100 Clarendon Blvd. Suite 200, Arlington, VA 22201</span>
			  	</li>

			</ul>
			

			<ul class="social-cont">
				<li>
					<a href="">
					<img src="<?php echo get_template_directory_uri();?>/images/facebook.svg" height="10px" width="10px" class="social-ct">
				</a>
				</li>
				<li>
					<a href="">
					<img src="<?php echo get_template_directory_uri();?>/images/instagram.svg" height="10px" width="10px" class="social-ct">
				</a>
				</li>
				<li>
					<a href="">
					<img src="<?php echo get_template_directory_uri();?>/images/linkedin.svg" height="10px" width="10px" class="social-ct">
				</a>
				</li>
				<li>
					<a href="">
					<img src="<?php echo get_template_directory_uri();?>/images/twitter.svg" height="10px" width="10px" class="social-ct">
				</a>
				</li>
				<li>
					<a href="">
					<img src="<?php echo get_template_directory_uri();?>/images/youtube.svg" height="10px" width="10px" class="social-ct">
				</a>
				</li>
			</ul>
			
		</div>

		<div class="grid md:grid-cols-2 gap-14">

			<label>
				<br>
				<span class="text-gray-300">Name</span>
				<br>
				<span class="wpcf7-form-control-wrap Name">
					<input type="text" name="Name" value size="40" aria-required="true" aria-invalid="false">

				</span>
			</label>

			<br>
			<label>
				<br>
				<span class="text-gray-300">Phone</span>
				<br>
				<span class="wpcf7-form-control-wrap Name">
					<input type="text" name="Name" value size="40" aria-required="true" aria-invalid="false">

				</span>
			</label>
			<br>
			<label>
				<br>
				<span class="text-gray-300">Email</span>
				<br>
				<span class="wpcf7-form-control-wrap Name">
					<input type="text" name="Name" value size="40" aria-required="true" aria-invalid="false">

				</span>
			</label>
			<br>
			<label>
				<br>
				<span class="text-gray-300">company</span>
				<br>
				<span class="wpcf7-form-control-wrap Name">
					<input class="int-cont"type="text" name="company" value size="40" aria-required="true" aria-invalid="false">

				</span>
			</label>
			<br>
			<label>
				<br>
				<span class="text-gray-300">message</span>
				<br>
				<span class="wpcf7-form-control-wrap Name">
					<input class="int-cont"type="text" name="message" value size="40" aria-required="true" aria-invalid="false">

				</span>
			</label>
			<br>
			<label>
			<input type="submit" name="submit">
		   </label>


			
		</div>
		
	</div>
	
</section>












</div>







<?php
get_footer();
?>
