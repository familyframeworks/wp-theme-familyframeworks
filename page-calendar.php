<?php /* Template Name: Calendar Page */ ?>
<?php get_header(); ?>
<div class="hfeed content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h1 class="attr"><?php the_title(); ?></h1>
      <div class="entry">
	<p>You <strong>must</strong> be logged into <a href="http://calendar.google.com" target="_blank">Google</a> in-order to view the content of this calender. If you are not logged in, <a href="http://calendar.google.com" target="_blank">please login here</a>.</p>
        <iframe width=100% height=600px frameborder=0 src="http://www.google.com/calendar/embed?src=info%40familyframeworks.com"></iframe>
	<br />
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>
<?php edit_post_link('Edit this page.', '<p>', '</p>'); ?>
<?php get_footer(); ?>
