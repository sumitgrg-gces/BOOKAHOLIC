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

try{
    document.getElementById('popup-signup').addEventListener('click',
    function(){
        document.querySelector('.popup_bg1').style.display = 'flex';
    });
    
    
    document.querySelector('.popup_close1').addEventListener('click',
    function(){
        document.querySelector('.popup_bg1').style.display = 'none';
    });
}
catch(e){

}



//2,login
try{
    document.getElementById('popup-login').addEventListener('click',
    function(){
        document.querySelector('.popup_bg2').style.display = 'flex';
    });
    
    
    document.querySelector('.popup_close2').addEventListener('click',
    function(){
        document.querySelector('.popup_bg2').style.display = 'none';
    });

}
catch(e){

}

//upload
try{
    document.getElementById('popup-upload').addEventListener('click',
function(){
    document.querySelector('.popup_bg3').style.display = 'flex';
});


document.querySelector('.popup_close3').addEventListener('click',
function(){
    document.querySelector('.popup_bg3').style.display = 'none';
});

}
catch(e){

}

//update
try{
    document.getElementById('popup-update').addEventListener('click',
function(){
    document.querySelector('.popup_bg4').style.display = 'flex';
});


document.querySelector('.popup_close4').addEventListener('click',
function(){
    document.querySelector('.popup_bg4').style.display = 'none';
});

}
catch(e){
    
}

