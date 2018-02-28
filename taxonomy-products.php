<?php
/**
* A Simple Category Template
*/

get_header(); ?>



<?php $args = array(
            'show_count'         => 1,
            'child_of'           => get_queried_object()->term_id,
            'taxonomy'           => 'private_category', //define your taxeonomy
            'title_li'           =>'',
        ); ?>
        <ul>
         <?php wp_list_categories( $args ); ?>
        </ul>

<?php get_footer(); ?>
