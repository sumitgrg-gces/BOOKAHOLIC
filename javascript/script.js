 //navpanal mechanism

const menuIcon = document.querySelector (".navigation_icon");
const navbar = document.querySelector(".navigation_bar");


menuIcon.addEventListener("click", () => {
navbar.classList.toggle("change");
});
//signup and login showup from right
// const clicksignup = document.getElementById('popup-signup');
// const signupcontent = document.getElementById('popup_content_signup');


// clicksignup.addEventListener("click", () => {
//     signupcontent.classList.toggle("slide");
// });


//popup mechanism

//1,signup
document.getElementById('popup-signup').addEventListener('click',
function(){
    document.querySelector('.popup_bg1').style.display = 'flex';
});


document.querySelector('.popup_close1').addEventListener('click',
function(){
    document.querySelector('.popup_bg1').style.display = 'none';
});


//2,login
document.getElementById('popup-login').addEventListener('click',
function(){
    document.querySelector('.popup_bg2').style.display = 'flex';
});


document.querySelector('.popup_close2').addEventListener('click',
function(){
    document.querySelector('.popup_bg2').style.display = 'none';
});

