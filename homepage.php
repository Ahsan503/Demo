<?php
/* 
Template Name: home 
*/ 
get_header();
$cat=get_categories(array('taxonomy'=>'category'));
?>
<div class="grid-container-home">
<div class="site-left">
<?php get_sidebar(); ?> 
</div>

<div class="site-right">
	<img src="<?php echo get_template_directory_uri();?>/images/travel.jpg" height="473px" width="100%">
</div>
</div>
<section>
	<div class="grid-container-home1">
<div class="mid-left">
	<div>
		<h3>World Tour</h3>
		<ul>
			<li>Travel</li>
			<li>hotel</li>
			<li>packges</li>
		</ul>
	</div>
	
</div>

<div class="mid-right">
	<h2>categories</h2>
	<div>
		<?php
	foreach ($cat as  $catvalue) {	
	
	?>	
	<div>
		<a href="<?php echo get_category_link($catvalue->term_id);?>"> <h3><?php echo $catvalue->name; ?>(<?php echo $catvalue->count; ?>)</h3></a>
	</div>

    <?php } ?>
	</div>
</div>
</div>
</section>

<section class="news-section">
	<div class="w3-container">
		<div>   <h2 id="news-head">Latest News</h2>
			<div class="search">
				<form method="get">
				<input type="text" name="title" placeholder="search by name" style="width: 160px; height: 20px;">
				<input type="button" value="search" name="">


			</form>
			</div>
		</div>
<div class="news1">
		<?php
           
           $wpnews=array(
           	'post_type'=>'News',
           	'post_status'=>'publish');
           $newsquery=new wp_Query($wpnews);
           while ($newsquery->have_posts()) 
           {
           	
           $newsquery->the_post();
           $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'small');

           ?>


        <div class="news-item">
		<img src="<?php echo $imagepath[0] ?> " class="news-img">
		<p id="news-des"><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<h6>22-3-2023</h6>
        </div>
		
		 
	<?php } ?>

   </div>

</div>

</section>


<!--<section>
	<div class="home-services row ml-0 mr-0 mt-5">
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
		<div class="news-item2">
		<img src="<?php echo $imagepath[0] ?> " class="news-img">
		<p id="news-des"><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<h6>Posted on |<?php the_time( 'l, F jS, Y' ); ?></h6>
        </div>
<?php } ?>
	</div>
	
</section> -->



<?php
get_footer()
?>