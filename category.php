<?php get_header(); ?>
<div class="container">
   <div class="row">
     <div class="col-sm-10">
       <div class="row">
           <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="col-sm-6">
                <a class="post-link" href="<?php echo get_permalink(); ?>">
                <div class="post">
                  <div class="post-image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="post-title">
                  <h1><?php the_title(); ?></h1>
               <div class="post-excerpt">
                 <p><?php the_excerpt(); ?><p>
               </div>
                </div>
               </div>
             </a>
              </div>
            <?php endwhile; ?>
            <div class="post-nav">
              <div class="nav-previous"><?php next_posts_link( 'Older Posts' ); ?></div>
              <div class="nav-next"><?php previous_posts_link( 'Newer Posts' ); ?></div>
            </div>
           <?php endif; ?>
       </div>
   </div>
     <div class="col-sm-2">
<?php get_template_part("template-parts/sidebar"); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
