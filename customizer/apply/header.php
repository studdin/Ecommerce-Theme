/*------------ header 1 ----------*/
<?php 
$background_top_bar1 = esc_attr(get_theme_mod('background_top_bar_1', ''));
$color_top_bar1 = esc_attr(get_theme_mod('color_top_bar_1', ''));
$color_link_top_bar1 = esc_attr(get_theme_mod('color_link_top_bar_1', ''));
$color_hover_top_bar1 = esc_attr(get_theme_mod('color_hover_top_bar_1', ''));
$padding_topbar_top1 = esc_attr(get_theme_mod('padding_topbar_top_1', ''));
$padding_topbar_right1 = esc_attr(get_theme_mod('padding_topbar_right_1', ''));
$padding_topbar_bottom1 = esc_attr(get_theme_mod('padding_topbar_bottom_1', ''));
$padding_topbar_left1 = esc_attr(get_theme_mod('padding_topbar_left_1', ''));
if ($background_top_bar1 || $color_top_bar1 || $color_link_top_bar1 || $color_hover_top_bar1 || $padding_topbar_top1 || $padding_topbar_right1 || $padding_topbar_bottom1 || $padding_topbar_left1) { ?>
    .bwp-header.header-v1 #bwp-topbar {
        <?php if ($background_top_bar1) echo "background: {$background_top_bar1};"; ?>
        <?php if ($color_top_bar1) echo "color: {$color_top_bar1};"; ?>
        <?php if ($padding_topbar_top1) echo "padding-top: {$padding_topbar_top1}px;"; ?>
        <?php if ($padding_topbar_right1) echo "padding-right: {$padding_topbar_right1}px;"; ?>
        <?php if ($padding_topbar_bottom1) echo "padding-bottom: {$padding_topbar_bottom1}px;"; ?>
        <?php if ($padding_topbar_left1) echo "padding-left: {$padding_topbar_left1}px;"; ?>
    }
    .bwp-header.header-v1 #bwp-topbar a {
        <?php if ($color_link_top_bar1) echo "color: {$color_link_top_bar1};"; ?>
    }
    .bwp-header.header-v1 #bwp-topbar a:hover {
        <?php if ($color_hover_top_bar1) echo "color: {$color_hover_top_bar1};"; ?>
    }
<?php } ?>
<?php 
	$header_color1 = esc_attr(get_theme_mod('header_color_1', ''));
	if ($header_color1) { ?>
    .bwp-header.header-v1 .header-wrapper {
        background: <?php echo esc_attr($header_color1); ?>;
    }
<?php } ?>
<?php 
	$icon_color1 = esc_attr(get_theme_mod('icon_color_1', ''));
	if ($icon_color1) { ?>
	.bwp-header.header-v1 .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-icon .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color1); ?>; }
	.bwp-header.header-v1 .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-icon .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color1); ?>; }
	.bwp-header.header-v1 .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-icon .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color1); ?>; }
	.bwp-header.header-v1 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-icon .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color1); ?>; }
<?php } ?>
<?php
	$menu_color_1 = esc_attr(get_theme_mod('menu_color_1', ''));
	if ($menu_color_1) :?>
	.bwp-header.header-v1 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr($menu_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .bwp-navigation ul.menu > li.level-0 > a { color: <?php echo esc_attr($menu_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .bwp-navigation ul.menu > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_1); ?>; }
<?php endif; ?>
<?php 
	$menu_size1 = esc_attr(get_theme_mod('menu_size_1', ''));
	if ($menu_size1) { ?>
    .bwp-header.header-v1 .bwp-navigation ul>li.level-0>a {
        font-size: <?php echo esc_attr($menu_size1); ?>px;
    }
<?php } ?>
<?php
	$hover_color_1 = esc_attr(get_theme_mod('hover_color_1', ''));
	if ($hover_color_1) : ?>
	.bwp-header.header-v1 a:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .header-page-link .mini-cart .cart-icon:hover:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul > li.level-0:hover.current_page_item > a { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_1); ?>; } 
	.bwp-header.header-v1 .bwp-navigation ul > li.level-0:hover.current-menu-item > a { color: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul > li.level-0:hover.current-menu-ancestor > a { color: <?php echo esc_attr($hover_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .bwp-navigation ul.menu > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_1); ?>; }

	.bwp-header.header-v1 .bwp-navigation ul>li.level-0:hover.current-menu-ancestor>a>span:before { background: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul>li.level-0:hover.current-menu-item>a>span:before { background: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul>li.level-0:hover.current_page_item>a>span:before { background: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr($hover_color_1); ?>; }
	.bwp-header.header-v1 .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_1); ?>; }
	.page-template-homepage .bwp-header.header-v1.header-white .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_1); ?>; }
<?php endif; ?>
<?php
	$width_logo_1 = esc_attr(get_theme_mod('width_logo_1', ''));
	if ($width_logo_1) {
	?>
		.bwp-header.header-v1 .wpbingoLogo img {
			max-width: <?php echo esc_attr($width_logo_1); ?>px;
		}
	<?php
	}
?>
<?php 
	$padding_top1 = esc_attr(get_theme_mod('padding_top_1', ''));
	$padding_right1 = esc_attr(get_theme_mod('padding_right_1', ''));
	$padding_bottom1 = esc_attr(get_theme_mod('padding_bottom_1', ''));
	$padding_left1 = esc_attr(get_theme_mod('padding_left_1', ''));
	if ($padding_top1 || $padding_right1 || $padding_bottom1 || $padding_left1) { ?>
    .bwp-header.header-v1 .header-wrapper {
        <?php if ($padding_top1) echo "padding-top: {$padding_top1}px;"; ?>
        <?php if ($padding_right1) echo "padding-right: {$padding_right1}px;"; ?>
        <?php if ($padding_bottom1) echo "padding-bottom: {$padding_bottom1}px;"; ?>
        <?php if ($padding_left1) echo "padding-left: {$padding_left1}px;"; ?>
    }
<?php } ?>

/*------------ header 2 ----------*/
<?php 
$background_top_bar2 = esc_attr(get_theme_mod('background_top_bar_2', ''));
$color_top_bar2 = esc_attr(get_theme_mod('color_top_bar_2', ''));
$color_link_top_bar2 = esc_attr(get_theme_mod('color_link_top_bar_2', ''));
$color_hover_top_bar2 = esc_attr(get_theme_mod('color_hover_top_bar_2', ''));
$padding_topbar_top2 = esc_attr(get_theme_mod('padding_topbar_top_2', ''));
$padding_topbar_right2 = esc_attr(get_theme_mod('padding_topbar_right_2', ''));
$padding_topbar_bottom2 = esc_attr(get_theme_mod('padding_topbar_bottom_2', ''));
$padding_topbar_left2 = esc_attr(get_theme_mod('padding_topbar_left_2', ''));
if ($background_top_bar2 || $color_top_bar2 || $color_link_top_bar2 || $color_hover_top_bar2 || $padding_topbar_top2 || $padding_topbar_right2 || $padding_topbar_bottom2 || $padding_topbar_left2) { ?>
    .bwp-header.header-v2 #bwp-topbar {
        <?php if ($background_top_bar2) echo "background: {$background_top_bar2};"; ?>
        <?php if ($color_top_bar2) echo "color: {$color_top_bar2};"; ?>
        <?php if ($padding_topbar_top2) echo "padding-top: {$padding_topbar_top2}px;"; ?>
        <?php if ($padding_topbar_right2) echo "padding-right: {$padding_topbar_right2}px;"; ?>
        <?php if ($padding_topbar_bottom2) echo "padding-bottom: {$padding_topbar_bottom2}px;"; ?>
        <?php if ($padding_topbar_left2) echo "padding-left: {$padding_topbar_left2}px;"; ?>
    }
    .bwp-header.header-v2 #bwp-topbar a {
        <?php if ($color_link_top_bar2) echo "color: {$color_link_top_bar2};"; ?>
    }
    .bwp-header.header-v2 #bwp-topbar a:hover {
        <?php if ($color_hover_top_bar2) echo "color: {$color_hover_top_bar2};"; ?>
    }
<?php } ?>
<?php 
	$header_color2 = esc_attr(get_theme_mod('header_color_2', ''));
	if ($header_color2) { ?>
    .bwp-header.header-v2 .header-wrapper {
        background: <?php echo esc_attr($header_color2); ?>;
    }
<?php } ?>
<?php 
	$icon_color2 = esc_attr(get_theme_mod('icon_color_2', ''));
	if ($icon_color2) { ?>
	.bwp-header.header-v2 .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-icon .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color2); ?>; }
	.bwp-header.header-v2 .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-icon .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color2); ?>; }
	.bwp-header.header-v2 .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-icon .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color2); ?>; }
	.bwp-header.header-v2 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-icon .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color2); ?>; }
<?php } ?>
<?php
	$menu_color_2 = esc_attr(get_theme_mod('menu_color_2', ''));
	if ($menu_color_2) :?>
	.bwp-header.header-v2 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr($menu_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .bwp-navigation ul.menu > li.level-0 > a { color: <?php echo esc_attr($menu_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .bwp-navigation ul.menu > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_2); ?>; }
<?php endif; ?>
<?php 
	$menu_size2 = esc_attr(get_theme_mod('menu_size_2', ''));
	if ($menu_size2) { ?>
    .bwp-header.header-v2 .bwp-navigation ul>li.level-0>a {
        font-size: <?php echo esc_attr($menu_size2); ?>px;
    }
<?php } ?>
<?php
	$hover_color_2 = esc_attr(get_theme_mod('hover_color_2', ''));
	if ($hover_color_2) : ?>
	.bwp-header.header-v2 a:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .header-page-link .mini-cart .cart-icon:hover:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul > li.level-0:hover.current_page_item > a { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_2); ?>; } 
	.bwp-header.header-v2 .bwp-navigation ul > li.level-0:hover.current-menu-item > a { color: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul > li.level-0:hover.current-menu-ancestor > a { color: <?php echo esc_attr($hover_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .bwp-navigation ul.menu > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_2); ?>; }

	.bwp-header.header-v2 .bwp-navigation ul>li.level-0:hover.current-menu-ancestor>a>span:before { background: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul>li.level-0:hover.current-menu-item>a>span:before { background: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul>li.level-0:hover.current_page_item>a>span:before { background: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr($hover_color_2); ?>; }
	.bwp-header.header-v2 .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_2); ?>; }
	.page-template-homepage .bwp-header.header-v2.header-white .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_2); ?>; }
<?php endif; ?>
<?php
	$width_logo_2 = esc_attr(get_theme_mod('width_logo_2', ''));
	if ($width_logo_2) {
	?>
		.bwp-header.header-v2 .wpbingoLogo img {
			max-width: <?php echo esc_attr($width_logo_2); ?>px;
		}
	<?php
	}
?>
<?php 
	$padding_top2 = esc_attr(get_theme_mod('padding_top_2', ''));
	$padding_right2 = esc_attr(get_theme_mod('padding_right_2', ''));
	$padding_bottom2 = esc_attr(get_theme_mod('padding_bottom_2', ''));
	$padding_left2 = esc_attr(get_theme_mod('padding_left_2', ''));
	if ($padding_top2 || $padding_right2 || $padding_bottom2 || $padding_left2) { ?>
    .bwp-header.header-v2 .header-wrapper {
        <?php if ($padding_top2) echo "padding-top: {$padding_top2}px;"; ?>
        <?php if ($padding_right2) echo "padding-right: {$padding_right2}px;"; ?>
        <?php if ($padding_bottom2) echo "padding-bottom: {$padding_bottom2}px;"; ?>
        <?php if ($padding_left2) echo "padding-left: {$padding_left2}px;"; ?>
    }
<?php } ?>

/*------------ header 3 ----------*/
<?php 
$background_top_bar3 = esc_attr(get_theme_mod('background_top_bar_3', ''));
$color_top_bar3 = esc_attr(get_theme_mod('color_top_bar_3', ''));
$color_link_top_bar3 = esc_attr(get_theme_mod('color_link_top_bar_3', ''));
$color_hover_top_bar3 = esc_attr(get_theme_mod('color_hover_top_bar_3', ''));
$padding_topbar_top3 = esc_attr(get_theme_mod('padding_topbar_top_3', ''));
$padding_topbar_right3 = esc_attr(get_theme_mod('padding_topbar_right_3', ''));
$padding_topbar_bottom3 = esc_attr(get_theme_mod('padding_topbar_bottom_3', ''));
$padding_topbar_left3 = esc_attr(get_theme_mod('padding_topbar_left_3', ''));
if ($background_top_bar3 || $color_top_bar3 || $color_link_top_bar3 || $color_hover_top_bar3 || $padding_topbar_top3 || $padding_topbar_right3 || $padding_topbar_bottom3 || $padding_topbar_left3) { ?>
    .bwp-header.header-v3 #bwp-topbar {
        <?php if ($background_top_bar3) echo "background: {$background_top_bar3};"; ?>
        <?php if ($color_top_bar3) echo "color: {$color_top_bar3};"; ?>
        <?php if ($padding_topbar_top3) echo "padding-top: {$padding_topbar_top3}px;"; ?>
        <?php if ($padding_topbar_right3) echo "padding-right: {$padding_topbar_right3}px;"; ?>
        <?php if ($padding_topbar_bottom3) echo "padding-bottom: {$padding_topbar_bottom3}px;"; ?>
        <?php if ($padding_topbar_left3) echo "padding-left: {$padding_topbar_left3}px;"; ?>
    }
    .bwp-header.header-v3 #bwp-topbar a {
        <?php if ($color_link_top_bar3) echo "color: {$color_link_top_bar3};"; ?>
    }
    .bwp-header.header-v3 #bwp-topbar a:hover {
        <?php if ($color_hover_top_bar3) echo "color: {$color_hover_top_bar3};"; ?>
    }
<?php } ?>
<?php 
	$header_color3 = esc_attr(get_theme_mod('header_color_3', ''));
	if ($header_color3) { ?>
    .bwp-header.header-v3 .header-wrapper {
        background: <?php echo esc_attr($header_color3); ?>;
    }
<?php } ?>
<?php 
	$icon_color3 = esc_attr(get_theme_mod('icon_color_3', ''));
	if ($icon_color3) { ?>
	.bwp-header.header-v3 .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-icon .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color3); ?>; }
	.bwp-header.header-v3 .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-icon .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color3); ?>; }
	.bwp-header.header-v3 .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-icon .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color3); ?>; }
	.bwp-header.header-v3 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-icon .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color3); ?>; }
<?php } ?>
<?php
	$menu_color_3 = esc_attr(get_theme_mod('menu_color_3', ''));
	if ($menu_color_3) :?>
	.bwp-header.header-v3 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr($menu_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .bwp-navigation ul.menu > li.level-0 > a { color: <?php echo esc_attr($menu_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .bwp-navigation ul.menu > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_3); ?>; }
<?php endif; ?>
<?php 
	$menu_size3 = esc_attr(get_theme_mod('menu_size_3', ''));
	if ($menu_size3) { ?>
    .bwp-header.header-v3 .bwp-navigation ul>li.level-0>a {
        font-size: <?php echo esc_attr($menu_size3); ?>px;
    }
<?php } ?>
<?php
	$hover_color_3 = esc_attr(get_theme_mod('hover_color_3', ''));
	if ($hover_color_3) : ?>
	.bwp-header.header-v3 a:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .header-page-link .mini-cart .cart-icon:hover:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul > li.level-0:hover.current_page_item > a { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_3); ?>; } 
	.bwp-header.header-v3 .bwp-navigation ul > li.level-0:hover.current-menu-item > a { color: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul > li.level-0:hover.current-menu-ancestor > a { color: <?php echo esc_attr($hover_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .bwp-navigation ul.menu > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_3); ?>; }

	.bwp-header.header-v3 .bwp-navigation ul>li.level-0:hover.current-menu-ancestor>a>span:before { background: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul>li.level-0:hover.current-menu-item>a>span:before { background: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul>li.level-0:hover.current_page_item>a>span:before { background: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr($hover_color_3); ?>; }
	.bwp-header.header-v3 .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_3); ?>; }
	.page-template-homepage .bwp-header.header-v3.header-white .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_3); ?>; }
<?php endif; ?>
<?php
	$width_logo_3 = esc_attr(get_theme_mod('width_logo_3', ''));
	if ($width_logo_3) {
	?>
		.bwp-header.header-v3 .wpbingoLogo img {
			max-width: <?php echo esc_attr($width_logo_3); ?>px;
		}
	<?php
	}
?>
<?php 
	$padding_top3 = esc_attr(get_theme_mod('padding_top_3', ''));
	$padding_right3 = esc_attr(get_theme_mod('padding_right_3', ''));
	$padding_bottom3 = esc_attr(get_theme_mod('padding_bottom_3', ''));
	$padding_left3 = esc_attr(get_theme_mod('padding_left_3', ''));
	if ($padding_top3 || $padding_right3 || $padding_bottom3 || $padding_left3) { ?>
    .bwp-header.header-v3 .header-wrapper {
        <?php if ($padding_top3) echo "padding-top: {$padding_top3}px;"; ?>
        <?php if ($padding_right3) echo "padding-right: {$padding_right3}px;"; ?>
        <?php if ($padding_bottom3) echo "padding-bottom: {$padding_bottom3}px;"; ?>
        <?php if ($padding_left3) echo "padding-left: {$padding_left3}px;"; ?>
    }
<?php } ?>


/*------------ header 4 ----------*/
<?php 
$background_top_bar4 = esc_attr(get_theme_mod('background_top_bar_4', ''));
$color_top_bar4 = esc_attr(get_theme_mod('color_top_bar_4', ''));
$color_link_top_bar4 = esc_attr(get_theme_mod('color_link_top_bar_4', ''));
$color_hover_top_bar4 = esc_attr(get_theme_mod('color_hover_top_bar_4', ''));
$padding_topbar_top4 = esc_attr(get_theme_mod('padding_topbar_top_4', ''));
$padding_topbar_right4 = esc_attr(get_theme_mod('padding_topbar_right_4', ''));
$padding_topbar_bottom4 = esc_attr(get_theme_mod('padding_topbar_bottom_4', ''));
$padding_topbar_left4 = esc_attr(get_theme_mod('padding_topbar_left_4', ''));
if ($background_top_bar4 || $color_top_bar4 || $color_link_top_bar4 || $color_hover_top_bar4 || $padding_topbar_top4 || $padding_topbar_right4 || $padding_topbar_bottom4 || $padding_topbar_left4) { ?>
    .bwp-header.header-v4 #bwp-topbar {
        <?php if ($background_top_bar4) echo "background: {$background_top_bar4};"; ?>
        <?php if ($color_top_bar4) echo "color: {$color_top_bar4};"; ?>
        <?php if ($padding_topbar_top4) echo "padding-top: {$padding_topbar_top4}px;"; ?>
        <?php if ($padding_topbar_right4) echo "padding-right: {$padding_topbar_right4}px;"; ?>
        <?php if ($padding_topbar_bottom4) echo "padding-bottom: {$padding_topbar_bottom4}px;"; ?>
        <?php if ($padding_topbar_left4) echo "padding-left: {$padding_topbar_left4}px;"; ?>
    }
    .bwp-header.header-v4 #bwp-topbar a {
        <?php if ($color_link_top_bar4) echo "color: {$color_link_top_bar4};"; ?>
    }
    .bwp-header.header-v4 #bwp-topbar a:hover {
        <?php if ($color_hover_top_bar4) echo "color: {$color_hover_top_bar4};"; ?>
    }
<?php } ?>
<?php 
	$header_color4 = esc_attr(get_theme_mod('header_color_4', ''));
	if ($header_color4) { ?>
    .bwp-header.header-v4 .header-wrapper {
        background: <?php echo esc_attr($header_color4); ?>;
    }
<?php } ?>
<?php 
	$icon_color4 = esc_attr(get_theme_mod('icon_color_4', ''));
	if ($icon_color4) { ?>
	.bwp-header.header-v4 .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-icon .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color4); ?>; }
	.bwp-header.header-v4 .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-icon .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color4); ?>; }
	.bwp-header.header-v4 .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-icon .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color4); ?>; }
	.bwp-header.header-v4 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-icon .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color4); ?>; }
<?php } ?>
<?php
	$menu_color_4 = esc_attr(get_theme_mod('menu_color_4', ''));
	if ($menu_color_4) :?>
	.bwp-header.header-v4 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr($menu_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .bwp-navigation ul.menu > li.level-0 > a { color: <?php echo esc_attr($menu_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .bwp-navigation ul.menu > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_4); ?>; }
<?php endif; ?>
<?php 
	$menu_size4 = esc_attr(get_theme_mod('menu_size_4', ''));
	if ($menu_size4) { ?>
    .bwp-header.header-v4 .bwp-navigation ul>li.level-0>a {
        font-size: <?php echo esc_attr($menu_size4); ?>px;
    }
<?php } ?>
<?php
	$hover_color_4 = esc_attr(get_theme_mod('hover_color_4', ''));
	if ($hover_color_4) : ?>
	.bwp-header.header-v4 a:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .header-page-link .mini-cart .cart-icon:hover:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul > li.level-0:hover.current_page_item > a { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_4); ?>; } 
	.bwp-header.header-v4 .bwp-navigation ul > li.level-0:hover.current-menu-item > a { color: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul > li.level-0:hover.current-menu-ancestor > a { color: <?php echo esc_attr($hover_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .bwp-navigation ul.menu > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_4); ?>; }

	.bwp-header.header-v4 .bwp-navigation ul>li.level-0:hover.current-menu-ancestor>a>span:before { background: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul>li.level-0:hover.current-menu-item>a>span:before { background: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul>li.level-0:hover.current_page_item>a>span:before { background: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr($hover_color_4); ?>; }
	.bwp-header.header-v4 .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_4); ?>; }
	.page-template-homepage .bwp-header.header-v4.header-white .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_4); ?>; }
<?php endif; ?>
<?php
	$width_logo_4 = esc_attr(get_theme_mod('width_logo_4', ''));
	if ($width_logo_4) {
	?>
		.bwp-header.header-v4 .wpbingoLogo img {
			max-width: <?php echo esc_attr($width_logo_4); ?>px;
		}
	<?php
	}
?>
<?php 
	$padding_top4 = esc_attr(get_theme_mod('padding_top_4', ''));
	$padding_right4 = esc_attr(get_theme_mod('padding_right_4', ''));
	$padding_bottom4 = esc_attr(get_theme_mod('padding_bottom_4', ''));
	$padding_left4 = esc_attr(get_theme_mod('padding_left_4', ''));
	if ($padding_top4 || $padding_right4 || $padding_bottom4 || $padding_left4) { ?>
    .bwp-header.header-v4 .header-wrapper {
        <?php if ($padding_top4) echo "padding-top: {$padding_top4}px;"; ?>
        <?php if ($padding_right4) echo "padding-right: {$padding_right4}px;"; ?>
        <?php if ($padding_bottom4) echo "padding-bottom: {$padding_bottom4}px;"; ?>
        <?php if ($padding_left4) echo "padding-left: {$padding_left4}px;"; ?>
    }
<?php } ?>


/*------------ header 5 ----------*/
<?php 
$background_top_bar5 = esc_attr(get_theme_mod('background_top_bar_5', ''));
$color_top_bar5 = esc_attr(get_theme_mod('color_top_bar_5', ''));
$color_link_top_bar5 = esc_attr(get_theme_mod('color_link_top_bar_5', ''));
$color_hover_top_bar5 = esc_attr(get_theme_mod('color_hover_top_bar_5', ''));
$padding_topbar_top5 = esc_attr(get_theme_mod('padding_topbar_top_5', ''));
$padding_topbar_right5 = esc_attr(get_theme_mod('padding_topbar_right_5', ''));
$padding_topbar_bottom5 = esc_attr(get_theme_mod('padding_topbar_bottom_5', ''));
$padding_topbar_left5 = esc_attr(get_theme_mod('padding_topbar_left_5', ''));
if ($background_top_bar5 || $color_top_bar5 || $color_link_top_bar5 || $color_hover_top_bar5 || $padding_topbar_top5 || $padding_topbar_right5 || $padding_topbar_bottom5 || $padding_topbar_left5) { ?>
    .bwp-header.header-v5 #bwp-topbar {
        <?php if ($background_top_bar5) echo "background: {$background_top_bar5};"; ?>
        <?php if ($color_top_bar5) echo "color: {$color_top_bar5};"; ?>
        <?php if ($padding_topbar_top5) echo "padding-top: {$padding_topbar_top5}px;"; ?>
        <?php if ($padding_topbar_right5) echo "padding-right: {$padding_topbar_right5}px;"; ?>
        <?php if ($padding_topbar_bottom5) echo "padding-bottom: {$padding_topbar_bottom5}px;"; ?>
        <?php if ($padding_topbar_left5) echo "padding-left: {$padding_topbar_left5}px;"; ?>
    }
    .bwp-header.header-v5 #bwp-topbar a {
        <?php if ($color_link_top_bar5) echo "color: {$color_link_top_bar5};"; ?>
    }
    .bwp-header.header-v5 #bwp-topbar a:hover {
        <?php if ($color_hover_top_bar5) echo "color: {$color_hover_top_bar5};"; ?>
    }
<?php } ?>
<?php 
	$header_color5 = esc_attr(get_theme_mod('header_color_5', ''));
	if ($header_color5) { ?>
    .bwp-header.header-v5 .header-wrapper .header-container {
        background: <?php echo esc_attr($header_color5); ?>;
    }
<?php } ?>
<?php 
	$icon_color5 = esc_attr(get_theme_mod('icon_color_5', ''));
	if ($icon_color5) { ?>
	.bwp-header.header-v5 .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-icon .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color5); ?>; }
	.bwp-header.header-v5 .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-icon .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color5); ?>; }
	.bwp-header.header-v5 .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-icon .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color5); ?>; }
	.bwp-header.header-v5 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-icon .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color5); ?>; }
<?php } ?>
<?php
	$menu_color_5 = esc_attr(get_theme_mod('menu_color_5', ''));
	if ($menu_color_5) :?>
	.bwp-header.header-v5 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr($menu_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .bwp-navigation ul.menu > li.level-0 > a { color: <?php echo esc_attr($menu_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .bwp-navigation ul.menu > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_5); ?>; }
<?php endif; ?>
<?php
	$color_social = esc_attr(get_theme_mod('color_social', ''));
	if ($color_social) :?>
	.menu-sidebar .menu-header-wrap .social-link_sidebar ul.social-link li > a { color: <?php echo esc_attr($color_social); ?>; }
<?php endif; ?>
<?php
	$color_text = esc_attr(get_theme_mod('color_text', ''));
	if ($color_text) :?>
	.bwp-header .phone { color: <?php echo esc_attr($color_text); ?>; }
	.bwp-header .phone a { color: <?php echo esc_attr($color_text); ?>; }
	.bwp-header .content-social .social a { color: <?php echo esc_attr($color_text); ?>; }
	.bwp-header .mail a { color: <?php echo esc_attr($color_text); ?>; }
<?php endif; ?>
<?php 
	$social_size = esc_attr(get_theme_mod('social_size', ''));
	if ($social_size) { ?>
    .menu-sidebar .menu-header-wrap .social-link_sidebar ul.social-link li > a {
        font-size: <?php echo esc_attr($social_size); ?>px;
    }
<?php } ?>
<?php
	$icon_color_menu = esc_attr(get_theme_mod('icon_color_menu', ''));
	if ($icon_color_menu) :?>
		.menu-sidebar .open-menu .line-menu span { background: <?php echo esc_attr($icon_color_menu); ?>; }); ?>; }
<?php endif; ?>
<?php
	$background_menu = esc_attr(get_theme_mod('background_menu', ''));
	if ($background_menu) :?>
		.menu-sidebar .menu-sidebar__content { background: <?php echo esc_attr($background_menu); ?>; }); ?>; }
<?php endif; ?>
<?php 
	$menu_size5 = esc_attr(get_theme_mod('menu_size_5', ''));
	if ($menu_size5) { ?>
    .bwp-header.header-v5 .bwp-navigation ul>li.level-0>a {
        font-size: <?php echo esc_attr($menu_size5); ?>px;
    }
<?php } ?>
<?php
	$hover_color_5 = esc_attr(get_theme_mod('hover_color_5', ''));
	if ($hover_color_5) : ?>
	.bwp-header.header-v5 a:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .header-page-link .mini-cart .cart-icon:hover:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul > li.level-0:hover.current_page_item > a { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_5); ?>; } 
	.bwp-header.header-v5 .bwp-navigation ul > li.level-0:hover.current-menu-item > a { color: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul > li.level-0:hover.current-menu-ancestor > a { color: <?php echo esc_attr($hover_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .bwp-navigation ul.menu > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_5); ?>; }

	.bwp-header.header-v5 .bwp-navigation ul>li.level-0:hover.current-menu-ancestor>a>span:before { background: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul>li.level-0:hover.current-menu-item>a>span:before { background: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul>li.level-0:hover.current_page_item>a>span:before { background: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr($hover_color_5); ?>; }
	.bwp-header.header-v5 .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_5); ?>; }
	.menu-sidebar .menu-header-wrap .social-link_sidebar ul.social-link li > a:hover { color: <?php echo esc_attr($hover_color_5); ?>; }
	.page-template-homepage .bwp-header.header-v5.header-white .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_5); ?>; }
<?php endif; ?>
<?php
	$width_logo_5 = esc_attr(get_theme_mod('width_logo_5', ''));
	if ($width_logo_5) {
	?>
		.bwp-header.header-v5 .wpbingoLogo img {
			max-width: <?php echo esc_attr($width_logo_5); ?>px;
		}
	<?php
	}
?>
<?php 
	$padding_top5 = esc_attr(get_theme_mod('padding_top_5', ''));
	$padding_right5 = esc_attr(get_theme_mod('padding_right_5', ''));
	$padding_bottom5 = esc_attr(get_theme_mod('padding_bottom_5', ''));
	$padding_left5 = esc_attr(get_theme_mod('padding_left_5', ''));
	if ($padding_top5 || $padding_right5 || $padding_bottom5 || $padding_left5) { ?>
    .bwp-header.header-v5 .header-wrapper .header-container {
        <?php if ($padding_top5) echo "padding-top: {$padding_top5}px;"; ?>
        <?php if ($padding_right5) echo "padding-right: {$padding_right5}px;"; ?>
        <?php if ($padding_bottom5) echo "padding-bottom: {$padding_bottom5}px;"; ?>
        <?php if ($padding_left5) echo "padding-left: {$padding_left5}px;"; ?>
    }
<?php } ?>

/*------------ header 6 ----------*/
<?php 
$background_top_bar6 = esc_attr(get_theme_mod('background_top_bar_6', ''));
$color_top_bar6 = esc_attr(get_theme_mod('color_top_bar_6', ''));
$color_link_top_bar6 = esc_attr(get_theme_mod('color_link_top_bar_6', ''));
$color_hover_top_bar6 = esc_attr(get_theme_mod('color_hover_top_bar_6', ''));
$padding_topbar_top6 = esc_attr(get_theme_mod('padding_topbar_top_6', ''));
$padding_topbar_right6 = esc_attr(get_theme_mod('padding_topbar_right_6', ''));
$padding_topbar_bottom6 = esc_attr(get_theme_mod('padding_topbar_bottom_6', ''));
$padding_topbar_left6 = esc_attr(get_theme_mod('padding_topbar_left_6', ''));
if ($background_top_bar6 || $color_top_bar6 || $color_link_top_bar6 || $color_hover_top_bar6 || $padding_topbar_top6 || $padding_topbar_right6 || $padding_topbar_bottom6 || $padding_topbar_left6) { ?>
    .bwp-header.header-v6 #bwp-topbar {
        <?php if ($background_top_bar6) echo "background: {$background_top_bar6};"; ?>
        <?php if ($color_top_bar6) echo "color: {$color_top_bar6};"; ?>
        <?php if ($padding_topbar_top6) echo "padding-top: {$padding_topbar_top6}px;"; ?>
        <?php if ($padding_topbar_right6) echo "padding-right: {$padding_topbar_right6}px;"; ?>
        <?php if ($padding_topbar_bottom6) echo "padding-bottom: {$padding_topbar_bottom6}px;"; ?>
        <?php if ($padding_topbar_left6) echo "padding-left: {$padding_topbar_left6}px;"; ?>
    }
    .bwp-header.header-v6 #bwp-topbar a {
        <?php if ($color_link_top_bar6) echo "color: {$color_link_top_bar6};"; ?>
    }
    .bwp-header.header-v6 #bwp-topbar a:hover {
        <?php if ($color_hover_top_bar6) echo "color: {$color_hover_top_bar6};"; ?>
    }
<?php } ?>
<?php 
	$header_color6 = esc_attr(get_theme_mod('header_color_6', ''));
	if ($header_color6) { ?>
    .bwp-header.header-v6 .header-wrapper {
        background: <?php echo esc_attr($header_color6); ?>;
    }
<?php } ?>
<?php 
	$icon_color6 = esc_attr(get_theme_mod('icon_color_6', ''));
	if ($icon_color6) { ?>
	.bwp-header.header-v6 .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-icon .header-page-link .search-box .search-toggle { color: <?php echo esc_attr($icon_color6); ?>; }
	.bwp-header.header-v6 .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-icon .header-page-link .login-header .active-login { color: <?php echo esc_attr($icon_color6); ?>; }
	.bwp-header.header-v6 .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-icon .header-page-link .wishlist-box a { color: <?php echo esc_attr($icon_color6); ?>; }
	.bwp-header.header-v6 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-icon .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr($icon_color6); ?>; }
<?php } ?>
<?php
	$header_top_color_6 = esc_attr(get_theme_mod('header-top_color_6', ''));
	if($header_top_color_6)  { ?>
	.bwp-header.header-v6 .header-top  {  background: <?php echo esc_attr($header_top_color_6); ?>; }
<?php } ?>
<?php
$header_color_6 = esc_attr(get_theme_mod('header_color_6', ''));
	if ($header_color_6) { ?>
	.bwp-header.header-v6 .header-bottom { background: <?php echo esc_attr($header_color_6); ?>; }
<?php } ?>
<?php
	$menu_color_6 = esc_attr(get_theme_mod('menu_color_6', ''));
	if ($menu_color_6) :?>
	.bwp-header.header-v6 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr($menu_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .bwp-navigation ul.menu > li.level-0 > a { color: <?php echo esc_attr($menu_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .bwp-navigation ul.menu > li.level-0 > a > span:before { background: <?php echo esc_attr($menu_color_6); ?>; }
<?php endif; ?>
<?php
	$color_social = esc_attr(get_theme_mod('color_social', ''));
	if ($color_social) :?>
	.menu-sidebar .menu-header-wrap .social-link_sidebar ul.social-link li > a { color: <?php echo esc_attr($color_social); ?>; }
<?php endif; ?>
<?php
	$vertical_color = esc_attr(get_theme_mod('vertical_color', ''));
	if ($vertical_color) :?>
	.categories-vertical-menu .widget-title { color: <?php echo esc_attr($vertical_color); ?>; }
	.categories-vertical-menu .widget-title i:before { color: <?php echo esc_attr($vertical_color); ?>; }
	.categories-vertical-menu .widget-title:after { color: <?php echo esc_attr($vertical_color); ?>; }
<?php endif; ?>
<?php
	$color_link_vertical = esc_attr(get_theme_mod('color_link_vertical', ''));
	if ($color_link_vertical) :?>
	.categories-vertical-menu .bwp-vertical-navigation >div ul.menu li.level-0>a { color: <?php echo esc_attr($color_link_vertical); ?>; }
<?php endif; ?>
<?php
	$color_info = esc_attr(get_theme_mod('color_info', ''));
	if ($color_info) :?>
	.bwp-header.header-v6 .help a, .bwp-header.header-v6 .order a { color: <?php echo esc_attr($color_info); ?>; }
<?php endif; ?>
<?php
	$background_search = esc_attr(get_theme_mod('background_search', ''));
	if ($background_search) :?>
	.bwp-header .header-search-form .search-from { background: <?php echo esc_attr($background_search); ?>; }
<?php endif; ?>
<?php
	$color_search = esc_attr(get_theme_mod('color_search', ''));
	if ($color_search) :?>
	.bwp-header .header-search-form .search-from .search-box input[type="text"]::placeholder { color: <?php echo esc_attr($color_search); ?>; }
<?php endif; ?>
<?php
	$color_icon_shipping = esc_attr(get_theme_mod('color_icon_shipping', ''));
	if ($color_icon_shipping) :?>
	.bwp-header.header-v6 .shipping svg { fill: <?php echo esc_attr($color_icon_shipping); ?>; }
<?php endif; ?>
<?php
	$color_shipping = esc_attr(get_theme_mod('color_shipping', ''));
	if ($color_shipping) :?>
	.bwp-header.header-v6 .shipping .content-text h2 { color: <?php echo esc_attr($color_shipping); ?>; }
	.bwp-header.header-v6 .shipping .content-text span { color: <?php echo esc_attr($color_shipping); ?>; }
<?php endif; ?>
<?php
	$color_icon_search = esc_attr(get_theme_mod('color_icon_search', ''));
	if ($color_icon_search) :?>
	.bwp-header .header-search-form .search-from #searchsubmit2 .search-icon { color: <?php echo esc_attr($color_icon_search); ?>; }
<?php endif; ?>
<?php 
	$menu_size6 = esc_attr(get_theme_mod('menu_size_6', ''));
	if ($menu_size6) { ?>
    .bwp-header.header-v6 .bwp-navigation ul>li.level-0>a {
        font-size: <?php echo esc_attr($menu_size6); ?>px;
    }
<?php } ?>
<?php
	$hover_color_6 = esc_attr(get_theme_mod('hover_color_6', ''));
	if ($hover_color_6) : ?>
	.bwp-header.header-v6 a:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-page-link .search-box .search-toggle:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .header-page-link .mini-cart .cart-icon:hover:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul > li.level-0:hover.current_page_item > a { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_6); ?>; } 
	.bwp-header.header-v6 .bwp-navigation ul > li.level-0:hover.current-menu-item > a { color: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul > li.level-0:hover.current-menu-ancestor > a { color: <?php echo esc_attr($hover_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .bwp-navigation ul.menu > li.level-0:hover > a { color: <?php echo esc_attr($hover_color_6); ?>; }

	.bwp-header.header-v6 .bwp-navigation ul>li.level-0:hover.current-menu-ancestor>a>span:before { background: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul>li.level-0:hover.current-menu-item>a>span:before { background: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul>li.level-0:hover.current_page_item>a>span:before { background: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr($hover_color_6); ?>; }
	.bwp-header.header-v6 .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_6); ?>; }
	.menu-sidebar .menu-header-wrap .social-link_sidebar ul.social-link li > a:hover { color: <?php echo esc_attr($hover_color_6); ?>; }
	.page-template-homepage .bwp-header.header-v6.header-white .bwp-navigation ul.menu > li.level-0:hover > a > span:before { background: <?php echo esc_attr($hover_color_6); ?>; }
<?php endif; ?>
<?php
	$width_logo_6 = esc_attr(get_theme_mod('width_logo_6', ''));
	if ($width_logo_6) {
	?>
		.bwp-header.header-v6 .wpbingoLogo img {
			max-width: <?php echo esc_attr($width_logo_6); ?>px;
		}
	<?php
	}
?>
<?php 
	$padding_top6 = esc_attr(get_theme_mod('padding_top_6', ''));
	$padding_right6 = esc_attr(get_theme_mod('padding_right_6', ''));
	$padding_bottom6 = esc_attr(get_theme_mod('padding_bottom_6', ''));
	$padding_left6 = esc_attr(get_theme_mod('padding_left_6', ''));
	if ($padding_top6 || $padding_right6 || $padding_bottom6 || $padding_left6) { ?>
    .bwp-header.header-v6 .header-bottom {
        <?php if ($padding_top6) echo "padding-top: {$padding_top6}px;"; ?>
        <?php if ($padding_right6) echo "padding-right: {$padding_right6}px;"; ?>
        <?php if ($padding_bottom6) echo "padding-bottom: {$padding_bottom6}px;"; ?>
        <?php if ($padding_left6) echo "padding-left: {$padding_left6}px;"; ?>
    }
<?php } ?>

<?php 
	$padding_header_top_6 = esc_attr(get_theme_mod('padding_header_top_6', ''));
	$padding_header_right_6 = esc_attr(get_theme_mod('padding_header_right_6', ''));
	$padding_header_bottom_6 = esc_attr(get_theme_mod('padding_header_bottom_6', ''));
	$padding_header_left_6 = esc_attr(get_theme_mod('padding_header_left_6', ''));
	if ($padding_header_top_6 || $padding_header_right_6 || $padding_header_bottom_6 || $padding_header_left_6) { ?>
    .bwp-header.header-v6 .header-top{
        <?php if ($padding_header_top_6) echo "padding-top: {$padding_header_top_6}px;"; ?>
        <?php if ($padding_header_right_6) echo "padding-right: {$padding_header_right_6}px;"; ?>
        <?php if ($padding_header_bottom_6) echo "padding-bottom: {$padding_header_bottom_6}px;"; ?>
        <?php if ($padding_header_left_6) echo "padding-left: {$padding_header_left_6}px;"; ?>
    }
<?php } ?>

/*------------ header 7 ----------*/
<?php if(get_theme_mod('background_top_bar_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar { background: <?php echo esc_attr('background_top_bar_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_top_bar_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar { color: <?php echo esc_attr('color_top_bar_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_link_top_bar_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar a { color: <?php echo esc_attr('color_link_top_bar_7', ''); ?>; }
	.bwp-header.header-v7 #bwp-topbar i { color: <?php echo esc_attr('color_link_top_bar_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_hover_top_bar_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar a:hover { color: <?php echo esc_attr('color_hover_top_bar_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_top_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar { padding-top: <?php echo esc_attr('padding_topbar_top_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_right_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar { padding-right: <?php echo esc_attr('padding_topbar_right_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_bottom_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar { padding-bottom: <?php echo esc_attr('padding_topbar_bottom_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_left_7', '')) { ?>
	.bwp-header.header-v7 #bwp-topbar { padding-left: <?php echo esc_attr('padding_topbar_left_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('header_color_7', '')) { ?>
	.bwp-header.header-v7 .header-wrapper { background: <?php echo esc_attr('header_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-sticky { background: <?php echo esc_attr('header_color_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('icon_color_7', '')) { ?>
	.bwp-header.header-v7 .header-page-link .login-header .active-login, .page-template-homepage .bwp-header.header-v7 .header-page-link .login-header .active-login { color: <?php echo esc_attr('icon_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v7 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text { color: <?php echo esc_attr('icon_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .wishlist-box a, .page-template-homepage .bwp-header.header-v7 .header-page-link .wishlist-box a { color: <?php echo esc_attr('icon_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .mini-cart .cart-icon, .page-template-homepage .bwp-header.header-v7 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr('icon_color_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_search_7', '')) { ?>
	.bwp-header.header-v7 .header-page-link .search-box .search-toggle, .page-template-homepage .bwp-header.header-v7 .header-page-link .search-box .search-toggle  { color: <?php echo esc_attr('color_search_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('menu_color_7', '')) { ?>
	.bwp-header.header-v7 .bwp-navigation ul>li.level-0>a, .page-template-homepage .bwp-header.header-v7 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr('menu_color_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('menu_size_7', '')) { ?>
	.bwp-header.header-v7 .bwp-navigation ul>li.level-0>a { font-size: <?php echo esc_attr('menu_size_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('hover_color_7', '')) { ?>
	.bwp-header.header-v7 a:hover { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .search-box .search-toggle:hover  { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .login-header .active-login:hover .wp-tools-inner .wp-tools-text { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul>li.level-0>a:hover, .page-template-homepage .bwp-header.header-v7 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul>li.level-0.current-menu-ancestor>a>span:before { background: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul>li.level-0.current-menu-item>a>span:before { background: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul>li.level-0.current_page_item>a>span:before { background: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul>li.level-0:hover>a>span:before, .page-template-homepage .bwp-header.header-v7 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul > li.level-0 > a > span:before, .page-template-homepage .bwp-header.header-v7 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul > li.level-0.current_page_item > a, .page-template-homepage .bwp-header.header-v7 .bwp-navigation ul > li.level-0.current_page_item > a { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul > li.level-0:hover > a, .page-template-homepage .bwp-header.header-v7 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul > li.level-0.current-menu-item > a { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.page-template-homepage .bwp-header.header-v7 .bwp-navigation ul > li.level-0.menu-item-home > a { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
	.bwp-header.header-v7 .bwp-navigation ul > li.level-0.current-menu-ancestor > a { color: <?php echo esc_attr('hover_color_7', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('width_logo_7', '')) { ?>
	.bwp-header.header-v7 .wpbingoLogo img { max-width: <?php echo esc_attr('width_logo_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_top_7', '')) { ?>
	.bwp-header.header-v7 .header-wrapper { padding-top: <?php echo esc_attr('padding_top_7', ''); ?>px; }
	.bwp-header.header-v7 .header-sticky { padding-top: <?php echo esc_attr('padding_top_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_right_7', '')) { ?>
	.bwp-header.header-v7 .header-wrapper { padding-right: <?php echo esc_attr('padding_right_7', ''); ?>px; }
	.bwp-header.header-v7 .header-sticky { padding-right: <?php echo esc_attr('padding_right_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_bottom_7', '')) { ?>
	.bwp-header.header-v7 .header-wrapper { padding-bottom: <?php echo esc_attr('padding_bottom_7', ''); ?>px; }
	.bwp-header.header-v7 .header-sticky { padding-bottom: <?php echo esc_attr('padding_bottom_7', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_left_7', '')) { ?>
	.bwp-header.header-v7 .header-wrapper { padding-left: <?php echo esc_attr('padding_left_7', ''); ?>px; }
	.bwp-header.header-v7 .header-sticky { padding-left: <?php echo esc_attr('padding_left_7', ''); ?>px; }
<?php } ?>

/*------------ header 8 ----------*/
<?php if(get_theme_mod('background_top_bar_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar { background: <?php echo esc_attr('background_top_bar_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_top_bar_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar { color: <?php echo esc_attr('color_top_bar_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_link_top_bar_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar a { color: <?php echo esc_attr('color_link_top_bar_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_hover_top_bar_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar a:hover { color: <?php echo esc_attr('color_hover_top_bar_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_top_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar { padding-top: <?php echo esc_attr('padding_topbar_top_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_right_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar { padding-right: <?php echo esc_attr('padding_topbar_right_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_bottom_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar { padding-bottom: <?php echo esc_attr('padding_topbar_bottom_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_topbar_left_8', '')) { ?>
	.bwp-header.header-v8 #bwp-topbar { padding-left: <?php echo esc_attr('padding_topbar_left_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('header_color_8', '')) { ?>
	.bwp-header.header-v8 .header-wrapper { background: <?php echo esc_attr('header_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-sticky { background: <?php echo esc_attr('header_color_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('icon_color_8', '')) { ?>
	.bwp-header.header-v8 .header-page-link .search-box .search-toggle, .page-template-homepage .bwp-header.header-v8 .header-page-link .search-box .search-toggle  { color: <?php echo esc_attr('icon_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .login-header .active-login, .page-template-homepage .bwp-header.header-v8 .header-page-link .login-header .active-login { color: <?php echo esc_attr('icon_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v8 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text { color: <?php echo esc_attr('icon_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .wishlist-box a, .page-template-homepage .bwp-header.header-v8 .header-page-link .wishlist-box a { color: <?php echo esc_attr('icon_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .mini-cart .cart-icon, .page-template-homepage .bwp-header.header-v8 .header-page-link .mini-cart .cart-icon { color: <?php echo esc_attr('icon_color_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('menu_color_8', '')) { ?>
	.bwp-header.header-v8 .bwp-navigation ul>li.level-0>a, .page-template-homepage .bwp-header.header-v8 .bwp-navigation ul>li.level-0>a { color: <?php echo esc_attr('menu_color_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('hover_color_8', '')) { ?>
	.bwp-header.header-v8 a:hover { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .search-box .search-toggle:hover  { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .login-header .active-login:hover { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .login-header .active-login:hover .wp-tools-inner .wp-tools-text { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .wishlist-box a:hover { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .header-page-link .mini-cart .cart-icon:hover { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul>li.level-0>a:hover { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul>li.level-0.current-menu-ancestor>a>span:before { background: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul>li.level-0.current-menu-item>a>span:before { background: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul>li.level-0.current_page_item>a>span:before { background: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul>li.level-0:hover>a>span:before { background: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul > li.level-0 > a > span:before { background: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul > li.level-0.current_page_item > a { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul > li.level-0:hover > a { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul > li.level-0.current-menu-item > a { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
	.bwp-header.header-v8 .bwp-navigation ul > li.level-0.current-menu-ancestor > a { color: <?php echo esc_attr('hover_color_8', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('menu_size_8', '')) { ?>
	.bwp-header.header-v8 .bwp-navigation ul>li.level-0>a { font-size: <?php echo esc_attr('menu_size_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('width_logo_8', '')) { ?>
	.bwp-header.header-v8 .wpbingoLogo img { max-width: <?php echo esc_attr('width_logo_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_top_8', '')) { ?>
	.bwp-header.header-v8 .header-wrapper { padding-top: <?php echo esc_attr('padding_top_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_right_8', '')) { ?>
	.bwp-header.header-v8 .header-wrapper { padding-right: <?php echo esc_attr('padding_right_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_bottom_8', '')) { ?>
	.bwp-header.header-v8 .header-wrapper { padding-bottom: <?php echo esc_attr('padding_bottom_8', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_left_8', '')) { ?>
	.bwp-header.header-v8 .header-wrapper { padding-left: <?php echo esc_attr('padding_left_8', ''); ?>px; }
<?php } ?>

/*------------ Menu mobile ----------*/
<?php if(get_theme_mod('background_menu_top', '')) { ?>
	.bwp-header .header-mobile { background: <?php echo esc_attr('background_menu_top', ''); ?>; }
	.bwp-header.sticky .header-mobile > .container { background: <?php echo esc_attr('background_menu_top', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_menu_top', '')) { ?>
	.bwp-header .header-mobile .navbar-toggle { color: <?php echo esc_attr('color_menu_top', ''); ?>; }
	.bwp-header .header-mobile .mini-cart .cart-icon { color: <?php echo esc_attr('color_menu_top', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('background_menu_bottom', '')) { ?>
	.bwp-header .header-mobile .header-mobile-fixed { background: <?php echo esc_attr('background_menu_bottom', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_menu_bottom', '')) { ?>
	.bwp-header .header-mobile .header-mobile-fixed a{ color: <?php echo esc_attr('color_menu_bottom', ''); ?>; }
	.bwp-header .header-mobile .header-mobile-fixed .search-toggle{ color: <?php echo esc_attr('color_menu_bottom', ''); ?>; }
	.bwp-header .header-mobile .header-mobile-fixed .wishlist-box a{ color: <?php echo esc_attr('color_menu_bottom', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('background_menu_mobile', '')) { ?>
	.content-mobile-menu .bwp-canvas-navigation .mm-menu { background: <?php echo esc_attr('background_menu_mobile', ''); ?>; }
	.content-mobile-menu { background: <?php echo esc_attr('background_menu_mobile', ''); ?>; }
	.content-mobile-menu .bwp-canvas-navigation .mm-menu div { background: <?php echo esc_attr('background_menu_mobile', ''); ?>; }
	.content-mobile-menu .content { background: <?php echo esc_attr('background_menu_mobile', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_menu_mobile', '')) { ?>
	.content-mobile-menu .bwp-canvas-navigation .mm-menu .sub-menu li > a:not(.mm-next) { color: <?php echo esc_attr('color_menu_mobile', ''); ?>; }
	.content-mobile-menu .login-header a { color: <?php echo esc_attr('color_menu_mobile', ''); ?>; }
	.content-mobile-menu .bwp-canvas-navigation .mm-menu ul > li.level-0 > a:not(.mm-next) { color: <?php echo esc_attr('color_menu_mobile', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_menu_mobile_hover', '')) { ?>
	.content-mobile-menu .bwp-canvas-navigation .mm-menu .sub-menu li > a:not(.mm-next):hover { color: <?php echo esc_attr('color_menu_mobile_hover', ''); ?>; }
	.content-mobile-menu .bwp-canvas-navigation .mm-menu ul > li.level-0 > a:not(.mm-next):hover { color: <?php echo esc_attr('color_menu_mobile_hover', ''); ?>; }
	.content-mobile-menu .login-header a:after { background: <?php echo esc_attr('color_menu_mobile_hover', ''); ?>; }
	.content-mobile-menu .bwp-canvas-navigation .mm-menu .mm-navbar a { color: <?php echo esc_attr('color_menu_mobile_hover', ''); ?>; }
	.content-mobile-menu .bwp-canvas-navigation .mm-menu ul > li.current_page_item > a > span.menu-item-text, .content-mobile-menu .bwp-canvas-navigation .mm-menu ul > li.level-0.current_page_item > a > span.menu-item-text { color: <?php echo esc_attr('color_menu_mobile_hover', ''); ?>; }
<?php } ?>

/*------------ Campar ----------*/
<?php if(get_theme_mod('background_campbar', '')) { ?>
	.bwp-header .header-campbar { background: <?php echo esc_attr('background_campbar', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('color_campbar', '')) { ?>
	.bwp-header .header-campbar a { color: <?php echo esc_attr('color_campbar', ''); ?>; }
<?php } ?>
<?php if(get_theme_mod('padding_campbar_top_1', '')) { ?>
	.bwp-header .header-campbar { padding-top: <?php echo esc_attr('padding_campbar_top_1', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_campbar_right_1', '')) { ?>
	.bwp-header .header-campbar { padding-right: <?php echo esc_attr('padding_campbar_right_1', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_campbar_bottom_1', '')) { ?>
	.bwp-header .header-campbar { padding-bottom: <?php echo esc_attr('padding_campbar_bottom_1', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('padding_campbar_left_1', '')) { ?>
	.bwp-header .header-campbar { padding-left: <?php echo esc_attr('padding_campbar_left_1', ''); ?>px; }
<?php } ?>
<?php if(get_theme_mod('font_campbar', '')) { ?>
	.bwp-header .header-campbar a { font-size: <?php echo esc_attr('font_campbar', ''); ?>px; }
<?php } ?>