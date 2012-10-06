<?php if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
      <?php the_post_thumbnail(); ?>
      </a>
    <?php endif; ?>
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="entry-comment-number pull-right"><i class="icon-comment"></i><?php echo get_comments_number(); ?></div>
    </header>
    <div class="entry-content">
      <?php the_excerpt(); ?>
    </div>
    <footer class="row">
      <div class="span2">
        <div class="entry-category"><i class="icon-th-list"></i><?php the_category(', ') ?></div>
      </div>
      <div class="span5">
        <?php the_tags('<div class="entry-tags"><i class="icon-tags"></i>',', ','</div>'); ?>
      </div>
      <div class="span1">
        <div class="entry-link"><i class="icon-plus"></i><a href="<?php the_permalink(); ?>">Read more</a></div>
      </div>
    </footer>
  </article>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php endif; ?>
