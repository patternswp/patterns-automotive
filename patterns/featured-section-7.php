<?php
/**
 * Title: Featured Section 7
 * Slug: patterns-automotive/featured-section-7
 * Categories: posts, query
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Automotive
 * @subpackage Patterns_Automotive/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull"
    style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Travel insights &amp; ideas', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size" style="margin-bottom:0px;line-height:1"><?php esc_html_e( 'Latest Travel Guides', 'patterns-automotive' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
 

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":2,"query":{"perPage":"3","pages":"6","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"style":{"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:post-date {"format":"M j, Y","displayType":"modified","style":{"typography":{"textTransform":"uppercase","fontSize":"13px"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontSize":"13px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1","fontSize":"18px"}},"fontFamily":"russo-one"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
