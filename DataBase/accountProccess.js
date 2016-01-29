var bit = document.getElementById("BitBank");
 var in1 = document.getElementById("in1").value;
 var in2 = document.getElementById("in2").value;
 var in3 = document.getElementById("in3").value;
 var in4 = document.getElementById("in4").value;
 var rowB = insertRow(0);
  var cell1 = insertCell(0);
  var cell2 = insertCell(1);
  var cell3 = insertCell(3);
  var cell4 = insertCell(4);
  
function proccess1(){
 cell1.innerHTML = in1;
 cell2.innerHTML = in2;
 cell3.innerHTML = in3;
 cell4.innerHTML = in4;
}