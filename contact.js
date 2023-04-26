function Check(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    if(!(name && email && message)){
        if(!name){
            document.getElementById("nameerror").textContent="* Name Cannot be Empty";
        }
        if(!email){
            document.getElementById("emailerror").textContent="* Email Cannot be Empty";
        }
        if(!message){
            document.getElementById("messageerror").textContent="* Message Cannot be Empty";
        }
        return false;
    }else
        return true;
}