<?php /* The default template for displaying content. Used for both single and index/archive/search. */ ?>
	<article id="post-<?php the_ID(); ?>">
		
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if (function_exists('the_subheading')) { the_subheading('<h2 class="entry-subtitle">', '</h2>'); } ?>
		
		  <?php
		  $pll_args = array(
		    'hide_if_no_translation' => 1,
		    'hide_current' => 1
		  );
		  if (function_exists('pll_the_languages')) { ?>
		    <ul class="language_switcher language_switcher_pages">
		      <?php pll_the_languages( $pll_args ); ?>
		    </ul>
		  <?php } ?>

		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-content entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php elseif ( is_singular() ) : ?>
			<div class="entry-content" itemprop="description">
				<?php the_content( __( '<p class="continue-reading">Klicken zum Weiterlesen <span class="meta-nav">&raquo;</span></p>', 'kevinw_blog' ) ); ?>
			</div><!-- .entry-content -->

		<?php else : ?>
			<div class="entry-content entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php endif; ?>

	</article><!-- #post -->