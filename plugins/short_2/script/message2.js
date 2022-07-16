(function(){
    let elmBody = document.querySelector('body');
    let elmBoite__modale;
    let elmBoite__X;

    let elmBoite__Contenu 

    function creer_boite_modale(){
        elmBoite__modale = document.createElement('div');
        elmBoite__modale = document.createElement('div');
        elmBoite__Contenu  = document.createElement('div');

        elmBoite__Contenu.classList.add('elmBoite__Contenu');
        elmBoite__modale.appendChild(elmBoite__Contenu);

        elmBoite__X = document.createElement('button');

        elmBoite__modale.appendChild(elmBoite__X);
        elmBoite__modale.classList.add('boite__modale');
        elmBoite__X.classList.add('boite__X'); 
        elmBoite__X.innerHTML ="X";

        let elmBody = document.querySelector('body');
        elmBody.appendChild(elmBoite__modale);


        let mon_petit_contenu = document.querySelector(".code__adresse").innerHTML
        elmBoite__Contenu.innerHTML = mon_petit_contenu;
    }

    creer_boite_modale()
    
    

    let elmOK = document.querySelector('#mon_bouton');

    elmOK.addEventListener('mousedown', function(){
        console.log('Bravo le script fonctionne');
        elmBoite__modale.classList.add('boite__modale__ouvrir'); 
       
    })

    elmBoite__X.addEventListener('mousedown', function(){

        elmBoite__modale.classList.remove('boite__modale__ouvrir');
    })


})()