<?php
get_header();
$newcat=get_queried_object();
?>

<h4><?php echo $newcat->name; ?></h4>
<div class="news1">
		<?php
           
           $wpnews=array(
           	'post_type'=>'News',
           	'post_status'=>'publish',
           	'tax_query'=>array(
           		array('taxonomy'=>'news_category',
             'field'=>'term_id',
             'terms'=>$newcat->term_id)
           ),
           );
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




<?php
get_footer();
?>