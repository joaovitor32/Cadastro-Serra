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
            divInputs.innerHTML="<label class='labelMembro'>Membro:</label><input class='inputMembro' type='text' onkeyup='buscarMembroTimer(this.value)' name='membro[]'>"
            container.appendChild(divInputs);
        }
    } 
       
}
function buscarMembroTimer(Nome){
    setInterval(buscarMembro(Nome),1);
}
function buscarMembro(Nome){
    if(window.XMLHttpRequest){
        req = new XMLHttpRequest();
    }else{
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var resultado=document.getElementById("resultado");
    var inputMembro=document.getElementsByClassName("inputMembro");
    var url="./buscarMembroJs.php?valor="+Nome;
    req.open("Get",url,true);
    req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200){
            var resposta="<div>"+req.responseText+"</div>";
        }   
        resultado.innerHTML=resposta;
    }
    req.send(null);
}