<?php
/**
 * Title: Banner
 * Slug: clothing-store-blocks/banner
 * Categories: clothing-store-blocks, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"bannerimage","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":483,"dimRatio":0,"isUserOverlayColor":true,"minHeight":750,"minHeightUnit":"px","isDark":false,"align":"wide","className":"banner-image-cover","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-cover alignwide is-light banner-image-cover" style="min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-483" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"banner-content wow slideInLeft"} -->
<div class="wp-block-column is-vertically-aligned-center banner-content wow slideInLeft" style="flex-basis:50%"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small"} -->
<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('NEW ARRIVAL COLLECTION','clothing-store-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"55px","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"section-bg"} -->
<h1 class="wp-block-heading has-section-bg-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:55px;line-height:1.2"><?php esc_html_e('The latest trends','clothing-store-blocks'); ?><br><?php esc_html_e('in fashion','clothing-store-blocks'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"white","fontSize":"medium"} -->
<p class="has-white-color has-text-color has-link-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0"><?php esc_html_e('Consectetur adipisicing elite do eiusmod tempor incunt ut labore et dolore magna aliquaminim veniam.','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn"} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"backgroundColor":"heading","style":{"border":{"radius":"0px"},"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:13px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-background-color has-background wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('SHOP NOW','clothing-store-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"banner-img-box wow slideInRight"} -->
<div class="wp-block-column is-vertically-aligned-center banner-img-box wow slideInRight"><!-- wp:image {"id":485,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image.png'); ?>" alt="" class="wp-image-485"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"circle","layout":{"type":"constrained"}} -->
<div class="wp-block-group circle" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"extra-small"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-extra-small-font-size"><?php esc_html_e('Get Up To','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"70%","className":"discno-upper"} -->
<div class="wp-block-column is-vertically-aligned-center discno-upper" style="flex-basis:70%"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:50px;font-style:normal;font-weight:500"><?php esc_html_e('50','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"off-uppper"} -->
<div class="wp-block-column off-uppper" style="flex-basis:30%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"30px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:30px"><?php esc_html_e('%','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><?php esc_html_e('off','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->