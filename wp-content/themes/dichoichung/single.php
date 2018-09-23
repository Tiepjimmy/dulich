<?php get_header() ?>
        <div id="page" class="no-bottom-padding">
            <div id="default_title_area_10" class="default_title_area">
                <div class="hero-section hero-sm">
                    <div class="hero-background">
                        <img class="auto-scale scale-height" src="/pictures/1/show/about+header+bg.jpg?sh=ca21f571c038fdc4" alt="About+header+bg" />
                    </div>
                    <div class="hero-content">
                        <div class="hero-content-wrapper text-center">
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
                            <div class="text-page-content">
                                <div id="text_area_11" class="text_area">
                                    <div class="text-page-content">
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
            </div>
        </div>
<?php get_footer() ?>