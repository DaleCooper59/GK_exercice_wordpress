<?php
add_filter('comment_form_default_fields', function ($fields) {
  
    $authorLabel = __('Name');
    $emailLabel = __('Email');
    $urlLabel = __('Website');
    $fields['author'] = <<<HTML
    <div class="form-group">
        <input type="text" id="author" name="author" class="form-control" required>
        <label for="author">{$authorLabel}</label>
</div>
HTML;
    $fields['email'] = <<<HTML
    <div class="form-group">
        <input type="email" id="email" name="email" class="form-control" required>
        <label for="email">{$emailLabel}</label>
</div>
HTML;
    $fields['url'] = <<<HTML
    <div class="form-group">
        <input type="text" id="url" name="url" class="form-control" required>
        <label for="url">{$urlLabel}</label>
</div>
HTML;
    return $fields;
});

add_filter('comment_form_defaults', function($fields){
    $commentLabel = _x('Comment', 'noun');
    $fields['comment_field'] = <<<HTML
    <textarea placeholder="{$commentLabel}" name="comment" id="comment" class="form-control full" required></textarea>
HTML;
return $fields;
});

/*
add_filter('comment_form_fields', function($fields){
    $newFields = [];
    foreach($fields as $k => $field){
        if($k !=='comment'){
            if($k ==='cookies'){
                $newFields['comment'] = $fields['comment'];
            }
            $newFields[$k] = $field;
        }
    }
    if(!isset(newFields['comment'])){
        $newFields['comment'] = $fields['comment'];
    };
    return $fields;
});*/