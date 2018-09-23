<?php get_header() ?>

        <div id="page">
            <div class="hero-section hero-lg tour-slider">
                <div class="hero-background background-stretch">
                    <div class="background-inner">
                        <img alt="<?php echo the_title(); ?>" class="auto-scale scale-height" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                    </div>
                    <div class="background-overlay opacity-20"></div>
                </div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="hero-content">
                    <div class="bottom-wrap">
                        <div class="foreground-slider hidden-xs ">
                            <div id="slider_888cf067ba5f4257554a5557ad6b5033_1530411104987-slider" class="slick slider not-active">
                                <?php
                                $images = get_field('tour_gallery');
                                if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                    <div>
                                        <div class="valign">
                                            <div class="valign-middle">
                                             
                                                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            
                            <div id="slider_888cf067ba5f4257554a5557ad6b5033_1530411104987-controls" class="hero-content-wrapper bottom-right narrow">
                                <div class="slick controls nuff-photos">
                                    <?php
                                    $images = get_field('tour_gallery');
                                    if( $images ): ?>
                                        <?php foreach( $images as $image ): ?>
                                            <div>
                                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="hero-content-wrapper bottom-left wide">
                            <h1 class="stronger"><?php echo the_title(); ?></h1>
                            <h2 class="tagline"><?php echo the_excerpt() ?></h2>
                            <div class="journey-tag-filters">
                                <?php
                                    $term_list = wp_get_post_terms($post->ID, array('tour_type','tour_duration','tour_price_range','tour_destination'), array("fields" => "all"));
                                    foreach ($term_list as $tax) {
                                ?>
                                    <a class="label label-primary" href="<?php echo get_term_link($tax->term_id);  ?>"><?php echo $tax->name; ?></a>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>

            <div class="no-overflow">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6">
                            <div class="journey-booking" data-price="650" data-journey-id="1" data-new-booking-url="/tour/1/departure/:departure_id/booking/new" data-departure-details-url="/tour/1/departure/:departure_id" data-departure-details-private-url="/tour/1/departure/private">
                                <div class="relative-wrapper pricing">
                                    <div class="row">
                                        <div class="overflowing-background"></div>
                                        <div class="col-sm-12">
                                            <div class="pricings">
                                        
                                                <h2>Bảng Giá Tour</h2>
                                                <p class="text-primary font-weight-medium">Giá sẽ càng giảm khi có nhiều người tham gia</p>
                                      
                                                <?php $tour_by_pack = get_field('tour_by_pack');
                                                $nhomgia = $tour_by_pack['nhom_gia'];
                                                ?>
                                                <div class="tiered-pricing-table responsive">
                                                    <?php $i=1; foreach ($nhomgia as $gia) : ?>
                                                    <div class="price-item active">
                                                        <div class="guide-arrow <?php if($i==1) { echo 'bg-primary'; } else { echo 'guide-arrow bg-grey-lvl-1'; } ?>"><?php echo $gia['quantity'] ?> người</div>
                                                        <div class="gia">
                                                        <?php echo number_format($gia['price_by_quantity']); ?> đ / người</div>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <?php
                                                    $i++;
                                                    if($i==5) {
                                                        break;
                                                    }
                                                    endforeach; ?>

                                                    <a class="detail" data-target="#all-pricings" data-remote="false" data-toggle="modal" href="#">Xem tất cả các gói giá &rarr;</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative-wrapper">
                                    <div class="row">
                                        <div class="overflowing-background-grey"></div>
                                        <div class="departure-wrap">
                                            <div class="col-sm-12" id="dattour">
                                                <form class="booking-form" action="http://admin.beta.dichoichung.com/booking" accept-charset="UTF-8" method="get">
                                                    <input type="hidden" name="tour" value="<?php echo get_the_ID(); ?>">
                                                    <div class="tour-date-selector">
                                                        <h3>Bạn muốn đi khi nào ?</h3>
                                                        <?php $ngay_khoi_hanh =get_field('ngay_khoi_hanh');
                                                        $i=1;
                                                        foreach ($ngay_khoi_hanh as $ngay) :
                                                        ?>
                                                            <?php if($i==5) : ?>
                                                            <div class="see-more">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown-sticky">
                                                                <i class="icon icon-calendar"></i>
                                                                See more tour dates
                                                            </a>
                                                            <div class="more-dates dropdown-content">
                                                        <?php endif; ?>
                                                        <div class="tour-date-selector-table">
                                                            <input type="radio" name="ngay_khoi_hanh" value="<?php echo str_replace('/','_',$ngay['ngay']); ?>" id="ngay_khoi_hanh_<?php echo str_replace('/','_',$ngay['ngay']); ?>" <?php if($i==1) { echo 'checked="checked"'; } ?>/>
                                                            <label class="tour-date" for="ngay_khoi_hanh_<?php echo str_replace('/','_',$ngay['ngay']); ?>">
                                                                <span class="icon icon-checked-box"></span>
                                                                <span class="date"><?php echo $ngay['ngay']; ?></span>
                                                            </label>
                                                        </div>
                                                        <?php if($i==5) : ?>
                                                            </div>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php $i++; endforeach; ?>
                                                    </div>
                                                    <br>
                                                    <div class="booking-section">
                                                        <div class="book-now">
                                                            <div class="book-button">
                                                                
                                                                     <button class="btn btn-danger">ĐẶT TOUR</button>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-pull-6 hidden-xs hidden-ms">
                        </div>
                        <div class="tour-specs">
                            <div class="col-ms-6 col-sm-3 col-lg-2 tour-spec col-sm-pull-6">
                                <div class="icon-wrapper">
                                    <i class="icon icon-clock"></i>
                                </div>
                                <div class="definition">
                                    <div><strong>Thời lương tour</strong></div>
                                    <div>
                                        <?php $durations = wp_get_post_terms($post->ID, array('tour_duration'), array("fields" => "all"));
                                            foreach ($durations as $duration) {
                                              echo $duration->name;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-ms-6 col-sm-3 col-lg-3 tour-spec col-sm-pull-6">
                                <div class="icon-wrapper">
                                    <i class="icon icon-people"></i>
                                </div>
                                <div class="definition">
                                    <div><strong>Số người tham gia tối đa</strong></div>
                                    <div><?php echo the_field('tour_max_participants') ?></div>
                                </div>
                            </div>
                            <div class="col-ms-6 col-sm-3 col-lg-3 tour-spec col-sm-pull-6">
                                <div class="icon-wrapper">
                                    <i class="icon icon-hiker"></i>
                                </div>
                                <div class="definition">
                                    <div>
                                        <strong>Độ khó của tour</strong>
                                        <i class="icon icon-info-circle popover-toggle" data-toggle="popover" data-content="độThese tours are suitable for everyone and include day hikes on various terrain, which are normally not mandatory." data-trigger="hover" data-placement="top" data-container="body"></i>
                                    </div>
                                    <div>
                                        <?php echo the_field('tour_difficulty'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-ms-6 col-sm-3 col-lg-3 tour-spec col-sm-pull-6">
                                <div class="icon-wrapper">
                                    <i class="icon icon-medal"></i>
                                </div>
                                <div class="definition">
                                    <div>
                                        <strong>Chuẩn dịch vụ</strong>
                                        <i class="icon icon-info-circle popover-toggle" data-toggle="popover" data-content="Accommodation in simple guesthouses or hotels when away from developed travel areas, or trekking off the beaten track." data-trigger="hover" data-placement="top" data-container="body">
                                </i>
                                    </div>
                                    <div>
                                        <?php echo the_field('tour_service_level'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                            <div class="journey-content">
                                <hr />
                                <?php the_content(); ?>
                                <h2>Chia sẻ</h2>
				<div class="share-buttons share-content">
                                    <a class="btn btn-facebook" target="_blank" rel="nofollow" data-method="post" href="/share/facebook?url=<?php the_permalink() ?>">
                                        <i class="icon icon-facebook-logo-letter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="all-pricings" class="modal fade" data-show="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title">Tất cả gói giá</h2>
                        </div>
                        <div class="modal-body">
                            <div class="tiered-pricing-table in-modal">
                                <?php $tour_by_pack = get_field('tour_by_pack');
                                $nhomgia = $tour_by_pack['nhom_gia'];
                                ?>
                                <?php $i=1; foreach ($nhomgia as $gia) : ?>
                                <div class="price-item">
                                    <div class="guide-arrow <?php if($i==1) { echo 'bg-primary'; } else { echo 'guide-arrow bg-grey-lvl-1'; } ?>"><?php echo $gia['quantity'] ?> người</div>
                                    <div class="price"><?php echo number_format($gia['price_by_quantity']); ?> đ / người</div>
                                </div>
                                <div class="clearfix"></div>
                                <?php $i++; endforeach; ?>
                                <a class="small show-all-prices invisible" data-target="#all-pricings" data-remote="false" data-toggle="modal" href="#">Xem tất cả các gói giá &rarr;</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="journey-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tabbed-content" role="tabpanel" id="tour-information">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#details-itinerary" aria-controls="details-itinerary" role="tab" data-toggle="tab">LỊCH TRÌNH </a></li>
                                    <li role="presentation"><a href="#details-basic" aria-controls="details-basic" role="tab" data-toggle="tab">THÔNG TIN CHÍNH SÁCH</a></li>
                                    <!--<li role="presentation"><a href="#details-fact-sheet" aria-controls="details-fact-sheet" role="tab" data-toggle="tab">Fact sheet</a></li>-->
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="details-itinerary">
                                        <div class="itinerary-section">
                                            <div class="text-sections">
                                                <div class="row">
                                                    <?php $tour_itinerary = get_field('tour_itinerary');
                                                    $dem = count($tour_itinerary);
                                                    for ($x = 0; $x <= $dem; $x++) :
                                                        foreach ($tour_itinerary[$x] as $value) :
                                                    ?>
                                                    <?php
                                                    switch ($dem) {
                                                        case 1:
                                                            echo "<div class=\"col-sm-12\">";
                                                            break;
                                                        case 2:
                                                            echo "<div class=\"col-sm-6\">";
                                                            break;
                                                        default:
                                                            echo "<div class=\"col-sm-6\">";
                                                    }
                                                    ?>

                                                        <div class="text-section">
                                                            <div class="day-title">
                                                                <strong><small class="text-uppercase">Ngày <?php echo $value['day_tour']; ?></small></strong>
                                                            </div>
                                                            <div class="title">
                                                                <h3><strong><?php echo $value['day_title']; ?></strong></h3>
                                                            </div>
                                                            <div class="content">
                                                                <?php echo $value['content_tour']; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <?php $i++; endforeach; ?>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="details-basic">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3><strong>Bao gồm</strong></h3>
                                                <?php $tour_policy = get_field('tour_policy');
                                                echo $tour_policy['tour_policy_included'];
                                                ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3><strong>Không bao gồm</strong></h3>
                                                <?php echo $tour_policy['tour_policy_not_included']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="details-fact-sheet">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="travel-guide-section">
                                                    <h3>Tour information</h3>
                                                    <p><strong>Preparation</strong>
                                                        <br /> Annapurna Base Camp trek will take you over varied terrain, and you&rsquo;ll hike around 4 - 8 hours per day. We recommend preparing physically for hiking through regular walking, biking, or hiking. The better physical condition you have, the more you get out of hiking. The highest point on the trek is 4145 meters above sea level.</p>
                                                    <p>&nbsp;</p>
                                                    <p><strong>A typical trekking day</strong>
                                                        <br /> A typical trekking day starts around 7.00 in the morning. This is followed by packing the equipment. We discuss the upcoming trekking day over breakfast. Hiking begins after breakfast, around 8.00 AM. Warm lunch is served around noon and the afternoon hiking portion is usually shorter than in the morning. During the hike, everyone can walk at their own pace. Your local guide always walks in front of the group, and the tour leader behind the last person. When you arrive at your accommodation, it&rsquo;s time for relaxation and a shower. Dinner is usually served around 19.00.-20.00 in the evening, and your tour leader will go over the next day&rsquo;s route during that.</p>
                                                    <p><strong>Visa and permit information</strong>
                                                        <br /> Nepal visa will be redeemed on arrival in Nepal. You will need one passport photo and a passport that&rsquo;s valid at least six (6) months after the trip. The Nepalese visa costs around 25 USD for less than 15 days, and 40 USD for stays from 15 to 30 days. The visa will be for paid in cash upon arrival at the airport.</p>
                                                    <p>Hiking Permits are purchased on your behalf and are included in the tour price. For this, it is important for you to upload a copy of your passport to your account&rsquo;s information page. If this is not possible, you are always welcome to send the copy in PDF or image (JPG) format to travel@faralong.com.</p>
                                                    <p>Check that the primary vaccinations, polio, and tetanus are valid during the trip. Travelers to Nepal and India are recommended to get vaccinated for Hepatitis A. Malaria is found only in low-lying areas of southern Nepal. For more information about vaccinations, please consult your doctor.</p>
                                                    <p>On all trekking and climbing trips in Nepal, you need travel insurance to cover ill-health in addition to helicopter evacuation and repatriation moving more than 3000 meters of altitude. We also recommend checking the coverage of your travel cancellation insurance.</p>
                                                    <p>&nbsp;</p>
                                                    <p><strong>Equipment</strong>
                                                        <br /> Every person should have no more than 15 kg of equipment with them on the trek. The equipment should also include a sleeping bag and an inflatable mattress. You can leave everything that you won&rsquo;t need on a trek in the hotel.</p>
                                                    <p>Bottled drinking water can be purchased in the cities. Please remember to take your own refillable water bottle on the trek as purchasing water is not possible. During daily hikes you can drink by boiled purified water, which is sold at the guesthouses or use water purification tablets that can be purchased on site. Both of these options are safe.</p>
                                                    <p><strong>Money</strong>
                                                        <br /> Nepal&#39;s currency is the Nepalese Rupee (NPR). There are ATMs in Kathmandu that take Visa, Mastercard, and Visa Electron cards if you wish to take cash out in Nepal. Money can be exchanged at exchange offices locally.</p>
                                                    <p>Please make sure to have &euro; 20-25 per day for meals not included in the package. Also, remember to have money for visa and tipping purposes.</p>
                                                    <p>The tipping culture in Nepal does not have any strict rules. However, it is good to remember that it is always voluntary. If the service has been good at a restaurant, it is polite to leave 5-15% of the total bill. The general tipping amount considered polite for your mountain guides is around &euro;5 per day.</p>
                                                    <p>&nbsp;</p>
                                                    <p><strong>Language</strong>
                                                        <br /> There are more than 100 different languages spoken in the country. Nepal&#39;s three main languages are Nepali, Maithili, and Bhojpuri. English is spoken in most tourist areas and if need of help, ask your local guide to translate.</p>
                                                    <p>&nbsp;</p>
                                                    <p><strong>Weather in Nepal</strong>
                                                        <br /> The climate in Nepal varies from tropical to arctic. The south and central Nepal have a tropical climate. Daily temperatures vary during the trekking seasons between 20-35 degrees Celsius, but evenings can be cool. Nestled in the mountains, over 3000 meters of altitude, the night temperature may fall at the beginning and the end of the season hiking to below freezing.</p>
                                                    <p>The seasons in Nepal can be divided into spring and autumn. There is a lot of snow in the mountains during spring and magnolias, and rhododendrons are in bloom. The sky is often clear in the mornings and clouds start to form in the afternoon. The monsoon season in Nepal begins in June and continues until mid-September. The autumn tourist season in Nepal starts in mid-September and runs until the end of November.</p>
                                                    <p>
                                                        <br />
                                                        <strong>Equipment List</strong>
                                                        <br /> The following list of equipment is recommended:</p>
                                                    <ul>
                                                        <li>Hiking boots</li>
                                                        <li>Jogging shoes / hiking sandals</li>
                                                        <li>Hiking Socks (3 pairs)</li>
                                                        <li>Warm socks for the climbing portion</li>
                                                        <li>Moisture-wicking sports shirt (2 shirts)</li>
                                                        <li>Light hiking pants</li>
                                                        <li>Shell jacket (e.g., Gore-Tex or similar)</li>
                                                        <li>Shell Pants (e.g., Gore-Tex or similar)</li>
                                                        <li>Fleece jacket or equivalent</li>
                                                        <li>Warm underwear</li>
                                                        <li>Down or quilted jacket</li>
                                                        <li>Liners</li>
                                                        <li>Ax</li>
                                                        <li>Stocking cap</li>
                                                        <li>Headgear to protect against the sun / scarf</li>
                                                        <li>Sunglasses</li>
                                                        <li>Approximately 30 L daypack</li>
                                                        <li>Head torch</li>
                                                        <li>Two 1L water bottles or hydration bladder</li>
                                                        <li>Sunscreen (SPF min. 20)</li>
                                                        <li>Lip balm (SPF 30-40)</li>
                                                        <li>Towel</li>
                                                        <li>3-season sleeping bag (comfort temperature of -9 &deg; C)</li>
                                                        <li>Inflatable sleeping pad</li>
                                                        <li>Ear plugs</li>
                                                        <li>Legwarmers</li>
                                                        <li>Trekking poles</li>
                                                    </ul>
                                                    <p>&nbsp;</p>
                                                    <p><strong>Personal First Aid Kit:</strong></p>
                                                    <ul>
                                                        <li>Band-Aids</li>
                                                        <li>Blister medication</li>
                                                        <li>Ibuprofen</li>
                                                        <li>Paracetamol</li>
                                                        <li>Gauze</li>
                                                        <li>250 mg antibiotic ciprofloxacin tablets</li>
                                                        <li>Immodium</li>
                                                        <li>Acetazolamide 250 mg tablets in case of altitude sickness symptoms</li>
                                                    </ul>
                                                    <h3>Fact sheet</h3>
                                                    <h4>Disclaimer</h4>
                                                    <p>Please note that information provided in this fact sheet is subject to change. Faralong.com can not take responsibility for third party information and its changes. However, we do aim to update this page as often as possible. Nevertheless, we strongly encourage to check all important travel info such as visa regulations and travel info from the respective channels in your country.</p>
                                                    <h4>Tour Provided</h4>
                                                    <p>The name, address and emergency contact numbers of the local tour operator will be released to the clients after the final payment has been done.</p>
                                                    <p>We would like to assure you that all of our partners are well-known and respected in their field of work. Faralong.com is a part of the Summit Travel Group, who has been partnering with these service providers for years.</p>
                                                    <h4>Service and Physical Activity Levels</h4>
                                                    <p>Faralong.com&rsquo;s tours are divided into three Service level categories and five Physical Activity categories:</p>
                                                    <p><strong>Service Levels</strong></p>
                                                    <p><strong>Basic</strong>
                                                        <br /> Accommodation in simple guesthouses or hotels when away from developed travel areas, or trekking off the beaten track.</p>
                                                    <p><strong>Standard</strong>
                                                        <br /> Accommodation in local 3-4* hotels suitable for the destination. All hotel categories are set by the local standards. Please note that in some countries the hotel standards do not coincide with those on an international level.</p>
                                                    <p><strong>Comfort</strong>
                                                        <br /> Accommodation in international chain hotels, upmarket lodges or local 4-5* hotels. All hotel categories are set by the local standards. Please note that in some countries the hotel standards do not coincide with those on an international level.</p>
                                                    <p><strong>Physical Activity</strong></p>
                                                    <p><strong>1 (Easy)</strong> - These tours are suitable for everyone and include a decent amount of walking.</p>
                                                    <p><strong>2 (Medium)</strong> - These tours are suitable for everyone and include day hikes on various terrain, which are normally not mandatory.</p>
                                                    <p><strong>3 (Hard)</strong> - These tours are suitable for people with an average fitness level and include day hikes and treks to various places, which are a mandatory part of the program.</p>
                                                    <p><strong>4 (Very hard)</strong> -These tours are suitable for people with an intermediate level of fitness and include challenging treks on various terrain.</p>
                                                    <p><strong>5 (Extreme)</strong> - These tours are suitable for people who are looking for some serious challenges. Have a good look at the program and do some research before committing to one of these tours.</p>
                                                    <p>All necessary information regarding a specific tour is displayed on the tour page.</p>
                                                    <h4>What&#39;s included</h4>
                                                    <p>All tours on Faralong.com include accommodation, local transport (excluding airport transfers if not stated otherwise), meals as specified, English speaking guide and all entrance fees.</p>
                                                    <p>If there are any changes to the inclusions, then they are all noted on the tour page.</p>
                                                    <h4>What&#39;s not included</h4>
                                                    <p>None of the tours on Faralong.com include international flights to/from the destination, travel insurance (mandatory), visas if necessary, gratuities to local staff, personal expenses, optional activities or airport transfers (if not stated otherwise).</p>
                                                    <p>If there are any changes to the list of services not included in the tour, then they are all noted on the tour page.</p>
                                                    <h4>Single Travellers</h4>
                                                    <p>If you are traveling alone and would like to have your own room, then please add a Single Supplement from the Extra Services when booking or if not available, send us an email at <a href="mailto:travel@faralong.com">travel@faralong.com</a>.</p>
                                                    <p>Otherwise, you will be accommodated in the same room with another traveler of the same sex.</p>
                                                    <h4>Tour Cost and Group Size</h4>
                                                    <p>The final cost of the tour is determined 45 days before departure when the group is automatically closed. Until that point, in case of vacancies, it is possible to join the group and, therefore, lower the cost for everyone.</p>
                                                    <p>The maximum group size is always noted in the pricing scheme on the tour page. Please note that all of our tours are guaranteed from two travelers.</p>
                                                    <p>Our pricing scheme applies to private groups as well and no extra charge is applicable. The maximum group size, however, stays the same as stated in the pricing scheme.</p>
                                                    <h4>Confirmations</h4>
                                                    <p>All confirmations, joining instructions and tour operator contacts are made available after the final payment has been received by Faralong.com.</p>
                                                    <p>If a confirmation is needed for visa application purposes before the final payment has been made then, please let us know by email at <a href="mailto:travel@faralong.com">travel@faralong.com</a>.</p>
                                                    <h4>Itinerary</h4>
                                                    <p>The itinerary of a tour can be found on the particular tour page.</p>
                                                    <p>Please note that all itineraries are subject to change in case of unforeseen circumstances. The security and well-being of our clients always comes first to us and all of our esteemed partners.</p>
                                                    <h4>Tour Leader</h4>
                                                    <p>All tours on Faralong.com include the services of an English-speaking tour leader/guide/driver.</p>
                                                    <p>At this point in time, we are unfortunately unable to provide these tours in other languages.</p>
                                                    <h4>Travel Documents</h4>
                                                    <p>Please make sure that all of your travel documents are up to date and valid before departure.</p>
                                                    <p>Note that in some cases, a passport has to be valid up to 6 months after departing the destination. Be sure to check visa and other travel regulations from your local government offices well in advance.</p>
                                                    <h4>Health</h4>
                                                    <p>Please make sure that you check the vaccination requirements or your destination well in advance. Some countries might have mandatory vaccination rules and it is solely up to you to abide to them.</p>
                                                    <p>In case of high altitude trekking, please consult your doctor before making a booking. It is important to us and in regards to everyone&rsquo;s safety that every group member is fit to take on the challenge.</p>
                                                    <p>In some cases, Faralong.com is allowed to require a doctor&rsquo;s note from the client that states their ability to take part in a tour with high physical activity level.</p>
                                                    <h4>Weather</h4>
                                                    <p>It is advisable to check the weather forecast of your destination a few days prior to departure.</p>
                                                    <h4>Problems</h4>
                                                    <p>Our and our local partners&rsquo; goal is to make everything go without any problems. However, sometimes the odds may not be in our favor and something may happen.</p>
                                                    <p>In case of problems on the road, please notify your tour guide first. It is important to give the local provider a chance to make things right.</p>
                                                    <p>If the problems can not be solved, please let us know by email at <a href="mailto:travel@faralong.com">travel@faralong.com</a>. Be sure to give us an overview of the problem, your contact details and your booking reference.</p>
                                                    <p>In case of emergencies, it is mandatory to call the emergency number of our local tour provider. This number will be given to you with the confirmations and joining instructions, after making the final payment.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="journey-map">
                <div class="google-map" data-zoom="11"></div>
            </div>-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="sub-heading">
                                <h2>Các tour tương tự</h2>
                                <p class="caption">Tìm kiếm các vị trí tương tự</p>
                            </div>
                            <div class="listing">
                                <div class="row">
                                    <?php
                                        $args = array(
											'posts_per_page' => 6,
                                            'post_type' => 'tour',
                                            'post__not_in' => array(get_the_ID()),
                                            'tax_query' => array(
                                                    'taxonomy' => 'tour_destination',
                                                    'field'    => 'all',
                                                ), 
                                            );
                                        $query = new WP_Query( $args );

                                        if ( $query->have_posts() ) :
                                            while ( $query->have_posts() ) : $query->the_post();
                                    ?>
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
                                                            <span class="front-testimonial-slider">Ma Doan Tiep</span>
                                                        </div>
                                                             <span id="price-x">
                                                            <span id="icon-y">
                                                                <i class="icon icon-hiker"></i>
                                                            </span>
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
                    </div>
                </div>


       <?php get_footer() ?>
