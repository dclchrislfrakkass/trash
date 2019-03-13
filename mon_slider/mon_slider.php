<?php
/*
Plugin Name: Radio lycée slider
Description: partie de cours avec slides pour radio lycée
Version: 0.1
Author: Lacroix christophe
Author URI: https://lacroix-c.fr
*/




add_action('init', 'mon_slider_show_init');

/**
 * permet d'initialiser les fonctions liées au carrousel
 */
function mon_slider_show_init() {

    $labels = array(
    'name' => 'Slide',
    'singular_name' => 'Slide',
    'add_new' => 'Ajouter un Slide',
    'add_new_item' => 'Ajouter un nouveau Slide',
    'edit_item' => 'Editer un Slide',
    'new_item' =>'Nouveau Slide',
    'view_item' => 'Voir le Slide',
    'search_items' => 'Recherche un Slide',
    'not_found' => 'Aucun Slide',
    'not_found_in_trash' => 'Aucun Slide dans la corbeille',
    'parent_item_colon' => '',
    'menu_name' => 'Slides'

    );

    register_post_type('slide', array(
    'public' => true,
    'publicly_queryable' => false,
    'labels' => $labels,
    'menu_position' => 9,
    'capability_type' => 'post',  //la même permission que pour poster un article
    'supports' => array('title', 'thumbnail'),
    ));

    add_image_size('slider', 1024,768, true);


}


/**
 * Affichage du carrousel
 */
function mon_slider_show() {

echo 'le slider ici';

}