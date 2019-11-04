<header class="main-page-header">
     <nav class="site-nav">
          <div class="large-nav">
               <h1 class="title"><?php echo get_bloginfo( $show = 'name', $filter = 'raw' ); ?></h1>
               <ul class="icon-view">
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Artists</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Login</a></li>
               </ul>
          </div>

          <div class="mobile">
          <button class="mobile-nav-btn mobile-open-btn"><i class="fas fa-bars"></i></button>
               <div class="mobile-nav mobile-nav-black">
                    <div class="mobile-nav mobile-nav-red">
                         <div class="mobile-nav mobile-nav-white">
                              <div class="mobile-nav-container">
                                   <button class="mobile-nav-btn mobile-close-btn"><i class="fas fa-times"></i></button>
                                   <img class="mobile-logo" src="https://logos-download.com/wp-content/uploads/2016/03/mobile_logo.png" alt="mobile Logo" />
                                   <ul class="mobile-list">
                                        <li><a href="#">MUSIC</a></li>
                                        <li><a href="#">ARTISTS</a></li>
                                        <li><a href="#">EVENTS</a></li>
                                        <li><a href="#">BLOG</a></li>
                                        <li><a href="#">LOGIN</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </nav>

     <p class="main-page-tagline"><?php echo get_bloginfo($show = 'description', $filter = 'raw' ); ?></p>
     <div class="cta-buttons">
          <a href="#">Stream Wishes - Grant</a>
          <a href="#">Stream A Random Song</a>
     </div>
</header>
