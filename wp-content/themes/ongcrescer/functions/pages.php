<?php
function theme_create_page($title, $template="", $content="sem conteúdo"){
  if (is_admin()){
    $page_check = get_page_by_title($title);
    $new_page = array(
      'post_type' => 'page',
      'post_title' => $title,
      'post_content' => $content,
      'post_status' => 'publish',
      'post_author' => 1,
    );
    if(!isset($page_check->ID)){
      $new_page_id = wp_insert_post($new_page);
      if(!empty($new_page_template)){
        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
      }
    }
  }
}

theme_create_page('Home');
theme_create_page('Historia');
theme_create_page('Projetos');
?>
