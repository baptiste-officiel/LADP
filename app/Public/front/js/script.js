
// -------------------------------- bande en-tête --------------------------- 

const bande = document.querySelector('.bande');
window.addEventListener('scroll', () => {

    if(window.scrollY > 30){
        bande.classList.add('fond-bande');            
    }
    else{
        bande.classList.remove('fond-bande');
    }
});



// --------------------------------- Menu burger ------------------------ 

let burger = document.getElementById('burger-img');
let croix = document.getElementById('croix');
let menu = document.getElementById('menu');
let lienMenu = document.querySelectorAll('#menu li');

// lienMenu.addEventListener('click', function(){
    //     menu.style.display = 'none';
    // })
    
    // lienMenu = [];
    // for (const item of lienMenu) {
    //     item = item.innerHTML;
    //     console.log(item);
    // }

burger.addEventListener('click', function(){
    // menu.style.display = 'block';
    menu.classList.add('active');
    console.log('bite');

})
croix.addEventListener('click', function(){
    menu.style.display = null;
    // menu.style.display = 'none';
    menu.classList.remove('active');
    console.log('prout');
})

menu.addEventListener('click', function(){
    menu.classList.remove('active');
})



// -------------------------- Envoi formulaire ----------------------- 

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

// bouton.addEventListener('click', function(e){
//     e.preventDefault;
//     caseIsChecked();
//     console.log(onsubmit)
// })
