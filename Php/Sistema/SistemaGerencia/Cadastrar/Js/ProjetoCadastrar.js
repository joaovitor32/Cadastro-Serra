var req;
function addField(){
    var container=document.getElementById("boxPai");
    var number = document.getElementById("nummembro").value;
    if(number>0){
        while(container.hasChildNodes()){
            container.removeChild(container.lastChild);
        }
        for(let i=0;i<number;i++){
            var divInputs=document.createElement("div");
            divInputs.innerHTML="<label class='labelMembro'>Membro:</label><input class='inputMembro'  autocomplete='off' type='text' onkeypress='buscarMembroTimer(this.value,"+i+")' name='membro[]'>"
            container.appendChild(divInputs);
        }
    }  
}
function buscarMembroTimer(Nome,posInput){
    setInterval(buscarMembro(Nome,posInput),1000);
}
function buscarMembro(Nome,posInput){
    if(window.XMLHttpRequest){
        req = new XMLHttpRequest();
    }else{
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var inputMembro=document.getElementsByClassName("inputMembro");
    var url="./buscarMembroJs.php?valor="+Nome;
    req.open("Get",url,true);
    req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200){
            var resposta=req.responseText;
        }   
        inputMembro[posInput].value=resposta;
    }
    req.send(null);
}