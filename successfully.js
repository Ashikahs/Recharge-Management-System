var attempt = 3; 

function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if ( username||password ){
        alert ("Login successfully");
        window.location.href = "recharge.php"; 
        return false;
    }
    else{
        attempt --;
        alert("Incorrect Password !! You have left "+attempt+" attempt;");
        if( attempt == 0){
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("sub").disabled = true;
            return false;
        }
    }
}
