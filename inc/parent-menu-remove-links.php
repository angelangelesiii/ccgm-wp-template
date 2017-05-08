<?php

add_filter( 'wp_nav_menu_objects',      't5_add_has_children_to_nav_items' );
add_filter( 'walker_nav_menu_start_el', 't5_unlink_parent_item', 10, 4 );

/**
 * Add aproperty 'has_children' to menu items
 *
 * @wp-hook wp_nav_menu_objects
 * @param   array $items
 * @return  array
 */
function t5_add_has_children_to_nav_items( $items )
{
    $parents = wp_list_pluck( $items, 'menu_item_parent' );
    $out     = array ();

    foreach ( $items as $item )
    {
        in_array( $item->ID, $parents ) && $item->has_children = TRUE;
        $out[] = $item;
    }
    return $items;
}
/**
 * Replace top parent element markup.
 *
 * @wp-hook walker_nav_menu_start_el
 * @param   string $item_output
 * @param   object $item
 * @param   int    $depth
 * @param   object $args
 * @return  string
 */
function t5_unlink_parent_item( $item_output, $item, $depth, $args )
{
    // not first level parent item
    if ( empty ( $item->has_children ) or 0 != $item->menu_item_parent )
        return $item_output;

    $title = apply_filters(
        'the_title',
        $item->title,
        $item->ID
    );
    $id = apply_filters(
        'nav_menu_item_id',
        'menu-item-'. $item->ID,
        $item, $args
    );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;
    $classes[] = 'has-children';
    $class_names = join(
        ' ',
        apply_filters(
            'nav_menu_css_class',
            array_filter( $classes ),
            $item,
            $args
        )
    );
    $class_names = $class_names
        ? ' class="' . esc_attr( $class_names ) . '"'
        : '';

    return "<li$id class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children\">$args->before<a class='menu-item has-children'>$title</a>$args->after";
}


?>