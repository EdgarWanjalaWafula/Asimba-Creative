<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Asimba_Creative
 */

if ( ! function_exists( 'asimba_creative_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function asimba_creative_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'asimba-creative' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'asimba_creative_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function asimba_creative_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'asimba-creative' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'asimba_creative_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function asimba_creative_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'asimba-creative' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'asimba-creative' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'asimba-creative' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'asimba-creative' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'asimba-creative' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'asimba-creative' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'asimba_creative_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function asimba_creative_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;

function homepage_solutions(){
	$solutions = array(
		'post_type'			=> 	'solutions', 
		'posts_per_page'	=>	3
	); 

	$loop = new WP_QUERY($solutions); 

	while($loop->have_posts()): $loop->the_post(); 
		$solution_excerpt = get_field('#solutions'); 
		?>

		<div class="card rounded-0 border-0">
			<div class="card-body">
				<?php 	
					if($solution_excerpt): ?>
						<?php echo $solution_excerpt['solution_excerpt']; ?>
					<?php endif; 
				?>
			</div>
			<div class="card-footer bg-transparent border-0">
				<a href="#" class="solution-footer text-uppercase ac-color-primary"><h5 class="">see solution <i class="fas fa-arrow-right"></i></h5></a>
			</div>
		</div>
	<?php endwhile; 
}

add_shortcode('homepage-solutions-sc', 'homepage_solutions'); 

function show_team_members(){
	$team = array(
		'post_type'			=> 	'team', 
		'posts_per_page'	=>	-1, 
		'orderby'			=>	'date',
		'order'				=>	'asc'
	); 

	$loop = new WP_QUERY($team); $i = $j = 0; ?>

	<div class="row">
		<nav class="w-100">
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
		
				<?php while($loop->have_posts()): $loop->the_post(); $i++; //loop the images first, then we will loop the tab content latee
					?>
					<a class="nav-item nav-link col-md-3" id="team-<?php echo $i;?>-tab" data-toggle="tab" href="#team-<?php echo $i;?>" role="tab" aria-controls="team-<?php echo $i;?>" aria-selected="true">
						<div class="team-profile">
							<div class="img-wrap position-relative">
								<img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php echo the_title(); ?>">	
							</div>
							<img class="profile-icon" src="<?php echo wp_get_attachment_image_url('141', 'full'); ?>" alt="">
							<div class="profile-content">
								<h5 class="m-0"><?php echo the_title(); ?></h5>
								<span><?php echo get_field('role'); ?></span>
							</div>
						</div>
					</a>
					<?php 
				endwhile; ?>
			</div>
		</nav>

		<div class="tab-content tab-team-content position-relative" id="nav-tabContent">
			<?php 
				while($loop->have_posts()): $loop->the_post(); $j++; 
					?>
						<div class="tab-pane fade animated slow" id="team-<?php echo $j;?>" role="tabpanel" aria-labelledby="team-<?php echo $j;?>-tab">
							<?php echo the_content(); ?>
						</div>
					<?php 
				endwhile; 

				wp_reset_postdata(); 
			?>
		</div>
	</div> <?php 
}

add_shortcode('show-team-sc', 'show_team_members'); 

function show_mission(){
	$aboutus = get_field('#aboutus_tabs'); // parent group 

	if($aboutus): 
		$mission = $aboutus['our_mission']; 
		?>
			<div class="row align-items-center">
				<div class="col-md-7">
					<img src="<?php echo $mission['backgroud_image']; ?>" alt="Asimba Creative" class="img-fluid">
				</div>
				<div class="col-md-5">
					<div class="mission-content">
						<span class="text-uppercase"><?php echo $mission['top_text']; ?></span>
						<h1 class="ac-color-primary"><?php echo $mission['text_value']; ?></h1>
						<span class="text-uppercase"><?php echo $mission['after_value_text']; ?></span>
						<h4><?php echo $mission['after_value_desc']; ?></h4>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<?php echo $mission['mission_description']; ?>
				</div>
			</div>
		<?php 
	endif; 
}

add_shortcode('show-mission-shortcode', 'show_mission'); 