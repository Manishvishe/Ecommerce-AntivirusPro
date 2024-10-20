const btn = document.querySelectorAll(".add-to-cart");
btn.forEach(button => {
    button.addEventListener('click', btnFunction)
})
function btnFunction(){
    let button = this;
    button.classList.add('clicked');
}