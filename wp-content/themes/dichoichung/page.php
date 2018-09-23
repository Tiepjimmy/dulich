<?php
/*
Template Name: Điều khoản sử dụng
Template Post Type: page
*/
?>
<?php get_header() ?>
    <div id="page">
        <div id="small_title_area_33" class="small_title_area">
            <div class="hero-section hero-xs">
                <?php if (has_post_thumbnail()) { ?>
                    <div class="hero-background">
                        <img class="auto-scale scale-height" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" />
                    </div>
                <?php } ?>
                <div class="hero-content">
                    <div class="hero-content-wrapper text-left">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1>
                                        <?php echo the_title(); ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content text-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="text_area_34" class="text_area">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <div class="text-page-content">
                                    <?php echo the_content(); ?>
                                </div>
                            <?php endwhile; else : ?>
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>