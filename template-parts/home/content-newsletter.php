<?php 

    $events  = get_field('#newsletter'); 

    if($events): 
        ?>
            <div class="home-newsletter">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <h3 class="text-uppercase"><?php echo $events['section_title']; ?></h3>
                        <?php echo $events['section_content']; ?>
                    </div>
                    <div class="col-md-7 justify-content-end">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-0 border-0" placeholder="Enter your email here." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn border-0" type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php 
    endif; 