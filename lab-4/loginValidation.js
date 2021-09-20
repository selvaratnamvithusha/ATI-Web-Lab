function show(){
    var password = document.getElementById('password');
    var icon = document.querySelector('.fas');
    if (password.type === "password") {
     password.type = "text";
     password.style.marginTop = "20px";
     icon.style.color = "#7f2092";
    }else{
     password.type = "password";
     icon.style.color = "grey";
    }
   }

   function validateForm() {
    if (validateIsEmpty(myForm.username, "User name") && 
        validateIsEmpty(myForm.password, "Password") &&
        CheckPassword(password)) {
        return true;
    } else {
        return false;
    }
}

function validateIsEmpty(obj, objName) {
    if(obj.value === "") {
        document.getElementById("errorbox").innerHTML =objName + " cannot be empty";
        return false;
    }
    return true;
}


    function CheckPassword(inputtxt){
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}$/;
        if(inputtxt.value.match(passw)) 
        { 
           alert('Sign in successfully')
        return true;
        }
        else
        { 
            document.getElementById("errorbox").innerHTML ="Password must be contain at least one uppercase and one number within 8 to 12 letters";
            return false;
            }
        }