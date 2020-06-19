function validation(){
    let x =document.forms["flName"]["mail"]["phoneNo"]["msg"].value;
    if(x === ""){
        alert("All fields are required");
        return false;
    }
}