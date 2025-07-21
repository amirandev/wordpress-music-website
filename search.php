<?php include get_template_directory().'/header.php'; ?>

<div class="container mt-4">
  <h2>Search results for: "<?php echo get_search_query(); ?>"</h2>

  <?php if (have_posts()): ?>
    <ul class="list-group">
      <?php while (have_posts()): the_post(); ?>
        <li class="list-group-item">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <p><?php the_excerpt(); ?></p>
        </li>
      <?php endwhile; ?>
    </ul>

    <?php the_posts_pagination(); ?>
  <?php else: ?>
    <p>No results found.</p>
  <?php endif; ?>
</div>

<?php include get_template_directory().'/footer.php'; ?>
