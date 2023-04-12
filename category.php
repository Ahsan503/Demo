<?php
get_header();
?>
<div class="blog">
<?php while (have_posts()) {
	the_post();
	$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
?>
<div class="blog-item">
 <img src="<?php echo $imagepath[0] ?>"/>
 <p><?php echo get_the_date(); ?> </p>
<h3><?php the_title() ?></h3>
<p><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>">Read more</a>
</div>
<?php } ?>
</div>
<?php wp_pagenavi(); ?>



<?php
get_footer();
?>
