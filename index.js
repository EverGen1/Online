var a1 = document.getElementById("1");

var i1 = document.getElementById("adImg");

var d1 = document.getElementById("left");

d1.addEventListener("click", leftChange1);

function leftChange1(){
 
 if(a1.href = 'https://magnr.com'){
  a1.href = "http://moonbit.co.in/?ref=1728b39e8002";
 }else{
  a1.href = "https://magnr.com";
 }
 
  if ( newsrc == "moon.png" ) {
    document.images["pic"].src = "http://www.evergencompany.co/Images/ads/moon.png";
    document.images["pic"].alt = "Moon";
    newsrc  = "magnr.png";
  }
  else {
    document.images["pic"].src = "http://www.evergencompany.co/Images/ads/magnr.png";
    document.images["pic"].alt = "Magnr";
    newsrc  = "magnr.png";
  }
 
}
