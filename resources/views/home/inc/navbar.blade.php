<div class="rd-navbar-menu-wrap">
    <div class="container">
       <div class="rd-navbar-nav-wrap toggle-original-elements">
          <div class="rd-navbar-mobile-scroll">
             <!--Navbar Brand Mobile-->
             <div class="rd-navbar-mobile-brand">
               <a href="index.html"><img src="images/logo.png" alt="" width="221" height="32"></a></div>
             <!-- RD Navbar Nav-->
             <ul class="rd-navbar-nav">
                <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">
                  <a href="/"><span>প্রথম পাতা</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() == 'shop' ) ? 'active' : '' }}">
                   <a href="shop"><span>ক্যাটাগরী</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() == 'blog' ) ? 'active' : '' }}">
                   <a href="blog"><span>ব্লগ সমূহ</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() == 'about' ) ? 'active' : '' }}">
                   <a href="about"><span>আমাদের সম্পর্কে</span></a>
                </li>
                <li class="{{ (\Request::route()->getName() == 'contact' ) ? 'active' : '' }}">
                   <a href="contact"><span>যোগাযোগ করুন</span></a>
                </li>
                <li class="cart rd-navbar--has-dropdown rd-navbar-submenu">
                   <a href="checkout">
                      <span class="fa fa-shopping-cart"></span>
                      <span class="cart-text">ঝুড়ি</span>
                      <span class="cart-count big text-middle text-regular">2</span>
                   </a>
                   <span class="rd-navbar-submenu-toggle"></span>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </div>