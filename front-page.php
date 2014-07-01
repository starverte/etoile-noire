<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Flint
 *
 */

get_template_part( 'header', 'front' ); ?>

    <div id="primary" class="content-area col-lg-8">

      <div class="latest-posts">
        <h2>Recent Posts</h2>

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><h3 class="entry-title"><?php the_title(); ?></h3></a><p><?php flint_the_content('Read More', false, 'btn btn-success'); ?></p></article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; // end of the loop. ?>

      <?php flint_content_nav( 'nav-below' ); ?>

      </div><!-- .latest-posts -->



    </div><!-- #secondary -->

    <div id="tertiary" class="col-lg-4">

      <div class="other-sites">
        <h2>Other Sites</h2>

        <div class="row">
          <div class="col-lg-2"><a href="http://starverte.com/sparks"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sparks.png" alt="Sparks Logo"></a></div>
          <div class="col-lg-10">
            <a class="link-sparks" href="http://starverte.com/sparks"><h4>Sparks</h4></a>
            <p>Powerful WordPress development framework</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <a class="link-fcc" href="http://fortcollinscreative.com"><h4>Fort Collins Creative</h4></a>
            <p>Easy and intuitive WordPress hosting, maintenance, and support</p>
          </div>
        </div>
      </div>

      <div class="twitter"></div>
        <a class="twitter-timeline" href="https://twitter.com/starverte" data-widget-id="349574290993188865">Tweets by @starverte</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div><!-- .twitter -->

    </div><!-- #tertiary .other-sites -->

<?php get_footer(); ?>
