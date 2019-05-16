function addField(){
    var number = document.getElementById("nummembro").value;
    if(number>0){
        var container=document.getElementById("boxPai");
        while(container.hasChildNodes()){
            container.removeChild(container.lastChild);
        }
        for(let i=0;i<number;i++){
            var divInputs=document.createElement("div");
            divInputs.innerHTML="<label class='labelMembro'>Membro:</label> <input class='inputMembro' type='text' name='membro[]'>"
            container.appendChild(divInputs);
        }
    }    
}