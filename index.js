function pageChangeA{
 document.getElementById("t").innerHTML = document.getElementById("t").innerHTML;
}
function pageChangeB{
 document.getElementById("rt1").innerHTML = document.getElementById("t").innerHTML;
  if(document.getElementById("rt1").style.visibility == 'visible'){ document.getElementById("rt1").style.visibility = 'hidden';
  }else{
   document.getElementById("rt1").style.visibility = 'visible'
  }
}
