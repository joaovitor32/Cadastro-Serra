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
            divInputs.innerHTML="<label class='labelMembro'>Membro:</label><input class='inputMembro'  autocomplete='off' type='text' onkeyup='buscarMembro(this.value,"+i+")' onmouseout='removeLembrete("+i+")' name='membro[]'><div class='lembreteMembro'></div>"
            container.appendChild(divInputs);
        }
    }  
}
function removeLembrete(posInput){
    var lembreteMembro=document.getElementsByClassName("lembreteMembro");
    lembreteMembro[posInput].innerHTML="";
}
function buscarMembro(Nome,posInput){
    if(window.XMLHttpRequest){
        req = new XMLHttpRequest();
    }else{
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var lembreteMembro=document.getElementsByClassName("lembreteMembro");
    var url="./buscarMembroJs.php?valor="+Nome;
    req.open("Get",url,true);
    req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200){
            var resposta=req.response;
        }
        lembreteMembro[posInput].innerHTML="<strong class='nomeLembrete'>"+resposta+"<strong>";
    }
    req.send(null);
}