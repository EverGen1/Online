<script type="text/javascript">
var a = document.getElementById("p1");
var b = document.getElementById("p2");
var c = document.getElementById("p3");
function page1(){
 if(a.style.display == 'block'){
  a.style.display = 'none';
 }else{
  a.style.display = 'block';
 }
 b.style.display = 'none';
 c.style.display = 'none';
 a.innerHTML = a.innerHTML
function page2()
 if(b.style.display == 'block'){
  b.style.display = 'none';
 }else{
  b.style.display = 'block';
 }
  c.style.display = 'none';
 b.innerHTML = a.innerHTML;
}
