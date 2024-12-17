/*------------ CARD 1 ----------*/
<?php 
	$button_color1 = esc_attr(get_theme_mod('color_button_1', ''));
	if($button_color1) { ?>
	.products-list.grid .content-product1 .products-thumb .product-button .product_type_grouped:before,
	.products-list.grid .content-product1 .products-thumb .product-button .add_to_cart_button:before,
	.products-list.grid .content-product1 .products-thumb .product-button .product_type_external:before,
	.products-list.grid .content-product1 .products-thumb .product-button .read_more:before,
	.products-list.grid .content-product1 .products-thumb .product-button .added_to_cart:before,
	.products-list.grid .content-product1 .products-thumb .product-button .product_type_variable:before { 
		color: <?php echo esc_attr($button_color1); ?>; 
	}
	.products-list.grid .content-product1 .products-thumb .product-button .product-quickview > a:before,
	.products-list.grid .content-product1 .products-thumb .product-button .woosw-btn:before,
	.products-list.grid .content-product1 .products-thumb .product-button .woosc-btn:before {
		color: <?php echo esc_attr($button_color1); ?>; 
	}
<?php } ?>
<?php 
	$button_background1 = esc_attr(get_theme_mod('background_button_1', ''));
	if($button_background1) { ?>
	.products-list.grid .content-product1 .products-thumb .product-button .product_type_grouped,
	.products-list.grid .content-product1 .products-thumb .product-button .add_to_cart_button,
	.products-list.grid .content-product1 .products-thumb .product-button .product_type_external,
	.products-list.grid .content-product1 .products-thumb .product-button .read_more,
	.products-list.grid .content-product1 .products-thumb .product-button .added_to_cart,
	.products-list.grid .content-product1 .products-thumb .product-button .product_type_variable,
	.products-list.grid .content-product1 .products-thumb .product-button .woosw-btn,
	.products-list.grid .content-product1 .products-thumb .product-button .woosc-btn,
	.products-list.grid .content-product1 .products-thumb .product-button .product-quickview a {
		background: <?php echo esc_attr($button_background1); ?>;
	}
<?php } ?>
<?php 
	$title_color1 = esc_attr(get_theme_mod('color_title_1', ''));
	if($title_color1) { ?>
	.products-list.grid .content-product1 .products-content h3.product-title a {
		color: <?php echo esc_attr($title_color1); ?>;
	}
<?php } ?>
<?php 
	$title_size1 = esc_attr(get_theme_mod('size_title_1', ''));
	if($title_size1) { ?>
	.products-list.grid .content-product1 .products-content h3.product-title{
		font-size: <?php echo esc_attr($title_size1); ?>px;
	}
<?php } ?>
<?php 
	$price_color1 = esc_attr(get_theme_mod('color_price_1', ''));
	if($price_color1) { ?>
	.products-list.grid .content-product1 .products-content .price,
	.products-list.grid .content-product1 .products-content .price ins {
		color: <?php echo esc_attr($price_color1); ?>;
	}
<?php } ?>
<?php 
	$price_sale_color1 = esc_attr(get_theme_mod('color_price_sale_1', ''));
	if($price_sale_color1) { ?>
	.products-list.grid .content-product1 .products-content .price del {
		color: <?php echo esc_attr($price_sale_color1); ?>;
	}
<?php } ?>
<?php 
	$price_size1 = esc_attr(get_theme_mod('size_price_1', ''));
	if($price_size1) { ?>
	.products-list.grid .content-product1 .products-content .price,
	.products-list.grid .content-product1 .products-content .price ins {
		font-size: <?php echo esc_attr($price_size1); ?>px;
	}
	.products-list.grid .content-product1 .products-content .price del {
		font-size: calc(<?php echo esc_attr($price_size1); ?>px - 2px);
	}
<?php } ?>
<?php 
	$sale_color1 = esc_attr(get_theme_mod('color_sale_1', ''));
	if($sale_color1) { ?>
	.products-list.grid .content-product1 .product-lable .onsale {
		color: <?php echo esc_attr($sale_color1); ?>;
	}
<?php } ?>
<?php 
	$sale_background1 = esc_attr(get_theme_mod('background_sale_1', ''));
	if($sale_background1) { ?>
	.products-list.grid .content-product1 .product-lable .onsale {
		background: <?php echo esc_attr($sale_background1); ?>;
	}
<?php } ?>
<?php 
	$hot_color1 = esc_attr(get_theme_mod('color_hot_1', ''));
	if($hot_color1) { ?>
	.products-list.grid .content-product1 .product-lable .hot {
		color: <?php echo esc_attr($hot_color1); ?>;
	}
<?php } ?>
<?php 
	$hot_background1 = esc_attr(get_theme_mod('background_hot_1', ''));
	if($hot_background1) { ?>
	.products-list.grid .content-product1 .product-lable .hot {
		background: <?php echo esc_attr($hot_background1); ?>;
	}
<?php } ?>

/*------------ CARD 2 ----------*/
<?php if(get_theme_mod('color_button_2', '')) { ?>
	.products-list.grid .content-product2 .products-thumb .product-button .product_type_grouped:before,
	.products-list.grid .content-product2 .products-thumb .product-button .add_to_cart_button:before,
	.products-list.grid .content-product2 .products-thumb .product-button .product_type_external:before,
	.products-list.grid .content-product2 .products-thumb .product-button .read_more:before,
	.products-list.grid .content-product2 .products-thumb .product-button .added_to_cart:before,
	.products-list.grid .content-product2 .products-thumb .product-button .product_type_variable:before{ 
		color: <?php echo get_theme_mod('color_button_2', ''); ?>; 
	}
	.products-list.grid .content-product2 .products-thumb .product-button .woosw-btn:before{
		color: <?php echo get_theme_mod('color_button_2', ''); ?>; 
	}
	.products-list.grid .content-product2 .products-thumb .product-button .woosc-btn:before{
		color: <?php echo get_theme_mod('color_button_2', ''); ?>; 
	}
<?php } ?>
<?php if(get_theme_mod('background_button_2', '')) { ?>
	.products-list.grid .content-product2 .products-thumb .product-button .product_type_grouped,
	.products-list.grid .content-product2 .products-thumb .product-button .add_to_cart_button,
	.products-list.grid .content-product2 .products-thumb .product-button .product_type_external,
	.products-list.grid .content-product2 .products-thumb .product-button .read_more,
	.products-list.grid .content-product2 .products-thumb .product-button .added_to_cart,
	.products-list.grid .content-product2 .products-thumb .product-button .product_type_variable{
		background: <?php echo get_theme_mod('background_button_2', ''); ?>;
	}
	.products-list.grid .content-product2 .products-thumb .product-button .woosw-btn{
		background: <?php echo get_theme_mod('background_button_2', ''); ?>;
	}
	.products-list.grid .content-product2 .products-thumb .product-button .woosc-btn{
		background: <?php echo get_theme_mod('background_button_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_qv_button_2', '')) { ?>
	.products-list.grid .content-product2 .products-thumb .btn-quickview .product-quickview > a{
		color: <?php echo get_theme_mod('color_qv_button_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_qv_button_2', '')) { ?>
	.products-list.grid .content-product2 .products-thumb .btn-quickview .product-quickview > a{
		background: <?php echo get_theme_mod('background_qv_button_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_title_2', '')) { ?>
	.products-list.grid .content-product2 .products-content h3.product-title a{
		color: <?php echo get_theme_mod('color_title_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_title_2', '')) { ?>
	.products-list.grid .content-product2 .products-content h3.product-title{
		font-size: <?php echo get_theme_mod('size_title_2', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_2', '')) { ?>
	.products-list.grid .content-product2 .products-content .price{
		color: <?php echo get_theme_mod('color_price_2', ''); ?>;
	}
	.products-list.grid .content-product2 .products-content .price ins{
		color: <?php echo get_theme_mod('color_price_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_sale_2', '')) { ?>
	.products-list.grid .content-product2 .products-content .price del{
		color: <?php echo get_theme_mod('color_price_sale_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_price_2', '')) { ?>
	.products-list.grid .content-product2 .products-content .price{
		font-size: <?php echo get_theme_mod('size_price_2', ''); ?>px;
	}
	.products-list.grid .content-product2 .products-content .price ins{
		font-size: <?php echo get_theme_mod('size_price_2', ''); ?>px;
	}
	.products-list.grid .content-product2 .products-content .price del{
		font-size: calc(<?php echo get_theme_mod('size_price_2', ''); ?>px - 2px);
	}
<?php } ?>
<?php if(get_theme_mod('color_sale_2', '')) { ?>
	.products-list.grid .content-product2 .product-lable .onsale{
		color: <?php echo get_theme_mod('color_sale_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_sale_2', '')) { ?>
	.products-list.grid .content-product2 .product-lable .onsale{
		background: <?php echo get_theme_mod('background_sale_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_hot_2', '')) { ?>
	.products-list.grid .content-product2 .product-lable .hot{
		color: <?php echo get_theme_mod('color_hot_2', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_hot_2', '')) { ?>
	.products-list.grid .content-product2 .product-lable .hot{
		background: <?php echo get_theme_mod('background_hot_2', ''); ?>;
	}
<?php } ?>

/*------------ CARD 3 ----------*/
<?php if(get_theme_mod('color_button_3', '')) { ?>
	.products-list.grid .content-product3 .products-thumb .product-button .product-quickview > a:before{
		color: <?php echo get_theme_mod('color_button_3', ''); ?>; 
	}
	.products-list.grid .content-product3 .products-thumb .product-button .woosw-btn:before{
		color: <?php echo get_theme_mod('color_button_3', ''); ?>; 
	}
	.products-list.grid .content-product3 .products-thumb .product-button .woosc-btn:before{
		color: <?php echo get_theme_mod('color_button_3', ''); ?>; 
	}
<?php } ?>
<?php if(get_theme_mod('background_button_3', '')) { ?>
	.products-list.grid .content-product3 .products-thumb .product-button .woosw-btn{
		background: <?php echo get_theme_mod('background_button_3', ''); ?>;
	}
	.products-list.grid .content-product3 .products-thumb .product-button .woosc-btn{
		background: <?php echo get_theme_mod('background_button_3', ''); ?>;
	}
	.products-list.grid .content-product3 .products-thumb .product-button .product-quickview a{
		background: <?php echo get_theme_mod('background_button_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_atc_button_3', '')) { ?>
	.products-list.grid .product-wapper .products-thumb .btn-atc > div > a{
		color: <?php echo get_theme_mod('color_atc_button_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_atc_button_3', '')) { ?>
	.products-list.grid .product-wapper .products-thumb .btn-atc > div > a{
		background: <?php echo get_theme_mod('background_atc_button_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_title_3', '')) { ?>
	.products-list.grid .content-product3 .products-content h3.product-title a{
		color: <?php echo get_theme_mod('color_title_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_title_3', '')) { ?>
	.products-list.grid .content-product3 .products-content h3.product-title{
		font-size: <?php echo get_theme_mod('size_title_3', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_3', '')) { ?>
	.products-list.grid .content-product3 .products-content .price{
		color: <?php echo get_theme_mod('color_price_3', ''); ?>;
	}
	.products-list.grid .content-product3 .products-content .price ins{
		color: <?php echo get_theme_mod('color_price_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_sale_3', '')) { ?>
	.products-list.grid .content-product3 .products-content .price del{
		color: <?php echo get_theme_mod('color_price_sale_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_price_3', '')) { ?>
	.products-list.grid .content-product3 .products-content .price{
		font-size: <?php echo get_theme_mod('size_price_3', ''); ?>px;
	}
	.products-list.grid .content-product3 .products-content .price ins{
		font-size: <?php echo get_theme_mod('size_price_3', ''); ?>px;
	}
	.products-list.grid .content-product3 .products-content .price del{
		font-size: calc(<?php echo get_theme_mod('size_price_3', ''); ?>px - 2px);
	}
<?php } ?>
<?php if(get_theme_mod('color_sale_3', '')) { ?>
	.products-list.grid .content-product3 .product-lable .onsale{
		color: <?php echo get_theme_mod('color_sale_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_sale_3', '')) { ?>
	.products-list.grid .content-product3 .product-lable .onsale{
		background: <?php echo get_theme_mod('background_sale_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_hot_3', '')) { ?>
	.products-list.grid .content-product3 .product-lable .hot{
		color: <?php echo get_theme_mod('color_hot_3', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_hot_3', '')) { ?>
	.products-list.grid .content-product3 .product-lable .hot{
		background: <?php echo get_theme_mod('background_hot_3', ''); ?>;
	}
<?php } ?>

/*------------ CARD 4 ----------*/
<?php if(get_theme_mod('color_button_4', '')) { ?>
	.products-list.grid .content-product4 .products-thumb .product-button .product_type_grouped:before,
	.products-list.grid .content-product4 .products-thumb .product-button .add_to_cart_button:before,
	.products-list.grid .content-product4 .products-thumb .product-button .product_type_external:before,
	.products-list.grid .content-product4 .products-thumb .product-button .read_more:before,
	.products-list.grid .content-product4 .products-thumb .product-button .added_to_cart:before,
	.products-list.grid .content-product4 .products-thumb .product-button .product_type_variable:before{ 
		color: <?php echo get_theme_mod('color_button_4', ''); ?>; 
	}
	.products-list.grid .content-product4 .products-thumb .product-button .product-quickview > a:before{
		color: <?php echo get_theme_mod('color_button_4', ''); ?>; 
	}
	.products-list.grid .content-product4 .products-thumb .product-button .woosw-btn:before{
		color: <?php echo get_theme_mod('color_button_4', ''); ?>; 
	}
	.products-list.grid .content-product4 .products-thumb .product-button .woosc-btn:before{
		color: <?php echo get_theme_mod('color_button_4', ''); ?>; 
	}
<?php } ?>
<?php if(get_theme_mod('background_button_4', '')) { ?>
	.products-list.grid .content-product4 .products-thumb .product-button .product_type_grouped,
	.products-list.grid .content-product4 .products-thumb .product-button .add_to_cart_button,
	.products-list.grid .content-product4 .products-thumb .product-button .product_type_external,
	.products-list.grid .content-product4 .products-thumb .product-button .read_more,
	.products-list.grid .content-product4 .products-thumb .product-button .added_to_cart,
	.products-list.grid .content-product4 .products-thumb .product-button .product_type_variable{
		background: <?php echo get_theme_mod('background_button_4', ''); ?>;
	}
	.products-list.grid .content-product4 .products-thumb .product-button .woosw-btn{
		background: <?php echo get_theme_mod('background_button_4', ''); ?>;
	}
	.products-list.grid .content-product4 .products-thumb .product-button .woosc-btn{
		background: <?php echo get_theme_mod('background_button_4', ''); ?>;
	}
	.products-list.grid .content-product4 .products-thumb .product-button .product-quickview a{
		background: <?php echo get_theme_mod('background_button_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_container_button_4', '')) { ?>
	.products-list.grid .product-wapper.content-product4 .product-button{
		background: <?php echo get_theme_mod('background_container_button_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_title_4', '')) { ?>
	.products-list.grid .content-product4 .products-content h3.product-title a{
		color: <?php echo get_theme_mod('color_title_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_title_4', '')) { ?>
	.products-list.grid .content-product4 .products-content h3.product-title{
		font-size: <?php echo get_theme_mod('size_title_4', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_4', '')) { ?>
	.products-list.grid .content-product4 .products-content .price{
		color: <?php echo get_theme_mod('color_price_4', ''); ?>;
	}
	.products-list.grid .content-product4 .products-content .price ins{
		color: <?php echo get_theme_mod('color_price_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_sale_4', '')) { ?>
	.products-list.grid .content-product4 .products-content .price del{
		color: <?php echo get_theme_mod('color_price_sale_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_price_4', '')) { ?>
	.products-list.grid .content-product4 .products-content .price{
		font-size: <?php echo get_theme_mod('size_price_4', ''); ?>px;
	}
	.products-list.grid .content-product4 .products-content .price ins{
		font-size: <?php echo get_theme_mod('size_price_4', ''); ?>px;
	}
	.products-list.grid .content-product4 .products-content .price del{
		font-size: calc(<?php echo get_theme_mod('size_price_4', ''); ?>px - 2px);
	}
<?php } ?>
<?php if(get_theme_mod('color_sale_4', '')) { ?>
	.products-list.grid .content-product4 .product-lable .onsale{
		color: <?php echo get_theme_mod('color_sale_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_sale_4', '')) { ?>
	.products-list.grid .content-product4 .product-lable .onsale{
		background: <?php echo get_theme_mod('background_sale_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_hot_4', '')) { ?>
	.products-list.grid .content-product4 .product-lable .hot{
		color: <?php echo get_theme_mod('color_hot_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_hot_4', '')) { ?>
	.products-list.grid .content-product4 .product-lable .hot{
		background: <?php echo get_theme_mod('background_hot_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_label_4', '')) { ?>
	.products-list.grid .content-product4 .product-lable .hot{
		font-size: <?php echo get_theme_mod('size_label_4', ''); ?>px;
	}
	.products-list.grid .content-product4 .product-lable .onsale{
		font-size: <?php echo get_theme_mod('size_label_4', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_pre_4', '')) { ?>
	.products-list.grid .content-product4 .product-stock .stock{
		color: <?php echo get_theme_mod('color_pre_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_pre_4', '')) { ?>
	.products-list.grid .content-product4 .product-stock{
		background: <?php echo get_theme_mod('background_pre_4', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_pre_4', '')) { ?>
	.products-list.grid .content-product4 .product-stock .stock{
		font-size: <?php echo get_theme_mod('size_pre_4', ''); ?>px;
	}
<?php } ?>

/*------------ CARD 5 ----------*/
<?php if(get_theme_mod('color_button_5', '')) { ?>
	.products-list.grid .content-product5 .products-thumb .product-button .product_type_grouped:before,
	.products-list.grid .content-product5 .products-thumb .product-button .add_to_cart_button:before,
	.products-list.grid .content-product5 .products-thumb .product-button .product_type_external:before,
	.products-list.grid .content-product5 .products-thumb .product-button .read_more:before,
	.products-list.grid .content-product5 .products-thumb .product-button .added_to_cart:before,
	.products-list.grid .content-product5 .products-thumb .product-button .product_type_variable:before{ 
		color: <?php echo get_theme_mod('color_button_5', ''); ?>; 
	}
	.products-list.grid .content-product5 .products-thumb .product-button .product-quickview > a:before{
		color: <?php echo get_theme_mod('color_button_5', ''); ?>; 
	}
	.products-list.grid .content-product5 .products-thumb .product-button .woosw-btn:before{
		color: <?php echo get_theme_mod('color_button_5', ''); ?>; 
	}
	.products-list.grid .content-product5 .products-thumb .product-button .woosc-btn:before{
		color: <?php echo get_theme_mod('color_button_5', ''); ?>; 
	}
	.products-list.grid .product-wapper.content-product5.quick-shop .single_add_to_cart_button{
		color: <?php echo get_theme_mod('color_button_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_button_5', '')) { ?>
	.products-list.grid .content-product5 .products-thumb .product-button .product_type_grouped,
	.products-list.grid .content-product5 .products-thumb .product-button .add_to_cart_button,
	.products-list.grid .content-product5 .products-thumb .product-button .product_type_external,
	.products-list.grid .content-product5 .products-thumb .product-button .read_more,
	.products-list.grid .content-product5 .products-thumb .product-button .added_to_cart,
	.products-list.grid .content-product5 .products-thumb .product-button .product_type_variable{
		background: <?php echo get_theme_mod('background_button_5', ''); ?>;
	}
	.products-list.grid .product-wapper.content-product5.quick-shop .single_add_to_cart_button{
		background: <?php echo get_theme_mod('background_button_5', ''); ?>;
	}
	.products-list.grid .content-product5 .products-thumb .product-button .woosw-btn{
		background: <?php echo get_theme_mod('background_button_5', ''); ?>;
	}
	.products-list.grid .content-product5 .products-thumb .product-button .woosc-btn{
		background: <?php echo get_theme_mod('background_button_5', ''); ?>;
	}
	.products-list.grid .content-product5 .products-thumb .product-button .product-quickview a{
		background: <?php echo get_theme_mod('background_button_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_attr_5', '')) { ?>
	.products-list.grid .product-wapper.content-product5 .content-form-attribute .form-attribute{
		background: <?php echo get_theme_mod('background_attr_5', ''); ?>7F;
	}
	@media (min-width: 1199px){
		.products-list.grid .product-wapper.content-product5 .content-form-attribute .list-attribute:hover {
			background: <?php echo get_theme_mod('background_attr_5', ''); ?>;
		}
		.products-list.grid .product-wapper.content-product5 .content-form-attribute .list-attribute.active {
			background: <?php echo get_theme_mod('background_attr_5', ''); ?>;
		}
	}
<?php } ?>
<?php if(get_theme_mod('color_attr_5', '')) { ?>
	.products-list.grid .product-wapper.content-product5 .content-form-attribute .form-attribute .title{
		color: <?php echo get_theme_mod('color_attr_5', ''); ?>;
	}
	.products-list.grid .product-wapper.content-product5 .content-form-attribute .list-attribute{
		color: <?php echo get_theme_mod('color_attr_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_title_5', '')) { ?>
	.products-list.grid .content-product5 .products-content h3.product-title a{
		color: <?php echo get_theme_mod('color_title_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_title_5', '')) { ?>
	.products-list.grid .content-product5 .products-content h3.product-title{
		font-size: <?php echo get_theme_mod('size_title_5', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_5', '')) { ?>
	.products-list.grid .content-product5 .products-content .price{
		color: <?php echo get_theme_mod('color_price_5', ''); ?>;
	}
	.products-list.grid .content-product5 .products-content .price ins{
		color: <?php echo get_theme_mod('color_price_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_sale_5', '')) { ?>
	.products-list.grid .content-product5 .products-content .price del{
		color: <?php echo get_theme_mod('color_price_sale_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_price_5', '')) { ?>
	.products-list.grid .content-product5 .products-content .price{
		font-size: <?php echo get_theme_mod('size_price_5', ''); ?>px;
	}
	.products-list.grid .content-product5 .products-content .price ins{
		font-size: <?php echo get_theme_mod('size_price_5', ''); ?>px;
	}
	.products-list.grid .content-product5 .products-content .price del{
		font-size: calc(<?php echo get_theme_mod('size_price_5', ''); ?>px - 2px);
	}
<?php } ?>
<?php if(get_theme_mod('color_sale_5', '')) { ?>
	.products-list.grid .content-product5 .product-lable .onsale{
		color: <?php echo get_theme_mod('color_sale_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_sale_5', '')) { ?>
	.products-list.grid .content-product5 .product-lable .onsale{
		background: <?php echo get_theme_mod('background_sale_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_hot_5', '')) { ?>
	.products-list.grid .content-product5 .product-lable .hot{
		color: <?php echo get_theme_mod('color_hot_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_hot_5', '')) { ?>
	.products-list.grid .content-product5 .product-lable .hot{
		background: <?php echo get_theme_mod('background_hot_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_label_5', '')) { ?>
	.products-list.grid .content-product5 .product-lable .hot{
		font-size: <?php echo get_theme_mod('size_label_5', ''); ?>px;
	}
	.products-list.grid .content-product5 .product-lable .onsale{
		font-size: <?php echo get_theme_mod('size_label_5', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_pre_5', '')) { ?>
	.products-list.grid .content-product5 .product-stock .stock{
		color: <?php echo get_theme_mod('color_pre_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_pre_5', '')) { ?>
	.products-list.grid .content-product5 .product-stock{
		background: <?php echo get_theme_mod('background_pre_5', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_pre_5', '')) { ?>
	.products-list.grid .content-product5 .product-stock .stock{
		font-size: <?php echo get_theme_mod('size_pre_5', ''); ?>px;
	}
<?php } ?>

/*------------ CARD 6 ----------*/
<?php if(get_theme_mod('color_button_6', '')) { ?>
	.products-list.grid .content-product6 .products-thumb .gruop-button .product_type_grouped,
	.products-list.grid .content-product6 .products-thumb .gruop-button .add_to_cart_button,
	.products-list.grid .content-product6 .products-thumb .gruop-button .product_type_external,
	.products-list.grid .content-product6 .products-thumb .gruop-button .read_more,
	.products-list.grid .content-product6 .products-thumb .gruop-button .added_to_cart,
	.products-list.grid .content-product6 .products-thumb .gruop-button .product_type_variable{ 
		color: <?php echo get_theme_mod('color_button_6', ''); ?>; 
	}
	.products-list.grid .content-product6 .products-thumb .gruop-button .product-quickview > a{
		color: <?php echo get_theme_mod('color_button_6', ''); ?>; 
	}
	.products-list.grid .content-product6 .products-thumb .product-button .woosw-btn:before{
		color: <?php echo get_theme_mod('color_button_6', ''); ?>; 
	}
	.products-list.grid .content-product6 .products-thumb .product-button .woosc-btn:before{
		color: <?php echo get_theme_mod('color_button_6', ''); ?>; 
	}
<?php } ?>
<?php if(get_theme_mod('background_button_6', '')) { ?>
	.products-list.grid .content-product6 .products-thumb .gruop-button .product_type_grouped,
	.products-list.grid .content-product6 .products-thumb .gruop-button .add_to_cart_button,
	.products-list.grid .content-product6 .products-thumb .gruop-button .product_type_external,
	.products-list.grid .content-product6 .products-thumb .gruop-button .read_more,
	.products-list.grid .content-product6 .products-thumb .gruop-button .added_to_cart,
	.products-list.grid .content-product6 .products-thumb .gruop-button .product_type_variable{
		background: <?php echo get_theme_mod('background_button_6', ''); ?>;
	}
	.products-list.grid .content-product6 .products-thumb .product-button .woosw-btn{
		background: <?php echo get_theme_mod('background_button_6', ''); ?>;
	}
	.products-list.grid .content-product6 .products-thumb .product-button .woosc-btn{
		background: <?php echo get_theme_mod('background_button_6', ''); ?>;
	}
	.products-list.grid .content-product6 .products-thumb .gruop-button .product-quickview a{
		background: <?php echo get_theme_mod('background_button_6', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_title_6', '')) { ?>
	.products-list.grid .content-product6 .products-content h3.product-title a{
		color: <?php echo get_theme_mod('color_title_6', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_title_6', '')) { ?>
	.products-list.grid .content-product6 .products-content h3.product-title{
		font-size: <?php echo get_theme_mod('size_title_6', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_6', '')) { ?>
	.products-list.grid .content-product6 .products-content .price{
		color: <?php echo get_theme_mod('color_price_6', ''); ?>;
	}
	.products-list.grid .content-product6 .products-content .price ins{
		color: <?php echo get_theme_mod('color_price_6', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_sale_6', '')) { ?>
	.products-list.grid .content-product6 .products-content .price del{
		color: <?php echo get_theme_mod('color_price_sale_6', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_price_6', '')) { ?>
	.products-list.grid .content-product6 .products-content .price{
		font-size: <?php echo get_theme_mod('size_price_6', ''); ?>px;
	}
	.products-list.grid .content-product6 .products-content .price ins{
		font-size: <?php echo get_theme_mod('size_price_6', ''); ?>px;
	}
	.products-list.grid .content-product6 .products-content .price del{
		font-size: calc(<?php echo get_theme_mod('size_price_6', ''); ?>px - 2px);
	}
<?php } ?>
<?php if(get_theme_mod('color_sale_6', '')) { ?>
	.products-list.grid .content-product6 .product-lable .onsale{
		color: <?php echo get_theme_mod('color_sale_6', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_sale_6', '')) { ?>
	.products-list.grid .content-product6 .product-lable .onsale{
		background: <?php echo get_theme_mod('background_sale_6', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_hot_6', '')) { ?>
	.products-list.grid .content-product6 .product-lable .hot{
		color: <?php echo get_theme_mod('color_hot_6', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_hot_6', '')) { ?>
	.products-list.grid .content-product6 .product-lable .hot{
		background: <?php echo get_theme_mod('background_hot_6', ''); ?>;
	}
<?php } ?>

/*------------ CARD 7 ----------*/
<?php if(get_theme_mod('color_button_7', '')) { ?>
	.products-list.grid .content-product7 .products-thumb .product-button .product_type_grouped:before,
	.products-list.grid .content-product7 .products-thumb .product-button .add_to_cart_button:before,
	.products-list.grid .content-product7 .products-thumb .product-button .product_type_external:before,
	.products-list.grid .content-product7 .products-thumb .product-button .read_more:before,
	.products-list.grid .content-product7 .products-thumb .product-button .added_to_cart:before,
	.products-list.grid .content-product7 .products-thumb .product-button .product_type_variable:before{ 
		color: <?php echo get_theme_mod('color_button_7', ''); ?>; 
	}
	.products-list.grid .content-product7 .products-thumb .product-button .product-quickview > a:before{
		color: <?php echo get_theme_mod('color_button_7', ''); ?>; 
	}
	.products-list.grid .content-product7 .products-thumb .product-button .woosw-btn:before{
		color: <?php echo get_theme_mod('color_button_7', ''); ?>; 
	}
	.products-list.grid .content-product7 .products-thumb .product-button .woosc-btn:before{
		color: <?php echo get_theme_mod('color_button_7', ''); ?>; 
	}
	.products-list.grid .product-wapper.content-product7.quick-shop .single_add_to_cart_button{
		color: <?php echo get_theme_mod('color_button_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_button_7', '')) { ?>
	.products-list.grid .content-product7 .products-thumb .product-button .product_type_grouped,
	.products-list.grid .content-product7 .products-thumb .product-button .add_to_cart_button,
	.products-list.grid .content-product7 .products-thumb .product-button .product_type_external,
	.products-list.grid .content-product7 .products-thumb .product-button .read_more,
	.products-list.grid .content-product7 .products-thumb .product-button .added_to_cart,
	.products-list.grid .content-product7 .products-thumb .product-button .product_type_variable{
		background: <?php echo get_theme_mod('background_button_7', ''); ?>;
	}
	.products-list.grid .product-wapper.content-product7.quick-shop .single_add_to_cart_button{
		background: <?php echo get_theme_mod('background_button_7', ''); ?>;
	}
	.products-list.grid .content-product7 .products-thumb .product-button .woosw-btn{
		background: <?php echo get_theme_mod('background_button_7', ''); ?>;
	}
	.products-list.grid .content-product7 .products-thumb .product-button .woosc-btn{
		background: <?php echo get_theme_mod('background_button_7', ''); ?>;
	}
	.products-list.grid .content-product7 .products-thumb .product-button .product-quickview a{
		background: <?php echo get_theme_mod('background_button_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_attr_7', '')) { ?>
	.products-list.grid .product-wapper.content-product7 .content-form-attribute .form-attribute{
		background: <?php echo get_theme_mod('background_attr_7', ''); ?>7F;
	}
	@media (min-width: 1199px){
		.products-list.grid .product-wapper.content-product7 .content-form-attribute .list-attribute:hover {
			background: <?php echo get_theme_mod('background_attr_7', ''); ?>;
		}
		.products-list.grid .product-wapper.content-product7 .content-form-attribute .list-attribute.active {
			background: <?php echo get_theme_mod('background_attr_7', ''); ?>;
		}
	}
<?php } ?>
<?php if(get_theme_mod('color_attr_7', '')) { ?>
	.products-list.grid .product-wapper.content-product7 .content-form-attribute .form-attribute .title{
		color: <?php echo get_theme_mod('color_attr_7', ''); ?>;
	}
	.products-list.grid .product-wapper.content-product7 .content-form-attribute .list-attribute{
		color: <?php echo get_theme_mod('color_attr_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_title_7', '')) { ?>
	.products-list.grid .content-product7 .products-content h3.product-title a{
		color: <?php echo get_theme_mod('color_title_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_title_7', '')) { ?>
	.products-list.grid .content-product7 .products-content h3.product-title{
		font-size: <?php echo get_theme_mod('size_title_7', ''); ?>px;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_7', '')) { ?>
	.products-list.grid .content-product7 .products-content .price{
		color: <?php echo get_theme_mod('color_price_7', ''); ?>;
	}
	.products-list.grid .content-product7 .products-content .price ins{
		color: <?php echo get_theme_mod('color_price_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_price_sale_7', '')) { ?>
	.products-list.grid .content-product7 .products-content .price del{
		color: <?php echo get_theme_mod('color_price_sale_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('size_price_7', '')) { ?>
	.products-list.grid .content-product7 .products-content .price{
		font-size: <?php echo get_theme_mod('size_price_7', ''); ?>px;
	}
	.products-list.grid .content-product7 .products-content .price ins{
		font-size: <?php echo get_theme_mod('size_price_7', ''); ?>px;
	}
	.products-list.grid .content-product7 .products-content .price del{
		font-size: calc(<?php echo get_theme_mod('size_price_7', ''); ?>px - 2px);
	}
<?php } ?>
<?php if(get_theme_mod('color_sale_7', '')) { ?>
	.products-list.grid .content-product7 .product-lable .onsale{
		color: <?php echo get_theme_mod('color_sale_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_sale_7', '')) { ?>
	.products-list.grid .content-product7 .product-lable .onsale{
		background: <?php echo get_theme_mod('background_sale_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('color_hot_7', '')) { ?>
	.products-list.grid .content-product7 .product-lable .hot{
		color: <?php echo get_theme_mod('color_hot_7', ''); ?>;
	}
<?php } ?>
<?php if(get_theme_mod('background_hot_7', '')) { ?>
	.products-list.grid .content-product7 .product-lable .hot{
		background: <?php echo get_theme_mod('background_hot_7', ''); ?>;
	}
<?php } ?>