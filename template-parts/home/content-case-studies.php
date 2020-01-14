<section class="case-studies position-relative">
    <div class="section-">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-uppercase text-white">case studies </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme owl-home-case-studies">
        <?php 
            $casestudies = array(
                'post_type'         =>  'case_studies', 
                'posts_per_page'    =>  -1
            ); 

            $loop = new WP_QUERY($casestudies);
            
            while($loop->have_posts()): $loop->the_post(); 
                ?>
                    <div class="case-content position-relative d-flex align-items-end">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="ac-color-primary text-uppercase"><?php echo the_title(); ?></h1>
                                    <?php echo the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
            endwhile; 
        ?>
    </div>

    <a href="" class="case-studies-cta text-uppercase ac-color-primary">view all case studies</a>

</section>