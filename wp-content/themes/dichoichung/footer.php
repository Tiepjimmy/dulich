<div id="footer">
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4  col-ms-6">
                        <div class="logo">
                        <a href="<?php bloginfo('url') ?>"> 
                              <img class="size-medium wp-image-135 aligncenter" src="http://beta.dichoichung.com/wp-content/uploads/2018/07/logo-di-choi-chung-ngang-300x70.png" alt="" width="300" height="60" srcset="http://dichung.local/wp-content/uploads/2018/07/logo-di-choi-chung-ngang-300x70.png 300w, http://dichung.local/wp-content/uploads/2018/07/logo-di-choi-chung-ngang.png 554w" sizes="(max-width: 300px) 100vw, 300px">
                         </a>
                        </div>
                        <div id="email-l">
                            <form >
                                <label>Nhận thông tin khuyến mãi</label> <br>
                                <input type="text" name="dangky" placeholder="Nhập thông tin khuyễn mãi ">
                                <button type="submit" name="dk" >Đăng Ký</button>
                            </form>
                        </div>
                        
                    
                    
                        
                    
                </div>
                <div class="col-sm-3 col-ms-6">
                    <h3><?php echo get_menu_name('footer_2');   ?></h3>
                    <div class="push-down">
                        <?php
                        $args = array(
                            'theme_location' => 'footer_2',
                            'menu' => '',
                            'container' => '',
                            'container_class' => '',
                            'container_id' => '',
                            'menu_class' => 'list-unstyled',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '→ ',
                            'link_after' => '',
                            'walker' => new footer_menu_walker()
                        );

                        wp_nav_menu( $args );
                        ?>
                    </div>
                </div>
                <div class="col-sm-2 col-ms-6">
                        <h3><?php echo get_menu_name('footer_1');	?></h3>
                        <div class="push-down">
                            <?php
                            $args = array(
                                'theme_location' => 'footer_1',
                                'menu' => '',
                                'container' => '',
                                'container_class' => '',
                                'container_id' => '',
                                'menu_class' => 'list-unstyled',
                                'menu_id' => '',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'before' => '',
                                'after' => '',
                                'link_before' => '→ ',
                                'link_after' => '',
                                'walker' => new footer_menu_walker()
                            );

                            wp_nav_menu( $args );
                            ?>
                        </div>
                </div>
                <div class="col-sm-3 col-ms-6">
                        <h3><?php echo get_menu_name('footer_2');   ?></h3>
                        <div class="push-down">
                            <?php
                            $args = array(
                                'theme_location' => 'footer_2',
                                'menu' => '',
                                'container' => '',
                                'container_class' => '',
                                'container_id' => '',
                                'menu_class' => 'list-unstyled',
                                'menu_id' => '',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'before' => '',
                                'after' => '',
                                'link_before' => '→ ',
                                'link_after' => '',
                                'walker' => new footer_menu_walker()
                            );

                            wp_nav_menu( $args );
                            ?>
                        </div>
                </div>
            </div>
        </div>
       
    </footer>
</div>
<div id="footer-1">
    <div class="container-fluid">
                <div class="row">
                        <div class=" col-sm-6 ">
                            <span>
                         <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                2018 dichoichung.com DMCA.com Protection Status
                            </span>
                        </div>
                         <div class=" col-sm-6">
                            <div id="footer-2">
                                <a href="#" class="btn btn-warning"><i class="icon icon-facebook-logo-circle"></i></a>
                                <a href="#" class="btn btn-warning"><i class="icon icon-envelope-circle"></i></a>
                                <a href="#" class="btn btn-warning"><i class="icon icon-twitter-logo-circle"></i></a>
                                <a href="#" class="btn btn-warning"><i class="icon icon-instagram-logo-circle"></i> </a>
                                 <i class="icon icon-bank-logo-circle"></i> 



                               
                            </div>
                        
                        </div>
                </div>
    </div>
</div>
<script src="<?php bloginfo('template_directory') ?>/js/application.js" data-turbolinks-track="true" data-turbolinks-eval="false"></script>
<?php wp_footer() ?>
</body>

</html>