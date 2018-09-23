<?php get_header() ?>
<div id="page">
	<!--            <div class="search-filters">-->
	<!--                <div class="search-filters-inner">-->
	<!--                    <div class="search-filters-background background-stretch">-->
	<!--                        <div class="background-inner">-->
	<!--                            <img class="auto-scale" src="/assets/app/search-bg/default-197297a84a4e4b66fdf5bdd3d7b32353.jpg" alt="Default" />-->
	<!--                        </div>-->
	<!--                        <div class="background-overlay opacity-80"></div>-->
	<!--                    </div>-->
	<!--                    <div class="search-filters-content">-->
	<!--                        <form class="search-form form-inline ajax-form" role="form" data-type="html" data-update-action="/search/results" data-results-target="#search-results .infinite-scroll" data-prefix="ajax_form_20647_search" action="/search" accept-charset="UTF-8" data-remote="true" method="get">-->
	<!--                            <input name="utf8" type="hidden" value="&#x2713;" />-->
	<!--                            <div class="container-fluid container-wide">-->
	<!--                                <div class="row">-->
	<!--                                    <div class="col-sm-12">-->
	<!--                                        <div class="title-row text-center">-->
	<!--                                            <h1>Find your dream tour!</h1>-->
	<!--                                            <div class="location-selector" data-none-selected-text="Everywhere">-->
	<!--                                                Tours to <i class="icon icon-map-point"></i> <span class="selector dropdown-toggle prevent-select" data-toggle="dropdown-sticky">Everywhere</span>-->
	<!--                                                <div class="location-selection dropdown-content">-->
	<!--                                                    <select class="form-control split-optgroups" name="search[location]" data-group-name="search[continent]" data-select-name="search[country]">-->
	<!--                                                        <option value="">** All continents</option>-->
	<!--                                                        <optgroup label="Africa" data-value="4">-->
	<!--                                                            <option value="4" data-group-value="">-->
	<!--                                                                ** All countries-->
	<!--                                                            </option>-->
	<!--                                                            <option value="4-133" data-group-value="133">Kenya</option>-->
	<!--                                                            <option value="4-137" data-group-value="137">Madagascar</option>-->
	<!--                                                            <option value="4-149" data-group-value="149">Rwanda</option>-->
	<!--                                                            <option value="4-166" data-group-value="166">Tanzania, United Republic of</option>-->
	<!--                                                        </optgroup>-->
	<!--                                                        <optgroup label="Asia" data-value="1">-->
	<!--                                                            <option value="1" data-group-value="">-->
	<!--                                                                ** All countries-->
	<!--                                                            </option>-->
	<!--                                                            <option value="1-6" data-group-value="6">Bhutan</option>-->
	<!--                                                            <option value="1-10" data-group-value="10">Cambodia</option>-->
	<!--                                                            <option value="1-12" data-group-value="12">China</option>-->
	<!--                                                            <option value="1-20" data-group-value="20">India</option>-->
	<!--                                                            <option value="1-31" data-group-value="31">Kyrgyzstan</option>-->
	<!--                                                            <option value="1-32" data-group-value="32">Lao People&#39;s Democratic Republic</option>-->
	<!--                                                            <option value="1-37" data-group-value="37">Mongolia</option>-->
	<!--                                                            <option value="1-39" data-group-value="39">Nepal</option>-->
	<!--                                                            <option value="1-50" data-group-value="50">Thailand</option>-->
	<!--                                                            <option value="1-52" data-group-value="52">Turkey</option>-->
	<!--                                                            <option value="1-47" data-group-value="47">Vietnam</option>-->
	<!--                                                        </optgroup>-->
	<!--                                                        <optgroup label="Central America" data-value="8">-->
	<!--                                                            <option value="8" data-group-value="">-->
	<!--                                                                ** All countries-->
	<!--                                                            </option>-->
	<!--                                                            <option value="8-203" data-group-value="203">Costa Rica</option>-->
	<!--                                                            <option value="8-222" data-group-value="222">Nicaragua</option>-->
	<!--                                                        </optgroup>-->
	<!--                                                        <optgroup label="Europe" data-value="2">-->
	<!--                                                            <option value="2" data-group-value="">-->
	<!--                                                                ** All countries-->
	<!--                                                            </option>-->
	<!--                                                            <option value="2-52" data-group-value="52">Turkey</option>-->
	<!--                                                        </optgroup>-->
	<!--                                                        <optgroup label="South America" data-value="7">-->
	<!--                                                            <option value="7" data-group-value="">-->
	<!--                                                                ** All countries-->
	<!--                                                            </option>-->
	<!--                                                            <option value="7-235" data-group-value="235">Argentina</option>-->
	<!--                                                            <option value="7-236" data-group-value="236">Bolivia</option>-->
	<!--                                                            <option value="7-240" data-group-value="240">Ecuador</option>-->
	<!--                                                            <option value="7-245" data-group-value="245">Peru</option>-->
	<!--                                                        </optgroup>-->
	<!--                                                    </select><a href="#" class="btn btn-primary">OK</a> </div>-->
	<!--                                            </div>-->
	<!--                                        </div>-->
	<!--                                    </div>-->
	<!--                                </div>-->
	<!--                                <div class="row">-->
	<!--                                    <div class="col-sm-12">-->
	<!--                                        <div class="type-selector">-->
	<!--                                            <label>Tour types</label>-->
	<!--                                            <div class="selector">-->
	<!--                                                <span class="selector-item">-->
	<!--                                    <input type="checkbox" value="1" name="search[type_exclude][]" id="ajax_form_20647_search_type_exclude_1" />-->
	<!--                                    <label for="ajax_form_20647_search_type_exclude_1">-->
	<!--                                        <i class="icon icon-hiker"></i>-->
	<!--                                        <span class="name">Active</span>-->
	<!--                                                </label>-->
	<!--                                                </span>-->
	<!--                                                <span class="selector-item">-->
	<!--                                    <input type="checkbox" value="2" name="search[type_exclude][]" id="ajax_form_20647_search_type_exclude_2" />-->
	<!--                                    <label for="ajax_form_20647_search_type_exclude_2">-->
	<!--                                        <i class="icon icon-tree"></i>-->
	<!--                                        <span class="name">Nature</span>-->
	<!--                                                </label>-->
	<!--                                                </span>-->
	<!--                                                <span class="selector-item">-->
	<!--                                    <input type="checkbox" value="3" name="search[type_exclude][]" id="ajax_form_20647_search_type_exclude_3" />-->
	<!--                                    <label for="ajax_form_20647_search_type_exclude_3">-->
	<!--                                        <i class="icon icon-lion"></i>-->
	<!--                                        <span class="name">Wildlife</span>-->
	<!--                                                </label>-->
	<!--                                                </span>-->
	<!--                                                <span class="selector-item">-->
	<!--                                    <input type="checkbox" value="4" name="search[type_exclude][]" id="ajax_form_20647_search_type_exclude_4" />-->
	<!--                                    <label for="ajax_form_20647_search_type_exclude_4">-->
	<!--                                        <i class="icon icon-castle"></i>-->
	<!--                                        <span class="name">Culture</span>-->
	<!--                                                </label>-->
	<!--                                                </span>-->
	<!--                                                <span class="selector-item">-->
	<!--                                    <input type="checkbox" value="6" name="search[type_exclude][]" id="ajax_form_20647_search_type_exclude_6" />-->
	<!--                                    <label for="ajax_form_20647_search_type_exclude_6">-->
	<!--                                        <i class="icon icon-biker"></i>-->
	<!--                                        <span class="name">Biking</span>-->
	<!--                                                </label>-->
	<!--                                                </span>-->
	<!--                                                <span class="selector-item">-->
	<!--                                    <input type="checkbox" value="7" name="search[type_exclude][]" id="ajax_form_20647_search_type_exclude_7" />-->
	<!--                                    <label for="ajax_form_20647_search_type_exclude_7">-->
	<!--                                        <i class="icon icon-express"></i>-->
	<!--                                        <span class="name">Xpress</span>-->
	<!--                                                </label>-->
	<!--                                                </span>-->
	<!--                                            </div>-->
	<!--                                        </div>-->
	<!--                                        <hr>-->
	<!--                                    </div>-->
	<!--                                </div>-->
	<!--                                <div class="filters basic-filters">-->
	<!--                                    <div class="row">-->
	<!--                                        <div class="col-sm-4">-->
	<!--                                            <div class="filter">-->
	<!--                                                <label>Tour duration</label>-->
	<!--                                                <select class="form-control" name="search[duration][value]" id="ajax_form_20647_search_duration_value">-->
	<!--                                                    <option value="">** Any</option>-->
	<!--                                                    <option value="1">1 day</option>-->
	<!--                                                    <option value="2">2 days</option>-->
	<!--                                                    <option value="3">3 days</option>-->
	<!--                                                    <option value="4">4 days</option>-->
	<!--                                                    <option value="5">5 days</option>-->
	<!--                                                    <option value="6">6 days</option>-->
	<!--                                                    <option value="7">7 days</option>-->
	<!--                                                    <option value="8">8 days</option>-->
	<!--                                                    <option value="9">9 days</option>-->
	<!--                                                    <option value="10">10 days</option>-->
	<!--                                                    <option value="11">11 days</option>-->
	<!--                                                    <option value="12">12 days</option>-->
	<!--                                                    <option value="13">13 days</option>-->
	<!--                                                    <option value="14">14 days</option>-->
	<!--                                                    <option value="15">15 days</option>-->
	<!--                                                    <option value="16">16 days</option>-->
	<!--                                                    <option value="17">17 days</option>-->
	<!--                                                    <option value="18">18 days</option>-->
	<!--                                                    <option value="19">19 days</option>-->
	<!--                                                    <option value="20">20 days</option>-->
	<!--                                                </select>-->
	<!--                                            </div>-->
	<!--                                        </div>-->
	<!--                                    </div>-->
	<!--                                </div>-->
	<!--                            </div>-->
	<!--                        </form>-->
	<!--                    </div>-->
	<!--                </div>-->
	<!--            </div>-->
	<!--            <div class="filters-active">-->
	<!--                <div class="container-fluid container-wide">-->
	<!--                    <div class="row">-->
	<!--                        <div class="col-sm-12">-->
	<!--                            <h5 class="title">Active filters</h5>-->
	<!--                            <ul class="list-inline">-->
	<!--                                <li data-filter="destination" data-target="select[name=&#39;search[continent]&#39;]"><a href="#" class="label bg-primary">Destination <span class="clear-icon">&times;</span></a></li>-->
	<!--                                <li data-filter="type" data-target="input[name=&#39;search[type_exclude][]&#39;]"><a href="#" class="label bg-primary">Type <span class="clear-icon">&times;</span></a></li>-->
	<!--                                <li data-filter="duration" data-target="select[name^=&#39;search[duration]&#39;]"><a href="#" class="label bg-primary">Duration <span class="clear-icon">&times;</span></a></li>-->
	<!--                                <li data-filter="date" data-target="input[name^=&#39;search[date]&#39;]"><a href="#" class="label bg-primary">Date <span class="clear-icon">&times;</span></a></li>-->
	<!--                                <li data-filter="price" data-target="input[name^=&#39;search[price]&#39;]"><a href="#" class="label bg-primary">Price <span class="clear-icon">&times;</span></a></li>-->
	<!--                                <li data-filter="rating" data-target="input[name=&#39;search[rating]&#39;]"><a href="#" class="label bg-primary">Rating <span class="clear-icon">&times;</span></a></li>-->
	<!--                                <li data-filter="service_level" data-target="select[name=&#39;search[service_level]&#39;]"><a href="#" class="label bg-primary">Service level <span class="clear-icon">&times;</span></a></li>-->
	<!--                                <li data-filter="group_size" data-target="select[name^=&#39;search[group_size]&#39;]"><a href="#" class="label bg-primary">Group size <span class="clear-icon">&times;</span></a></li>-->
	<!--                            </ul>-->
	<!--                        </div>-->
	<!--                    </div>-->
	<!--                </div>-->
	<!--            </div>-->
	<div id="page">
		<div class="search-filters">
			<div class="search-filters-inner">
				<div class="search-filters-background background-stretch">
					<div class="background-inner"> 
						<img alt="Faralong.com" src="http://faralong.com/assets/app/front-single-f5c23defda8824beba203b25f7b12f80.jpg"/>
					</div>
					<div class="background-overlay opacity-80"></div>
				</div>
				<div class="search-filters-content">
					<form class="search-form form-inline ajax-form" role="form" data-type="html" data-update-action="/search/results" data-results-target="#search-results .infinite-scroll" data-prefix="ajax_form_64689_search" action="/search/results" accept-charset="UTF-8" data-remote="true" method="get"><input name="utf8" type="hidden" value="✓">
						<div class="container-fluid container-wide">
							<div class="row">
								<div class="col-sm-12">
									<div class="title-row text-center">
										<h1>Danh sách tour</h1>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="type-selector">
										<label>Tour types</label>
										<div class="selector">
											<span class="selector-item">
												<input type="checkbox" value="1" name="search[type_exclude][]" id="ajax_form_64689_search_type_exclude_1">
												<label for="ajax_form_64689_search_type_exclude_1">
													<i class="icon icon-hiker"></i>
													<span class="name">Active</span>
												</label>                                </span>
												<span class="selector-item">
													<input type="checkbox" value="2" name="search[type_exclude][]" id="ajax_form_64689_search_type_exclude_2">
													<label for="ajax_form_64689_search_type_exclude_2">
														<i class="icon icon-tree"></i>
														<span class="name">Nature</span>
													</label>                                </span>
													<span class="selector-item">
														<input type="checkbox" value="3" name="search[type_exclude][]" id="ajax_form_64689_search_type_exclude_3">
														<label for="ajax_form_64689_search_type_exclude_3">
															<i class="icon icon-lion"></i>
															<span class="name">Wildlife</span>
														</label>                                </span>
														<span class="selector-item">
															<input type="checkbox" value="4" name="search[type_exclude][]" id="ajax_form_64689_search_type_exclude_4">
															<label for="ajax_form_64689_search_type_exclude_4">
																<i class="icon icon-castle"></i>
																<span class="name">Culture</span>
															</label>                                </span>
															<span class="selector-item">
																<input type="checkbox" value="6" name="search[type_exclude][]" id="ajax_form_64689_search_type_exclude_6">
																<label for="ajax_form_64689_search_type_exclude_6">
																	<i class="icon icon-biker"></i>
																	<span class="name">Biking</span>
																</label>                                </span>
																<span class="selector-item">
																	<input type="checkbox" value="7" name="search[type_exclude][]" id="ajax_form_64689_search_type_exclude_7">
																	<label for="ajax_form_64689_search_type_exclude_7">
																		<i class="icon icon-express"></i>
																		<span class="name">Xpress</span>
																	</label>                                </span>
																</div>
															</div>

														</div>
													</div>

												</div>
											</form>        </div>
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
																			<div class="button">
																				<div class="daidien"><?php the_post_thumbnail(array(110, 110)); ?>
																					<span class="front-testimonial-slider">Ma Doan Tiep</span>
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
																				</span>
																			</div>
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
							<script type="text/javascript">

								$('.datepicker').datepicker({
									uiLibrary: 'bootstrap4'
								});
							</script>