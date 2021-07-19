<?php get_header() ?>


<div class="container">

<?php if (is_category()): ?>

    <h1 class="page-title"><?= single_cat_title() ?></h1>
    <?php elseif (is_search()): ?>
        <?= sprintf(__('results with : "%s"', 'agencia'), get_search_query()); ?>
 <?php else: ?>
<h1 class="page-title"><?= single_post_title() ?></h1>
    <?php endif; ?>
    <div class="page-sidebar">
        <div>
            <div class="news-list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/post'); ?>
                    <?php endwhile; ?>
                    
                        <?= agencia_paginate(); ?>

                <?php else : ?>
                    <h2><?= __('No post to show', 'agencia') ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <aside class="sidebar">
            <?php dynamic_sidebar('blog'); ?>
        </aside>

    </div>
</div>

<?php get_footer() ?>