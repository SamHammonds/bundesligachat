<?php get_header(); ?>
	<meta name="title" content="For The Love Of German Football - Bundesliga Chat">
	<meta name="description" content="Bundesliga Chat">
	<div class="container">
	   <div class="row">
			 <div class="col-sm-12">
				 <h1>Welcome To Bundesliga Chat</h1>
			 </div>
		 </div>
		 <div class="row">
			 <div class="col-sm-12">
			 <div id="featured">
<?php query_posts('posts_per_page=1');
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<div class="featured-image">
				<?php the_post_thumbnail(); ?>
			</div>
		</a>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
			<p><?php the_excerpt(); ?></p>
		<?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
			</div>
		</div>
		 		<div class="col-sm-10">
					<div class="row">
						<?php query_posts('offset=1'); ?>
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
							<?php endif; ?>
							<div class="see-all-posts">
								<h3><a href="all-posts">See All Posts</a></h3>
						</div>
					</div>
			</div>
			<div class="col-sm-2">
				<?php get_template_part("template-parts/sidebar"); ?>
		</div>
  	</div>
	</div>
<?php get_footer(); ?>
