<?php 
    $banner = get_field('#landing_banner_section'); 

    if($banner): ?>
        <section class="landing-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-uppercase"><?php echo $banner['banner_title']; ?></h1>
                        <p class="d-block banner-desc"><?php echo $banner['banner_content']; ?></p>

                        <!-- Cta  -->
                        <a class="btn rounded-0 text-uppercase" href="<?php echo $banner['banner_page_url']; ?>" >find out how <i class="fa fa-plus ac-color-primary" aria-hidden="true"></i></a>
                    </div>

                    <div class="col-md-5 banner-image" style="background-image:url('<?php echo $banner['banner_image']; ?>');">
                        <div class="" >

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; 