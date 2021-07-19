<?php
$netWorks = [
    'twitter' => 'Twitter',
    'facebook' => 'Facebook',
    'instagram' => 'Instagram'
];
?>
<div class="footer__credits"> <?= $instance['credits'] ?></div>

<div class="footer__social">
    <?php foreach($netWorks as $name => $label): ?>
    <a href=" <?= esc_url($instance[$name]) ?>" title="<?=sprintf(esc_attr('Nous suivre sur %s', 'agencia'), $label) ?>">
        <?= agencia_icon($name) ?>
    </a>
    <?php endforeach; ?>
</div>