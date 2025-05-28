const wrapper=document.querySelector('.wrapper');
const loginLink=document.querySelector('.login-link');
const registerLink=document.querySelector('.register-link');
const btnPopup=document.querySelector('.btnLogin-popup');
const iconClose=document.querySelector('.icon-close');
let Logeyeicon=document.getElementById("login-eyeicon");
let Logpassword=document.getElementById("login-password");
let Regeyeicon=document.getElementById("register-eyeicon");
let Regpassword=document.getElementById("register-password");

registerLink.addEventListener('click',()=>{
  wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
  wrapper.classList.remove('active');
});

btnPopup.addEventListener('click',()=>{
  wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click',()=>{
  wrapper.classList.remove('active-popup');
});

Logeyeicon.onclick=function(){
  if(Logpassword.type=="password"){
    Logpassword.type="text";
  }
  else{
    Logpassword.type="password";
  }
}

Regeyeicon.onclick=function(){
  if(Regpassword.type=="password"){
    Regpassword.type="text";
  }
  else{
    Regpassword.type="password";
  }
}
