<footer class="footer">
    <nav class="site-menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
            )
        );
        ?>
    </nav>
    <a class="footer-logo" href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/inagaki_office_icon/image3.png" alt="フッターロゴ">
    </a>
    <p class="copyright"><small>&copy;オントロジー</small></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>