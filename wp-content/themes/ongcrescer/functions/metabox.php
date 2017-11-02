<?php
  // use https://metabox.io/online-generator/ to generate new metaboxes
  // require(dirname(__FILE__) . "/metabox/home.php");

  // loads metabox on specific pages
  global $post;
  $_post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
  $_page = $post ? $post : get_page($_post_id);

  if($_page && $_page->post_name == "home"){
    //add_filter( 'rwmb_meta_boxes', 'destaque_meta_box' );
  }
?>
