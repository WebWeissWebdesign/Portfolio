//form valideren
function validateForm(){
    let naam = document.forms["myForm"]["naam"].value;
    let email = document.forms["myForm"]["email"].value;
    let type = document.forms["myForm"]["type[]"].value;
    let budget = document.forms["myForm"]["budget[]"].value;
    let extra = document.forms["myForm"]["extra"].value;

    if(naam == "" || email == "" || type == "" || budget == "" || extra == ""){
        alert("Gelieve alle velden in te vullen");
        return false;
    }
    else{
        alert("Bedankt voor uw interesse, ik contacteer u zo rap mogelijk!");
    }
}

function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }