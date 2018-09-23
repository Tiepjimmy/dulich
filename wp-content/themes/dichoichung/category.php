<?php get_header() ?>
    <div id="page">
        <div class="hero-section force-height">
            <div class="hero-background background-stretch">
                <div class="background-inner">
                    <div class="default-slider">
                        <div id="slider_5bb8d0ee9329e44114ebfa5bb7cf8691_1530411182803-slider" class="slick slider">
                            <div>
                                <?php
                                // get the current taxonomy term
                                $term = get_queried_object();
                                $image = get_field('taxonomy_image', $term);
                                ?>
                                <?php if($image) { ?>
                                    <img alt="<?php echo single_cat_title(); ?>" src="<?php echo $image; ?>" />
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background-overlay opacity-50"></div>
            </div>
            <div class="hero-content">
                <div class="hero-content-wrapper bottom">
                    <div class="container-fluid container-wide">
                        <div class="bottom-heading">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="stronger">
                                        <?php single_cat_title(); ?>
                                    </h1>
                                </div>
                                <div class="col-sm-12">
                                    <p><?php echo category_description() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-filters search-filters-simple">
            <div class="search-filters-inner">
                <div class="search-filters-content">
                    <div class="container-fluid container-wide">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content" id="search-results">
            <div class="listing listing-full">
                <div class="container-fluid container-full">
                    <div class="row">
                        <div class="infinite-scroll clearfix" data-content-url="/destination/1/results.json?" data-offset="12">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="listing-item" id="post-<?php the_ID(); ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="background-wrap">
                                        <div class="listing-item-background">
                                            <div class="listing-item-background-image">
                                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
                                            </div>
                                            <div class="background-overlay opacity-20"></div>
                                        </div>
                                    </div>
                                    <div class="listing-item-content with-background">
                                        <div class="listing-item-content-inner">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <?php endwhile; ?>

                            <?php else : ?>

                                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                    <h1>Not Found</h1>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row">
                        <?php echo easy_wp_pagenavigation(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>