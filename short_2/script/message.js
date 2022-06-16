(function(){

    //boite modal
    let elmboite__modal = document.createElement('div');
    elmboite__modal.classList.add('boite__modal');
    elmBody = document.querySelector('body');

    elmBody.appendChild(elmboite__modal);

    let elmOK = document.querySelector('#mon_bouton');

    elmOK.addEventListener('mousedown', function(){
        console.log('Bravo le script fonctionne');
    })
})()
