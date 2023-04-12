<div class="site-foot">
<footer>
	<div class="footer-grid">
	<div class="footer-left">
		<?php wp_nav_menu(array('theme_location'=>'Footer-menu'));?>
	<div>
		<ul class="social">
			<li><a href="<?php the_field('facebook_link',57); ?>"><img src="<?php bloginfo('template_directory')?>/images/facebook.jpg"></a></li>
			<li><a href="<?php the_field('instagram_link',57);?>"><img src="<?php bloginfo('template_directory')?>/images/instagram.jpg"></a></li>
			<li><a href="<?php the_field('twitter_link',57); ?>"><img src="<?php bloginfo('template_directory')?>/images/twitter.png"></a></li>
		</ul>
	</div>
</div>

 <div class="footer-mid">
 	 <?php get_sidebar('footer'); ?> 
</div>

 </div>
</footer>

</div>
</div>
</body>
</html>
<?php wp_footer(); ?>