function validation(){
    // let x =document.forms["RegForm"]["flName"]["mail"]["phoneNo"]["msg"].value;
    let name =document.forms["RegForm"]["flName"];
    let mail =document.forms["RegForm"]["mail"];
    let phone =document.forms["RegForm"]["phoneNo"];
    let msg =document.forms["RegForm"]["msg"];

    if(name.value == ""){
        alert("All fields are required");
        return false;
    }
    if(mail.value == ""){
        alert("Mail is required");
        return false;
    }
    if(phone.value == ""){
        alert("Phone number is required");
        return false;
    }
    if(msg.value == ""){
        alert("Write something");
        return false;
    }
}