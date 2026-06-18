<?php
/**
 * Title: Footer
 * Slug: patterns-automotive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Automotive
 * @subpackage Patterns_Automotive/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"secondary","layout":{"type":"constrained"},"metadata":{"name":"Footer"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background"><!-- wp:group {"metadata":{"name":"Top Footer"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-default.png" style="width:auto;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"lineHeight":"1.1","textTransform":"uppercase","fontSize":"20px"},"layout":{"selfStretch":"fixed","flexSize":"100px"}},"textColor":"default"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"quaternary","overlayMenu":"never","style":{"typography":{"fontSize":"14px","textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Middle Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0px"},"border":{"top":{"color":"#21252963","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="border-top-color:#21252963;border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","fontSize":"13px"}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="font-size:13px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Office', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontSize":"14px"}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"600"}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="font-size:13px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Opening Hours', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"margin":{"top":"0px","bottom":"5px"}},"typography":{"fontSize":"14px"}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:5px;font-size:14px"><?php esc_html_e( 'Mon - Fri : 07:00 - 22:00', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:14px"><?php esc_html_e( 'Sat - Sun : 07:00 - 22:00', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"600"}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="font-size:13px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Contact', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"margin":{"top":"0px","bottom":"5px"}}},"textColor":"default","fontSize":"medium"} -->
<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color has-medium-font-size" style="margin-top:0px;margin-bottom:5px"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-automotive' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"default"} -->
<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:14px"><a href="<?php echo esc_url( 'mailto:hello@example.com' ); ?>"><?php esc_html_e( 'hello@example.com', 'patterns-automotive' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"600"}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="font-size:13px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Latest News', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"1","width":"60px","height":"60px"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"typography":{"fontSize":"13px"}}} /-->

<!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"14px"}},"textColor":"quaternary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Bottom Footer"},"className":"alignfull has-background","style":{"color":{"background":"#00000042"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#00000042"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:pattern {"slug":"patterns-automotive/copyright"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"metadata":{"name":"Social icons"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"patterns-automotive/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
