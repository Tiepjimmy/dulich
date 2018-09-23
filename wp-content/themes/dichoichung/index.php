<?php get_header() ?>
        <div id="page">
            <div class="hero-section with-margin">
                <div class="hero-background background-stretch">
                    <div class="background-inner">
                        <img alt="Faralong.com" src="http://faralong.com/assets/app/front-single-f5c23defda8824beba203b25f7b12f80.jpg"/>
                    </div>
                    <div class="background-overlay opacity-50"></div>
                </div>
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="hero-content-wrapper">
                                    <i class="icon icon-people hero-icon"></i>
                                    <h3>Đặt Trải Nghiệm Để Cùng Đồng Hành  Với<br/><strong> Chuyên Gia Du Lịch</strong></h3>
                                </div>
                                <div class="arrow-search">
                                    <form action="<?php bloginfo('url') ?>" class="form-inline" method="get" earchrole="search">
                                       <input type="text" name="s" placeholder="Tìm Địa Điểm Trải Nghiệm Du lịch">
                                            <button type="submit">Search</button>
                                     
                                    </form>
                            
                                </div>
                            </div>
                         </div> 
                     
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="arrow-search">
                            
                                    <form action="<?php bloginfo('url') ?>" class="form-inline" method="get" earchrole="search">
                                       <input type="text" name="s" placeholder="Tìm Địa Điểm Trải Nghiệm Du lịch">
                                            <button type="submit">Search</button>
                                     
                                    </form>
                            
                                </div>
                            </div>
                        </div> -->
                        <?php the_search_query(); ?>
                      
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="new-on-faralong">
                            <div class="sub-heading">
                                <h2>TOUR MỚI NHẤT</h2>
                                <p class="caption">Các tour mới dành cho bạn</p>
                            </div>
                            <div class="listing">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'numberposts' => 3,
										'posts_per_page' => 3,
                                        'offset' => 0,
                                        'category' => 0,
                                        'orderby' => 'post_date',
                                        'order' => 'DESC',
                                        'include' => '',
                                        'exclude' => '',
                                        'meta_key' => '',
                                        'meta_value' =>'',
                                        'post_type' => 'tour',
                                        'post_status' => 'publish',
                                        'suppress_filters' => true
                                    );

                                    $recent_posts = new WP_Query( $args );
                                    if ( $recent_posts->have_posts() ) :
                                        while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

                                        <div class="col-ms-6 col-sm-4">
                                        <div class="listing-item">
                                            <a href="<?php the_permalink() ?>">
                                                <div class="listing-item-background">
                                                    <div class="listing-item-background-image">
                                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                                    </div>
                                                    <div class="background-overlay opacity-20"></div>
                                                </div>
                                                <div class="listing-item-content with-background">
                                                    <div class="listing-item-content-inner">
                                                        <h3><?php echo get_the_title() ?></h3>
                                                        <p><?php echo the_excerpt(); ?></p>
                                                        
                                                        <div class="button">
                                                            <div class="daidien"><?php the_post_thumbnail(array(110, 110)); ?>
                                                            <span class="front-testimonial-slider">MA Doan Tiep</span>
                                                        </div>
                                                            
                                                         
                                                           <span id="price-x">
                                                           
                                                            <span  id="icon-y">
                                                                <i class="icon icon-castle"></i>
                                                            </span>
                                                           <label>Chỉ Từ:</label>
                                                            <?php $tour_by_pack = get_field('tour_by_pack');
                                                            $nhomgia = $tour_by_pack['nhom_gia'][0]['price_by_quantity'];
                                                            echo number_format($nhomgia). ' đ';
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                        endwhile;
                                        endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                            </div>
                        </div>
<!--                        <div class="sub-heading">-->
<!--                            <h2>Khám phá</h2>-->
<!--                            <p class="caption">Tour du lịch thú vị</p>-->
<!--                        </div>-->
<!--                        <div class="listing">-->
<!--                            <div class="row">-->
<!--                                <div class="col-ms-12 col-sm-8">-->
<!--                                    <div class="listing-item listing-item-big">-->
<!--                                        <a href="/india/3">-->
<!--                                            <div class="listing-item-background">-->
<!--                                                <div class="listing-item-background-image">-->
<!--                                                    <img src="/assets/app/samples/explore/india-1477594a261629b109aa0dee49d2444e.jpg" alt="India" />-->
<!--                                                </div>-->
<!--                                                <div class="background-overlay opacity-25"></div>-->
<!--                                            </div>-->
<!--                                            <div class="listing-item-content with-background">-->
<!--                                                <div class="valign">-->
<!--                                                    <div class="valign-middle">-->
<!--                                                        <div class="listing-item-icon">-->
<!--                                                            <i class="icon icon-feng-shui"></i>-->
<!--                                                        </div>-->
<!--                                                        <h3>Discover Amazing India</h3>-->
<!--                                                        <div class="link text-primary">-->
<!--                                                            <span class="arrow">&rarr;</span> 24 tours starting at €170 or less-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-ms-6 col-sm-4">-->
<!--                                    <div class="listing-item ">-->
<!--                                        <a href="/nepal/1?search%5Btype_exclude%5D%5B%5D=2&amp;search%5Btype_exclude%5D%5B%5D=3&amp;search%5Btype_exclude%5D%5B%5D=4&amp;search%5Btype_exclude%5D%5B%5D=6&amp;search%5Btype_exclude%5D%5B%5D=7&amp;search%5Btype_exclude%5D%5B%5D=8">-->
<!--                                            <div class="listing-item-background">-->
<!--                                                <div class="listing-item-background-image">-->
<!--                                                    <img src="/assets/app/samples/explore/nepal-f2d19a5dba9beb6c1e24be389437271f.jpg" alt="Nepal" />-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="listing-item-content with-background">-->
<!--                                                <div class="valign">-->
<!--                                                    <div class="valign-middle">-->
<!--                                                        <h3>Trekking in Nepal</h3>-->
<!--                                                        <div class="link text-primary">-->
<!--                                                            <span class="arrow">&rarr;</span> 19 tours starting at-->
<!--                                                            <br> €414 or less-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-ms-6 col-sm-4">-->
<!--                                    <div class="listing-item ">-->
<!--                                        <a href="/ecuador/21">-->
<!--                                            <div class="listing-item-background">-->
<!--                                                <div class="listing-item-background-image">-->
<!--                                                    <img src="/assets/app/samples/explore/galapagos-0b58a880a122c34729d5f42a955269af.jpg" alt="Galapagos" />-->
<!--                                                </div>-->
<!--                                                <div class="background-overlay opacity-25"></div>-->
<!--                                            </div>-->
<!--                                            <div class="listing-item-content with-background">-->
<!--                                                <div class="valign">-->
<!--                                                    <div class="valign-middle">-->
<!--                                                        <h3>Explore Ecuador</h3>-->
<!--                                                        <div class="link text-primary">-->
<!--                                                            <span class="arrow">&rarr;</span> 2 tours starting at-->
<!--                                                            <br> €999 or less-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-ms-6 col-sm-4">-->
<!--                                    <div class="listing-item ">-->
<!--                                        <a href="/search?search%5Bcontinent%5D=4&amp;search%5Btype_exclude%5D%5B%5D=1&amp;search%5Btype_exclude%5D%5B%5D=2&amp;search%5Btype_exclude%5D%5B%5D=4&amp;search%5Btype_exclude%5D%5B%5D=6&amp;search%5Btype_exclude%5D%5B%5D=7&amp;search%5Btype_exclude%5D%5B%5D=8">-->
<!--                                            <div class="listing-item-background">-->
<!--                                                <div class="listing-item-background-image">-->
<!--                                                    <img src="/assets/app/samples/explore/africa-17b6ede46985bc735db9e74fb606635d.jpg" alt="Africa" />-->
<!--                                                </div>-->
<!--                                                <div class="background-overlay opacity-30"></div>-->
<!--                                            </div>-->
<!--                                            <div class="listing-item-content with-background">-->
<!--                                                <div class="valign">-->
<!--                                                    <div class="valign-middle">-->
<!--                                                        <h3>Africa Safaris</h3>-->
<!--                                                        <div class="link text-primary">-->
<!--                                                            <span class="arrow">&rarr;</span> 18 tours starting at-->
<!--                                                            <br> €168 or less-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-ms-6 col-sm-4">-->
<!--                                    <div class="listing-item ">-->
<!--                                        <a href="/turkey/18?search%5Btype_exclude%5D%5B%5D=2&amp;search%5Btype_exclude%5D%5B%5D=3&amp;search%5Btype_exclude%5D%5B%5D=4&amp;search%5Btype_exclude%5D%5B%5D=6&amp;search%5Btype_exclude%5D%5B%5D=7&amp;search%5Btype_exclude%5D%5B%5D=8">-->
<!--                                            <div class="listing-item-background">-->
<!--                                                <div class="listing-item-background-image">-->
<!--                                                    <img src="/assets/app/samples/explore/turkey-fa818cc6b56ea3c219a6c8b9cacb723f.jpg" alt="Turkey" />-->
<!--                                                </div>-->
<!--                                                <div class="background-overlay opacity-30"></div>-->
<!--                                            </div>-->
<!--                                            <div class="listing-item-content with-background">-->
<!--                                                <div class="valign">-->
<!--                                                    <div class="valign-middle">-->
<!--                                                        <h3>Turkey by Foot</h3>-->
<!--                                                        <div class="link text-primary">-->
<!--                                                            <span class="arrow">&rarr;</span> 8 tours starting at-->
<!--                                                            <br> €1&nbsp;128 or less-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="more-link">-->
<!--                            <a class="btn btn-secondary btn-block" href="--><?php //bloginfo('url') ?><!--/search">Xem tất cả các tours</a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="new-on-faralong">
                            <div class="sub-heading">
                                <h2>TOUR NỔI BẬT</h2>
                                <p class="caption">Các tour mới dành cho bạn</p>
                            </div>
                            <div class="listing">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'posts_per_page' => 3,
                                        'offset' => 0,
                                        'category' => 0,
                                        'orderby' => 'post_date',
                                        'order' => 'DESC',
                                        'include' => '',
                                        'exclude' => '',
                                        'meta_key' => 'tour_noi_bat',
                                        'meta_value' =>'1',
                                        'post_type' => 'tour',
                                        'post_status' => 'publish',
                                        'suppress_filters' => true
                                    );

                                    $recent_posts = new WP_Query( $args );
                                    if ( $recent_posts->have_posts() ) :
                                        while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

                                            <div class="col-ms-6 col-sm-4">
                                                <div class="listing-item">
                                                    <a href="<?php the_permalink() ?>">
                                                        <div class="listing-item-background">
                                                            <div class="listing-item-background-image">
                                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                                            </div>
                                                            <div class="background-overlay opacity-20"></div>
                                                        </div>
                                                        <div class="listing-item-content with-background">
                                                            <div class="listing-item-content-inner">
                                                                <h3><?php echo get_the_title() ?></h3>
                                                                <p><?php echo the_excerpt(); ?></p>
                                                                <div class="button">
                                                                <div class="daidien"><?php the_post_thumbnail(array(110, 110)); ?>
                                                            <span class="front-testimonial-slider">MA Doan Tiep</span>
                                                        </div>
                                                            <span id="price-x">
                                                           
                                                            <span id="icon-y">
                                                                <i class="icon icon-castle"></i>
                                                            </span>
                                                                    <label>Chỉ Từ;</label>                           
                                                                    <?php $tour_by_pack = get_field('tour_by_pack');
                                                                    $nhomgia = $tour_by_pack['nhom_gia'][0]['price_by_quantity'];
                                                                    echo number_format($nhomgia). ' đ';
                                                                    ?>
                                                            </span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                        endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                               
                            </div>
                            <div id="xemct" class="section-illustration pricing-illustration">
                            <p  class="text-center">
                            <a class="black-link" href="http://dichung.local/tour">Xem các tour khác</a>
                            </p>
                            </div>
                        </div>
                        <!--                        <div class="sub-heading">-->
                        <!--                            <h2>Khám phá</h2>-->
                        <!--                            <p class="caption">Tour du lịch thú vị</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="listing">-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-ms-12 col-sm-8">-->
                        <!--                                    <div class="listing-item listing-item-big">-->
                        <!--                                        <a href="/india/3">-->
                        <!--                                            <div class="listing-item-background">-->
                        <!--                                                <div class="listing-item-background-image">-->
                        <!--                                                    <img src="/assets/app/samples/explore/india-1477594a261629b109aa0dee49d2444e.jpg" alt="India" />-->
                        <!--                                                </div>-->
                        <!--                                                <div class="background-overlay opacity-25"></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="listing-item-content with-background">-->
                        <!--                                                <div class="valign">-->
                        <!--                                                    <div class="valign-middle">-->
                        <!--                                                        <div class="listing-item-icon">-->
                        <!--                                                            <i class="icon icon-feng-shui"></i>-->
                        <!--                                                        </div>-->
                        <!--                                                        <h3>Discover Amazing India</h3>-->
                        <!--                                                        <div class="link text-primary">-->
                        <!--                                                            <span class="arrow">&rarr;</span> 24 tours starting at €170 or less-->
                        <!--                                                        </div>-->
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div class="col-ms-6 col-sm-4">-->
                        <!--                                    <div class="listing-item ">-->
                        <!--                                        <a href="/nepal/1?search%5Btype_exclude%5D%5B%5D=2&amp;search%5Btype_exclude%5D%5B%5D=3&amp;search%5Btype_exclude%5D%5B%5D=4&amp;search%5Btype_exclude%5D%5B%5D=6&amp;search%5Btype_exclude%5D%5B%5D=7&amp;search%5Btype_exclude%5D%5B%5D=8">-->
                        <!--                                            <div class="listing-item-background">-->
                        <!--                                                <div class="listing-item-background-image">-->
                        <!--                                                    <img src="/assets/app/samples/explore/nepal-f2d19a5dba9beb6c1e24be389437271f.jpg" alt="Nepal" />-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="listing-item-content with-background">-->
                        <!--                                                <div class="valign">-->
                        <!--                                                    <div class="valign-middle">-->
                        <!--                                                        <h3>Trekking in Nepal</h3>-->
                        <!--                                                        <div class="link text-primary">-->
                        <!--                                                            <span class="arrow">&rarr;</span> 19 tours starting at-->
                        <!--                                                            <br> €414 or less-->
                        <!--                                                        </div>-->
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div class="col-ms-6 col-sm-4">-->
                        <!--                                    <div class="listing-item ">-->
                        <!--                                        <a href="/ecuador/21">-->
                        <!--                                            <div class="listing-item-background">-->
                        <!--                                                <div class="listing-item-background-image">-->
                        <!--                                                    <img src="/assets/app/samples/explore/galapagos-0b58a880a122c34729d5f42a955269af.jpg" alt="Galapagos" />-->
                        <!--                                                </div>-->
                        <!--                                                <div class="background-overlay opacity-25"></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="listing-item-content with-background">-->
                        <!--                                                <div class="valign">-->
                        <!--                                                    <div class="valign-middle">-->
                        <!--                                                        <h3>Explore Ecuador</h3>-->
                        <!--                                                        <div class="link text-primary">-->
                        <!--                                                            <span class="arrow">&rarr;</span> 2 tours starting at-->
                        <!--                                                            <br> €999 or less-->
                        <!--                                                        </div>-->
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div class="col-ms-6 col-sm-4">-->
                        <!--                                    <div class="listing-item ">-->
                        <!--                                        <a href="/search?search%5Bcontinent%5D=4&amp;search%5Btype_exclude%5D%5B%5D=1&amp;search%5Btype_exclude%5D%5B%5D=2&amp;search%5Btype_exclude%5D%5B%5D=4&amp;search%5Btype_exclude%5D%5B%5D=6&amp;search%5Btype_exclude%5D%5B%5D=7&amp;search%5Btype_exclude%5D%5B%5D=8">-->
                        <!--                                            <div class="listing-item-background">-->
                        <!--                                                <div class="listing-item-background-image">-->
                        <!--                                                    <img src="/assets/app/samples/explore/africa-17b6ede46985bc735db9e74fb606635d.jpg" alt="Africa" />-->
                        <!--                                                </div>-->
                        <!--                                                <div class="background-overlay opacity-30"></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="listing-item-content with-background">-->
                        <!--                                                <div class="valign">-->
                        <!--                                                    <div class="valign-middle">-->
                        <!--                                                        <h3>Africa Safaris</h3>-->
                        <!--                                                        <div class="link text-primary">-->
                        <!--                                                            <span class="arrow">&rarr;</span> 18 tours starting at-->
                        <!--                                                            <br> €168 or less-->
                        <!--                                                        </div>-->
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div class="col-ms-6 col-sm-4">-->
                        <!--                                    <div class="listing-item ">-->
                        <!--                                        <a href="/turkey/18?search%5Btype_exclude%5D%5B%5D=2&amp;search%5Btype_exclude%5D%5B%5D=3&amp;search%5Btype_exclude%5D%5B%5D=4&amp;search%5Btype_exclude%5D%5B%5D=6&amp;search%5Btype_exclude%5D%5B%5D=7&amp;search%5Btype_exclude%5D%5B%5D=8">-->
                        <!--                                            <div class="listing-item-background">-->
                        <!--                                                <div class="listing-item-background-image">-->
                        <!--                                                    <img src="/assets/app/samples/explore/turkey-fa818cc6b56ea3c219a6c8b9cacb723f.jpg" alt="Turkey" />-->
                        <!--                                                </div>-->
                        <!--                                                <div class="background-overlay opacity-30"></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="listing-item-content with-background">-->
                        <!--                                                <div class="valign">-->
                        <!--                                                    <div class="valign-middle">-->
                        <!--                                                        <h3>Turkey by Foot</h3>-->
                        <!--                                                        <div class="link text-primary">-->
                        <!--                                                            <span class="arrow">&rarr;</span> 8 tours starting at-->
                        <!--                                                            <br> €1&nbsp;128 or less-->
                        <!--                                                        </div>-->
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="more-link">-->
                        <!--                            <a class="btn btn-secondary btn-block" href="--><?php //bloginfo('url') ?><!--/search">Xem tất cả các tours</a>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="default-slider">
                <div id="front-testimonial-slider" class="slick slider" data-autoplay-speed="5000">
                    <?php
                    $args = array(
                        'numberposts' => 5,
                        'offset' => 0,
                        'category' => 0,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'include' => '',
                        'exclude' => '',
                        'meta_key' => '',
                        'meta_value' =>'',
                        'post_type' => 'chuyengia',
                        'post_status' => 'publish',
                        'suppress_filters' => true
                    );

                    $recent_posts = new WP_Query( $args );
                    if ( $recent_posts->have_posts() ) :
                        while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                        <div>
                            <div class="testimonial">
                                <div class="background-stretch">
                                    <div class="background-inner">
                                        <img class="auto-scale" src="https://www.faralong.com/assets/app/testimonial-background-e684035dc82eb690d463ec09669841c3.jpg" alt="Testimonial background" />
                                    </div>
                                    <div class="background-overlay opacity-50"></div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="valign">
                                                <div class="valign-middle">
                                                    <div class="comment">
                                                        "<?php $viet = $recent_posts->posts[0];
                                                        echo $viet->post_content;
                                                        ?>"
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-2 col-md-1">
                                            <div class="valign">
                                                <div class="valign-middle">
                                                    <div class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-3 col-md-4">
                                            <div class="valign">
                                                <div class="valign-middle">
                                                    <div class="author-tour">
                                                        <div class="author">
                                                            <?php the_title() ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="anchor" id="how-faralong-works"></div>
                        <div class="sub-heading">
                            <h2>ĐI DU LỊCH DỄ DÀNG VÀ TIẾT KIỆM VỚI ĐI CHƠI CHUNG</h2>
                        </div>
                        <div class="about-section">
                            <div class="row equal-heights">
                                <div class="col-12 col-ms-6 col-md-3 ">
                                    <div class="section-item ">
                                    <div>
                                    <div id="icon-x">
                                        <div class="section-illustration devices-illustration">
                                            <i class="icon icon-laptop"></i>
                                            <i class="icon icon-mobile"></i>
                                        </div>
                                    </div>
                                        <h3><strong>Sử dụng trên mọi thiết bị</strong></h3>
                                        <p>Bạn có thể đặt tour đi bất cứ đâu, bất cứ lúc nào.</p>
                                         </div>
                                    </div>
                                </div>
                                <div class="col-12 col-ms-6 col-md-3">
                                    <div class="section-item ">
                                    <div id="icon-x">
                                        <div class="section-illustration some-illustration">
                                            <i class="icon icon-facebook-logo-circle"></i>
                                            
                                        </div>
                                    </div>
                                        <h3><strong>Market to reduce your own price.</strong></h3>
                                        <p>Bạn có thể chia sẻ tour cho mọi người trên toàn thế giới.</p>
                                    </div>
                                </div>
                                <div class="clearfix visible-ms"></div>
                                <div class="col-12 col-ms-6 col-md-3">
                                    <div class="section-item ">
                                     <div id="icon-x">
                                        <div class="section-illustration pricing-illustration">

                                           
                                            <i class=""></i> 
                                        </div>
                                     </div>
                                        <h3><strong>Càng nhiều người tham gia, giá càng rẻ</strong></h3>
                                        <p>Mọi chi phí có thể chia sẻ được chia đều giữa những người tham gia.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-ms-6 col-md-3 ">
                                    <div class="section-item">
                                    <div id="icon-x">
                                        <div class="section-illustration people-illustration">
                                            <i class="icon icon-people"></i>
                                        </div>
                                    </div>
                                        <h3><strong>Tận hưởng gói kỳ nghỉ của bạn.</strong></h3>
                                        <p>Chúng tôi làm việc với các nhà khai thác chất lượng cao có kinh nghiệm ở tất cả các địa điểm.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="xemct" class="section-illustration pricing-illustration">
                            <p  class="text-center">
                            <a class="black-link" href="<?php the_permalink(2) ?>">→ Xem chi tiết</a>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $args = array(
                'numberposts' => 6,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'include' => '',
                'exclude' => '',
                'meta_key' => 'recently_booked',
                'meta_value' =>'1',
                'post_type' => 'tour',
                'post_status' => 'publish',
                'suppress_filters' => true
            );

            $recent_posts = new WP_Query( $args );
            if ( $recent_posts->have_posts() ) : ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="sub-heading">
                            <h2>TOUR VỪA ĐƯỢC ĐẶT</h2>
                        </div>
                    </div>
                </div>
                <div class="listing listing-small" data-content-url="null" data-offset="null">
                    <div class="row listing-items">
                    <?php
                        while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                            <div class="col-ms-6 col-md-4">
                                <div class="listing-item">
                                    <a href="<?php the_permalink() ?>">
                                        <div class="listing-item-image">
                                            <?php the_post_thumbnail(array(100, 100)); ?>
                                        </div>
                                        <div class="listing-item-content with-image">
                                            <h4><?php the_title() ?></h4>
                                        <div id="price-y">
                                                           
                                            <span id="icon-hike">
                                                <i class="icon icon-hiker"></i>
                                            </span>
                                            <span>
                                              <label>Chỉ Từ:</label> 
                                            <?php $tour_by_pack = get_field('tour_by_pack');
                                            $nhomgia = $tour_by_pack['nhom_gia'][0]['price_by_quantity'];
                                            echo number_format($nhomgia). ' đ';
                                            ?></span>
                                            </span>
                                        </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php endif;
            wp_reset_query();
            ?>


            <?php
            $args = array(
                'numberposts' => 6,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'include' => '',
                'exclude' => '',
                'meta_key' => 'most_viewed',
                'meta_value' =>'1',
                'post_type' => 'tour',
                'post_status' => 'publish',
                'suppress_filters' => true
            );

            $recent_posts = new WP_Query( $args );
            if ( $recent_posts->have_posts() ) : ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="sub-heading">
                            <h2>Xem nhiều nhất</h2>
<!--                            <p class="caption">People are currently interested in these tours</p>-->
                        </div>
                    </div>
                </div>
                <div class="listing listing-small infinite-scroll-click" data-content-url="/index/more.json?type=views" data-offset="6">
                    <div class="row listing-items">
                        <?php
                        while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                            <div class="col-ms-6 col-md-4">
                                <div class="listing-item">
                                    <a href="<?php the_permalink() ?>">
                                        <div class="listing-item-image">
                                            <?php the_post_thumbnail(array(110, 110)); ?>
                                        </div>
                                        <div class="listing-item-content with-image">
                                            <h4><?php the_title() ?></h4>
                                            <div id="price-y">
                                                           
                                            <span id="icon-hike">
                                                <i class="icon icon-hiker"></i>
                                            </span>
                                            <span>
                                                      <label>Chỉ Từ:</label>
                                            <?php $tour_by_pack = get_field('tour_by_pack');
                                                $nhomgia = $tour_by_pack['nhom_gia'][0]['price_by_quantity'];
                                                echo number_format($nhomgia). ' đ';
                                                ?>
                                            </span>
                                        </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    
                </div>
            </div>
            <?php endif;
            wp_reset_query();
            ?>
        </div>
<?php get_footer() ?>