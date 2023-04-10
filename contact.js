function Check(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    console.log( name, email, message)
    let final = name+email+message;
    if(final=="" || final==null){
        if(name=="" || name == null){
            document.getElementById("nameerror").textContent="* Name Cannot be Empty";
        }
        if(email=="" || email == null){
            document.getElementById("emailerror").textContent="* Email Cannot be Empty";
        }
        if(message=="" || message == null){
            document.getElementById("messageerror").textContent="* Message Cannot be Empty";
        }
        return false;
    }else{
        return true;
    }
}