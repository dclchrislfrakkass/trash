<?php
/*
Plugin Name: Word press cours pour radio lycée
Description: partie de cours avec slides
Version: 1.1
License: GPL
Author: Lacroix christophe
Author URI: https://lacroix-c.fr
*/



if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// define( 'FLEXSLIDER__FILE__',__FILE__ );
// define( 'FLEXSLIDER_PLUGIN_BASE', plugin_basename( FLEXSLIDER__FILE__ ) );
// define( 'FLEXSLIDER_PATH', plugin_dir_path( FLEXSLIDER__FILE__ ) );
// define( 'FLEXSLIDER_CSS_PATH', FLEXSLIDER_PATH . 'css/' );
// define( 'FLEXSLIDER_JSS_PATH', FLEXSLIDER_PATH . 'js/' );


function shortcode_flexSlide(){
    include ('eleve.php'); 

    }
add_shortcode('flexSlide', 'shortcode_flexSlide');



new CssJsPerso();
class CssJsPerso {
    function __construct() {
        if(!is_admin()){
            add_action('wp_enqueue_scripts', array($this, 'cssjspersoCSS'),15);
            add_action('wp_enqueue_scripts', array($this, 'cssjspersoJS'),15);
        } else {
            add_action('init', array($this,'cssjspersoEditor') );
        }
    }
    function cssjspersoCSS(){
        wp_enqueue_style('cssjsperso', plugins_url('cssjsperso/css/cssjsperso.css'));
    }
    function cssjspersoJS(){
    wp_enqueue_script('cssjsperso', plugins_url('cssjsperso/js/cssjsperso.js'));
    }
    function cssjspersoEditor() { 
    add_editor_style(plugins_url('cssjsperso/css/cssjsperso.css'));
    }
}

// class flexSlider {
//     function register(){
//         //for backend
//         add_action( 'admin_enqueue_scripts', array($this,'backendEnqueue'));
//         //for frontend
//         add_action( 'wp_enqueue_scripts', array($this,'frontendEnqueue'));
//     }
//     function backendEnqueue(){
//         wp_enqueue_style( 'demoJs', plugins_url( '/js/demo.js', __FILE__ ));
//         wp_enqueue_script( 'jqueryFlexslider', plugins_url( '/js/jquery.flexslider.js', __FILE__ ));
//         wp_enqueue_script( 'jqueryFlexsliderm', plugins_url( '/js/modernizr.js', __FILE__ ));
//         wp_enqueue_script( 'jqueryFlexsliderCore', plugins_url( '/js/shCore.js', __FILE__ ));
//         wp_enqueue_script( 'jqueryFlexsliderBrush', plugins_url( '/js/shBrushXml.js', __FILE__ ));
//         wp_enqueue_script( 'jqueryFlexsliderBrushS', plugins_url( '/js/shBrushJScript.js', __FILE__ ));
//     }
//     function frontendEnqueue(){
//         wp_enqueue_script( 'flexSlideStyle', plugins_url( '/css/style.css', __FILE__ ));
//         wp_enqueue_script( 'flexSliderCss', plugins_url( '/css/flexslider.css', __FILE__ ));
//         wp_enqueue_style( 'bootstrap', plugins_url( '/css/bootstrap.min.css', __FILE__ ));
//         wp_enqueue_style( 'democss', plugins_url( '/css/demo.css', __FILE__ ));
//     }
//     }

//     if(class_exists('flexSlider')){
//     $flexSlider=new flexSlider();
//     $flexSlider->register();
//     }


    
//     wp_enqueue_script( 'jsDemo', FLEXSLIDER_JSS_PATH .'demo.js');
//     wp_enqueue_script( 'jquery.flexslider', FLEXSLIDER_JSS_PATH .'jquery.flexslider.js');
//     wp_enqueue_script( 'modrn', FLEXSLIDER_JSS_PATH .'modernizr.js');
//     wp_enqueue_script( 'jsCore', FLEXSLIDER_JSS_PATH .'shCore.js');
//     wp_enqueue_script( 'jsbrushX', FLEXSLIDER_JSS_PATH .'shBrushXml.js');
//     wp_enqueue_script( 'jsbrushJS', FLEXSLIDER_JSS_PATH .'shBrushJScript.js');
       
    
// }
// add_action('wp_enqueue_scripts', 'add_scripts');
?>