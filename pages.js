<script type="text/javascript">
var a = document.getElementById("p1");
var b = document.getElementById("p2");
var c = document.getElementById("p3");
function page1(){
 if(a.style.visibility == 'visible'){
  a.style.visibility = 'hidden';
 }else{
  a.style.visibility = 'visible';
 }
 b.style.visibility = 'hidden';
 c.style.visibility = 'hidden';
 a.innerHTML = a.innerHTML;
function page2(){
 if(b.style.visibility == 'visible'){
  b.style.visibility = 'hidden';
 }else{
  b.style.visibility = 'visible';
 }
  c.style.visibility = 'hidden';
 c.innerHTML = a.innerHTML;
}
