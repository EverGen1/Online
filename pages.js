<script type="text/javascript">
var a = document.getElementById("p1");
var b = document.getElementById("p2");
var c = document.getElementById("p3");
function page1(){
 if(a.style.display == 'block'){
  a.style.visibility = 'none';
 }else{
  a.style.visibility = 'block';
 }
 b.style.visibility = 'none';
 c.style.visibility = 'none';
 a.innerHTML = a.innerHTML
function page2()
 if(b.style.display == 'block'){
  b.style.visibility = 'none';
 }else{
  b.style.visibility = 'block';
 }
  c.style.visibility = 'none';
 c.innerHTML = a.innerHTML;
}
