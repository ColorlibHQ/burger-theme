<?php
    $btn_txt = burger_opt( 'burger_header_btn_text' );
?>
<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-5">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'            => 'primary-menu',
                                        'theme_location'  => 'primary-menu',
                                        'menu_id'         => 'navigation',
                                        'container_class' => false,
                                        'container_id'    => false,
                                        'menu_class'      => false,
                                        'depth'           => 3,
                                        'walker'          => new burger_bootstrap_navwalker()
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <?php echo burger_theme_logo();?>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                        <div class="book_room">
                            <div class="socail_links">
                                <ul>
                                    <?php
                                    // Social profiles
                                    $social_opt = burger_opt('burger_social_profile_toggle');
                                    if ( $social_opt == true ) {
                                        $social_items = burger_opt('burger_social_profiles');
                                        if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                            foreach ($social_items as $value) {
                                                echo '
                                                <li>';
                                                    echo '<a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a>';
                                                echo '</li>';
                                            }
                                        }          
                                    }  
                                    ?>
                                </ul>
                            </div>
                            <?php
                                if ( $btn_txt ) {
                                    echo '
                                    <div class="book_btn d-none d-xl-block">
                                        <a href="tel:'.esc_attr( trim($btn_txt) ).'">'.esc_html( $btn_txt ).'</a>
                                    </div>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->