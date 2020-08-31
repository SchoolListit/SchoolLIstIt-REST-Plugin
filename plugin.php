<?php
/**
 * Plugin Name: SchooListIt REST
 * Plugin URI: http://SchooListIt.com/
 * Description: REST API for parent checklist
 * Author: megphillips91
 * Author URI: https://megphillips91.wordpress.com/
 * Version: 1.1.3
 * License: GPL2+
 * http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

 /*
 SchoolListIt is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 any later version.

SchoolListIt is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with SchoolListIt. If not, see http://www.gnu.org/licenses/gpl-3.0.html.
 */
namespace Parent_Checklist_REST;

 // Exit if accessed directly.
 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 }

 /**
  * Include plugin files
  */
 require_once plugin_dir_path( __FILE__ ) . 'keys.php';
 require_once plugin_dir_path( __FILE__ ) . 'lesson-plan.php';
 require_once plugin_dir_path( __FILE__ ) . 'translate_blocks.php';
 require_once plugin_dir_path( __FILE__ ) . 'endpoints.php';
 require_once plugin_dir_path( __FILE__ ) . 'post-types.php';


 
?>