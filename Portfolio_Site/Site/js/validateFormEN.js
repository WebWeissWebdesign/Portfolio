//form valideren
function validateForm(){
    let naam = document.forms["myForm"]["naam"].value;
    let email = document.forms["myForm"]["email"].value;
    let type = document.forms["myForm"]["type[]"].value;
    let budget = document.forms["myForm"]["budget[]"].value;
    let extra = document.forms["myForm"]["extra"].value;

    if(naam == "" || email == "" || type == "" || budget == "" || extra == ""){
        alert("All fields are required");
        return false;
    }
    else{
        alert("Thank you for your interest, I will get back to you ASAP!");
    }
}

function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }