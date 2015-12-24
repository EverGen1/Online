var tab1 = document.getElementById("tabEnter");

var body = document.getElementById("body");

tab1.addEventListener("click", tab1Show);

function tab1Show(){
 if( body.text = "<ul id='bodyList'>",
                 " <h2>",
                 "  <li><a id='enterGames' href='#games'><font color='white'>Games</font></a></li>",
                 "  <li><a id='enterMusic' href='#music'><font color='white'>Music</font></a></li>",
                 "  <li><a id='enterApps' href='#apps'><font color='white'>Apps</font></a></li>",
                 " </h2>",
                 "</ul>")
  body.text = "<p>First off thank-you for visiting our website, and we hope your stay will be nice. With our company we provide simple games, and apps. As well with great tips to help finance better.</p>",
              "<p>With that said we would also like to announce that there will be that selected products will be with 90% of money made from those selected products will be sent to a special savings for the charity.</p>";
}else{
   body.text = "<ul id='bodyList'>",
                 " <h2>",
                 "  <li><a id='enterGames' href='#games'><font color='white'>Games</font></a></li>",
                 "  <li><a id='enterMusic' href='#music'><font color='white'>Music</font></a></li>",
                 "  <li><a id='enterApps' href='#apps'><font color='white'>Apps</font></a></li>",
                 " </h2>",
                 "</ul>";
 }
}
