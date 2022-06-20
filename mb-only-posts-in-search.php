<?php
/**
 * Plugin Name: Mostrar solo Posts en busquedas
 * Version: 1.0.0
 * Description: Mostrar unicamente posts en los resultados de busquedas de Wordpress.
 * Author: Manuel Bermúdez
 * Requires at least: 5.0
 * Tested up to: 5.4
 *
 * Text Domain: mb-only-posts-in-search
 *
 * @package WordPress
 * @author Manuel Bermúdez
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Cargar funcion ocultar_paginas 
require_once 'includes/ocultar_paginas.php';

/**
 * Main plugin class file.
 *
 */
if ( !class_exists( 'Only_Post_Result_Search' ) ) {
    class Only_Post_Result_Search{
        /**
         * The version number.
         *
         * @var     string
         * @access  public
         * @since   1.0.0
         */
        public $_version;

        /**
         * The token.
         *
         * @var     string
         * @access  public
         * @since   1.0.0
         */
        public $_token;

        /**
         * Constructor funtion.
         *
         * @param string $version Plugin version.
         */
        public function __construct() {
            $this->_version = '1.0.0';
            $this->_token   = 'mb_only_posts_in_search';
        } 
    }
}