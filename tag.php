<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?>
		<!--This is "The Loop"-->
		<div class="tag-head post"
			<h1><?php single_tag_title('Posts Tagged as '); ?></h1>
		</div>
                <?php while (have_posts()) : the_post();
                        include('functions/post-full.php');
                endwhile; ?>
		<!--The Loop has ended-->	
		<div class="navigation">
			<div class="txtalignleft"><?php previous_posts_link('&raquo; Newer Entries &raquo;') ?></div>
			<div class="txtalignright"><?php next_posts_link('&laquo; Older Entries &laquo;') ?></div>
		</div>
	<?php endif; ?>
</div><!--close content id-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

</div><!--close container id-->
