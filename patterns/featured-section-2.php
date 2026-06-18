<?php
/**
 * Title: Featured Section 2
 * Slug: patterns-automotive/featured-section-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Automotive
 * @subpackage Patterns_Automotive/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"quaternary","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

<!-- wp:pattern {"slug":"patterns-automotive/section-title-2"} /-->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center">
	<!-- wp:pattern {"slug":"patterns-automotive/card-2"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"fontSize":"20px","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"15px","top":"var:preset|spacing|40"}}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:15px;font-size:20px;line-height:1.2"><?php esc_html_e( 'Auto Rent Services', 'patterns-automotive' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-small-font-size" style="margin-bottom:0px;line-height:1.6"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"fontSize":"20px","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"15px","top":"var:preset|spacing|40"}}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:15px;font-size:20px;line-height:1.2"><?php esc_html_e( 'Brake Check &amp; Services', 'patterns-automotive' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-small-font-size" style="margin-bottom:0px;line-height:1.6"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-7.png" style="width:50px"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"fontSize":"20px","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"15px","top":"var:preset|spacing|40"}}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:15px;font-size:20px;line-height:1.2"><?php esc_html_e( 'Best Prices In District', 'patterns-automotive' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-small-font-size" style="margin-bottom:0px;line-height:1.6"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores', 'patterns-automotive' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
