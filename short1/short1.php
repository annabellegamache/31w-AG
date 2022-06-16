<?php
    /**
    *Plugin Name: short_1
    *Description: Un premier exemple de plugin utilisant shortcode
    *Author: Annabelle Gamache
    * Plugin URI: https://github.com/annabellegamache/31w-AG.git
    */


    function genere_adresse(){
        ////////////////////////////////////// CSS
        $contenu = "<style>
           .code__adresse {
               margin : 10px;
               padding : 10px;
               border-left : 4px solid #005;
               background-color : #bbb;
           }
           </style>";
                   
       /////////////////////////////////////// HTML
       $contenu .= '<code class="code__adresse">';
       $contenu .= "3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131";
       $contenu .= '</code>';
       $contenu .= '<button id="mon_bouton">OK</button>';
       ////////////////////////////////////// script
       $contenu .=  "<script>
       (function(){
           let elmOK = document.querySelector('#mon_bouton')
           elmOK.addEventListener('mousedown', function(){
               console.log('Bravo le script fonctionne')
           })
       })()
       </script>";
       return $contenu;
   }
   
   add_shortcode('adresse', 'genere_adresse');
?>