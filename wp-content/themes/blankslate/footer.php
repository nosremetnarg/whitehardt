</div>
<footer id="footer">
<div id="copyright">
<!-- &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> -->
<img class="site-logo2" src="<?php echo get_theme_file_uri('images/s&s_logo_white.png')?>"/>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'menu-2' ) ); ?>

</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>