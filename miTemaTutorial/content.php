<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1>
		<?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>');?>
	</h1>
		 
	<div class="entry-content">
		<?php the_content();?>
	</div><!-- entry-content -->
</article>