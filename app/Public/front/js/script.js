
// -------------------------------- bande en-tête --------------------------- 

// On fait en sorte que la bande blanche apparaisse après un scroll vertical de 30px. On veut également que les liens du menu aient la classe white lorsque la bande n'est pas visible (sur desktop) puis qu'ils aient la classe black lorsque la bande est présente 

const bande = document.querySelector('.bande');
let lienMenu = document.querySelectorAll('#menu li a');
let menu = document.getElementById('menu');

window.addEventListener('scroll', () => {

    for (let lien of lienMenu) {
        if(window.scrollY > 30 || menu.classList.contains('active')){
            bande.classList.add('fond-bande'); 
                lien.classList.remove('white');
                lien.classList.add('black');
        }           
        else{
            bande.classList.remove('fond-bande');
            lien.classList.remove('black');
                lien.classList.add('white');
        }
    }
});



// --------------------------------- Menu burger ------------------------ 

// La fonction permet l'apparition et la disparition du menu burger, on a également modifié les classes des liens pour ne pas qu'ils soient en classe white sur mobile (au moment où on va cliquer sur le burger) 

let burger = document.getElementById('burger-img');
let croix = document.getElementById('croix');


for(let lien of lienMenu){
    burger.addEventListener('click', function(){
        // menu.style.display = 'block';
        menu.classList.add('active');
        console.log('bite');
        lien.classList.remove('white');
        lien.classList.add('black');
    })
}
croix.addEventListener('click', function(){
    menu.style.display = null;
    bande.classList.remove('fond-bande');
    // menu.style.display = 'none';
    menu.classList.remove('active');
    console.log('prout');
})

menu.addEventListener('click', function(){
    menu.classList.remove('active');
})



// -------------------------- Envoi formulaire ----------------------- 

// On vérifie ici que la checkbox du formulaire est bien cochée et on autorise ou non l'envoi du formulaire 

let bouton = document.getElementById('btn-envoi');
let caseCocher = document.getElementById('validation');
let alert = document.getElementById('alerte-accept-data');

function caseIsChecked(){
    if (caseCocher.checked === false){
        // alert('Vous devez cocher la case');
        alert.innerHTML = 'Vous devez cocher cette case afin d\'envoyer votre message !';
        return false;
    } else{
        onsubmit = true;
    }
}
