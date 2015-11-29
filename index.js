function pageChangeA{
 var div1 = document.getElementById("1");
 var div2 = document.getElementById("2");
 document.getElementById("t").innerHTML = document.getElementById("t").innerHTML;
}
function pageChaneB{
 var div1 = document.getElementById("1");
 var div2 = document.getElementById("2");
 document.getElementById("rt1").innerHTML = document.getElementById("t").innerHTML;
  if(div2.style.visibility == "visible"){
   div2.style.visibility = "hidden";
  }else{
   div2.style.visibility = "visible";
  }
}
