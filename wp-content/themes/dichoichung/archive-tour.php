<?php get_header() ?>
    <div id="page">
        <div class="search-filters">
            <div class="search-filters-inner">
                <div class="search-filters-background background-stretch">
                    <div class="background-inner">
                        <img class="auto-scale" src="/assets/app/search-bg/default-197297a84a4e4b66fdf5bdd3d7b32353.jpg" alt="Default" />
                    </div>
                    <div class="background-overlay opacity-80"></div>
                </div>
                <div class="search-filters-content">
                    <form class="search-form form-inline ajax-form" role="form" data-type="html" data-update-action="/search/results" data-results-target="#search-results .infinite-scroll" data-prefix="ajax_form_20647_search" action="/search" accept-charset="UTF-8" data-remote="true" method="get">
                        <input name="utf8" type="hidden" value="&#x2713;" />
                        <div class="container-fluid container-wide">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-row text-center">
                                        <h1><?php echo get_the_archive_title() ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="page-content" id="search-results">
            <div class="listing listing-full">
                <div class="container-fluid container-full">
                    <div class="row">
                        <div class="clearfix">
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
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>