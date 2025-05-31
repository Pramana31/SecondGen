import cart from "./cart.js";
let app=document.getElementById('app');
let tempContent= document.getElementById('temporaryContent');

const loadTemplate = () => {
  fetch('/women.html')
  .then(response=>response.text())
  .then (html =>{
    app.innerHTML =html;
    let contentTab =document.getElementById('contentTab');
    contentTab.innerHTML = tempContent.innerHTML;
    tempContent.innerHTML=null;
    cart();
  })
}
loadTemplate();