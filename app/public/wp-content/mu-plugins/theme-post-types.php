<?php
    function theme_post_types() {
        register_post_type('page', array(
            'supports' => array('title', 'editor', 'excerpt', 'custom-fields')
        ));
    }
?>