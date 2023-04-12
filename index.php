
<?php
get_header();
?>
<div class="blg-container">
<h3 style="margin-left: 10px; margin-top: 10px;">Blogs</h3>
<div class="blog">
<?php while (have_posts()) {
	the_post();
	$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
?>
<div class="blog-item">
 <a href="<?php the_permalink(); ?>"><img class="lazyloaded" src="<?php echo $imagepath[0] ?>"/>
 	<h3 class="blog-h5"><?php the_title(); ?></h3>
 </a>

 
</div>
<?php } ?>
</div>
<section>
<div class="blg-cont">
	<div class="blg-emp">
		
	</div>
	<div class="blg-btn">
		<a href="<?php the_permalink(386); ?>"><button> view all</button></a>
	</div>

</div>
</section>

<section id="banner-bottom" style="background: linear-gradient(0deg, rgb(31 41 55) 0%, rgb(31 41 55) 50%, rgb(255 255 255) 50%, rgb(255 255 255);")
>
	<div class="mx-auto bg-white p-20 border-2 rounded-3xl relative container">
		<div class="grid grid-cols-4">
			<div class="lg:col-span-3 col-span-4 flex flex-col justify-center">
				<h2 class="font-bold text-5xl leading-tight text-stroke-gray mb-5">
					<span class="text-fill-gray">We’d love</span>
					<span class="text-stroke-width-0 text-fill-black"> to hear</span>
					" your ideas! ";
					
				</h2>
				<p>
				<a href="" class="bg-red-800 hover:bg-red-900 inline-flex px-6 py-3 rounded-full text-white">
				 <button class="btn-blg-talk"> let's talk</button>
				</a>
				</p>
				
			</div>

			<div class="flex flex-col justify-center">
				<img src="<?php echo get_template_directory_uri();?>/images/triangles-icon.png" height="60px" width="90px" class="blg-img">
				
			</div>
			
		</div>
		
	</div>
</section>

</div>
<?php
get_footer();
?>


