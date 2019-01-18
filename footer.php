<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wootheme
 */

?>

	</div><!-- #content -->

	<div class="container-fluid footer">
	
<div class="row">
  <div class="col-md-4 footer-sidebar1">
  	


<?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>


  </div>
  <div class="col-md-4 footer-sidebar2">
  	<?php
if(is_active_sidebar('footer-sidebar-2')){
dynamic_sidebar('footer-sidebar-2');
}
?>
  </div>
  <div class="col-md-4 footer-sidebar3">
  	<?php
if(is_active_sidebar('footer-sidebar-3')){
dynamic_sidebar('footer-sidebar-3');
}
?>
  </div>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
