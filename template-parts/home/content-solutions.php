<?php 
    $solution_section = get_field('#solutions'); 

    if($solution_section): ?>
        <section class="solution-home position-relative" style="background-image:url('<?php echo $solution_section['solution_section_background_image']; ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase ac-color-primary"><?php echo $solution_section['solution_section_title']; ?></h1>
                        <p class="text-white "><?php echo $solution_section['solution_section_content']; ?></p>

                        <div class="card-group">
                        <?php echo do_shortcode('[homepage-solutions-sc]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; 