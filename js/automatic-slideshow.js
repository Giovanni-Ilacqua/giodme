
var myIndex = 0;
var heroImage = document.getElementById('hero-image');

carousel();

function carousel() {
   
  myIndex++;
  if (myIndex > 2) {myIndex = 1}

  if ( $(window).width() < 730 ){
    heroImage.style.backgroundImage = "url('images/hero-1.jpg')"; 
  }else{
    heroImage.style.backgroundImage = "url('images/hero-" + myIndex + ".jpg')"; 
    
  }
  setTimeout(carousel, 4000); // Change image every 4 seconds
}
