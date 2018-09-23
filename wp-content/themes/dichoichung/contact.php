<?php
/*
Template Name: Liên hệ
Template Post Type: page
*/
?>
<?php get_header() ?>
        <div id="page" class="no-bottom-padding">
            <div id="default_title_area_17" class="default_title_area">
                <div class="hero-section hero-sm">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="hero-background">

                            <img class="auto-scale scale-height" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" /> 
                        </div>
                    <?php } ?>
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
                        <div class="col-sm-8 col-sm-push-2">
                            <div class="text-page-content" id="send-t">
                                <form class="form custom-styled-form ajax-form" role="form" id="new_contact" data-type="json" data-prefix="ajax_form_2301_contact" action="/contacts" accept-charset="UTF-8" data-remote="true" method="post">
                                    <input name="utf8" type="hidden" value="&#x2713;" />
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label class="control-label required" for="ajax_form_2301_contact_name">Your name</label>
                                            <input placeholder="Your name" value="" class="form-control" type="text" name="contact[name]" id="ajax_form_2301_contact_name" />
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="control-label" for="ajax_form_2301_contact_email">Email</label>
                                            <input placeholder="Email" value="" class="form-control" type="email" name="contact[email]" id="ajax_form_2301_contact_email" />
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="control-label required" for="ajax_form_2301_contact_message">Message</label>
                                            <textarea placeholder="Message" class="form-control" name="contact[message]" id="ajax_form_2301_contact_message">
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <input value="" class="form-control check-the-reason-for-my-existence-in-css-files" type="text" name="contact[message_alt]" id="ajax_form_2301_contact_message_alt" />
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                                <button name="submit" type="submit" class="btn btn-danger">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        
                            
                         
                                    <div class="text-page-content">
                                            </br>
                                    </div>
                                
                           
                       
                    </div>
                </div>
            </div>
<!--            <div class="hero-section hero-xs">-->
<!--                <div class="hero-background">-->
<!--                    <img class="auto-scale scale-height" src="/pictures/3/show/about+bottom+bg.jpg?sh=d6a0be8d0f41a80c" alt="About+bottom+bg" />-->
<!--                </div>-->
<!--                <div class="hero-content">-->
<!--                    <div class="hero-content-wrapper text-center">-->
<!--                        <div class="container-fluid">-->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-12">-->
<!--                                    <h2>Ready for your adventure?</h2>-->
<!--                                    <a class="btn btn-primary btn-arrow btn-lg btn-text-small" href="/search">-->
<!--                                    Find your dream tour-->
<!--                                </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<?php get_footer() ?>