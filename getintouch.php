<?php 
/* 
Template Name: Get in touch
*/ 

get_header();


?>

<?php
if (isset($_POST['save'])) {
  $id=wp_insert_post(
  	array(
  		'post_type'=>'news',
  		'post_status'=>'draft',
  		'post_title'=>$_POST['ntitle'],
  		'post_content'=>$_POST['ndes'],
  		'post_excerpt'=>$_POST['nuser'],



  )
  );
  wp_set_object_terms($id , $_POST['newCat'],'news_category');
}

?>


<div class="get-in-touch">
	<h2>Get In Touch</h2>
	<form method="post" class="formdata">
	<div><h5 class="get-h5">User</h5></div>
	<div><input type="text" name="nuser" class="get-input"></div>
	<div><h5 class="get-h5">Title</h5></div>
	<div><input type="text" name="ntitle" class="get-input"></div>
	<div><h5 class="get-h5">Description</h5></div>
	<div><textarea name="ndes" id="get-textarea"></textarea></div>
	<div>
		<select name="newCat" class="get-select">
			<option>Select Category</option>
			<?php
			$newCat=get_terms(['taxonomy'=>'news_category', 
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
	<button name="save" class="get-save">Save</button>
</form>
</div>






<?php
	get_footer()
?>