<script type="text/javascript">
var 1 = document.getElementById("p1");
var 2 = document.getElementById("p2");
var 3 = document.getElementById("p3");
function page1(){
 if(1.style.visibility == 'visible'){
  1.style.visibility = 'hidden';
 }else{
  1.style.visibility = 'visible';
 }
 2.style.visibility = 'hidden';
 3.style.visibility = 'hidden';
 1.innerHTML = 1.innerHTML;
function page2(){
 if(2.style.visibility == 'visible'){
  2.style.visibility = 'hidden';
 }else{
  2.style.visibility = 'visible';
 }
 3.style.visibility = 'hidden';
 2.innerHTML = 1.innerHTML;
}
