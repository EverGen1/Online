var a1 = document.getElementById("1");

var img1 = document.getElementById("image");

var div1 = document.getElementById("left");

div1.addEventListener("click", leftChange1);

function leftChange1(){
 
 if(a1.href = 'https://magnr.com'){
  a1.href = "http://moonbit.co.in/?ref=1728b39e8002";
 }else{
  a1.href = "https://magnr.com";
 }
 
 if(img1.src = 'http://www.evergencompany.co/Images/ads/magnr.png'){
  img1.src = "http://www.evergencompany.co/Images/ads/moon.png";
 }else{
  img1.src = "http://www.evergencompany.co/Images/ads/magnr.png";
 }
 
}
