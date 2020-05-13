// Popups LOGIN
const loginBtn = document.querySelector('#login');
const loginPopup = document.querySelector('.popup');
// loginBtn.addEventListener('click',()=>{
// 	loginPopup.classList.remove('hide');
// })

const exit = document.querySelector('#exit');
// for (let exitKey in exit) {

exit.addEventListener('click',function () {
	loginPopup.classList.add('hide');
	registerPop.classList.add('hide');
});
// }


// Popups register
const registerBtn = document.querySelector('#register');
const registerPop = document.querySelector('.registerPopup')
registerBtn.addEventListener('click',()=>{
	registerPop.classList.remove('hide');
})


