<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<picture class="post-thumbnail">
			<?php the_post_thumbnail( 'backdrop-landscape-medium' ); ?>
		</picture>
	<?php } ?>
	<header class="entry-header">
		<?php Backdrop\Theme\Entry\display_title(); ?>
		<div class="entry-metadata">
			<?php Backdrop\Theme\Entry\display_date(); ?>
			<?php Backdrop\Theme\Entry\display_author( [ 'before' => Workfolio\sep() ] ); ?>
			<?php Backdrop\Theme\Entry\display_comments_link( [ 'before' => Workfolio\sep() ] ); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>