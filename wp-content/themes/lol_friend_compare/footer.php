    <footer class="site-footer">

        <nav class="site-nav">

            <?php

            $arguments = [
                'theme_location' => 'footer'
            ];

            wp_nav_menu( $arguments);

            ?>

        </nav>

        <p><?= bloginfo('name'); ?> - &copy; <?= date('Y'); ?></p>

    </footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
