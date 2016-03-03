<?php

header ("Content-Type:text/css");

/** ===============================================================
 *
 *      Edit your Color Configurations below:
 *      You should only enter 6-Digits HEX Colors.
 *
 ================================================================== */

$color = "#3764b6"; // Change your Color Here

/** ===============================================================
 *
 *      Do not Edit anything below this line if you do not know
 *      what you are trying to do..!
 *
 ================================================================== */

function checkhexcolor($color) {

    return preg_match('/^#[a-f0-9]{6}$/i', $color);

}

/** ===============================================================
 *
 *      Primary Color Scheme
 *
 ================================================================== */

if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
    $color = "#" . $_GET[ 'color' ];
}

if( !$color OR !checkhexcolor( $color ) ) {
    $color = "#3764b6";
}

?>


/* ----------------------------------------------------------------
    Colors

    Replace the HEX Code with your Desired Color HEX
-----------------------------------------------------------------*/


::selection { background: <?php echo $color; ?>; }

::-moz-selection { background: <?php echo $color; ?>; }

::-webkit-selection { background: <?php echo $color; ?>; }


a,
h1 > span:not(.nocolor),
h2 > span:not(.nocolor),
h3 > span:not(.nocolor),
h4 > span:not(.nocolor),
h5 > span:not(.nocolor),
h6 > span:not(.nocolor),
.header-extras li .he-text span,
#primary-menu > ul > li:hover a,
#primary-menu > ul > li.current a,
#primary-menu > div > ul > li:hover a,
#primary-menu > div > ul > li.current a,
#top-cart a:hover,
.top-cart-action span.top-checkout-price,
.breadcrumb a:hover,
#portfolio-filter li a:hover,
.portfolio-desc h3 a:hover,
.portfolio-overlay a:hover,
#portfolio-navigation a:hover,
.entry-title h2 a:hover,
.entry-meta li a:hover,
.post-timeline .entry:hover .entry-timeline,
.post-timeline .entry:hover .timeline-divider,
.ipost .entry-title h3 a:hover,
.ipost .entry-title h4 a:hover,
.spost .entry-title h4 a:hover,
.mpost .entry-title h4 a:hover,
.comment-content .comment-author a:hover,
.product-title h3 a:hover,
.single-product .product-title h2 a:hover,
.product-price ins,
.single-product .product-price,
.feature-box.fbox-border .fbox-icon i,
.feature-box.fbox-border .fbox-icon img,
.feature-box.fbox-plain .fbox-icon i,
.feature-box.fbox-plain .fbox-icon img,
.process-steps li.active h5,
.process-steps li.ui-tabs-active h5,
.team-title span,
.pricing-box.best-price .pricing-price,
.btn-link,
.dark .post-timeline .entry:hover .entry-timeline,
.dark .post-timeline .entry:hover .timeline-divider { color: <?php echo $color; ?>; }

.color,
#primary-menu ul ul li:hover > a,
#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title > a:hover,
.top-cart-item-desc a:hover,
.faqlist li a:hover,
.tagcloud a:hover,
.dark .top-cart-item-desc a:hover,
.iconlist-color li i,
.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > ul > li:hover > a,
.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > ul > li.current > a,
.overlay-menu #primary-menu.dark > ul > li:hover > a,
.overlay-menu #primary-menu.dark > ul > li.current > a { color: <?php echo $color; ?> !important; }

#primary-menu.style-3 > ul > li.current > a,
#primary-menu.sub-title > ul > li:hover > a,
#primary-menu.sub-title > ul > li.current > a,
#primary-menu.sub-title > div > ul > li:hover > a,
#primary-menu.sub-title > div > ul > li.current > a,
#top-cart > a > span,
#page-menu-wrap,
#page-menu.dots-menu nav li.current a,
#page-menu.dots-menu nav li .dots-menu-caption,
#portfolio-filter li.activeFilter a,
#portfolio-shuffle:hover,
.entry-link:hover,
.sale-flash,
.button:not(.button-white):not(.button-dark):not(.button-border):not(.button-black):not(.button-red):not(.button-teal):not(.button-yellow):not(.button-green):not(.button-brown):not(.button-aqua):not(.button-purple):not(.button-leaf):not(.button-pink):not(.button-blue):not(.button-dirtygreen):not(.button-amber):not(.button-lime),
.button.button-dark:hover,
.promo.promo-flat,
.feature-box .fbox-icon i,
.feature-box .fbox-icon img,
.fbox-effect.fbox-dark .fbox-icon i:hover,
.fbox-effect.fbox-dark:hover .fbox-icon i,
.fbox-border.fbox-effect.fbox-dark .fbox-icon i:after,
.i-rounded:hover,
.i-circled:hover,
ul.tab-nav.tab-nav2 li.ui-state-active a,
.testimonial .flex-control-nav li a,
.skills li .progress,
.owl-theme .owl-dots .owl-dot span,
#gotoTop:hover,
.dark .button-dark:hover,
.dark .fbox-effect.fbox-dark .fbox-icon i:hover,
.dark .fbox-effect.fbox-dark:hover .fbox-icon i,
.dark .fbox-border.fbox-effect.fbox-dark .fbox-icon i:after,
.dark .i-rounded:hover,
.dark .i-circled:hover,
.dark ul.tab-nav.tab-nav2 li.ui-state-active a,
.dark .tagcloud a:hover,
.ei-slider-thumbs li.ei-slider-element { background-color: <?php echo $color; ?>; }

.bgcolor,
.button.button-3d:not(.button-white):not(.button-dark):not(.button-border):not(.button-black):not(.button-red):not(.button-teal):not(.button-yellow):not(.button-green):not(.button-brown):not(.button-aqua):not(.button-purple):not(.button-leaf):not(.button-pink):not(.button-blue):not(.button-dirtygreen):not(.button-amber):not(.button-lime):hover,
.process-steps li.active a,
.process-steps li.ui-tabs-active a,
.sidenav > .ui-tabs-active > a,
.sidenav > .ui-tabs-active > a:hover,
.owl-theme .owl-controls .owl-nav [class*=owl-]:hover,
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus { background-color: <?php echo $color; ?> !important; }

#primary-menu.style-4 > ul > li:hover > a,
#primary-menu.style-4 > ul > li.current > a,
.top-cart-item-image:hover,
.post-timeline .entry:hover .entry-timeline,
.post-timeline .entry:hover .timeline-divider,
.cart-product-thumbnail img:hover,
.feature-box.fbox-outline .fbox-icon,
.feature-box.fbox-border .fbox-icon,
.dark .top-cart-item-image:hover,
.dark .post-timeline .entry:hover .entry-timeline,
.dark .post-timeline .entry:hover .timeline-divider,
.dark .cart-product-thumbnail img:hover,
.heading-block.border-color:after { border-color: <?php echo $color; ?>; }

.top-links ul ul,
.top-links ul div.top-link-section,
#primary-menu ul ul,
#primary-menu ul li .mega-menu-content,
#primary-menu.style-6 > ul > li > a:after,
#primary-menu.style-6 > ul > li.current > a:after,
#top-cart .top-cart-content,
.fancy-title.title-border-color:before,
.dark #primary-menu:not(.not-dark) ul ul,
.dark #primary-menu:not(.not-dark) ul li .mega-menu-content,
#primary-menu.dark ul ul,
#primary-menu.dark ul li .mega-menu-content,
.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.style-2,
#primary-menu.dark ul li .mega-menu-content.style-2,
.dark #top-cart .top-cart-content { border-top-color: <?php echo $color; ?>; }

#page-menu.dots-menu nav li .dots-menu-caption:after,
.title-block { border-left-color: <?php echo $color; ?>; }

.title-block-right { border-right-color: <?php echo $color; ?>; }

.fancy-title.title-bottom-border h1,
.fancy-title.title-bottom-border h2,
.fancy-title.title-bottom-border h3,
.fancy-title.title-bottom-border h4,
.fancy-title.title-bottom-border h5,
.fancy-title.title-bottom-border h6,
.more-link { border-bottom-color: <?php echo $color; ?>; }

.border-color,
.process-steps li.active a,
.process-steps li.ui-tabs-active a,
.tagcloud a:hover,
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus { border-color: <?php echo $color; ?> !important; }

.fbox-effect.fbox-dark .fbox-icon i:after,
.dark .fbox-effect.fbox-dark .fbox-icon i:after { box-shadow: 0 0 0 2px <?php echo $color; ?>; }

.fbox-border.fbox-effect.fbox-dark .fbox-icon i:hover,
.fbox-border.fbox-effect.fbox-dark:hover .fbox-icon i,
.dark .fbox-border.fbox-effect.fbox-dark .fbox-icon i:hover,
.dark .fbox-border.fbox-effect.fbox-dark:hover .fbox-icon i { box-shadow: 0 0 0 1px <?php echo $color; ?>; }


@media only screen and (max-width: 991px) {

    body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover a,
    body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current a,
    body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover a,
    body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current a,
    #primary-menu ul ul li:hover > a,
    #primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title:hover > a,
    #primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title > a:hover { color: <?php echo $color; ?> !important; }

    #page-menu nav { background-color: <?php echo $color; ?>; }

}


@media only screen and (max-width: 767px) {

    #portfolio-filter li a:hover { color: <?php echo $color; ?>; }

}