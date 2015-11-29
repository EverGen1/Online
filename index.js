function pageChangeA{
 var div1 = document.getElementById("1");
 var div2 = document.getElementById("2");
 div1.style.visibility = 'visible';
 div2.style.visibility = 'hidden';
 document.getElementById("t").innerHTML = document.getElementById("t").innerHTML;
}
function pageChaneB{
 var div1 = document.getElementById("1");
 var div2 = document.getElementById("2");
 div1.style.visibility = 'hidden';
 div2.style.visibility = 'visible';
 document.getElementById("t").innerHTML = document.getElementById("rt1").innerHTML;
}
