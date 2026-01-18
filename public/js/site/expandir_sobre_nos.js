let btnSaibaMais = document.querySelector("#btn-saiba-mais");
let navbarExpandir = document.querySelector(".navbar");
let boxSaibaMais = document.querySelector(".box-saiba-mais");
let fecharSaibaMais = document.querySelector(".box-fechar i");

btnSaibaMais.addEventListener('click', (e)=>{
    
    boxSaibaMais.style.display="inline-block";
    navbarExpandir.style.visibility="hidden";
    
});

fecharSaibaMais.addEventListener('click', ()=>{
    
    boxSaibaMais.style.display="none";
    navbarExpandir.style.visibility="visible";
});