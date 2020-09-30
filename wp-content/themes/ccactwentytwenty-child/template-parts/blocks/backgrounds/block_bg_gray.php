<?php

/**
 * Gray Background Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'gray-background-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'gray-background';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$bg_title = get_field('bg_title') ?: 'Your title here...';
$bg_content = get_field('bg_content') ?: 'Gimme Content';

?>

  <section class="section bg-ws">
    <div class="container">
      <h2><?php echo $bg_title; ?> </h2>
      <p class="testimonial-text"><?php echo $bg_content; ?></p>
    </div>

  </section>
