<section class="menu-panel">
    <div class="menu-panel-dismiss">
        
        <img src="<?php echo get_template_directory_uri(). '/fonts/cross.png'; ?>" alt="close" class="close-icon">
    </div>
    
    <img class="menu-panel-bg" src="<?php echo wp_get_attachment_image_url('68', 'full'); ?>" alt="">
    <div class="menu-2-container w-100">
        <?php
            wp_nav_menu( array(
                'theme_location' 	=> 'menu-1',
                'menu_id'        	=> 'menu-panel-',
                'menu_class'    	=> 'list-unstyled m-0 p-0 text-uppercase',
            ) );
        ?>
    </div>
</section>