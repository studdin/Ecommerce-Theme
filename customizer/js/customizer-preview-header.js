( function( $ ) {
	"use strict";
	// HEADER 1
	wp.customize('background_top_bar_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 #bwp-topbar').css('background',value);
        });
    });
	wp.customize('color_top_bar_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 #bwp-topbar').css('color',value);
        });
    });
	wp.customize('color_link_top_bar_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 #bwp-topbar a').css('color',value);
        });
    });
	wp.customize('padding_topbar_top_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .topbar-container').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_topbar_right_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .topbar-container').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_topbar_bottom_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .topbar-container').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_topbar_left_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .topbar-container').css('padding-left',value + 'px');
        });
    });
	wp.customize('header_color_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 .header-wrapper').css('background',value);
        });
    });
	wp.customize('icon_color_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 .header-page-link .search-box .search-toggle').css('color',value);
			$('.bwp-header.header-v1 .header-page-link .login-header .active-login').css('color',value);
            $('.bwp-header.header-v1 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
			$('.bwp-header.header-v1 .header-page-link .wishlist-box a').css('color',value);
			$('.bwp-header.header-v1 .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
	wp.customize('menu_color_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
	wp.customize('menu_size_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
	wp.customize('width_logo_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v1 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
	wp.customize('menu_pos_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .header-menu').removeClass('menu-left');
			$('.bwp-header.header-v1 .header-menu').removeClass('menu-right');
			$('.bwp-header.header-v1 .header-menu').removeClass('menu-center');
            $('.bwp-header.header-v1 .header-menu').addClass(value);
        });
    });
	wp.customize('logo_pos_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .header-logo').removeClass('text-left');
			$('.bwp-header.header-v1 .header-logo').removeClass('text-right');
			$('.bwp-header.header-v1 .header-logo').removeClass('text-center');
            $('.bwp-header.header-v1 .header-logo').addClass(value);
        });
    });
    wp.customize('icons_pos_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .header-page-link').removeClass('text-left');
			$('.bwp-header.header-v1 .header-page-link').removeClass('text-right');
			$('.bwp-header.header-v1 .header-page-link').removeClass('text-center');
            $('.bwp-header.header-v1 .header-page-link').addClass(value);
        });
    });
	wp.customize('padding_top_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .header-wrapper').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_right_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .header-wrapper').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_bottom_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .header-wrapper').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_left_1', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v1 .header-wrapper').css('padding-left',value + 'px');
        });
    });

    // HEADER 2
	wp.customize('background_top_bar_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 #bwp-topbar').css('background',value);
        });
    });
	wp.customize('color_top_bar_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 #bwp-topbar').css('color',value);
        });
    });
	wp.customize('color_link_top_bar_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 #bwp-topbar a').css('color',value);
            $('.bwp-header.header-v2 #bwp-topbar i').css('color',value);
        });
    });
	wp.customize('padding_topbar_top_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 #bwp-topbar').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_topbar_right_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 #bwp-topbar').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_topbar_bottom_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 #bwp-topbar').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_topbar_left_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 #bwp-topbar').css('padding-left',value + 'px');
        });
    });
	wp.customize('header_color_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 .header-wrapper').css('background',value);
			$('.bwp-header.header-v2 .header-sticky').css('background',value);
        });
    });
	wp.customize('icon_color_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 .header-page-link .search-box .search-toggle, .page-template-homepage .bwp-header.header-v2 .header-page-link .search-box .search-toggle').css('color',value);
			$('.bwp-header.header-v2 .header-page-link .login-header .active-login, .page-template-homepage .bwp-header.header-v2 .header-page-link .login-header .active-login').css('color',value);
            $('.bwp-header.header-v2 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v2 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
			$('.bwp-header.header-v2 .header-page-link .wishlist-box a, .page-template-homepage .bwp-header.header-v2 .header-page-link .wishlist-box a').css('color',value);
			$('.bwp-header.header-v2 .header-page-link .mini-cart .cart-icon, .page-template-homepage .bwp-header.header-v2 .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
	wp.customize('menu_color_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 .bwp-navigation ul>li.level-0>a, .page-template-homepage .bwp-header.header-v2 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
	wp.customize('menu_size_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
	wp.customize('width_logo_2', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v2 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
	wp.customize('menu_pos_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 .header-menu').removeClass('menu-left');
			$('.bwp-header.header-v2 .header-menu').removeClass('menu-right');
			$('.bwp-header.header-v2 .header-menu').removeClass('menu-center');
            $('.bwp-header.header-v2 .header-menu').addClass(value);
        });
    });
	wp.customize('logo_pos_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 .header-logo').removeClass('text-left');
			$('.bwp-header.header-v2 .header-logo').removeClass('text-right');
			$('.bwp-header.header-v2 .header-logo').removeClass('text-center');
            $('.bwp-header.header-v2 .header-logo').addClass(value);
        });
    });
    wp.customize('icons_pos_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 .header-page-link').removeClass('text-left');
			$('.bwp-header.header-v2 .header-page-link').removeClass('text-right');
			$('.bwp-header.header-v2 .header-page-link').removeClass('text-center');
            $('.bwp-header.header-v2 .header-page-link').addClass(value);
        });
    });
	wp.customize('padding_top_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 .header-wrapper').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_right_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 .header-wrapper').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_bottom_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 .header-wrapper').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_left_2', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v2 .header-wrapper').css('padding-left',value + 'px');
        });
    });

    // HEADER 3
	wp.customize('background_top_bar_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 #bwp-topbar').css('background',value);
        });
    });
	wp.customize('color_top_bar_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 #bwp-topbar').css('color',value);
        });
    });
	wp.customize('color_link_top_bar_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 #bwp-topbar a').css('color',value);
        });
    });
	wp.customize('padding_topbar_top_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 #bwp-topbar').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_topbar_right_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 #bwp-topbar').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_topbar_bottom_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 #bwp-topbar').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_topbar_left_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 #bwp-topbar').css('padding-left',value + 'px');
        });
    });
	wp.customize('header_color_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 .header-wrapper').css('background',value);
			$('.bwp-header.header-v3 .header-sticky').css('background',value);
        });
    });
	wp.customize('icon_color_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 .header-page-link .search-box .search-toggle').css('color',value);
			$('.bwp-header.header-v3 .header-page-link .login-header .active-login').css('color',value);
            $('.bwp-header.header-v3 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
			$('.bwp-header.header-v3 .header-page-link .wishlist-box a').css('color',value);
			$('.bwp-header.header-v3 .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
	wp.customize('menu_color_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
	wp.customize('menu_size_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
	wp.customize('width_logo_3', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v3 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
	wp.customize('menu_pos_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 .header-menu').removeClass('menu-left');
			$('.bwp-header.header-v3 .header-menu').removeClass('menu-right');
			$('.bwp-header.header-v3 .header-menu').removeClass('menu-center');
            $('.bwp-header.header-v3 .header-menu').addClass(value);
        });
    });
	wp.customize('logo_pos_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 .header-logo').removeClass('text-left');
			$('.bwp-header.header-v3 .header-logo').removeClass('text-right');
			$('.bwp-header.header-v3 .header-logo').removeClass('text-center');
            $('.bwp-header.header-v3 .header-logo').addClass(value);
        });
    });
    wp.customize('icons_pos_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 .header-page-link').removeClass('text-left');
			$('.bwp-header.header-v3 .header-page-link').removeClass('text-right');
			$('.bwp-header.header-v3 .header-page-link').removeClass('text-center');
            $('.bwp-header.header-v3 .header-page-link').addClass(value);
        });
    });
	wp.customize('padding_top_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 .header-wrapper').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_right_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 .header-wrapper').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_bottom_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 .header-wrapper').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_left_3', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v3 .header-wrapper').css('padding-left',value + 'px');
        });
    });

    // HEADER 4
	wp.customize('background_top_bar_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 #bwp-topbar').css('background',value);
        });
    });
	wp.customize('color_top_bar_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 #bwp-topbar').css('color',value);
        });
    });
	wp.customize('color_link_top_bar_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 #bwp-topbar a').css('color',value);
        });
    });
	wp.customize('padding_topbar_top_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 #bwp-topbar').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_topbar_right_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 #bwp-topbar').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_topbar_bottom_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 #bwp-topbar').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_topbar_left_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 #bwp-topbar').css('padding-left',value + 'px');
        });
    });
	wp.customize('header_color_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 .header-wrapper').css('background',value);
		});
    });
	wp.customize('icon_color_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 .header-page-link .search-box .search-toggle, .page-template-homepage .bwp-header.header-v4 .header-page-link .search-box .search-toggle').css('color',value);
			$('.bwp-header.header-v4 .header-page-link .login-header .active-login, .page-template-homepage .bwp-header.header-v4 .header-page-link .login-header .active-login').css('color',value);
            $('.bwp-header.header-v4 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v4 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
			$('.bwp-header.header-v4 .header-page-link .wishlist-box a, .page-template-homepage .bwp-header.header-v4 .header-page-link .wishlist-box a').css('color',value);
			$('.bwp-header.header-v4 .header-page-link .mini-cart .cart-icon, .page-template-homepage .bwp-header.header-v4 .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
	wp.customize('menu_color_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 .bwp-navigation ul>li.level-0>a, .page-template-homepage .bwp-header.header-v4 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
	wp.customize('menu_size_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
	wp.customize('width_logo_4', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v4 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
	wp.customize('menu_pos_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 .header-menu').removeClass('menu-left');
			$('.bwp-header.header-v4 .header-menu').removeClass('menu-right');
			$('.bwp-header.header-v4 .header-menu').removeClass('menu-center');
            $('.bwp-header.header-v4 .header-menu').addClass(value);
        });
    });
	wp.customize('logo_pos_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 .header-logo').removeClass('text-left');
			$('.bwp-header.header-v4 .header-logo').removeClass('text-right');
			$('.bwp-header.header-v4 .header-logo').removeClass('text-center');
            $('.bwp-header.header-v4 .header-logo').addClass(value);
        });
    });
    wp.customize('icons_pos_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 .header-page-link').removeClass('text-left');
			$('.bwp-header.header-v4 .header-page-link').removeClass('text-right');
			$('.bwp-header.header-v4 .header-page-link').removeClass('text-center');
            $('.bwp-header.header-v4 .header-page-link').addClass(value);
        });
    });
	wp.customize('padding_top_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 .header-wrapper').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_right_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 .header-wrapper').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_bottom_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 .header-wrapper').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_left_4', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v4 .header-wrapper').css('padding-left',value + 'px');
        });
    });

    // HEADER 5
	wp.customize('background_top_bar_5', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v5 #bwp-topbar').css('background',value);
        });
    });
	wp.customize('color_top_bar_5', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v5 #bwp-topbar').css('color',value);
        });
    });
	wp.customize('color_link_top_bar_5', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v5 #bwp-topbar a').css('color',value);
        });
    });
	wp.customize('padding_topbar_top_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 #bwp-topbar').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_topbar_right_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 #bwp-topbar').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_topbar_bottom_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 #bwp-topbar').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_topbar_left_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 #bwp-topbar').css('padding-left',value + 'px');
        });
    });
	wp.customize('header_color_5', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v5 .header-wrapper .header-container').css('background',value);
		});
    });
	wp.customize('icon_color_5', function(value) {
        value.bind(function(value) {
            $('body.page-template-homepage .bwp-header.header-color__white .header-page-link .search-box .search-toggle').css('color',value);
			$('body.page-template-homepage .bwp-header.header-color__white .header-page-link .login-header > a').css('color',value);
            $('.bwp-header.header-v5 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v5 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
			$('body.page-template-homepage .bwp-header.header-color__white .header-page-link .wishlist-box a').css('color',value);
			$('body.page-template-homepage .bwp-header.header-color__white .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
	wp.customize('menu_color_5', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v5 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
    wp.customize('color_social', function(value) {
        value.bind(function(value) {
            $('.menu-sidebar .menu-header-wrap .social-link_sidebar ul.social-link li > a').css('color',value);
        });
    });
    wp.customize('color_text', function(value) {
        value.bind(function(value) {
            $('.bwp-header .phone').css('color',value);
            $('.bwp-header .phone a').css('color',value); 
            $('.bwp-header .content-social .social a').css('color',value);
            $('.bwp-header .mail a').css('color',value);
        });
    });
    wp.customize('icon_color_menu', function(value) {
        value.bind(function(value) {
            $('.menu-sidebar .open-menu .line-menu span').css('background',value);
        });
    });
     wp.customize('background_menu', function(value) {
        value.bind(function(value) {
            $('.menu-sidebar .menu-sidebar__content').css('background',value);
        });
    });
     wp.customize('menu_size_5', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v5 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
	wp.customize('social_size', function(value) {
        value.bind(function(value) {
            $('.menu-sidebar .menu-header-wrap .social-link_sidebar ul.social-link li > a').css('font-size',value +'px');
        });
    });
	wp.customize('width_logo_5', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v5 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
	wp.customize('padding_top_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 .header-wrapper .header-container').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_right_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 .header-wrapper .header-container').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_bottom_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 .header-wrapper .header-container').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_left_5', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v5 .header-wrapper .header-container').css('padding-left',value + 'px');
        });
    });

    // HEADER 6
	wp.customize('background_top_bar_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 #bwp-topbar').css('background',value);
        });
    });
	wp.customize('color_top_bar_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 #bwp-topbar').css('color',value);
        });
    });
	wp.customize('color_link_top_bar_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 #bwp-topbar a').css('color',value);
            $('.bwp-header.header-v6 #bwp-topbar i').css('color',value);
        });
    });
	wp.customize('padding_topbar_top_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 #bwp-topbar').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_topbar_right_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 #bwp-topbar').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_topbar_bottom_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 #bwp-topbar').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_topbar_left_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 #bwp-topbar').css('padding-left',value + 'px');
        });
    });
	wp.customize('header_color_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-wrapper').css('background',value);
			$('.bwp-header.header-v6 .header-sticky').css('background',value);
        });
    });
	wp.customize('icon_color_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-page-link .login-header .active-login, .page-template-homepage .bwp-header.header-v6 .header-page-link .login-header .active-login').css('color',value);
            $('.bwp-header.header-v6 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v6 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
			$('.bwp-header.header-v6 .header-page-link .wishlist-box a, .page-template-homepage .bwp-header.header-v6 .header-page-link .wishlist-box a').css('color',value);
			$('.bwp-header.header-v6 .header-page-link .mini-cart .cart-icon, .page-template-homepage .bwp-header.header-v6 .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
    wp.customize('color_search_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-page-link .search-box .search-toggle, .page-template-homepage .bwp-header.header-v6 .header-page-link .search-box .search-toggle').css('color',value);           
         });
    });
     wp.customize('background_search', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-search-form .search-from').css('background',value);
        });
    });
    wp.customize('color_icon_search', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-search-form .search-from #searchsubmit2 .search-icon').css('color',value);
        });
    });
    wp.customize('color_icon_shipping', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .shipping svg').css('fill',value);
        });
    });
    wp.customize('color_shipping', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .shipping .content-text h2').css('color',value);
            $('.bwp-header.header-v6 .shipping .content-text span').css('color',value);
        });
    });
    wp.customize('color_link_vertical', function(value) {
        value.bind(function(value) {
            $('.categories-vertical-menu .bwp-vertical-navigation >div ul.menu li.level-0>a').css('color',value);
        });
    });
     wp.customize('color_info', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .help a, .bwp-header.header-v6 .order a').css('color',value);
        });
    });
	wp.customize('menu_color_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .bwp-navigation ul>li.level-0>a, .page-template-homepage .bwp-header.header-v6 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
	wp.customize('menu_size_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
	wp.customize('width_logo_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
	wp.customize('menu_pos_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-menu').removeClass('menu-left');
			$('.bwp-header.header-v6 .header-menu').removeClass('menu-right');
			$('.bwp-header.header-v6 .header-menu').removeClass('menu-center');
            $('.bwp-header.header-v6 .header-menu').addClass(value);
        });
    });
    wp.customize('icons_pos_search_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-page-link.position-search').removeClass('text-left');
            $('.bwp-header.header-v6 .header-page-link.position-search').removeClass('text-right');
            $('.bwp-header.header-v6 .header-page-link.position-search').removeClass('text-center');
            $('.bwp-header.header-v6 .header-page-link.position-search').addClass(value);
        });
    });
	wp.customize('logo_pos_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-logo').removeClass('text-left');
			$('.bwp-header.header-v6 .header-logo').removeClass('text-right');
			$('.bwp-header.header-v6 .header-logo').removeClass('text-center');
            $('.bwp-header.header-v6 .header-logo').addClass(value);
        });
    });
    wp.customize('icons_pos_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-page-link').removeClass('text-left');
			$('.bwp-header.header-v6 .header-page-link').removeClass('text-right');
			$('.bwp-header.header-v6 .header-page-link').removeClass('text-center');
            $('.bwp-header.header-v6 .header-page-link').addClass(value);
        });
    });
    wp.customize('header-top_color_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-top').css('background',value);
        });
    });
    wp.customize('header_color_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-bottom').css('background',value);
        });
    });
    wp.customize('padding_header_top_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-top').css('padding-top',value + 'px');
        });
    });
    wp.customize('padding_header_right_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-top').css('padding-right',value + 'px');
        });
    });
    wp.customize('padding_header_bottom_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-top').css('padding-bottom',value + 'px');
        });
    });
    wp.customize('padding_header_left_6', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v6 .header-top').css('padding-left',value + 'px');
        });
    });
	wp.customize('padding_top_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-bottom').css('padding-top',value + 'px');
        });
    });
	wp.customize('padding_right_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-bottom').css('padding-right',value + 'px');
        });
    });
	wp.customize('padding_bottom_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-bottom').css('padding-bottom',value + 'px');
        });
    });
	wp.customize('padding_left_6', function(value) {
        value.bind(function(value) {
			$('.bwp-header.header-v6 .header-bottom').css('padding-left',value + 'px');
        });
    });

    // HEADER 7
    wp.customize('background_top_bar_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 #bwp-topbar').css('background',value);
        });
    });
    wp.customize('color_top_bar_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 #bwp-topbar').css('color',value);
        });
    });
    wp.customize('color_link_top_bar_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 #bwp-topbar a').css('color',value);
            $('.bwp-header.header-v7 #bwp-topbar i').css('color',value);
        });
    });
    wp.customize('padding_topbar_top_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 #bwp-topbar').css('padding-top',value + 'px');
        });
    });
    wp.customize('padding_topbar_right_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 #bwp-topbar').css('padding-right',value + 'px');
        });
    });
    wp.customize('padding_topbar_bottom_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 #bwp-topbar').css('padding-bottom',value + 'px');
        });
    });
    wp.customize('padding_topbar_left_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 #bwp-topbar').css('padding-left',value + 'px');
        });
    });
    wp.customize('header_color_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-wrapper').css('background',value);
            $('.bwp-header.header-v7 .header-sticky').css('background',value);
        });
    });
    wp.customize('icon_color_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-page-link .login-header .active-login, .page-template-homepage .bwp-header.header-v7 .header-page-link .login-header .active-login').css('color',value);
            $('.bwp-header.header-v7 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v7 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
            $('.bwp-header.header-v7 .header-page-link .wishlist-box a, .page-template-homepage .bwp-header.header-v7 .header-page-link .wishlist-box a').css('color',value);
            $('.bwp-header.header-v7 .header-page-link .mini-cart .cart-icon, .page-template-homepage .bwp-header.header-v7 .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
    wp.customize('color_search_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-page-link .search-box .search-toggle, .page-template-homepage .bwp-header.header-v7 .header-page-link .search-box .search-toggle').css('color',value);           
         });
    });
    wp.customize('menu_color_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .bwp-navigation ul>li.level-0>a, .page-template-homepage .bwp-header.header-v7 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
    wp.customize('menu_size_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
    wp.customize('width_logo_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
    wp.customize('menu_pos_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-menu').removeClass('menu-left');
            $('.bwp-header.header-v7 .header-menu').removeClass('menu-right');
            $('.bwp-header.header-v7 .header-menu').removeClass('menu-center');
            $('.bwp-header.header-v7 .header-menu').addClass(value);
        });
    });
    wp.customize('icons_pos_search_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-page-link.position-search').removeClass('text-left');
            $('.bwp-header.header-v7 .header-page-link.position-search').removeClass('text-right');
            $('.bwp-header.header-v7 .header-page-link.position-search').removeClass('text-center');
            $('.bwp-header.header-v7 .header-page-link.position-search').addClass(value);
        });
    });
    wp.customize('logo_pos_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-logo').removeClass('text-left');
            $('.bwp-header.header-v7 .header-logo').removeClass('text-right');
            $('.bwp-header.header-v7 .header-logo').removeClass('text-center');
            $('.bwp-header.header-v7 .header-logo').addClass(value);
        });
    });
    wp.customize('icons_pos_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-page-link').removeClass('text-left');
            $('.bwp-header.header-v7 .header-page-link').removeClass('text-right');
            $('.bwp-header.header-v7 .header-page-link').removeClass('text-center');
            $('.bwp-header.header-v7 .header-page-link').addClass(value);
        });
    });
    wp.customize('padding_top_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-wrapper').css('padding-top',value + 'px');
        });
    });
    wp.customize('padding_right_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-wrapper').css('padding-right',value + 'px');
        });
    });
    wp.customize('padding_bottom_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-wrapper').css('padding-bottom',value + 'px');
        });
    });
    wp.customize('padding_left_7', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v7 .header-wrapper').css('padding-left',value + 'px');
        });
    });

    // HEADER 8
    wp.customize('background_top_bar_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 #bwp-topbar').css('background',value);
        });
    });
    wp.customize('color_top_bar_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 #bwp-topbar').css('color',value);
        });
    });
    wp.customize('color_link_top_bar_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 #bwp-topbar a').css('color',value);
        });
    });
    wp.customize('padding_topbar_top_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 #bwp-topbar').css('padding-top',value + 'px');
        });
    });
    wp.customize('padding_topbar_right_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 #bwp-topbar').css('padding-right',value + 'px');
        });
    });
    wp.customize('padding_topbar_bottom_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 #bwp-topbar').css('padding-bottom',value + 'px');
        });
    });
    wp.customize('padding_topbar_left_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 #bwp-topbar').css('padding-left',value + 'px');
        });
    });
    wp.customize('header_color_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-wrapper').css('background',value);
        });
    });
    wp.customize('icon_color_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-page-link .search-box .search-toggle, .page-template-homepage .bwp-header.header-v8 .header-page-link .search-box .search-toggle').css('color',value);
            $('.bwp-header.header-v8 .header-page-link .login-header .active-login, .page-template-homepage .bwp-header.header-v8 .header-page-link .login-header .active-login').css('color',value);
            $('.bwp-header.header-v8 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text, .page-template-homepage .bwp-header.header-v8 .header-page-link .login-header > a .wp-tools-inner .wp-tools-text').css('color',value);
            $('.bwp-header.header-v8 .header-page-link .wishlist-box a, .page-template-homepage .bwp-header.header-v8 .header-page-link .wishlist-box a').css('color',value);
            $('.bwp-header.header-v8 .header-page-link .mini-cart .cart-icon, .page-template-homepage .bwp-header.header-v8 .header-page-link .mini-cart .cart-icon').css('color',value);
        });
    });
    wp.customize('menu_color_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .bwp-navigation ul>li.level-0>a, .page-template-homepage .bwp-header.header-v8 .bwp-navigation ul>li.level-0>a').css('color',value);
        });
    });
    wp.customize('menu_size_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .bwp-navigation ul>li.level-0>a').css('font-size',value +'px');
        });
    });
    wp.customize('width_logo_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .wpbingoLogo img').css('max-width',value + 'px');
        });
    });
    wp.customize('menu_pos_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-menu').removeClass('menu-left');
            $('.bwp-header.header-v8 .header-menu').removeClass('menu-right');
            $('.bwp-header.header-v8 .header-menu').removeClass('menu-center');
            $('.bwp-header.header-v8 .header-menu').addClass(value);
        });
    });
    wp.customize('logo_pos_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-logo').removeClass('text-left');
            $('.bwp-header.header-v8 .header-logo').removeClass('text-right');
            $('.bwp-header.header-v8 .header-logo').removeClass('text-center');
            $('.bwp-header.header-v8 .header-logo').addClass(value);
        });
    });
    wp.customize('icons_pos_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-page-link').removeClass('text-left');
            $('.bwp-header.header-v8 .header-page-link').removeClass('text-right');
            $('.bwp-header.header-v8 .header-page-link').removeClass('text-center');
            $('.bwp-header.header-v8 .header-page-link').addClass(value);
        });
    });
    wp.customize('padding_top_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-wrapper').css('padding-top',value + 'px');
        });
    });
    wp.customize('padding_right_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-wrapper').css('padding-right',value + 'px');
        });
    });
    wp.customize('padding_bottom_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-wrapper').css('padding-bottom',value + 'px');
        });
    });
    wp.customize('padding_left_8', function(value) {
        value.bind(function(value) {
            $('.bwp-header.header-v8 .header-wrapper').css('padding-left',value + 'px');
        });
    });
	
	// MENU MOBILE
	wp.customize('background_menu_top', function(value) {
        value.bind(function(value) {
			$('.bwp-header .header-mobile').css('background',value );
			$('.bwp-header.sticky .header-mobile > .container').css('background',value );
        });
    });
	wp.customize('color_menu_top', function(value) {
        value.bind(function(value) {
			$('.bwp-header .header-mobile .navbar-toggle').css('color',value );
			$('.bwp-header .header-mobile .mini-cart .cart-icon').css('color',value );
        });
    });
	wp.customize('background_menu_bottom', function(value) {
        value.bind(function(value) {
			$('.bwp-header .header-mobile .header-mobile-fixed').css('background',value );
        });
    });
	wp.customize('color_menu_bottom', function(value) {
        value.bind(function(value) {
			$('.bwp-header .header-mobile .header-mobile-fixed a').css('color',value );
			$('.bwp-header .header-mobile .header-mobile-fixed .search-toggle').css('color',value );
			$('.bwp-header .header-mobile .header-mobile-fixed .wishlist-box a').css('color',value );
        });
    });
	wp.customize('background_menu_mobile', function(value) {
        value.bind(function(value) {
			$('.content-mobile-menu').addClass('active');
			$('.content-mobile-menu .bwp-canvas-navigation .mm-menu').css('background',value );
			$('.content-mobile-menu').css('background',value );
			$('.content-mobile-menu .bwp-canvas-navigation .mm-menu div').css('background',value );
			$('.content-mobile-menu .content').css('background',value );
        });
    });
	wp.customize('color_menu_mobile', function(value) {
        value.bind(function(value) {
			$('.content-mobile-menu').addClass('active');
			$('.content-mobile-menu .bwp-canvas-navigation .mm-menu .sub-menu li > a:not(.mm-next)').css('color',value );
			$('.content-mobile-menu .bwp-canvas-navigation .mm-menu ul > li.level-0 > a:not(.mm-next)').css('color',value );
        });
    });
     // CAMPAR
    wp.customize('background_campbar', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-campbar').css('background',value );
        });
    });
    wp.customize('color_campbar', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-campbar a').css('color',value );
        });
    });;
    wp.customize('padding_campbar_top_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-campbar').css('padding-top',value + 'px');
        });
    });
    wp.customize('padding_campbar_right_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-campbar').css('padding-right',value + 'px');
        });
    });
    wp.customize('padding_campbar_bottom_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-campbar').css('padding-bottom',value + 'px');
        });
    });
    wp.customize('padding_campbar_left_1', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-campbar').css('padding-left',value + 'px');
        });
    });
    wp.customize('font_campbar', function(value) {
        value.bind(function(value) {
            $('.bwp-header .header-campbar a').css('font-size',value +'px');
        });
    });
} )( jQuery );