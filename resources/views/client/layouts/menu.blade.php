 <!-- Offcanvas Menu Section Begin -->
 <div class="offcanvas-menu-overlay"></div>
 <div class="canvas-open">
     <i class="icon_menu"></i>
 </div>
 <div class="offcanvas-menu-wrapper">
     <div class="canvas-close">
         <i class="icon_close"></i>
     </div>
     
     <div class="header-configure-area">
        
     </div>
     <nav class="mainmenu mobile-menu">
         <ul>

            <li class={{ Request::is('accueil')? 'active' : ''}}><a href="{{route('accueil')}}">Accueil</a></li>
            <li class={{ Request::is('event')? 'active' : ''}}><a href="{{route('event')}}">Evénéments</a></li>
          
            <li class={{ Request::is('contact')? 'active' : ''}}><a href="{{route('contact')}}">Contact</a></li>
         </ul>
     </nav>
     <div id="mobile-menu-wrap"></div>
     <div class="top-social">
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-tripadvisor"></i></a>
         <a href="#"><i class="fa fa-instagram"></i></a>
     </div>
     <ul class="top-widget">
       <li><i class="fa fa-phone"></i> (+243) 815995094</li>
       <li><i class="fa fa-envelope"></i> salomonluveto2023@gmail.com</li>
     </ul>
 </div>
 <!-- Offcanvas Menu Section End -->


<!-- Header Section Begin -->
<header class="header-section">
   <div class="top-nav">
       <div class="container">
           <div class="row">
               <div class="col-lg-6">
                   <ul class="tn-left">
                       <li><i class="fa fa-phone"></i> (+243) 815995094</li>
                       <li><i class="fa fa-envelope"></i> salomonluveto2023@gmail.com</li>
                   </ul>
               </div>
               <div class="col-lg-6">
                   <div class="tn-right">
                       <div class="top-social">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-tripadvisor"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
                       </div>
               
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="menu-item">
       <div class="container">
           <div class="row">
               <div class="col-lg-2">
                   <div class="logo">
                       <a href="./index.html">
                           <h3>EVENTS</h3>
                       </a>
                   </div>
               </div>
               <div class="col-lg-10">
                   <div class="nav-menu">
                       <nav class="mainmenu">
                           <ul>
                           
            <li class={{ Request::is('accueil')? 'active' : ''}}><a href="{{route('accueil')}}">Accueil</a></li>
            <li class={{ Request::is('event')? 'active' : ''}}><a href="{{route('event')}}">Evénéments</a></li>
          
            <li class={{ Request::is('contact')? 'active' : ''}}><a href="{{route('contact')}}">Contact</a></li>
                           </ul>
                       </nav>
                       
                   </div>
               </div>
           </div>
       </div>
   </div>
</header>
<!-- Header End -->
