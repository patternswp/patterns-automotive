<?php
/**
 * Title: Card 2
 * Slug: patterns-automotive/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Automotive
 * @subpackage Patterns_Automotive/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"fontSize":"20px","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"15px","top":"var:preset|spacing|40"}}},"textColor":"base"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:15px;font-size:20px;line-height:1.2"><?php esc_html_e( 'Online Appointment', 'patterns-automotive' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-small-font-size" style="margin-bottom:0px;line-height:1.6"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores', 'patterns-automotive' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
