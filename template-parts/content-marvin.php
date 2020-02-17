<section class="events-home position-relative">
    <div class="container">
        <div class="row">
            <!-- Page title  -->
            <div class="col-md-6">
                <h4>Events</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 first-col"> <!-- open first col  -->
                <?php 

                    $events = array(
                        'post_type' =>  'post', 
                        'posts_per_page'    =>  3 
                    ); 

                    $loop = new WP_QUERY($events); 

                    $i = 0; 

                    while($loop->have_posts()): $loop->the_post(); 
                        $i++; 
                        if($i == 1 || $i == 2 ): 
                            ?>  
                                <div class="event-item">
                                    <div class="row">
                                        <div class="col-md-5 position-relative">
                                            <div class="event-poster">
                                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" class="img-fluid">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-5 offset-1">
                                            <h4><?php echo the_title(); ?></h4>

                                            <?php echo wp_trim_words(get_the_content(), '15'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                        else: 
                            ?>
                                </div> <!-- close .col-md-8  -->
                                </div> <!-- close .row  -->
                                </div> <!-- close .container  -->

                                <div class="active-event">
                                    <div class="event-item d-flex align-items-end" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>')">
                                       <div class="event-content position-relative text-white">
                                       <h4><?php echo the_title(); ?></h4>
                                        <?php echo wp_trim_words(get_the_content(), '15'); ?>
                                       </div>
                                    </div>
                                </div>
                            <?php 
                        endif; 
                    endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>

