<?php
/**
 * Title: Homepage Content
 * Slug: sports/homepage-content
 * Categories: featured
 * Description: Main homepage layout with hero, products, and training tips query loop.
 */
?>

<!-- Hero Section -->
<!-- wp:cover {"dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":500,"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"30px","right":"30px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px;min-height:500px">
<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"52px","fontWeight":"800"},"color":{"text":"#ffffff"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:52px;font-weight:800">Gear Up for Greatness</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"20px"}}} -->
<p class="has-text-align-center" style="color:#cbd5e1;font-size:20px">Premium sports equipment for athletes who demand the best. From training to game day.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/" style="border-radius:8px">Shop Now</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
</div>
<!-- /wp:cover -->

<!-- Spacer between sections -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- Featured Products heading -->
<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:32px">Featured Products</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- WooCommerce product grid - add via block editor -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#9ca3af"}}} -->
<p class="has-text-align-center" style="color:#9ca3af">[products limit="6" columns="3" orderby="date"]</p>
<!-- /wp:paragraph -->

<!-- Spacer -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- ============================================================
     TRAINING TIPS - Query Loop Block
     Pulls posts from the custom "training_tip" post type
     and displays them in a styled 3-column card grid
     ============================================================ -->
<!-- wp:group {"className":"training-tips-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group training-tips-section">

<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"32px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:32px">Training Tips</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"postType":"training_tip","perPage":3,"order":"desc","orderBy":"date"},"className":"training-tips-grid","layout":{"type":"default"}} -->
<div class="wp-block-query training-tips-grid">

<!-- wp:post-template {"className":"training-tips-grid","layout":{"type":"grid","columnCount":3}} -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->

<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#9ca3af"}}} -->
<p class="has-text-align-center" style="color:#9ca3af">No training tips available yet. Check back soon!</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->

<!-- Spacer -->
<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- CTA Banner -->
<!-- wp:cover {"dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":300,"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"30px","right":"30px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:60px;padding-right:30px;padding-bottom:60px;padding-left:30px;min-height:300px">
<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"36px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:36px">Ready to Train Like a Pro?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#dbeafe"},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="color:#dbeafe;font-size:18px">Browse our full collection of sports equipment and take your game to the next level.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"base","textColor":"primary","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button" href="/shop/" style="border-radius:8px">Browse All Products</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
</div>
<!-- /wp:cover -->
