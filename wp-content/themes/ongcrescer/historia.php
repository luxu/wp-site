	<?php
	/**
	 * Template Name: Historia
	 *
	 * @package WordPress
	 * @subpackage OngCrescer
	 * @template historia
	 * @since OngCrescer 2017-10-23
	 */
	?>

	<?php get_header(); ?>

	<main class="l-main">
    <?php
        $images = rwmb_meta( 'historia-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
    ?>
    <div class="historia-ong-carousel-item">
    	<h1 class="historia-title"><?php echo rwmb_meta( 'historia-title' ) ?></h1>
    	<p  class="historia-subtitle"><?php echo rwmb_meta( 'historia-subtitle' ) ?></p>
    </div>
    <div class="historia-ong-carousel" style="background: url(<?php echo $image_background ?>) no-repeat ">
    </div>
    <div id="historia-content">
	    	<?php
	    	$args = array('post_type' => 'page', 'pagename' => 'historia');
	    	$my_page = get_posts($args);
	    	?>
	    	<?php if($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
	    		<?php the_content();?>
	    	<?php endforeach; ?>
	    <?php endif; ?>
  	</div>
	</main>

	<?php  get_footer(); ?>