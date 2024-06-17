<?php get_header(); ?>

<?php
    if (is_object_in_term( $post->ID, 'outpatient-categorys', 'symptoms')) {
    get_template_part('single-symptoms');
    }
    else if (is_object_in_term( $post->ID, 'outpatient-categorys', 'case')) {
    get_template_part('single-case');
    }
    elseif(is_object_in_term($post->ID, 'info-categorys')) {
        get_template_part('single-info');
    }
    else {
    get_template_part('single');
    }
?>

<?php get_footer(); ?>