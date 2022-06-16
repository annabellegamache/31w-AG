(function(){

    let elmboite__modal = document.createElement('div');
    let elemClose = document.createElement('div');
    let $contenu;

    //boite modal
    function creer_boite_modal(){
        elmboite__modal.appendChild(elemClose);
        elemClose.classList.add('modalClose')
        elmboite__modal.classList.add('boite__modal');
        elemClose.textContent = 'X';
        elmBody = document.querySelector('body');
        elmBody.appendChild(elmboite__modal);
        elmboite__modal.insertAdjacentHTML('beforeend' , genere_adresse());

    }

    function genere_adresse(){
        $contenu = '<code class="code__adresse"> 3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131</code>';
        return $contenu;
        }

    creer_boite_modal();

    let elmOK = document.querySelector('#mon_bouton');

    elmOK.addEventListener('mousedown', function(){
        console.log('Bravo le script fonctionne');
        elmboite__modal.classList.add('boite__modal__ouvrir')
    });

    elemClose.addEventListener('click', function(){
        elmboite__modal.classList.remove('boite__modal__ouvrir');
    });
        
  

})()
