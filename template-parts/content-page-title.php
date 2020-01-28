<?php 
        $background_image = ""; 

        if(has_post_thumbnail()):   
            $background_image = get_the_post_thumbnail_url();  
        else:  
            $background_image = wp_get_attachment_image_url('34','full'); 
        endif; 
    ?>

<section class="ac-page-title d-flex align-items-end position-relative text-white parallax-window" data-parallax="scroll" data-image-src="<?php echo $background_image; ?>">

    <!-- <img src="<?php //echo $background_image; ?>" alt="Asimba Creative"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo get_field('page_tagline'); ?></h1>
            </div>
        </div>
    </div>
</section>