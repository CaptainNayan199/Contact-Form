function Check() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    let nameEl = document.getElementById("nameerror");
    let emailEl = document.getElementById("emailerror");
    let messageEl = document.getElementById("messageerror");
    if (!(name && email && message)) {
        if (!name) {
            nameEl.textContent = "* Name Cannot be Empty";
            if (email)
                emailEl.textContent = "";
            if (message)
                messageEl.textContent = "";
        }
        if (!email) {
            emailEl.textContent = "* Email Cannot be Empty";
            if (name)
                nameEl.textContent = "";
            if (message)
                messageEl.textContent = "";
        }
        if (!message) {
            messageEl.textContent = "* Message Cannot be Empty";
            if (name)
                nameEl.textContent = "";
            if (email)
                emailEl.textContent = "";
        }
        return false;
    } else
        return true;
}