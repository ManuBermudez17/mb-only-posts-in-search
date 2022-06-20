<?php
/*
 * Funcion para ocultar las paginas de los resultados de busqueda.
 */

 /**
 * Ocultar paginas en el buscador
 *
 */
function ocultar_paginas_buscador( $query ) {
    if ( ! $query->is_admin && $query->is_search && $query->is_main_query() ) {
        $query->set( 'post_type', 'post' );
    }
    return $query;
}
add_filter('pre_get_posts','ocultar_paginas_buscador');