(function(){
    console.log('vive la carrousel')
let boite__carrousel = document.querySelector(".boite__carrousel")
let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")
let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme');
let boite__carrousel__img = document.querySelector('.boite__carrousel__img');
let galerie__img = document.querySelectorAll('.galerie img')
console.log(galerie__img.length)

/* Création d'un élément Img */
let elmImg = document.createElement('img')
/* Dans l'article de la boite modale on ajoute la boite img */
boite__carrousel.append(elmImg)
/* On parcour chacune es img de la galerie */
let index = 0

for(const img of galerie__img){
   let elmImg = document.createElement('img')
   elmImg.setAttribute('src', img.getAttribute('src'))
   boite__carrousel__img.append(elmImg)

   let bouton = document.createElement('input')
   bouton.setAttribute('type','radio')
   bouton.setAttribute('class','bouton')
   bouton.setAttribute('name','bouton')
   bouton.setAttribute('checked','')
   
   
   bouton.dataset.index = index
   boite__carrousel__navigation.append(bouton)

   bouton.addEventListener('change', function(e){
       e.preventDefault
       initialiseRadioBouton();
       boite__carrousel__img.children[this.dataset.index].classList.remove('img--ouvrir')
       boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
   })

//    let dom_image = document.createElement('img')
//    dom_image.setAttribute('src', img.src)
//    boite__carrousel__img.append(dom_image)
//     button.addEventListener('mousedown', function(){
//        dom_image.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
//     })


 /* Ouvrir la boite__carrousel */
    img.addEventListener('mousedown', function(){
        // //console.log(this.parentNode.parentNode.className)
        console.log('selectionne ouvrir carrousel')
         boite__carrousel.classList.add('boite__carrousel__ouvrir')
        console.log(boite__carrousel.classList)
        // console.log(this.getAttribute('src'))
        // elmImg.setAttribute('src', this.getAttribute('src'))
        boite__carrousel__img.children[0].classList.add('img--ouvrir')
    })
    index++
}

boite__carrousel__ferme.addEventListener('mousedown', function(){
    boite__carrousel.classList.remove('boite__carrousel__ouvrir')
})
function initialiseRadioBouton(){
    for(let i = 0; i < boite__carrousel__navigation.children.length; i++){
        if(boite__carrousel__navigation.children[i].checked == false){
            boite__carrousel__img.children[i].classList.remove('img--ouvrir');
        }
    }
}
})()