<?php
/**
 * Title: Recent Blog
 * Slug: clothing-store-blocks/recent-blog
 * Categories: clothing-store-blocks, recent-blog
 */
?>

<!-- wp:group {"className":"blog-section","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group blog-section"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"24px"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:24px"><?php esc_html_e('Our Recent Blog','clothing-store-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#777777"},"elements":{"link":{"color":{"text":"#777777"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#777777;margin-top:var(--wp--preset--spacing--20);margin-bottom:0"><?php esc_html_e('Up to 60% off on Handloom clothing &amp; furnishings','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"latest-blogs","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"wow swing","layout":{"type":"default"}} -->
<div class="wp-block-group wow swing"><!-- wp:post-featured-image {"className":"blog-img"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"color":"#dad9d1","width":"1px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#dad9d1;border-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"color":{"text":"#aea679"},"elements":{"link":{"color":{"text":"#aea679"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"12px"}},"className":"cat-name"} /-->

<!-- wp:post-title {"level":6,"style":{"typography":{"fontSize":"17px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":16,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"#777777"}}},"color":{"text":"#777777"},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"className":"post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group post-meta" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0"><!-- wp:post-date {"style":{"typography":{"fontSize":"13px"},"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"showPostTitle":false,"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"13px"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"textColor":"body-text"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"33px"} -->
<div style="height:33px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->