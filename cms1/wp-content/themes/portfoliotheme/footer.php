</main>
<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <?php if (has_nav_menu('Footer')) : ?>
            <div class="6u 12u$(medium)">
                <?php else : ?>
                <div class="12u 12u$(medium">
                    <?php endif; ?>
                    <ul class="icons">
                        <li><a href="<?php echo get_option('github'); ?>" class="icon fa-github"></a></li>
                        <li><a href="<?php echo get_option('twitter'); ?>" class="icon fa-twitter"></a></li>
                        <li><a href="<?php echo get_option('linkedin'); ?>" class="icon fa-linkedin"></a></li>
                    </ul>
                </div>
                <?php if (has_nav_menu('Footer')) : ?>
                    <div class="6u 12u$(medium)">
                        <ul>
                            <?php wp_nav_menu(array('theme_location' => 'Footer')); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <ul class="copyright">
                <li>&copy; Decuyper Yarne</li>
            </ul>

        </div>
</footer>

<!-- Scripts -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/skel.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/util.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>