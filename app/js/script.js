// Popups LOGIN
const loginBtn = document.querySelector('#login');
const loginPopup = document.querySelector('.popup');

let teacher = document.getElementById("teacher");
let prof = document.getElementById("prof");


// let loginpro;
// prof.addEventListener("click" , () => {
// 	teacher.classList.remove('hide');
//
// })

// loginBtn.addEventListener('click',()=>{
// 	loginPopup.classList.remove('hide');
// })

// for (let exitKey in exit) {


// }
// for teacher to add event
function addEvent(){
	let add_event_btn = document.getElementById('add_event_btn');
let pop_events = document.getElementById('pop-up-add_events');
let img_close = document.getElementById("img_close");


add_event_btn.addEventListener('click' , () => {
    pop_events.style.display = 'flex';
})
img_close.addEventListener('click' , () => {
    pop_events.style.display = 'none';
})
}


