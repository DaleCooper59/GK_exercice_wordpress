<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <header class="bien-header">
            <div class="container px-4">
                <h1 class="bien__title"><?= the_title(); ?> ( <?= the_field('surface'); ?>m2 )</h1>
                <div class="bien__meta">
                    <div class="bien__location"><?= agence_city(get_post()) ?></div>
                    <div class="bien__price">
                        <?php if (get_field('property_category') === 'buy') : ?>
                            <?= sprintf('%s $', get_field('price')); ?>
                        <?php else : ?>
                            <?= 'Location = ' . sprintf('%s $/mois', get_field('price')); ?>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="bien__actions">
                    <button class="btn btn-filled">Contacter l'agence</button>
                    <button class="btn">Appeler</button>
                </div>


                <form action="" class="bien__form form-2column">
                    <div class="form-group">
                        <input type="text" id="username" class="form-control">
                        <label for="username">Pseudo</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" class="form-control">
                        <label for="email">Email</label>
                    </div>
                    <textarea placeholder="Message" class="form-control full"></textarea>
                    <button type="submit" class="btn">Commenter</button>
                </form>


            </div>
            <div class="container px-4">

                <div class="bien__photos js-slider">

                <?php foreach(get_attached_media('image', get_post()) as $img): ?>
                    <a href="<?= wp_get_attachment_url($img->ID)?>">
                        <img class="bien__photo" src="<?= wp_get_attachment_image_url($img->ID, 'property_carousel') ?>" alt="">
                    </a>
                <?php endforeach; ?>

                </div>
            </div>
        </header>

        <div class="bien-body">
            <h2 class="bien-body__title"><?= __('Description', 'agencia') ?></h2>
            <div class="formatted">
                <?php the_content(); ?>
            </div>
        </div>
       

        <section class="bien-options">
            <div class="bien-option"><img src="<?= get_template_directory_uri() ?>/assets/area.78237e19.svg" alt=""><?= __('Surface', 'agencia') ?> <?= the_field('surface') ?> m2</div>
            
            <div class="bien-option"><img src="<?= get_template_directory_uri() ?>/assets/rooms.b02e3d15.svg" alt=""> <?= __('Chambre(s)', 'agencia') ?> <?= the_field('room') ?></div>
            <div class="bien-option"><img src="<?= get_template_directory_uri() ?>/assets/elevator.e0bdbd67.svg" alt=""> <?= __('Etage', 'agencia') ?> <?= the_field('floor') ?></div>
           
            <?php $options = get_the_terms(get_post(), 'property_option'); ?>
              <?php foreach($options as $option): ?>
            <div class="bien-option"><img src="<?= the_field('icon', $option) ?>" alt=""><?= $option->name; ?> </div>
            <?php endforeach; ?>
        </section>

    </div>

   
<?php endwhile; ?>
<?php get_footer(); ?>