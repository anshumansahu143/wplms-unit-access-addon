<?php
/*
Plugin Name: WPLMS Unit Access Addon
Plugin URI: http://www.Vibethemes.com
Description: A simple WordPress plugin to Restrict access to units 
Version: 1.0
Author: vibethemes,alexhal
Author URI: http://www.vibethemes.com
License: GPL2
Text Domain : wplms-uaa
*/

/*
Copyright GPLv2
WPLMS Unit Access Addon program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

WPLMS Unit Access Addon program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with wplms_customizer program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include_once 'classes/wplms_uaa_class.php';



if(class_exists('WPLMS_Unit_Addon_Class'))
{ 
    // Installation and uninstallation hooks
    

    // instantiate the plugin class
    $wplms_uaa = new WPLMS_Unit_Addon_Class();
}



?>