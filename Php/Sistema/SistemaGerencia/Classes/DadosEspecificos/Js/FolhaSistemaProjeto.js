function addField(){
    var container=document.getElementById("boxPai");
    var number = document.getElementById("numfotos").value;
    if(number>0){
        while(container.hasChildNodes()){
            container.removeChild(container.lastChild);
        }
        for(let i=0;i<number;i++){
            var divInputs=document.createElement("div");
            divInputs.innerHTML="<label class='labelFotos'>Foto: </label><input class='inputFoto' type='file' name='fotos[]'>"
            container.appendChild(divInputs);
        }
        var divInputSubmit=document.createElement("div");
        divInputSubmit.innerHTML="<input type='submit' class='inputFotoSubmit'>";
        container.appendChild(divInputSubmit);
    }  
}