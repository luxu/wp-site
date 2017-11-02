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
              <p  class="subtitle"><?php echo rwmb_meta( 'home-destaque-subtitle' ) ?></p>
            </div>

            <div class="category-icons">
              <ul>
                <li>
                  <i class="fa fa-pencil"></i>
                  <span>Familia</span>
                </li>
                <li>
                  <i class="fa fa-pencil"></i>
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
  <?php
  //
  //
  //     <h2 class="tilte">Próximos Eventos</h2>
  //
  //     <p class="subtitle">Lorem ipsum</p>
  //
  //     <div class="event-box">
  //       <img src="images/pic.jpg" alt="">
  //
  //       <h3 class="title"><a href="">São tomé das letras</a></h3>
  //
  //       <span class="date">29 a 01 de outubro</span>
  //
  //       <p class="desc">Lorem ipsum</p>
  //
  //       <a href="#">Saiba mais</a>
  //     </div>
  //
  //     <div class="event-box">
  //       <img src="images/pic.jpg" alt="">
  //
  //       <h3 class="title"><a href="">São tomé das letras</a></h3>
  //
  //       <span class="date">29 a 01 de outubro</span>
  //
  //       <p class="desc">Lorem ipsum</p>
  //
  //       <a href="#">Saiba mais</a>
  //     </div>
  //
  //     <div class="event-box">
  //       <img src="images/pic.jpg" alt="">
  //
  //       <h3 class="title"><a href="">São tomé das letras</a></h3>
  //
  //       <span class="date">29 a 01 de outubro</span>
  //
  //       <p class="desc">Lorem ipsum</p>
  //
  //       <a href="#">Saiba mais</a>
  //     </div>
  //
  ?>
  </div> <!-- /.row-content -->
</main>

<?php  get_footer(); ?>
