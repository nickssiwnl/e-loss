const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('log');


loginBtn.addEventListener('click', () => {
    container.classList.add("active");
});
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

