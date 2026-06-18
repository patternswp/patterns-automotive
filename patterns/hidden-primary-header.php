<?php
/**
 * Title: Primary Header
 * Slug: patterns-automotive/hidden-primary-header
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"backgroundColor":"secondary","textColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"13px"},"spacing":{"margin":{"bottom":"0px"}}}} -->
<p style="margin-bottom:0px;font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'follow Us :', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p  style="font-size:14px"><strong><?php esc_html_e( 'Make a call', 'patterns-automotive' ); ?></strong> : <?php esc_html_e( '(808) 555-0111', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}}} -->
<p  style="font-size:13px"><strong><?php esc_html_e( 'Email Address', 'patterns-automotive' ); ?> </strong>: <?php esc_html_e( 'info@example.com ', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);">

	<!-- wp:pattern {"slug":"patterns-automotive/site-identity"} /-->

	<!-- wp:pattern {"slug":"patterns-automotive/navigation-menu"} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
