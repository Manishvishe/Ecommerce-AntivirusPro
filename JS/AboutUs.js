
const accordion = document.querySelectorAll(".content-box");

accordion.forEach(item => {
    const title = item.querySelector(".question");
    const content = item.querySelector(".answer");

    title.addEventListener('click',() =>{
        item.classList.toggle('active');
    });
  
});

const accor = document.querySelectorAll(".termBx");

accor.forEach(item => {
    const ques = item.querySelector(".terms");
    const cont = item.querySelector(".ans");

    ques.addEventListener('click',() =>{
        item.classList.toggle('active');
    });
  
});


