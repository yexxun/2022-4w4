(function(){
console.log("vive la boite modale");
let boite__modale = document.querySelector(".boite__modale")
let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
let boite__modale__ferme = document.querySelector('.boite__modale__ferme');
let boite__modale__texte = document.querySelector('.boite__modale__texte');

boite__modale__ferme.addEventListener('mousedown', function(){
    boite__modale.classList.remove('boite__modale--ouvrir')
})

 console.log(cours__desc__ouvrir.length);

for(const bout of cours__desc__ouvrir){
    console.log(bout.tagName)
    bout.addEventListener('mousedown', function(){
        //console.log(this.parentNode.parentNode.className)
        boite__modale.classList.add('boite__modale--ouvrir')
        //console.log(boite__modale.classList)
        boite__modale__texte.innerHTML = this.parentNode.children[0].innerHTML
    })
}

boite__modale.addEventListener('mousedown', function(){
    boite__modale.classList.remove('boite__modale--ouvrir')
})
})()