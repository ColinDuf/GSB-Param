/* function setFormMessage (formElement, type, message) {
    const messageElement = formElement.querySelector (".form__message");  

    messageElement.textContent =message;
    message.Element.classList.remove("form__message--success"), "form__message--error");
    messageElement.classList.add('form__message--${type}');
    /* Mail ou mot de passe incorrect ! */
/* }

setFormMessage(loginForm,"succes")

document.addEventListener ("DOMContentLoaded", () => {
    const loginForm = document.querySelector ("#login");
    const createAccountForm = document.querySelector ("#createAccount");
                    
    ducument.querySelector ("#linkCreateAccount").addEventListener ("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove ("form--hidden");
    });
   document.queryselector ("#linkLogin").addEventListener ("click", e => {
        e.preventDefault();
        loginForm.classList.remove ("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });
    
loginForm.addEventListener ("submit", e => {
   e.preventDefault();
    setFormMessage (loginForm, "error", "Invalid username/password combination");
});
});  */