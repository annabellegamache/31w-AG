<?php
    /**
    *Plugin Name: short 2
    *Description: Un deuxième exemple de plugin utilisant shortcode en utilisant des dossiers pour la structure
    *Author: Annabelle Gamache
    *Plugin URI: https://github.com/annabellegamache/31w-AG.git
    */


    function short2_31w_enqueue(){
      
        $version_css  = filemtime(plugin_dir_path(__FILE__) . 'style.css' );
        $version_js = filemtime(plugin_dir_path(__FILE__) . 'script/message.js' );

        wp_enqueue_style(   'sh2_31w_css', 
                            plugin_dir_url(__FILE__) .'style.css', 
                            array(),
                            $version_css);

        wp_enqueue_script(  'sh2_31w_js', 
                            plugin_dir_url(__FILE__) . 'script/message.js', 
                            array(),  
                            $version_js, 
                            true);
   
   add_action('wp_enqueue_scripts', 'short2_31w_enqueue');

   function genere_adresse(){
        $contenu = '<button id="mon_bouton">OK</button>';
        return $contenu;
    }

add_shortcode('adr', 'genere_adresse');



