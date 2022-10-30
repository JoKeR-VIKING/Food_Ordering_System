let registerLink = document.getElementsByClassName('registerlink')[0];
let registerForm = document.getElementsByClassName('register')[0];

let loginLink = document.getElementsByClassName('loginlink')[0];
let loginForm = document.getElementsByClassName('login')[0];

registerLink.addEventListener('click', function () {
    registerForm.style = "display: flex";
    loginForm.style = "display: none";
});

loginLink.addEventListener('click', function () {
    registerForm.style = "display: none";
    loginForm.style = "display: flex";
});