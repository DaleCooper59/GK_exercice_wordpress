<article class="news">
    <a href="<?= the_permalink() ?>" title=<?= esc_attr(get_the_title()); ?> class="news__image">
    <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
    <?php else:?>
        <img width="250" height="250" src="https://pngtree.com/freepng/ui-default-page-blank-page-illustration-design_5453360.html" alt="">
        <?php endif; ?>
    </a>
    <div class="news__body">
        <header class="news__header">
            <?php

            $categories = get_the_category();
            if (!empty($categories)) :

            ?>
                <a class="news__tag" href="<?= get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
            <?php
            endif;
            ?>
            <a class="news__title" href="news-single.html"><?php the_title(); ?></a>
            <div class="news__date"> <?= sprintf(__('Published le %s ', 'agencia'),  get_the_date()); ?></div>
        </header>
        <div class="news__content">
            <?= the_excerpt() ?>
        </div>
        <a href="<?= the_permalink(); ?>" class="news__action">
            Lire la suite
            <?= agencia_icon('arrow'); ?>
        </a>
    </div>
</article>