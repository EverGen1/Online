var bodFill = document.getElementById("emptyArea");
var reFill1 = document.getElementById("reFillArea1");

function bottomListClick1(){
 if(reFill1.visibility = 'visible'){
  reFill1.visibility = "hidden";
 }else{
  reFill1.visibility = "visible";
 }
 bodFill.innerHTML = reFill1.innerHTML;
}


