  <footer class="px-5 pt-5 pb-3  d-flex flex-wrap justify-content-between align-items-center my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2025 <?php bloginfo('name') ?></p>

      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
              <use xlink:href="#bootstrap" />
          </svg>
      </a>

      <ul class="nav col-md-4 justify-content-end">
          <?php foreach (wp_get_nav_menu_items(22) as $item): ?>
              <li class="nav-item">
                  <a href="<?php echo esc_url($item->url); ?>" class="nav-link px-2 text-muted">
                      <?php echo esc_html($item->title); ?>
                  </a>
              </li>
          <?php endforeach; ?>
      </ul>

  </footer>