function addField(){
    var number = document.getElementById("nummembro").value;
    if(number>0){
        var container=document.getElementById("boxPai");
        while(container.hasChildNodes()){
            container.removeChild(container.lastChild);
        }
        for(let i=0;i<number;i++){
            var span=container.appendChild(document.createElement("span"));
            span.appendChild(document.createTextNode("Membro: "));
            var input=document.createElement("input");
            input.classList.add("inputMembro");
            input.type="text";
            input.name="member"+i;
            container.appendChild(input);
            //container.appendChild(document.createElement("a"));
        }
    }    
}