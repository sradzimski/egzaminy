document.querySelector('#guzik').addEventListener('click', () => {
    let imie = document.querySelector('#imie').value;
    let nazwisko = document.querySelector('#nazwisko').value;
    let email = document.querySelector('#email').value;
    let zgoda = document.querySelector('#zgoda').checked;
    if(zgoda ==false){
        let info=document.createElement('p');
        info.textContent='Musisz zapoznać się z regulaminem';
        info.style.color='red';
        document.querySelector('#content').appendChild(info);
    } else {
        let imie=document.querySelector('#imie').value;
        let nazwisko=document.querySelector('#nazwisko').value;
        let zgloszenie=document.querySelector('#zgloszenie').value;
        let info=document.createElement('p');
        info.innerHTML=imie.toUpperCase()+' '+nazwisko.toUpperCase()+'<br> '+zgloszenie;
       
        document.querySelector('#content').appendChild(info);
        
    }
});