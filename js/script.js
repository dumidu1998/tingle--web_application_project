function checkpassword(){
	var x=document.getElementByName('password');
	var y=document.getElementByName('repassword');
	if(x!=y){
		document.getElementByName('center').innerHTML="Password does not Match.";
	}

}

function radiob(){
    var x = document.getElementById("crddetails");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
  }
}

function checktel(num){
    if(num.length<10){
        alert("Invalid Phone Number.");
        return false
    }else{
        return true;
    }
}

function phonenumber(inputtxt){
	var phoneno = /^\d{10}$/;
	if((inputtxt.value.match(phoneno)){
		return true;
	}else{
        alert("message");
		return false;
    }
}