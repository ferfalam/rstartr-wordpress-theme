<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
    </main><!-- #main -->

    
    <div class="footer">
        <div class="container">
            <div class="logo">
                <img src="<?= get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" alt="Rstartr, la plateforme d’apprentissage en ligne.">
            </div>
            <ul class="foot-nav">
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Aide</a></li>
                <li><a href="#">Nos formations</a></li>
                <li><a href="#">Mentions Légales</a></li>
            </ul>
        </div>
    </div>
    
</div><!-- #page -->


<?php wp_footer(); ?>
<script src="<?= get_stylesheet_directory_uri().'/assets/js/main.min.js' ?>" defer></script>

</body>
</html>
