const wrapper = document.querySelector('.wrapper');
const loginlink = document.querySelector('.login-link');
const registerlink = document.querySelector('.register-link');
const loginPopup = document.querySelector('.login-popup');


registerlink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});

loginlink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});

loginPopup.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
});
