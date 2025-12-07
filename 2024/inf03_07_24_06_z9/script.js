let fotka=1;
let ileFotek=document.querySelectorAll('.miniat').length;
document.querySelector('#guzik1').addEventListener('click',()=>{
    
    let fota=document.querySelector('#pokaz');
    if(fotka==1){
        fotka=7;
    } else{
        fotka--;
    }

    fota.src=fotka+'.jpg';
    
});
document.querySelector('#guzik2').addEventListener('click',()=>{
   let fota=document.querySelector('#pokaz');
    if(fotka==7){
        fotka=1;
    } else{
        fotka++;
    }

    fota.src=fotka+'.jpg';
});