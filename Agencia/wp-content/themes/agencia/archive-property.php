<?php get_header(); ?>

<div class="container page-properties">
    <div class="search-form">
        <h1 class="search-form__title">Agence immo Montpellier</h1>
        <p>Retrouver tous nos biens sur le secteur de <strong>Montpellier</strong></p>
        <hr>
        <form action="listing.html" class="search-form__form">
            <div class="search-form__checkbox">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" checked="" type="radio" name="type" id="buy" value="buy">
                    <label class="form-check-label" for="buy">Acheter</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="rent" value="rent">
                    <label class="form-check-label" for="rent">Louer</label>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="city" placeholder="Montpellier">
                <label for="city">Ville</label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="budget" placeholder="100 000 €">
                <label for="budget">Prix max</label>
            </div>
            <div class="form-group">
                <select name="kind" id="kind" class="form-control">
                    <option value="flat">Appartement</option>
                    <option value="villa">Villa</option>
                </select>
                <label for="kind">Type</label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="rooms" placeholder="4">
                <label for="rooms">Pièces</label>
            </div>
            <button type="submit" class="btn btn-filled">Rechercher</button>
        </form>
    </div>




<?php $i=0; while(have_posts()):the_post()?>
    <a class="property <?php if($i===6){echo 'property--large';}?> " href="<?php the_permalink(); ?>" title="<?= esc_attr(get_the_title())?>">
        <div class="property__image">
            <?php the_post_thumbnail($i===6?'property_thumbnail-large':'property_thumbnail'); ?>

        </div>
        <div class="property__body">
            <div class="property__location"><?php agence_city(); ?></div>
            <h3 class="property__title"><?php the_title(); ?> - <?php the_field('surface'); ?>m2</h3>
            <div class="property__price"><?php if (get_field('property_category') === 'buy') : ?>
                            <?= sprintf('%s', get_field('price')); ?> Euros
                        <?php else : ?>
                            <?= sprintf('%s E/mois', get_field('price')); ?>
                        <?php endif; ?></div>
        </div>
    </a>

<?php $i++; endwhile?>




</div>

<div class="pagination">
    <?php next_posts_link(__('Voir plus de biens +', 'agencia')); ?>
</div>
<?php get_footer(); ?>