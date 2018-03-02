<?php
/*
 * Template Name: Article
 * Template Post Type: post, page, product
 */
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-10">
      <?php if (have_posts()) :
         while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="single-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="single-content">
            <h1><?php the_title(); ?></h1>
            <a><?php the_category(); ?></a>
               <?php the_content(); ?>
            </div>
          <?php
         endwhile;
      endif; ?>
    </div>
    <div class="col-2">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
  </div>
</div>

<?php
get_footer(); ?>
