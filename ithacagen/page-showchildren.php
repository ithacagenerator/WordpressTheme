<?php
/*
 * 
 Template Name: Show Children
 */

get_header(); 
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

            
            <ul id="children">
				<?php

				$args = array(
				    'post_type'      => 'page',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'DESC',
				    'orderby'        => 'menu_order'
				 );


				$parent = new WP_Query( $args );

				if ( $parent->have_posts() ) : ?>
				
				    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
					   
				        <li id="parent-<?php the_ID(); ?>" class="parent-page" >
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
				            <h2 class="childtitle"><?php the_title(); ?></h2></a>
                            <?php the_excerpt(); ?>

				        </li>

				    <?php endwhile; ?><br clear="all" />
				</ul>
				<?php endif; wp_reset_query(); ?>








			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
