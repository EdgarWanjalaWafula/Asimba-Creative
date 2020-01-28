<section class="search-panel d-flex align-items-center">
    <img src="<?php echo get_template_directory_uri(). '/fonts/cross.png'; ?>" alt="close" class="close-icon">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
            <form id="searchform" method="get" action="<?php echo home_url('/'); ?>" class="d-flex">
                <input type="text" class="search-field" name="s" placeholder="What are you looking for?" value="<?php the_search_query(); ?>">
                <button type="submit" class="btn rounded-0 border-0"><i class="fas fa-search"></i></button>
            </form>
            </div>
        </div>
    </div>
</section>