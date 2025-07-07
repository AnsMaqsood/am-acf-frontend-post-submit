<?php
acf_form_head();
wp_enqueue_script('jquery');
?>

<div class="acf-frontend-form">
    <?php
    acf_form(array(
        'post_id'       => 'new_post',
        'new_post'      => array(
            'post_type'     => 'post',
            'post_status'   => 'draft',
        ),
        'submit_value'  => 'Submit Post',
        'field_groups'  => array(89), 
    ));
    ?>
</div>
