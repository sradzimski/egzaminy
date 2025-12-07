//przycisk Klient
document.querySelector('#but1').addEventListener('click',()=>{
    document.querySelector('#main1').style.display='block';
    document.querySelector('#main2').style.display='none';
    document.querySelector('#main3').style.display='none';
});
//przycisk Adress
document.querySelector('#but2').addEventListener('click',()=>{
    document.querySelector('#main1').style.display='none';
    document.querySelector('#main2').style.display='block';
    document.querySelector('#main3').style.display='none'; 
});
//przycisk Kontakt
document.querySelector('#but3').addEventListener('click',()=>{
    document.querySelector('#main1').style.display='none';
    document.querySelector('#main2').style.display='none';
    document.querySelector('#main3').style.display='block';
});

//pasek postępu

let postep=0;
let kontrolki=document.querySelectorAll('.form1');
//let ile=document.querySelector('#progres>div').style.width;
for(let i=0;i<kontrolki.length;i++){
    kontrolki[i].addEventListener('blur',()=>{
    if(postep<100){
            postep+=12;
            if(postep>100){
                postep=100;
            }
        }
            document.querySelector('#progres>div').style.width = (postep+'%');
    });
}





