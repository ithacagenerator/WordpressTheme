<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ithacagen
 */

get_header(); 
query_posts('posts_per_page=1'); 
?>

<header id="homehead" class="site-header" role="banner">
		<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			
		</div><!-- .site-branding -->

		<nav id="home-navigation" class="main-navigation" role="navigation">
            <a id="burger">---</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                <ul style="margin-top:0px">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16585">
                     <a href="https://wiki.ithacagenerator.org/">Wiki</a> / 
                     <a href="https://discuss.ithacagenerator.org/">Discuss</a> /
                     <a href="https://ithacagenerator.org/slack-invite/">Slack</a>
                  </li>
                </ul>
    <div style="width: 50%; padding: 20px; margin-left: auto; margin-right: auto; display: block; background-color: yellow; border: medium black solid">
      This holiday season, please share in the spirit of giving. Every little bit helps, and we've made it super easy to contribute. 
      Just <b>click the button below</b> to get donate a little (or a lot). We thank you in advance, and wish you a happy, healthy, and safe holiday season!
    </div>
    <div style="width: 50%; padding: 10px; margin-left: auto; margin-right: auto; display: block;">
      <script src="https://givegab.s3.amazonaws.com/donation-widget/givegab-button.js"></script>
      <button style="margin-left: auto; margin-right: auto; display: block;" class="givegab-button" data-campaign-id="25038" data-host="https://www.givegab.com" data-org-id="454711" style="background-color: #8CC640;">Holiday Campaign</button>
    </div>                
		</nav><!-- #site-navigation -->
<video id="movie"  autoplay loop poster="<?php bloginfo('template_url'); ?>/screenshot.jpg">
    <source src="<?php bloginfo('template_url'); ?>/new.webm" type="video/webm">
    <source src="<?php bloginfo('template_url'); ?>/new.ogg" type="video/ogg">
    <source src="<?php bloginfo('template_url'); ?>/new.mp4" type="video/mp4">
</video>

</header><!-- #masthead -->




<section id="join"><div id="calls"><h4><a href="http://ithacagenerator.org/events/current-classes/">Learn</a></h4><h5><a href="http://ithacagenerator.org/join-us/">Join</a></h5>
    </div><p>We are a community of inventors, crafters, designers, engineers and artists, located in Press Bay Alley at 116 West Green St, Ithaca, New York. Ithaca Generator is a 501(c)(3) public charity.</p><br /></section>
<?php while ( have_posts() ) : the_post(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1000,1000 ), false, '' );
?>


<section id="homenews"><h6>News</h6>
    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
    <div id="newsbg" style="background-image: url(<?php echo $src[0]; ?>);">&nbsp;</div><?php endif; ?>
<span class="postmeta"><?php echo get_the_date('', $post->ID); ?> by <?php the_author_posts_link(); ?></span>

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title( '<h1 id="home-title">', '</h1>' ); ?></a>
                <?php the_excerpt(); ?>

</section>
<?php endwhile; // end of the loop. ?>
<section id="map"><iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/finck.n5comhc4/attribution,geocoder,share.html?access_token=pk.eyJ1IjoiZmluY2siLCJhIjoidWtkSk9kSSJ9.tWULClZUYQQNtyWMs58CuA'></iframe></section>
<section id="events">



<?php



echo EM_Events::output(array('limit'=>5));
?><br clear="all" /><h6>Events</h6>


</section>

<?php get_footer(); ?>
