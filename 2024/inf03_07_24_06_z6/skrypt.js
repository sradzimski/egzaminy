let blok1=document.querySelector('#blok1');
let blok2=document.querySelector('#blok2');
let blok3=document.querySelector('#blok3');
document.querySelector('#guzik1').addEventListener('click',()=>{
    blok1.style.opacity='0';
    blok2.style.opacity='1';
    blok3.style.opacity='0';
});
document.querySelector('#guzik2').addEventListener('click',()=>{
    blok1.style.opacity='0';
    blok2.style.opacity='0';
    blok3.style.opacity='1';
});
document.querySelector('#guzik3').addEventListener('click',()=>{
    let haslo1=document.querySelector('#haslo1').value;
    let haslo2=document.querySelector('#haslo2').value;
    let imie=document.querySelector('#imie').value;
    let nazwisko=document.querySelector('#nazwisko').value;
    if(haslo1 != haslo2){
        alert('Podane hasła różnią się');
    } else {
        console.log('Witaj '+imie+' '+nazwisko);
    }

});