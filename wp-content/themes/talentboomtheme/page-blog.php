<?php get_header(); ?>
  <main role="main">
    <section>
      <div class="container">
        <div class="blog-featured">
          <?php if ($paged >= 2) : ?>
            <?php else : ?>

            <?php 
              $args = array(
                'post_type' => 'post',
                'posts_per_page'=> 2
              );
            $the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php if ( has_post_thumbnail() ) {
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                  } else {
                    
                  } ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo $feat_image; ?>'); ">
                  <div class="content">
                    <span class="date"><?php the_time('F j, Y'); ?></span>
                    <h3><?php the_title(); ?></h3>
                    <div class="category"><?php _e( '', 'html5blank' ); the_category(', '); ?></div>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read Post</a>
                  </div>
                </article>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else : ?>
              <?php endif; ?>
            
            <?php endif; ?>

        </div>
        <div class="blog-loop">

          <?php
            if ( $paged >= 2 ){
              $args = array(
                'post_type' => 'post',
                'posts_per_page'=> 9,
                'offset' => '8',
                'paged' => $paged
              );
            } else {
              $args = array(
                'post_type' => 'post',
                'posts_per_page'=> 6,
                'offset' => '2',
                'paged' => $paged
              );
            }
            $the_query = new WP_Query( $args ); ?>
            
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <?php if ( has_post_thumbnail()) : ?>
                    <div class="thumbnail">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                  <?php endif; ?>
                  <h3><?php the_title(); ?></h3>
                  <div class="blurb"><?php html5wp_excerpt('html5wp_index'); ?></p>
                  <a href="<?php the_permalink(); ?>" class="read-more">Read Post</a><span class="date"><?php the_time('F j, Y'); ?></span>
                </article>
              <?php endwhile; ?>

              <div class="pagination">
                <?php 
                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $the_query->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => '?paged=%#%',
                      'show_all'     => false,
                      'type'         => 'plain',
                      'end_size'     => 2,
                      'mid_size'     => 1,
                      'prev_next'    => true,
                      'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer') ),
                      'next_text'    => sprintf( '%1$s <i></i>', __( 'Older') ),
                      'add_args'     => false,
                      'add_fragment' => '',
                  ) );
                ?>
              </div>

              <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
              <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
