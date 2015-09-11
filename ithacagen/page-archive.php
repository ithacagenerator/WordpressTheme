<?php
/*
 * 
 Template Name: Archives
 */

get_header(); 
?>


	<div id="primary" class="content-area">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			</header><!-- .page-header -->
            		<main id="main" class="site-main" role="main">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			
            <?php the_content(); ?>

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

                        <ul id="archives">
            
		<?php $archive_query = new WP_Query('showposts=1000');
while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li>    <span><?php the_time(get_option('date_format')); ?> by <?php the_author_posts_link(); ?></span>

				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h1 class="post-titles">', '</h1>' ); ?></a>
                                    <?php the_excerpt(); ?>


				</li>
			<?php endwhile; // end of the loop. ?>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
