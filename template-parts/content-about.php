<?php 

    $about_us_tabs = get_field('#aboutus_tabs'); 

    if($about_us_tabs): 
        $tabs = $about_us_tabs['tabs']; 
        $i = $j = 0; ?> 
        <section class="about-us-tabs">
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs text-uppercase" id="nav-tab" role="tablist">
                                <?php foreach($tabs as $tab): $i++; ?>
                                    <a class="nav-item nav-link position-relative" id="nav-<?php echo $i; ?>-tab" data-toggle="tab" href="#nav-<?php echo $i; ?>" role="tab" aria-controls="nav-<?php echo $i; ?>" aria-selected="true"><?php echo $tab['title']; ?></a>       
                                <?php endforeach;  ?>
                            </div>
                        </nav>
                        <!-- Loop tab content  -->
                        <div class="tab-content" id="nav-tabContent">
                            <?php 
                                foreach($tabs as $tab): $j++; 
                                
                                    $active_show = ""; 
                                    if($j == 1):
                                        $active_show = "show active"; 
                                    endif; 
                                        ?>
                                        <div class="tab-pane fade <?php echo  $active_show; ?>" id="nav-<?php echo $j; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $j; ?>-tab">
                                            <?php 
                                                // $shortcode = ""; 
                                                if($j == 3 || $j==2): 
                                                    echo do_shortcode($tab["content"]); 
                                                else: 
                                                    echo $tab['content']; 
                                                endif; 
                                            ?>
                                        </div>
                                <?php endforeach; wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>            
    <?php endif; //end section 

    $the_story = get_field('#the_story_so_far'); 

    if($the_story): ?>
        <section class="story-so-ar position-relative text-white">
            <img src="<?php echo $the_story['background_image']; ?>" alt="Asimba Creative">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <div class="story-sf-content py-5">
                            <h4 class="text-uppercase position-relative ac-color-primary"><?php echo $the_story['title']; ?></h4>
                            <?php echo $the_story['content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; // end section 

    $we_are_difference = get_field('we_are_different'); 

    if($we_are_difference): ?>
        <section class="we-are-different position-relative">
            <div class="wd-ttile position-relative">
                <img src="<?php echo $we_are_difference['background_image']; ?>" class="img-fluid" alt="Asimba Creative">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-uppercase"><?php echo $we_are_difference['section_title']; ?></h1>
                           <h4 class="text-white"><?php echo $we_are_difference['section_title_paragraph']; ?></h4> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-content">
                <div class="container">
                    <?php 
                        $list = $we_are_difference['our_difference']; 

                        foreach($list as $item): ?>
                            <div class="row align-items-center position-relative">
                                <div class="col-md-5 offset-1 text-white">
                                    <h4><?php echo $item['our_difference_title']; ?></h4>
                                    <p class="m-0c"><?php echo $item['our_difference_content']; ?></p>
                                </div>
                                <div class="col-md-4 offset-1">
                                    <div class="img-wrapper-list-content position-relative">
                                         <img src="<?php echo $item['featured_image']; ?>" alt="Asimba Creative" class="w-75">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                    ?>
                </div>
            </div>

        </section>
    <?php endif; //End section
    
    $reviews = get_field("#reviews"); 

    if($reviews): 
        ?>
            <div class="section reviews">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <div class="owl-carousel owl-theme owl-about-reviews">
                                <?php
                                    $reviews_list = $reviews['reviews_list']; 

                                    foreach($reviews_list as $rev): 
                                        ?>
                                            <div class="review-card text-center">
                                                <img src="<?php echo $rev['user_review_image']; ?>" alt="<?php echo $rev['user_review_title']; ?>">
                                                <h5 class="m-0"><?php echo $rev['user_review_title']; ?></h5>
                                                <span class="rev-role"><?php echo $rev['user_review_role']; ?></span>
                                                <h6 class="rev-company d-block"><?php echo $rev['user_review_company']; ?></h6>
                                                <p><?php echo $rev['user_review_content']; ?></p>
                                            </div>
                                        <?php 
                                    endforeach; 

                                    wp_reset_postdata(); 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
    endif; 

