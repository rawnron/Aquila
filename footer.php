<?php 
/**
 * Footer template.
 * 
 * @package Aquila
 */
?>
<Footer>
    <h3>Footer</h3>
    <?php 
        if ( is_active_sidebar( 'sidebar-2' ) ) {
           ?>
            <aside>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </aside>
           <?php
        }
    ?>
</Footer>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>