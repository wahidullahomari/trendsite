<?php
/**
 * Title: Footer
 * Slug: clothing-store-blocks/footer
 * Categories: clothing-store-blocks, footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"blockGap":"0"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() . '/images/footer.png'); ?>","id":410,"source":"file","title":"footer BG"}}},"className":"footer-widgets","layout":{"type":"constrained","contentSize":"70%"},"fontSize":"small"} -->
<div class="wp-block-group footer-widgets has-small-font-size" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"color":{"text":"#aea679"},"elements":{"link":{"color":{"text":"#aea679"}}}}} -->
<p class="has-text-color has-link-color" style="color:#aea679"><?php esc_html_e('For Queries, Feedback, Support, Assistance','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"30px","lineHeight":"1.1"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<h5 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);font-size:30px;font-style:normal;font-weight:500;line-height:1.1"><?php esc_html_e('Welcome to our live support desk.','clothing-store-blocks'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"footer-info-wrapper"} -->
<div class="wp-block-columns are-vertically-aligned-center footer-info-wrapper"><!-- wp:column {"verticalAlignment":"center","className":"footer-call-box","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center footer-call-box"><!-- wp:group {"style":{"color":{"background":"#aea679"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"footer-info","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group footer-info has-background" style="background-color:#aea679;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":201,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-201"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('+ ( 361 ) 12345-12345','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"heading","className":"footer-info","layout":{"type":"constrained"}} -->
<div class="wp-block-group footer-info has-heading-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":477,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/mail.png'); ?>" alt="" class="wp-image-477" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('support@example.com','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|70"}}},"className":"wow rubberBand footer-columns","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wow rubberBand footer-columns" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"color":{"text":"#3a4357"},"elements":{"link":{"color":{"text":"#3a4357"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"className":"footer-site-title","fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40"}}},"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40)"><?php esc_html_e('Consectetur adipiscieng elit, sed do emesdeod tempor incididunt ueseft labore eest dolorsase miagna aliqua.','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"padding":{"right":"var:preset|spacing|40"}}},"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40)"><?php esc_html_e('Quis ipsum suspendisse ultrsices gravidai Risus commodo viverra maecenas.','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":5,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Shopping Online','clothing-store-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:navigation-link {"label":"Click and Collect","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Delivery","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Store Front","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Tracking your Order","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Returns & Refunds","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Brand Directory","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":5,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('About Us','clothing-store-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:navigation-link {"label":"Careers","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Our heritage","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Project Earth","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Our policies","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Press area","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":5,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Search','clothing-store-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Here","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:spacer {"height":"37px"} -->
<div style="height:37px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"footer-social","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group footer-social"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"12px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e('Follow Us -','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"50%","color":"#aea679","width":"1px"}},"className":"icon-img","layout":{"type":"default"}} -->
<div class="wp-block-group icon-img has-border-color" style="border-color:#aea679;border-width:1px;border-radius:50%"><!-- wp:image {"lightbox":{"enabled":false},"id":452,"scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/socialf-1.png'); ?>" alt="" class="wp-image-452" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50%","color":"#aea679","width":"1px"}},"className":"icon-img","layout":{"type":"default"}} -->
<div class="wp-block-group icon-img has-border-color" style="border-color:#aea679;border-width:1px;border-radius:50%"><!-- wp:image {"lightbox":{"enabled":false},"id":451,"scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/socialf-2.png'); ?>" alt="" class="wp-image-451" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50%","color":"#aea679","width":"1px"}},"className":"icon-img","layout":{"type":"default"}} -->
<div class="wp-block-group icon-img has-border-color" style="border-color:#aea679;border-width:1px;border-radius:50%"><!-- wp:image {"lightbox":{"enabled":false},"id":450,"scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/socialf-3.png'); ?>" alt="" class="wp-image-450" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"50%","color":"#aea679","width":"1px"}},"className":"icon-img","layout":{"type":"default"}} -->
<div class="wp-block-group icon-img has-border-color" style="border-color:#aea679;border-width:1px;border-radius:50%"><!-- wp:image {"lightbox":{"enabled":false},"id":449,"scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/socialf-4.png'); ?>" alt="" class="wp-image-449" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"63px"} -->
<div style="height:63px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"backgroundColor":"heading","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group alignwide has-heading-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"white","className":"copyright-text","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group copyright-text has-white-color has-text-color has-link-color"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#aea679"}}}},"className":"has-background-color has-text-color has-link-color has-roboto-font-family"} -->
<p class="has-background-color has-text-color has-link-color has-roboto-font-family"><?php esc_html_e('© Copyright 2024. All Rights Reserved.','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#aea679"}}}},"className":"has-background-color has-text-color has-link-color has-roboto-font-family"} -->
<p class="has-background-color has-text-color has-link-color has-roboto-font-family"><?php esc_html_e('Proudly powered by','clothing-store-blocks'); ?> <a rel="noreferrer noopener" href="https://www.ovationthemes.com/" target="_blank"><?php esc_html_e('Ovation Themes','clothing-store-blocks'); ?></a> <?php esc_html_e('and','clothing-store-blocks'); ?> <a href="https://wordpress.org"><?php esc_html_e('WordPress','clothing-store-blocks'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->