const signUpButton = window.document.getElementById('signUp');
const signInButton = window.document.getElementById('signIn');
const container = window.document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});