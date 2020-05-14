// Popups LOGIN
const loginBtn = document.querySelector('#login');
const loginPopup = document.querySelector('.popup');
let student = document.getElementById("student");
let etud = document.getElementById("etud");
let teacher = document.getElementById("teacher");
let prof = document.getElementById("prof");
etud.addEventListener("click" , () => {
	student.classList.remove('hide');
})
prof.addEventListener("click" , () => {
	teacher.classList.remove('hide');
})
// loginBtn.addEventListener('click',()=>{
// 	loginPopup.classList.remove('hide');
// })

let exit = document.querySelector('#exit');
// for (let exitKey in exit) {

exit.addEventListener('click',function () {
	loginPopup.classList.add('hide');
	registerPop.classList.add('hide');
});
let exit1 = document.querySelector('#exit1');
exit1.addEventListener('click',function () {
	student.classList.add('hide');
	// registerPop.classList.add('hide');
});

let exit2 = document.querySelector('#exit2');
// for (let exitKey in exit) {

exit2.addEventListener('click',function () {
	teacher.classList.add('hide');
	// registerPop.classList.add('hide');
});
// }


// Popups register
const registerBtn = document.querySelector('#register');
const registerPop = document.querySelector('.registerPopup')
registerBtn.addEventListener('click',()=>{
	registerPop.classList.remove('hide');
})


