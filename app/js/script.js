// Popups
const loginBtn = document.querySelector('#login');
const loginPopup = document.querySelector('.loginPopup')
loginBtn.addEventListener('click',()=>{
	loginPopup.classList.remove('hide');
})

const exit = document.querySelector('.exit');

exit.addEventListener('click',function () {
	loginPopup.classList.add('hide');
	
})



const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});