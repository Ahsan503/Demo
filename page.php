
<?php
 get_header();
 the_post(); 
 ?>

<div class="page-title">
<h1><?php the_title() ?></h1>
</div>
<?php the_post_thumbnail(array(500,500)); ?>
<div class="page-content">
</div>
</h6><?php the_content(); ?></h6>
</div>
 <?php get_footer();?>