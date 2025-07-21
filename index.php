<?php include get_template_directory() . '/header.php'; ?>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>
        <?php title(); ?>
    </h1>
    <p><?php bloginfo('description'); ?></p>
</div>

<style>
    * {
        text-decoration: none !important;
    }

    .track-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 20px;
    }

    .track-item {
        display: block;
        background-color: #fff;
        padding: 20px;
    }

    .track-image {
        display: block;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 10px;

        padding-top: 100%;
    }

    .track-name {
        font-family: 'BPG Arail Caps', 'Arial';
        text-transform: uppercase;
        color: #444;
        font-weight: 600;
        font-size: 15px;
        padding-top: 15px;
    }
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <aside>

                <div class="list-group">
                    <?php
                    foreach (get_categories(['hide_empty' => false]) as $category) :
                        $category_link = get_category_link($category->term_id); // Get the category URL
                    ?>
                        <a href="<?php echo esc_url($category_link); ?>" class="list-group-item list-group-item-action">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>



            </aside>
        </div>
        <div class="col-lg-9">




            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $data = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 8,
                'paged' => $paged
            ]);

            ?>

            <?php if($data->have_posts()): ?>
            <div class="track-list">

                <?php while($data->have_posts()): $data->the_post(); ?>
                <div class="track-item">
                    <div class="track-image"><!--image--></div>
                    <a class="track-info">
                        <div class="track-name">
                            <?php the_title(); ?>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>

            </div>
            <?php else: ?>
                <div class="alert alert-success">ჩანაწერები არ მოიძებნა</div>
            <?php endif; ?>

        </div>


    </div>
</div>

<?php include get_template_directory() . '/footer.php'; ?>


</body>

</html>