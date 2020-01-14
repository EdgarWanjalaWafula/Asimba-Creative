<?php 
    get_template_part( 'template-parts/home/content', 'landing-banner' ); 
    get_template_part( 'template-parts/home/content', 'solutions' ); 
    get_template_part( 'template-parts/home/content', 'case-studies' ); ?>
<section class="home-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="ac-section-title text-uppercase ac-color-primary">latest</h4>
            </div>
        </div>

        <!-- Start row for looping of blog posts  -->
        <div class="row">
            <?php get_template_part( 'template-parts/home/content', 'blog' ); ?>
        </div>
    </div>
</section>

<section class="clients-newsletter">
    <div class="container">
        <?php 
            get_template_part( 'template-parts/home/content', 'clients' );
            get_template_part( 'template-parts/home/content', 'newsletter' ); ?>
    </div>
</section>
