function animatedLemon(img) {
    img.src= "images/click-animation.gif";
}

function staticLemon(img){
    img.src= "images/giodme-logo.png"
}


var mobileNavLinks = document.getElementById("mobile-nav-links");
var mainTag = document.getElementsByTagName("main")[0];
var menuButton = document.getElementById("menu-button");

function toggleMenu(){

    if (mobileNavLinks.style.display === "block") {
        mobileNavLinks.style.display = "none";
        menuButton.classList.toggle("is-active");
        //mainTag.classList.toggle("margin-top");
    } else {
        mobileNavLinks.style.display = "block";
        menuButton.classList.toggle("is-active");
        //mainTag.classList.toggle("margin-top");
    }
}

$( window ).resize(function() {
        if($(this).width() > 500){
            mobileNavLinks.style.display = "none";
            //mainTag.classList.add("margin-top");
        }
    }
);

