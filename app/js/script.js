// Popups LOGIN
const loginBtn = document.querySelector('#login');
const loginPopup = document.querySelector('.popup');
let student;

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
let exit = document.querySelector('#exit');

// for (let exitKey in exit) {
// function homescript() {
	exit.addEventListener('click', function () {
		loginPopup.classList.add('hide');
		registerPop.classList.add('hide');
	});
	let exit1 = document.querySelector('#exit1');
	exit1.addEventListener('click', function () {
		student = document.getElementById("student");
		student.classList.add('hide');
		// registerPop.classList.add('hide');
	});
	let exit2 = document.querySelector('#exit2');
// for (let exitKey in exit) {
	
	exit2.addEventListener('click', function () {
		teacher.classList.add('hide');
		// registerPop.classList.add('hide');
	});
// }

// }
// *****Notification
let show_notify;
show_notify = () => {
	let notification = document.getElementById("notification"),
		notification_alert = document.getElementById("notification_alert");
	// notification_alert.style.display = 'block';
	notification_alert.classList.toggle('show');
};

// Popups register
const registerBtn = document.querySelector('#register');
const registerPop = document.querySelector('.registerPopup')
registerBtn.addEventListener('click', () => {
	registerPop.classList.remove('hide');
})









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


