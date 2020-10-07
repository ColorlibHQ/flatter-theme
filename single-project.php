<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package flatter
 */

get_header();
$project_img_id         = flatter_meta( 'project_img');
$project_img_url        = wp_get_attachment_image_src( $project_img_id, 'flatter_project_details_thumb_1140x570' )[0];
$details_txt_left       = flatter_meta( 'details_txt_left');
$details_txt_right      = flatter_meta( 'details_txt_right');

if( have_posts() ) {
    while( have_posts() ) : the_post();
    ?>

    <!-- project-area-start -->
    <div class="project-review-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="single-review">
                        <h2><?php echo esc_html( 'Project overview', 'flatter-companion' );?></h2>
                        <?php the_content()?>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="review-thumb">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'flatter_project_thumb_554x428', array( 'alt' => get_the_title() ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project-area-end -->

    <?php 
    if ( $project_img_url || $details_txt_left || $details_txt_right ) { 
        ?>
        <!-- full-width-project-details start -->
        <div class="full-width-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="full-thumb">
                            <img src="<?php echo esc_url( $project_img_url )?>" alt="<?php echo get_the_title()?> image">
                        </div>
                    </div>

                    <?php 
                    if( $details_txt_left ) { 
                        ?>
                        <div class="col-xl-6 col-md-6">
                            <div class="solution-wrap">
                                <?php echo $details_txt_left?>
                            </div>
                        </div>
                        <?php 
                    } ?>

                    <?php 
                    if( $details_txt_right ) { 
                        ?>
                        <div class="col-xl-6 col-md-6">
                            <div class="solution-wrap">
                                <?php echo $details_txt_right?>
                            </div>
                        </div>
                        <?php 
                    } ?>
                </div>
            </div>
        </div>
        <!-- full-width-project-details-end -->
        <?php 
    }
    endwhile;
}

// Footer============
get_footer();