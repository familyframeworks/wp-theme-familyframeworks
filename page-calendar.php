<?php /* Template Name: Calendar Page */ ?>
<?php get_header(); ?>

  <div class="hfeed content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h1 class="attr"><?php the_title(); ?></h1>
        <div class="entry">
          <iframe width=100% height=600px src="http://www.google.com/calendar/embed?src=info%40familyframeworks.com"></iframe>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>


<?php get_footer(); ?>
