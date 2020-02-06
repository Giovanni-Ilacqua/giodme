// Regex taken from:
// https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function emailPrompt(a_tag) {
    var txt;
    var email = prompt("Please enter your email address:", "Type here...");

    if (email == null || email == "") {
        //txt = "User cancelled the prompt.";
    } 
    else if (validateEmail(email) == false){
        txt = "Invalid email";
        alert(txt);
    }
    else if (validateEmail(email) == true){
        txt = "Valid email: " + email;
        $.post( "save-email.php", { var: email, } );
        //alert(txt);
        setTimeout(function(){
            window.location.href = "https://gilacqua.digitalscholar.rochester.edu/giodme/plans/free-workout.pdf";
            //a_tag.href="plans/free-workout.pdf"
        }, 1000);
        
    }
    else {
        txt = null;
    }
}


function buyProgram(){
    alert("Online payments are not available yet.\n\nIf you wish to buy the program please contact me to arrange the payment.")
}


