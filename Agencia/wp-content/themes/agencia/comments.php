<?php
require_once('inc/walker/CommentWalker.php');
$count = comments_number();

?>
<div class="comments">
    <div class="comments-title">
        <?php if($count > 0) : ?>
            <?= sprintf(_n('%d Commentaire', '%d Commentaires', $count), $count); ?>
        <?php else: ?>
            <?= __('Leave a reply here', 'agencia'); ?>
        <?php endif; ?>
    </div>

    <?php wp_list_comments(['style => div', 'walker' => new AgenciaCommentWalker()]); ?>
    <?php agencia_paginate_comments() ?>

    <?php if(comments_open()): ?>
        <?php comment_form(['title_reply' => '', 'class_form' => 'form-2column']); ?>
    <?php endif; ?>
</div>