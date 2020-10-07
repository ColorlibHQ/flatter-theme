<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--::header part start::-->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <?php
                                    if(has_nav_menu('primary-menu')) {
                                        wp_nav_menu(array(
                                            'menu'           => 'primary-menu',
                                            'theme_location' => 'primary-menu',
                                            'menu_id'        => 'navigation',
                                            'container'      => false,
                                            'menu_class'     => 'mein_menu_list',
                                            'depth'          => 3,
                                            'walker'         => new flatter_bootstrap_navwalker()
                                        ));
                                    }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="custom_order">
                            <?php 
                            if ( !empty( flatter_opt('flatter_book_btn_label') )) { 
                                $btn_label  = flatter_opt('flatter_book_btn_label');
                                $btn_url   = flatter_opt('flatter_book_btn_url');
                                ?>
                                <a href="<?php echo esc_url( $btn_url )?>" class="boxed_btn_white"><?php echo esc_html( $btn_label )?></a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                        <?php echo flatter_theme_logo( 'navbar-brand' );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<script>
    (function ($) {
    "use strict";
        $( `<div class="logo-img d-none d-lg-block">
            <?php echo flatter_theme_logo();?>
        </div>` ).insertAfter( "#navigation > li:nth-child(4)" );
    })(jQuery);
</script>