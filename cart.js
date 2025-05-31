  let iconCart=document.querySelector('.nav-cart');
  let closeBtn=document.querySelector('.cartTab .close');
  let body=document.querySelector('body');

  iconCart.addEventListener('click',()=> {body.classList.toggle('activeTabCart');
  })

  closeBtn.addEventListener('click',()=> {body.classList.toggle('activeTabCart');
  })

