<?php get_header(); ?>

<div class="content-wrapper">

  <div class="body-container">
    <div class="content-container">
      <main>
        <div class="sa-page-body">
          <?php
            while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="row expanded">
                <div class="column large-12">
                  <h1><?php echo the_title(); ?></h1>
                </div>
              </div>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>

          <!-- Helper for course development. Conditional makes sure this is not rendered on export. -->
          <?php if(!\sofad\theme\mini\is_launching()): ?>
              <div class="sofadauteur-export-remove raw-link">
                  Lien de travail : <a href="<?php \sofad\theme\mini\get_id_url(); ?>"><?php \sofad\theme\mini\get_id_url(); ?></a>
              </div>
          <?php endif; ?>
        </div>
        </main>
    </div>
  </div>

</div>



<?php get_footer(); ?>
