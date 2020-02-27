function validate() {
    var password = document.getElementById("pwd").value;
    var confirmPassword = document.getElementById("repwd").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    if(password.length<3){
        alert("Password is too short.");
        return false;
    }
    return true;
}