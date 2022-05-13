<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>


  <div class="wrapper">
    <div class="header__wrapper">
      <div class="container">
    
    
       <header class="header">
         <div class="header__top">
           <div class="header__btn-block">
             <button class="header__btn js_menu-btn">
               <span></span>
             </button>
           </div>

             <nav class="nav js_menu">
               <a href="./index.html" class="header__logo logo js_website-name"></a>
             
               <ul class="nav__list">
                 <li class="nav__item">
                   <a href="./contacts.html" class="nav__item">Contact Us</a>
                 </li>
                 <li class="nav__item">
                   <a href="./return.html" class="nav__item">Return Policy</a>
                 </li>
                 <li class="nav__item">
                   <a href="./purchase.html" class="nav__item">Terms of Purchase</a>
                 </li>
                 <li class="nav__item">
                   <a href="./privacy.html" class="nav__item">Privacy Notice</a>
                 </li>
                 <li class="nav__item">
                   <a href="./shipping.html" class="nav__item">Shipping Policy</a>
                 </li>
                 <li class="nav__item">
                   <a href="./use.html" class="nav__item">Terms of Use</a>
                 </li>
               </ul>
             </nav>

             <a href="./shop.html" class="cart__span-box">
                  
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
<path d="M421.2,128h-42.7v21.3c0,23.5-19.1,42.7-42.7,42.7c-23.5,0-42.7-19.1-42.7-42.7V128h-85.3v21.3c0,23.5-19.1,42.7-42.7,42.7
 c-23.5,0-42.7-19.1-42.7-42.7V128H79.9c0,213.3-21.3,384-21.3,384h384C442.5,512,421.2,341.3,421.2,128z M165.2,170.7
 c11.8,0,21.3-9.5,21.3-21.3v-42.7c0-35.4,28.6-64,64-64c35.4,0,64,28.6,64,64v42.7c0,11.8,9.5,21.3,21.3,21.3
 c11.8,0,21.3-9.5,21.3-21.3v-42.7C357.2,47.8,309.4,0,250.5,0c-58.9,0-106.7,47.8-106.7,106.7v42.7
 C143.9,161.1,153.4,170.7,165.2,170.7z"/>
</svg>
                 <span class="cart__span js_cart__span">79</span>
             </a>
         
         </div>
       </header>
    
     </div>
   </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
 
      <div class="container">
        <footer class="footer">
    
          <div class="footer__top">
            <div class="footer__top-block">
              <div class="footer__block">
                <p class="footer__title">Our Contacts</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <span class="text text--mb js_website-address"></span>
                   </li>
                   <li class="footer__item">
                    <a href="" class="footer__link js_website-email"></a>
                    </li>
                    <li class="footer__item">
                      <a href="" class="footer__link js_website-phone"></a>
                    </li>
                </ul>
              </div>
        
              <div class="footer__block">
                <p class="footer__title">Policies</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./return.html" class="footer__link">Return Policy</a>
                   </li>
                   <li class="footer__item">
                     <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Info</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./contacts.html" class="footer__link">Contact Us</a>
                   </li>
                   <li class="footer__item">
                     <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                    </li>
                    <li class="footer__item">
                      <a href="./cancellation.html" class="footer__link">Cancellation</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Terms</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                   </li>
                   <li class="footer__item">
                     <a href="./use.html" class="footer__link">Terms of Use</a>
                    </li>
                </ul>
              </div>
           
            </div>
          
          </div>
    
          <div class="footer__bottom">
            <div class="footer__block--bottom">
             <div>
              <a href="./index.html" class="footer__logo logo js_website-name"></a>
              <p class="text text--mb js_website-corp"></p>
             </div>
              <span class="footer__span">© All rights reserved</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

 
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>