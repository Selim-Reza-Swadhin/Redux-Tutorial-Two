<?php

//Redux Framework Added

 //require_once(get_template_directory() ."/redux-framework/ReduxCore/framework.php");
 //require_once(plugin_dir_path(__FILE__) ."/redux-framework/ReduxCore/framework.php");
 //require_once(__DIR__ ."/redux-framework/ReduxCore/framework.php");
 //require_once(__DIR__ ."/redux-framework/sample/selim-config.php");

/*if ( !class_exists( 'ReduxFramework' ) && file_exists( __DIR__ . '/librex/redux-core/framework.php' ) ) {
    require_once( __DIR__ . '/librex/redux-core/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( __DIR__ . '/librex/sample/selim-config.php' ) ) {
    require_once( __DIR__ . '/librex/sample/selim-config.php' );
}*/



if (!class_exists('ReduxFramework') && file_exists(plugin_dir_path(__FILE__) . '/librex/redux-core/framework.php'))
{
    require_once(__DIR__ ."/redux-framework/ReduxCore/framework.php");

}

if (!isset($redux_demo) && file_exists(plugin_dir_path(__FILE__) . '/redux-framework/sample/selim_created-config.php'))
{
    //require_once(__DIR__ ."/redux-framework/sample/selim-config.php");
    require_once(__DIR__ ."/redux-framework/sample/selim_created-config.php");

}
