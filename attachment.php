<?php
    $page_link = get_permalink($post-> post_parent);

    if ( strpos(get_post_permalink($post -> post_parent), "post_type=attachment") ) {
        $page_link = get_home_url();
    }

    wp_redirect ( $page_link );
