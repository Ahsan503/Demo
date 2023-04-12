<?php get_header();
?>

<div class="page-not-found">
	<h4>Error 404</h4>
	
</div>

<div class="mid-container">
<?php
$newCat=get_terms(['taxonomy'=>'news_category', 
	'hide_empty'=>false,
	 'orderby'=>'name',
	 'order'=>'DESC']);
foreach ($newCat as $newcatdata) {

 $meta_image = get_wp_term_image($newcatdata->term_id);


?>

<div class="icon-news">
<div class="icon-img">
<img src="<?php echo $meta_image; ?> ">
</div>
    <div class="icon-name">
	<a href="<?php echo get_category_link($newcatdata->term_id);?>"><h3><?php echo $newcatdata->name; ?></h3></a>
	</div>
</div>

<?php } ?>

</div>

<?php get_footer();
?>


