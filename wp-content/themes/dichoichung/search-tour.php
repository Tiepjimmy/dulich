 <input type="checkbox" id="header-mega-menu-toggle" class="hidden">
<div class="header-mega-menu" id="header-mega-menu">
    <div class="header-separator"></div>
    <div id="header-1">
    <form action="<?php bloginfo('url') ?>" accept-charset="UTF-8" method="get" role="search">
    <div class="container-fluid search-section">
        <div class="row">
            <div class="col-sm-12">
                <div class="tour-search">
                    <div class="form-group">
                        <i class="icon icon-search"></i>
                        <input type="search" name="s" class="form-control input-lg" placeholder="Search tours">
                        <div class="text-center">
                    <button type="search" class="btn m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning">Tim Kiem</button>
                </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<!--    <div class="header-separator hidden-xs hidden-ms"></div>-->
<!--        <div class="container-fluid hidden-xs hidden-ms">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-12">-->
<!--                    <h2>Tìm kiếm tour du lịch</h2>-->
<!--                </div>-->
<!--                <div class="col-sm-4">-->
<!--                    <div class="row">-->
<!--                        <div id="where-to-category" class="search-category">-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="icon-wrap">-->
<!--                                    <span class="icon icon-big icon-plane"></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-9">-->
<!--                                <h4>Địa điểm</h4>-->
<!--                            </div>-->
<!--                            <div class="col-sm-9">-->
<!--                                <div class="top">-->
<!--                                    <select name="tour_destination" class="form-control" style="height: auto !important;" placeholder="Tất cả thể loại">-->
<!--                                        <option value="" selected>Tất cả địa điểm</option>-->
<!--                                        --><?php
//
//                                        $terms = get_terms('tour_destination', array(
//                                            'hide_empty' => false,
//                                        ));
//
//                                        foreach ($terms as $term) :
//                                            ?>
<!--                                            <option value="--><?php //echo $term->term_id ?><!--">--><?php //echo $term->name ?><!--</option>-->
<!--                                        --><?php //endforeach; ?>
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-4">-->
<!--                    <div class="row">-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-4">-->
<!--                    <div class="row">-->
<!--                        <div id="type-category" class="search-category">-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="icon-wrap">-->
<!--                                    <span class="icon icon-big icon-hiker"></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-9">-->
<!--                                <h4>Thể loại</h4>-->
<!--                            </div>-->
<!--                            <div class="col-sm-9">-->
<!--                                <div class="top">-->
<!--                                    <select name="tour_type" class="form-control" style="height: auto !important;">-->
<!--                                        <option value="" selected>Tất cả thể loại</option>-->
<!--                                    --><?php
//                                    $terms = get_terms('tour_type', array(
//                                        'hide_empty' => false,
//                                    ) );
//
//                                    foreach ($terms as $term) :
//                                        ?>
<!--                                        <option value="--><?php //echo $term->term_id ?><!--">--><?php //echo $term->name ?><!--</option>-->
<!--                                    --><?php //endforeach; ?>
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-12">-->
<!--                    <div class="text-center">-->
<!--                        <button type="submit" class="show-btn btn btn-lg btn-primary btn-arrow">Tìm kiếm</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </form>
    </div>
</div>