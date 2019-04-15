function Rolamento(){
    var i;
    var secSite=document.getElementsByClassName('section');
    var lengthSection=secSite.length;
    for(i=0;i<lengthSection;i++){
        if(window.scrollY>=(secSite[i].offsetTop)){
            if(i-1>=0){
                document.getElementById('Topo'+(i-1)).classList.remove('TopoEffect');
            }
            if(i+1<=lengthSection){
                document.getElementById("Topo"+(i+1)).classList.remove('TopoEffect');
            }
            document.getElementById("Topo"+i).classList.add('TopoEffect');
        }
    }   
}
function RemoveEffectRolamento(){
    var i;
    var secSite=document.getElementsByClassName('section');
    var lengthSection=secSite.length;
    for(i=0;i<lengthSection;i++){
        document.getElementById('Topo'+i).classList.remove('TopoEffect');
    }   
}
window.addEventListener('scroll',function(event){
    var isScrolling;
    Rolamento();
    window.clearTimeout(isScrolling);
    isScrolling=setTimeout(function(){
        RemoveEffectRolamento();
    },2000);
},false);

