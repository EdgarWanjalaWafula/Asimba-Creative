<section class="home-clients">
    <h4 class="text-uppercase">Some of our valued clients</h4>
    &nbsp; 
    <div class="owl-carousel owl-theme owl-home-clients">
        <?php 
            $clients = array(
                'post_type'         =>  'clients', 
                'posts_per_page'    =>  -1
            ); 

            $loop = new WP_QUERY($clients);
            
            while($loop->have_posts()): $loop->the_post(); 
                ?>
                    <div class="card rounded-0 border-0">
                        <div class="card-body p-0">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" class="img-fluid">
                        </div>
                    </div>
                <?php   
            endwhile; 

            wp_reset_postdata(); 
        ?>
    </div>
</section>