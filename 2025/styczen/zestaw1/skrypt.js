document.querySelector("#guzik").addEventListener("click", () => {
        let liczbaRat=parseInt(document.querySelector("#numerycznie").value);
        let React=5000;
        let JavaScript=3000;   
        let lokalizacja=document.querySelector("#miasto").value;
        if(zg1.checked){
            let rata=React/liczbaRat;
            let info=document.createElement("p");
            info.textContent=`Kurs odbędzie się w ${lokalizacja}. 
            Koszt całkowity: ${React} Płacisz ${liczbaRat} po ${rata} zł`;
            document.querySelector("section").appendChild(info);
        }
        else if(zg2.checked){
             let rata=JavaScript/liczbaRat;
            let info=document.createElement("p");
            info.textContent=`Kurs odbędzie się w ${lokalizacja}. 
            Koszt całkowity: ${JavaScript} Płacisz ${liczbaRat} po ${rata} zł`;
            document.querySelector("section").appendChild(info);
        }
        else{
            alert("Wybierz kurs");
        }
    });
       