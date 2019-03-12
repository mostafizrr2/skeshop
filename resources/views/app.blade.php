<!DOCTYPE html>
<html class="wow-animation desktop landscape rd-navbar-static-linked" lang="en">
   <head>
      <title>@yield('title')</title>
      <meta charset="utf-8">
      <meta name="format-detection" content="telephone=no">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="keywords" content="Intense web design multipurpose template">
      <meta name="date" content="Apr 26">
      <script type="text/javascript" async="" src="files/ec.js"></script>
      <script type="text/javascript" async="" src="files/analytics.js"></script>
      <script async="" src="files/gtm.js"></script><script src="files/3ts2ksMwXvKRuG480KNifJ2_JNM.js">
      </script><script src="files/4o300efCt-CXoq1JEC-sVReFz48.js"></script>
      <link rel="icon" href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/images/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

      <link rel="stylesheet" type="text/css" href="files/css.css">
      <link rel="stylesheet" href="files/style.css">
      <link rel="stylesheet" href="files/slider.css">
      <style>
      .ie-panel
      {
         display: none;
         background: #212121;
         padding: 10px 0;
         box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
         clear: both;
         text-align:center;
         position: relative;
         z-index: 1;
      } 
      html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel 
      {
         display: block;
      }

      #search-icon{
         padding: 10px;
         font-size: 25px;
      }
      </style>
   
    @stack('css')

   </head>
   <body class="">
      <!-- Page-->
      <div class="page text-center">
         <!-- Page Header-->
         <header class="page-head">
               <!-- RD Navbar Transparent-->
               <div class="rd-navbar-wrap" style="height: 165.867px;">
                  <nav class="rd-navbar rd-navbar-logo-center novi-background rd-navbar-light rd-navbar-original rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-stick-up-offset="110px" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
                     <div class="rd-navbar-inner">
                        <div class="container">
                           <div class="rd-navbar-top-block row justify-content-xl-center align-items-xl-center">
                              <div class="col-xl-3">
                                 <p class="d-xl-block" style="font-size:20px; color:peru">
                                    <i class="fa fa-phone-square"></i> 01880-937822
                                 </p>
                              </div>
                              <div class="col-xl-6 text-center">
                                 <!--Navbar Brand-->
                                 <div class="rd-navbar-brand">
                                    <a href="index.html">
                                       <img src="images/logo.png" alt="" width="221" height="32">
                                    </a>
                                 </div>
                              </div>
                              <div class="col-xl-3">
                                 <div class="form-search-wrap toggle-original-elements">
                                    <!-- RD Search Form-->
                                    <form class="form-search rd-search" action="search-results.html" method="GET">
                                       <div class="form-group">
                                          <label class="form-label form-search-label form-label-sm rd-input-label" for="rd-navbar-form-search-widget">Search</label>
                                          <input class="form-search-input input-sm form-control form-control-gray-lightest input-sm" id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off">
                                       </div>
                                       <button class="form-search-submit" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <!-- RD Navbar Panel-->
                           <div class="rd-navbar-panel">
                              <!-- RD Navbar Toggle-->
                              <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                              <!-- RD Navbar Top Panel Toggle-->
                              <button class="rd-navbar-search-toggle" id="search-btn" data-rd-navbar-toggle=".rd-navbar, .form-search-wrap">
                                 <i class="fa fa-search" id="search-icon"></i>
                              </button>
                           </div>
                        </div>
                    

                        @include('home/inc/navbar') 


                     </div>
                  </nav>
               </div>
         </header>


         @yield('content') 


         <!-- Page Footers-->
         <!-- Footer variant 4-->
         <footer class="section-relative section-34 page-footer bg-gray-base context-dark novi-background" data-preset="{title:Footer,category:footer,reload:false,id:footer}">
            <div class="container">
               <div class="row justify-content-md-center text-xl-left">
                  <div class="col-md-12">
                     <div class="row justify-content-sm-center">
                        <div class="col-sm-12 col-lg-8 order-lg-2 text-lg-right">
                           <div>
                              <ul class="list-inline list-inline-dashed p text-darker list-inline-md list-inline-dashed-wide">
                                 <li class="list-inline-item"><a href="#">Documentation</a></li>
                                 <li class="list-inline-item"><a href="#">Plugins</a></li>
                                 <li class="list-inline-item"><a href="#">Themes</a></li>
                                 <li class="list-inline-item"><a href="#">Support</a></li>
                                 <li class="list-inline-item"><a href="#">GitHub</a></li>
                              </ul>
                           </div>
                           <ul class="list-inline list-inline-white offset-top-10 text-darker">
                              <li class="list-inline-item"><a class="novi-icon fa fa-facebook" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-twitter" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-google-plus" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-pinterest" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-vimeo" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-youtube" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-linkedin" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-github" href="#"></a></li>
                              <li class="list-inline-item"><a class="novi-icon fa fa-yahoo" href="#"></a></li>
                           </ul>
                        </div>
                        <div class="col-sm-12 col-lg-4 order-lg-1 offset-top-34 offset-lg-top-0">
                           <!-- Footer brand-->
                           <div class="footer-brand"><a href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/index.html"><img style="margin-left: -6px;" src="images/logo-light.png" alt="" width="221" height="32"></a></div>
                           <p class="small text-darker offset-top-4">© <span id="copyright-year">2019</span> . <a href="https://livedemo00.template-help.com/wt_58888_v15/child/intense-handmade/privacy.html">Privacy Policy</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>     
      </div>

      <!-- Java script-->
      <script src="files/core.js"></script>
      <script src="files/custom.js"></script>
      <script src="files/script.js"></script>
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script>
      <!-- End Google Tag Manager -->

      <a href="#" id="ui-to-top" class="fa fa-arrow-up ui-to-top icon icon-xs icon-circle icon-darker-filled active"></a>
      
      <script type="text/javascript" id="">(function(){var b=document.location.search.split("aff\x3d")[1];if(b){var d=document.querySelectorAll("a"),c;for(c=0;c<d.length;c++){var a=d[c];0==a.href.indexOf("https://www.templatemonster.com")&&(0<a.href.indexOf("?")?a.href=a.href+"\x26aff\x3d"+b:a.href=a.href+"?aff\x3d"+b)}}b=document.location.search.split("i\x3d")[1];var e=document.location.search.split("pr_code\x3d")[1];if(b&&e)for(b=b.split("\x26")[0],d=document.querySelectorAll("a"),c=0;c<d.length;c++)a=d[c],0==a.href.indexOf("https://www.templatemonster.com")&&
         (a.href="https://www.templatehelp.com/preset/cart.php?act\x3dadd\x26templ\x3d"+b+"\x26pr_code\x3d"+e)})();
      </script>

      @stack('js')
   </body>
   <!-- Google Tag Manager -->
</html>