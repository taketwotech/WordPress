<?php

// =============================================================================
// VIEWS/ICON/WP-SINGLE.PHP
// -----------------------------------------------------------------------------
// Single post output for Icon.
// =============================================================================

$fullwidth = get_post_meta( get_the_ID(), '_x_post_layout', true );

?>

<?php get_header(); ?>

<?php global $post; ?>

<div class="benryan featured-image bg-image parallax" style="background-image:url(<?php the_post_thumbnail_url(full); ?>) !important;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:true}";">
	<div class="x-container max width">
      <header class="entry-header">
		<div class="caption">
        <h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
      </header>
    </div>
</div> 
  <div class="x-main full" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php x_get_view( 'icon', 'content', get_post_format() ); ?>
        <?php x_get_view( 'global', '_comments-template' ); ?>
      <?php endwhile; ?>
	  
  </div>

    <?php if ( $fullwidth != 'on' ) : ?>
      <?php get_sidebar(); ?>
    <?php endif; ?>

<?php get_footer(); ?>