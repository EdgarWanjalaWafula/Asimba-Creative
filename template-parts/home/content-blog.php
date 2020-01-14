<?php 
    $latestblog = array(
        'post_type'         =>  'post', 
        'posts_per_page'    =>  3
    ); 

    $i = 0; 

    $loop = new WP_QUERY($latestblog);
    
    
    $i = 0; 

    while($loop->have_posts()): $loop->the_post(); 
        $cat = get_the_category($post->ID); 
        $cat->term_id;
        $cat->name;

        // var_dump($cat); 

        $i++; 

        if($i==1):
            ?>
                <div class="col-md-6 first-col <?php echo $i; ?>">
                    <div class="blog-post">
                        <div class="blog-thumbnail position-relative d-flex align-items-end" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            <div class="">
                                <span class="text-white text-uppercase">latest > category <?php echo $cat[3]; ?></span>    
                                <h5 class="ac-color-primary"><?php echo the_title(); ?></h5>
                            </div>
                        </div>
                        <div class="blog-excerpt text-justify text-white">
                            <p class="d-block"><?php echo wp_trim_words(get_the_content(), '60'); ?></p>
                            <a href="#" class="text-white">Read More <i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5"> 
                    <div class="second-col">
            <?php 
            else: 
                ?>
                <div class="blog-post">
                    <div class="blog-thumbnail">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                    
                        <h5 class="ac-color-primary"><?php echo the_title(); ?></h5>
                    </div>
                    <div class="blog-excerpt text-justify text-white">
                        <p class="d-block"><?php echo wp_trim_words(get_the_content(), '25'); ?></p>
                        
                        <a href="#" class="text-white">Read More <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                
            <?php 
        endif; 
    endwhile; 
    ?></div> </div><?php 
    wp_reset_postdata(); 