<header class="fix_heigh_header">
    <div class="nav_container">
        <div class="logo">
            <a href="#">
                <img alt="logo" class="img_logo_defaul" src="{{asset('assets/images/icon/logo.png')}}"/>
                <img alt="logo" class="img_logo_fixed" src="{{asset('assets/images/icon/logo-fixed.png')}}"/>
            </a>
        </div>
        <nav class="collapse navbar_collapse">
            <ul class="menu">
                <li class="level-01 home"><a class="active" href="#">HOME</a></li>
                <li class="level-01 shop"><a href="#">SHOP</a>
                    <div class="mega_drop_menu mega_dropdown_shop_v1">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="menu-menu">
                                    <h3 class="title">CATEGORIES</h3>
                                    <ul class="block_level2">
                                        <li class="level-02"><a href="#">Plazers</a></li>
                                        <li class="level-02"><a href="#">Jacket</a></li>
                                        <li class="level-02"><a href="#">Coats</a></li>
                                        <li class="level-02"><a href="#">Parka</a></li>
                                        <li class="level-02"><a href="#">Sweater</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="menu-menu">
                                    <h3 class="title">BRANDS</h3>
                                    <ul class="block_level2">
                                        <li class="level-02"><a href="#">2XH Brothers</a></li>
                                        <li class="level-02"><a href="#">Edwin</a></li>
                                        <li class="level-02"><a href="#">Obey</a></li>
                                        <li class="level-02"><a href="#">Majestic</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="menu-menu">
                                    <h3 class="title">PAGES</h3>
                                    <ul class="block_level2">
                                        <li class="level-02"><a href="blog_grid.html">Shop Grid</a></li>
                                        <li class="level-02"><a href="blog_listing_left_sidebar.html">Shop Grid Left Sidebar</a></li>
                                        <li class="level-02"><a href="blog_single_with_audio.html">Product Single With Audio</a></li>
                                        <li class="level-02"><a href="blog_single_with_image.html">Product Single With Image</a></li>
                                        <li class="level-02"><a href="blog_single_with_slider.html">Product Single With Slider</a></li>
                                        <li class="level-02"><a href="blog_single_with_video.html">Product Single With Video</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="level-01 portfolio"><a href="#">PORTFOLIO</a>
                    <div class="mega_drop_menu mega_dropdown_portfolio_v1">
                        <div class="menu-menu">
                            <ul class="block_level2">
                                <li class="level-02"><a href="home_full_width_v1.html">Home fullwidth v1</a></li>
                                <li class="level-02"><a href="home_full_width_v2.html">Home fullwidth v2</a></li>
                                <li class="level-02"><a href="home_full_width_v3.html">Home fullwidth v3</a></li>
                                <li class="level-02"><a href="home_simple.html">Home Simple</a></li>
                                <li class="level-02"><a href="home_sidebar.html">Home Sidebar</a></li>
                                <li class="level-02"><a href="home_parallax.html">Home parallax</a></li>
                                <li class="level-02"><a href="home_boxed.html">Home boxed</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="level-01 blog"><a href="#">BLOG</a>
                    <div class="mega_drop_menu mega_dropdown_blog_v1">
                        <div class="menu-menu">
                            <ul class="block_level2">
                                <li class="level-02"><a href="blog_grid.html">Blog Default</a></li>
                                <li class="level-02"><a href="blog_grid.html">Blog Grid</a></li>
                                <li class="level-02"><a href="blog_masonry.html">Blog Masonry</a></li>
                                <li class="level-02"><a href="blog_listing_no_sidebar.html">Blog Center</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="level-01 features"><a href="#">FEATURES</a>
                    <div class="mega_drop_menu mega_dropdown_features_v1">
                        <div class="menu-menu">
                            <ul class="block_level2">
                                <li class="level-02"><a href="categories_grid_full_width.html">Categories grid full width</a></li>
                                <li class="level-02"><a href="categories_grid_sidebar_left.html">Categories grid sidebar left</a></li>
                                <li class="level-02"><a href="categories_grid_sidebar_right.html">Categories grid sidebar right</a></li>
                                <li class="level-02"><a href="categories_grid_full_width.html">Categories list sidebar</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="level-01 shortcodes"><a href="#">SHORTCODES</a>
                    <div class="mega_drop_menu mega_dropdown_shortcodes_v1">
                        <div class="menu-menu">
                            <ul class="block_level2">
                                <li class="level-02"><a href="about_us.html">About Us</a></li>
                                <li class="level-02"><a href="contact_us.html">Contact Us</a></li>
                                <li class="level-02"><a href="check_out.html">checkout</a></li>
                                <li class="level-02"><a href="log_in.html">login</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="navbar-toggle-right">
            <div class="navbar-toggle-search">
                <div class="navbar-search">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="navcart">
                <div class="navcart-wrap">
                    <div class="navbar-minicart">
                        <a class="minicart-link" href="#">
                            <span class="minicart-icon"><i class="fa fa-shopping-cart"></i><span>({{$cart_data ? count($cart_data) : 0}})</span></span>
                        </a>
                        <div class="mega_drop_menu mega_dropdown_nav_cart_v1">
                            <div class="menu-menu">
                                <ul class="block_level2">
                                    <li class="level-02">
                                        <div class="minicart-actions clearfix">
                                            <a class="button" href="{{route('cart')}}">
                                                <span class="text">View Cart</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-user">
                <a title="My Account" href="#" class="navbar-user">
                    <i class="fa fa-user"></i>
                </a>
            </div>
            <div class="money">
                <a class="active tittle-money" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USD</a>
                <div class="mega_drop_menu mega_dropdown_money_v1">
                    <div class="menu-menu">
                        <ul class="block_level2">
                            <li class="level-02"><a href="#">EUR</a></li>
                            <li class="level-02"><a href="#">GBP</a></li>
                            <li class="level-02"><a href="#">JPY</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="language-switcher">
                <div class="wpml-languages enabled">
                    <a class="active name_language" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EN</a>
                    <div class="mega_drop_menu mega_dropdown_laguage_v1">
                        <div class="menu-menu">
                            <ul class="block_level2">
                                <li class="level-02"><a href="#">FR</a></li>
                                <li class="level-02"><a href="#">DE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-search-overlay hide">
        <div class="container-fluid">
            <div class="header-search-overlay-wrap">
                <form method="GET" class="searchform">
                    <input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search...">
                    <input type="submit" class="searchsubmit hidden" name="submit" value="Search">
                    <input type="hidden" name="post_type" value="product">
                </form>
                <button type="button" class="close">
                    <span aria-hidden="true" class="fa fa-times"></span><span class="sr-only">Close</span>
                </button>
            </div>
        </div>
    </div>
    <div class="handle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
