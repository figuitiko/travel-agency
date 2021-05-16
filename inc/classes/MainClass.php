<?php


class MainClass
{
    private static  $instance = null;

    public function __construct() {
        $this->defineConstants();
        $this->includeFiles();

    }
    public static  function  getInstance(){
        if(self::$instance === null){
            self::$instance = new MainClass();
        }
        return self::$instance;
    }
    private function includeFiles(){
        include_once ('MainScripts.php');



    }
    private function  defineConstants(){
        $active_theme = wp_get_theme();
        define( 'TRAVEl_HOME', 'https://'.$_SERVER['HTTP_HOST'] );
        define( 'TRAVEl_SITEURL', 'https://'.$_SERVER['HTTP_HOST'] );
        define( 'THEME_NAME', $active_theme->get( 'Name' ) );
        define( 'THEME_VERSION', $active_theme->get( 'Version' ) );
        define( 'TRAVEl_THEME_LOCAL_MODE', true );
        define( 'TRAVEl_STYLE_DIR', get_stylesheet_uri() );
        define( 'TRAVEl_THEME_DIR', get_template_directory() );
        define( 'TRAVEl_THEME_DIR_URI', get_stylesheet_directory_uri() );
        define( 'TRAVEl_THEME_URL', get_template_directory_uri() );
        define( 'TRAVEl_THEME_SCSS_URL', TRAVEl_THEME_DIR_URI.'/inc/assets/scss' );
        define( 'TRAVEl_THEME_CSS_URL', TRAVEl_THEME_DIR_URI.'/inc/assets/css' );
        define( 'TRAVEl_THEME_JS_URL', TRAVEl_THEME_DIR_URI.'/inc/assets/js' );
        define( 'TRAVEl_THEME_IMG_URL', TRAVEl_THEME_DIR_URI.'/inc/assets/img' );
        /*define('REGISTERED_SENDER', ['cotiza@gudyob.com']);
        define('SITE_EMAIl', 'sistemas@014latam.com');*/
        //define( 'TRAVEl_THEME_FONTS_DIR', GUDYOB_THEME_DIR_URI.'/inc/assets/css/font' );

    }



}