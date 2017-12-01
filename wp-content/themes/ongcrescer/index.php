<?php
/**
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @since OngCrescer 2017-10-23
 */
?>

<?php get_header(); ?>

<main class="l-main">
    <?php
        $images = rwmb_meta( 'home-destaque-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
    ?>
    <div id="carousel-box" style="background: url(<?php echo $image_background ?>) no-repeat top center;">
      <div class="overlay">
        <div class="row-content">
          <div class="ong-carousel">
            <div class="ong-carousel-item">
              <h1 class="title"><?php echo rwmb_meta( 'home-destaque-title' ) ?></h1>
              <p class="subtitle"><?php echo rwmb_meta( 'home-destaque-subtitle' ) ?></p>
            </div>

            <div class="category-icons">
              <ul>
                <li>
                  <i class="fa fa-pencil"></i>
                  <p class="unicode">&#x1F46A;</p>
                  <span>Familia</span>
                </li>
                <li>
                  <i class="fa fa-pencil"></i>
                  <p class="unicode">&#x26BD;</p>
                  <span>Esportes</span>
                </li>
                <li>
                  <i class="fa fa-pencil"></i>
                  <span>Animais</span>
                </li>
                <li>
                  <i class="fa fa-pencil"></i>
                  <span>Crianças e Jovens</span>
                </li>
                <li>
                  <i class="fa fa-pencil"></i>
                  <span>Educação</span>
                </li>
                <li>
                  <i class="fa fa-pencil"></i>
                  <span>Meio Ambiente</span>
                </li>
              </ul>
            </div><!-- /category-icons -->
          </div>
        </div>
      </div> <!-- /overlay -->
    </div> <!-- /carousel-box -->
  </div> <!-- /.row-content -->
</main>

<?php  get_footer(); ?>
