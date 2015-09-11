<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ithacagen
 */

?>			
<section id="meta">
<div><h2>Categories</h2>
<?php wp_list_cats('sort_column=name&sort_order=asc'); ?></div>

<div><h2>Find Us</h2>
<p>
116 West Green St., Ithaca, New York, AKA: Press Bay Alley. Go past Life's So Sweet chocolate store and down the stairs by the loading dock. We are open during the hours shown on our makerspace <a href="http://ithacagenerator.org/events/times-the-makerspace-is-open">Open Times calendar</a>.</p></div>
</section>
<section id="footerinfo">
    <?php get_search_form(); ?>
    <ul id="social">
    <li class="facebook"><a href="https://www.facebook.com/IthacaGenerator/">Like Us</a></li>
    <li class="twitter"><a href="http://www.twitter.com/ithacagen">@ithacagen</a></li>
    <li class="email"><a href="#">Email Us</a></li>
    <li class="googlegroup"><a href="#">Google Group</a></li>
    </ul>

    <p>Copyright © 2015 Ithaca Generator<br />
    Powered by <a href="http://www.wordpress.org">Wordpress</a><br />
    Icons by <a href="https://thenounproject.com/">The Noun Project</a><br />
    Fonts by <a href="http://losttype.com/">Lost Type Co-op</a> and <a href="https://www.mozilla.org/en-US/styleguide/products/firefox-os/typeface/">Mozilla</a><br />
    Design/Development by IG member <a href="http://www.tylerfinck.com">Tyler Finck</a>
    </p>
    <a id="footergen" href="http://www.ithacagenerator.org">Ithaca Generator</a>
</section>

<?php wp_footer(); ?>

</body>
</html>
