
<?php 

    $solution_tabs = get_field('#solutions_tabs'); 

    if($solution_tabs): 
        ?>
            <section class="solution-tabs asimba-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                $tabs = $solution_tabs['#solutions_categories'];
                                $i = $j = 0; //increment i
                            ?> 
                            <nav>
                                <div class="nav nav-tabs text-uppercase solutions-tab-sec asimba-font-bold" id="nav-tab" role="tablist">
                                    <?php foreach($tabs as $tab): $i++; 
                                        
                                        $active = ""; 
                                        
                                        if($i === 1): 
                                            $active = "active"; 
                                        endif; 
                                        ?>
                                        <a class="nav-item nav-link position-relative solutions-tab-item <?php echo $active; ?>" id="nav-<?php echo $i; ?>-tab" data-toggle="tab" href="#nav-<?php echo $i; ?>" role="tab" aria-controls="nav-<?php echo $i; ?>" aria-selected="true"><?php echo $tab['title']; ?></a>       
                                    <?php endforeach;  ?>
                                </div>
                            </nav>
                            
                            <!-- Loop tab content  -->
                            <div class="tab-content primary-tab-content" id="nav-tabContent">
                                <?php 
                                    foreach($tabs as $tab): $j++; 
                                    
                                        $active_show = ""; 
                                        if($j == 1):
                                            $active_show = "show active"; 
                                        endif; 
                                            ?>
                                            <div class="tab-pane tab-solutions-pane fade <?php echo  $active_show; ?>" id="nav-<?php echo $j; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $j; ?>-tab">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span class="excerpt asimba-font-bold"><?php echo $tab['excerpt']; ?></span>
                                                    </div>
                                                    <div class="col offset-1">
                                                        <?php echo $tab['content']; ?>
                                                    </div>
                                                </div>

                                                <div class="what-we-do"><!-- What We Do  -->
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <h3 class="text-uppercase asimba-font-bold">What we do </h3>
                                                        </div>
                                                        <div class="col offset-1">
                                                            <ul class="list-unstyled m-0 p-0 asimba-large-font">
                                                                <?php 
                                                                    $what_we_do = $tab['what_we_do'];

                                                                    // var_dump($what_we_do); 

                                                                    foreach($what_we_do as $itm): 
                                                                        ?>
                                                                            <li class="text-capitalize position-relative"><?php echo $itm['title']; ?></li>
                                                                        <?php 
                                                                    endforeach; 
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                                    if($tab['packages']): 
                                                        ?>
                                                            <div class="packages-section"><!-- Packages  -->
                                                                <h3 class="text-uppercase asimba-font-bold solutions-tabsection-title">our packages</h3>
                                                                <p>We have simple custom made <?php echo $tab['title']; ?> packages that will be able to take your business forward.</p>

                                                                <a href="<?php echo $tab['packages']; ?>" class="packages-btn asimba-font-bold btn rounded-0 text-uppercase">view here <i class="fa fa-plus ac-color-primary" aria-hidden="true"></i></a>
                                                            </div> <!--End  -->
                                                        <?php  
                                                    endif; 
                                                ?>

                                                <div class="client-focus"><!-- Client Focus Area  -->
                                                    <h3 class="text-uppercase asimba-font-bold solutions-tabsection-title">Client focus - <?php echo $tab['title']; ?></h3>
                                                    <?php 
                                                        $client_focus_shrtcd = $tab['client_focus_content']; 
                                                        echo do_shortcode($client_focus_shrtcd); 
                                                    ?>
                                                </div>
                                            </div>
                                    <?php endforeach; wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php 
    endif; 

    wp_reset_postdata(); 

    $work_together = get_field('#lets_work_together'); 

    if($work_together): 
        ?>
            <section class="lets-work-together asimba-section-padding ">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-uppercase ac-color-primary"><?php echo $work_together['heading']; ?></h3>
                            <?php echo $work_together['content']; ?>

                            <a href="" class="btn rounded-0 border-0 asimba-font-bold text-white">GET IN TOUCH</a>
                        </div>
                    </div>
                </div>
            </section>
        <?php 
    endif;
