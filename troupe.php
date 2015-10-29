<?php

include "main/php/connect.php";

echo "

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class='lt-ie7'> <![endif]-->
<!--[if IE 7]>     <html class='lt-ie8'> <![endif]-->
<!--[if IE 8]>     <html class='lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Artistarc . Home</title>

  <meta name='description' content=''>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel='icon' type='image/png' href='assets/_con/images/logo.png'>

  <!-- nanoScroller -->
  <link rel='stylesheet' type='text/css' href='assets/nanoScroller/nanoscroller.css' />

  <!-- FontAwesome -->
  <link rel='stylesheet' type='text/css' href='assets/font-awesome/css/font-awesome.min.css' />

  <!-- Material Design Icons -->
  <link rel='stylesheet' type='text/css' href='assets/material-design-icons/css/material-design-icons.min.css' />

  <!-- IonIcons -->
  <link rel='stylesheet' type='text/css' href='assets/ionicons/css/ionicons.min.css' />

  <!-- WeatherIcons -->
  <link rel='stylesheet' type='text/css' href='assets/weatherIcons/css/weather-icons.min.css' />

  <!-- Google Prettify -->
  <link rel='stylesheet' type='text/css' href='assets/google-code-prettify/prettify.css' />
  
  <!-- nvd3 -->
  <link rel='stylesheet' type='text/css' href='assets/nvd3/nv.d3.min.css' />
  
  <!-- Rickshaw -->
  <link rel='stylesheet' type='text/css' href='assets/rickshaw/rickshaw.min.css' />

  <!-- PhotoSwipe -->
  <link rel='stylesheet' type='text/css' href='assets/PhotoSwipe/photoswipe.css' />
  <link rel='stylesheet' type='text/css' href='assets/PhotoSwipe/default-skin/default-skin.css' />
  
  <!-- Full Calendar -->
  <link rel='stylesheet' type='text/css' href='assets/fullcalendar/fullcalendar.min.css' />
  
  <!-- Main -->
  <link rel='stylesheet' type='text/css' href='assets/_con/css/_con.min.css' />
  
  <!-- Style -->
  <link rel='stylesheet' type='text/css' href='main/css/style.css' />
  <link rel='stylesheet' type='text/css' href='main/css/scaler.css' />
  <link rel='stylesheet' type='text/css' href='main/css/helper.css' />

  <!--[if lt IE 9]>
    <script src='assets/html5shiv/html5shiv.min.js'></script>
  <![endif]-->
</head>

<body>


  <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
  <nav class='navbar-top'>
    <div class='nav-wrapper'>

      <!-- Sidebar toggle -->
      <a href='page-profile.html#' class='yay-toggle'>
        <div class='burg1'></div>
        <div class='burg2'></div>
        <div class='burg3'></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href='page-profile.html#!' class='brand-logo'>
        <img src='assets/_con/images/logo.png' alt='Con'>
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        <li><a href='page-profile.html#!' class='search-bar-toggle'><i class='mdi-action-search'></i></a>
        </li>
         <li><a href='page-profile.html#!' class='lighten-3 grey-text z-depth-0 chat-toggle'><i class='fa fa-comments'></i></a>
        </li>
        <li class='user'>
          <a class='dropdown-button' href='page-profile.html#!' data-activates='user-dropdown'>
            <img src='assets/_con/images/user.jpg' alt='John Doe' class='circle'>John Doe<i class='mdi-navigation-expand-more right'></i>
          </a>

          <ul id='user-dropdown' class='dropdown-content'>
            <li><a href='page-profile.html'><i class='fa fa-user'></i> Profile</a>
            </li>
            <li><a href='mail-inbox.html'><i class='fa fa-envelope'></i> Messages <span class='badge new'>2</span></a>
            </li>
            <li><a href='page-profile.html#!'><i class='fa fa-cogs'></i> Settings</a>
            </li>
            <li class='divider'></li>
            <li><a href='page-sign-in.html'><i class='fa fa-sign-out'></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->


  <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
  <aside class='yaybar yay-shrink yay-hide-to-small yay-gestures'>

    <div class='top'>
      <div>
        <!-- Sidebar toggle -->
        <a href='page-profile.html#' class='yay-toggle'>
          <div class='burg1'></div>
          <div class='burg2'></div>
          <div class='burg3'></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href='page-profile.html#!' class='brand-logo'>
          <img src='assets/_con/images/logo-white.png' alt='Con'>
        </a>
        <!-- /Logo -->
      </div>
    </div>


    <div class='nano'>
      <div class='nano-content'>

        <ul>
          <li>
            <a href='angularjs/index.html' class='waves-effect waves-blue'><i class='ion ion-social-angular'></i> Open Angular Version <span class='badge new'></span></a>
          </li>
          <li class='label'>Menu</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-dashboard'></i> Dashboards<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li>
                <a href='dashboard.html' class='waves-effect waves-blue'> Dashboard</a>
              </li>
              <li>
                <a href='dashboard-v1.html' class='waves-effect waves-blue'> Dashboard v1</a>
              </li>
            </ul>
          </li>

          <li>
            <a href='widgets.html' class='waves-effect waves-blue'><i class='fa fa-magic'></i> Widgets</a>
          </li>

          <li>
            <a href='layouts.html' class='waves-effect waves-blue'><i class='mdi mdi-av-web'></i> Layouts</a>
          </li>

          <li class='label'>Elements</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-css3'></i> CSS<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='css-alerts.html'><i class='mdi-alert-warning'></i> Alerts</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-badges.html'><i class='mdi-action-stars'></i> Badges</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-colors.html'><i class='mdi-image-palette'></i> Colors</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-grid.html'><i class='mdi-action-dashboard'></i> Grid</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-helpers.html'><i class='mdi-action-help'></i> Helpers</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-icons.html'><i class='mdi-communication-invert-colors-on'></i> Icons</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-shadow.html'><i class='mdi-maps-layers'></i> Shadow</a>
              </li>
              <li><a class='waves-effect waves-blue' href='css-typography.html'><i class='fa fa-font'></i> Typography</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-cubes'></i> UI Elements<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='ui-buttons.html'><i class='fa fa-square'></i> Buttons</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-cards.html'><i class='mdi-av-web'></i> Cards</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-collapsible.html'><i class='mdi-action-view-day'></i> Collapsible</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-collections.html'><i class='fa fa-server'></i> Collections</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-dropdown.html'><i class='mdi-navigation-arrow-drop-down-circle'></i> Dropdown</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-modals.html'><i class='fa fa-external-link'></i> Modals</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-pagination.html'><i class='mdi mdi-navigation-more-horiz'></i> Pagination</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-progress-bars.html'><i class='fa fa-tasks'></i> Progress Bars</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-tabs.html'><i class='mdi-action-tab-unselected'></i> Tabs</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-toasts.html'><i class='mdi-action-announcement'></i> Toasts</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-tooltips.html'><i class='fa fa-comment-o'></i> Tooltips</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-waves.html'><i class='mdi-image-blur-on'></i> Waves</a>
              </li>

              <li><a class='waves-effect waves-blue' href='ui-search-bar.html'><i class='mdi-action-search'></i> Search Bar</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='mdi mdi-image-panorama'></i> Media<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='media-hover-effects.html'><i class='mdi mdi-image-style'></i> Hover Effects</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-scroll-effects.html'><i class='fa fa-magic'></i> Scroll Effects</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-gallery.html'><i class='mdi mdi-image-collections'></i> Gallery</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-material-box.html'><i class='mdi mdi-image-collections'></i> Material Box</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-parallax.html'><i class='mdi mdi-image-panorama'></i> Parallax</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-player.html'><i class='mdi mdi-av-play-circle-outline'></i> Player</a>
              </li>
              <li><a class='waves-effect waves-blue' href='media-slider.html'><i class='mdi mdi-action-view-carousel'></i> Slider</a>
              </li>
            </ul>
          </li>

          <li class='label'>Components</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-check-square-o'></i> Forms<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='forms-base.html'><i class='fa fa-cube'></i> Base</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-advanced.html'><i class='fa fa-cubes'></i> Advanced</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-validation.html'><i class='fa fa-check-square-o'></i> Validation</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-editors.html'><i class='fa fa-edit'></i> Editors</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-checkout.html'> Checkout</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-contacts.html'> Contacts</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-login.html'> Login</a>
              </li>
              <li><a class='waves-effect waves-blue' href='forms-register.html'> Register</a>
              </li>
            </ul>
          </li>

          <li class='open'>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-globe'></i> Pages<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li class='active'><a class='waves-effect waves-blue' href='page-profile.html'>Profile</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-timeline.html'>Timeline</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-calendar.html'>Calendar</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-forgot-password.html'>Forgot Password</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-lock.html'>Screen Lock</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-sign-in.html'>Sign In</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-sign-up.html'>Sign Up</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-404.html'>404</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-500.html'>500</a>
              </li>
              <li><a class='waves-effect waves-blue' href='page-blank.html'>Blank</a>
              </li>
            </ul>
          </li>

          <li class='label'>Extra</li>
          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-envelope'></i> Mailbox<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='mail-inbox.html'><i class='mdi-content-inbox'></i> Inbox</a>
              </li>
              <li><a class='waves-effect waves-blue' href='mail-compose.html'><i class='mdi-content-add-circle'></i> Compose</a>
              </li>
              <li><a class='waves-effect waves-blue' href='mail-view.html'><i class='mdi-content-drafts'></i> View</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='mdi mdi-action-shopping-cart'></i> eCommerce<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='ecommerce-dashboard.html'><i class='fa fa-dashboard'></i> Dashboard</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-products.html'><i class='fa fa-tags'></i> Products</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-product-single.html'><i class='fa fa-tag'></i> Product Single</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-orders.html'><i class='fa fa-cart-plus'></i> Orders</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-order-single.html'><i class='fa fa-cart-plus'></i> Order Single</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-customers.html'><i class='fa fa-users'></i> Customers</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-settings.html'><i class='fa fa-cog'></i> Settings</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-invoice.html'><i class='ion ion-android-list'></i> Invoice</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ecommerce-pricing-tables.html'><i class='fa fa-money'></i> Pricing Tables</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-bar-chart'></i> Charts<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='charts-flot.html'>Flot</a>
              </li>
              <li><a class='waves-effect waves-blue' href='charts-rickshaw.html'>Rickshaw</a>
              </li>
              <li><a class='waves-effect waves-blue' href='charts-sparkline.html'>Sparkline</a>
              </li>
              <li><a class='waves-effect waves-blue' href='charts-nvd3.html'>NVD3</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='mdi mdi-maps-place'></i> Maps<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='maps-google.html'>Google Maps</a>
              </li>
              <li><a class='waves-effect waves-blue' href='maps-vector.html'>Vector Maps</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-table'></i> Tables<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li><a class='waves-effect waves-blue' href='ui-tables.html'>Base Tables</a>
              </li>
              <li><a class='waves-effect waves-blue' href='ui-datatables.html'>Data Tables</a>
              </li>
            </ul>
          </li>

          <li>
            <a class='yay-sub-toggle waves-effect waves-blue'><i class='fa fa-indent'></i> Menu Levels<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
            <ul>
              <li>
                <a class='yay-sub-toggle waves-effect waves-blue' href='page-profile.html#!'>Second Level<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
                <ul>
                  <li>
                    <a class='yay-sub-toggle waves-effect waves-blue' href='page-profile.html#!'>Third Level<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
                    <ul>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class='yay-sub-toggle waves-effect waves-blue' href='page-profile.html#!'>Third Level<span class='yay-collapse-icon mdi-navigation-expand-more'></span></a>
                    <ul>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                      <li><a href='page-profile.html#!' class='waves-effect waves-blue'>Fourth Level</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class='label'>Stats</li>
          <li class='content'>
            <span><i class='fa fa-spinner'></i> Server Load</span>
            <div class='progress small light-green lighten-4'>
              <div class='light-green accent-5' style='width: 37%'></div>
            </div>

            <span><i class='fa fa-thumbs-o-up'></i> User Satisfaction</span>
            <div class='progress small'>
              <div style='width: 91%'></div>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->


  <!-- Main Content -->
  <section class='content-wrap'>


    <!-- Breadcrumb -->
    <div class='page-title wow slideInDown user-head' id='user-head' data-wow-duration='2s' style='height:auto'>

      <div class='row '>
        <div class='col s12 m9 l12 '>
         <table class='profile-info'>
        <tbody>
          <tr>
            <td class='photo' style='margin:20px'>
              <img src='assets/_con/images/image-3.jpg' alt='Jogh Doe' class='circle'>
            </td>
            <td>&nbsp;<br></td>
            <td>
              <!-- Name -->
              <h3>Troupe Name</h3>
              <!-- /Name -->

              <!-- Status Message -->
              <span>Cras vel risus ac massa varius tempus. Suspendisse sed risus at mi egestas rutrum nec et velit.</span>
              <!-- /Status Message -->

              <!-- Contact Buttons -->
              <div class='contacts'>
                <a href='page-profile.html#!' class='blue darken-3 white-text waves-effect'>
                  <i class='fa fa-facebook'></i>
                </a>
                <a href='page-profile.html#!' class='blue lighten-2 white-text waves-effect'>
                  <i class='fa fa-twitter'></i>
                </a>
                <a href='page-profile.html#!' class='red white-text waves-effect'>
                  <i class='fa fa-google-plus'></i>
                </a>
                <a href='page-profile.html#!' class='blue lighten-1 white-text waves-effect'>
                  <i class='fa fa-skype'></i>
                </a>
                <a href='page-profile.html#!' class='pink lighten-2 white-text waves-effect'>
                  <i class='fa fa-dribbble'></i>
                </a>
                <a href='page-profile.html#!' class='grey darken-3 white-text waves-effect'>
                  <i class='fa fa-github'></i>
                </a>
              </div>
              <!-- /Contact Buttons -->
            </td>
          </tr>
        </tbody>
         </table>
        </div>
        </div>
      </div>
      
    </div>
    <!-- /Breadcrumb -->
    
    <div class='row'>
      <div class='col s12 l9'>

      
        <!-- About -->
        <div class='card'>
          <div class='title'>
            <h5><i class='fa fa-user'></i> About</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
              <ul class='tabs'>
                <li class='tab col s3'><a class='active' href='#test0'>Stream</a></li>
                <li class='tab col s3'><a href='#test1'>Timeline</a></li>
                <li class='tab col s3'><a href='#test2'>Gallery</a></li>
             <!--<li class='tab col s3'><a href='#test3'>Analysis</a></li>-->
                <li class='tab col s3'><a href='#test4'>Planner</a></li>
                <li class='tab col s3'><a href='#test5'>Box</a></li>
                
              </ul>
              <div class='card profile-skills content' style='background-color: rgba(249, 249, 249, 0.42);'>
                
                
                <div id='test0' class='col s12'>
                     <div id='test0' class='col s12 l12'> 
                          <div class='card-panel'>
                               <form action='' accept-charset='UTF-8' id='form_update_post' method='post' role='form' >
                                     <!-- To -->
                                     <div class='input-field'>
                                          <input id='post_body' type='text' class='validate' value='' name='post_body'>
                                          <label for='post_body'>Share Your Art</label>
                                     </div>
                                     <button class='btn' type='submit' name='action'>
                                            Share <i class='mdi-content-send right'></i>
                                     </button>
                                     <!-- /To -->
                               </form>
                          </div>
                      </div>    
                          
                    
                          
                    <div id='test0' class='col s4 l4'>      
                          <div class='card'>
                               <div class='title'>
                                    <h5>Test</h5>
                                    <a class='close' href='#'>
	                               <i class='mdi-content-clear'></i>
                                    </a>
                                    <a class='minimize' href='#'>
                                       <i class='mdi-navigation-expand-less'></i> 
                                    </a>
                                </div>
                                <figure class='hover-effect effect-zoe minw-0p'>
                                <img src='assets/_con/images/image-2.jpeg' '>
<!--                            <span class='card-title' style='background'>Card Title</span> -->
                                <figcaption>
                                <h2>Creative <span>Zoe</span></h2>
                                    <p class='icon-links'>
                                       <a href='media-hover-effects.html#'><span class='fa fa-heart-o'></span></a>
                                       <a href='media-hover-effects.html#'><span class='fa fa-eye'></span></a>
                                       <a href='media-hover-effects.html#'><span class='fa fa-paperclip'></span></a>
                                    </p>
                                    <p class='description'>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                </figcaption>
                                </figure>
                                <div class='content'>
	                             I am a very simple card. I am good at containing small bits of information.
	                             I am convenient because I require little markup to use effectively.
	    
                                     <a href='#!'>This is a link</a>
                                 </div>
	                         <div class='card-action'>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-star-o'></i>
	                              </a>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-comment'></i></i> 
                                      </a>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-share'></i>
	                              </a>
                                  </div>
	                    </div>
                        </div>  
                        
                        <div id='test0' class='col s4 l4'>      
                          <div class='card'>
                               <div class='title'>
                                    <h5>Test</h5>
                                    <a class='close' href='#'>
	                               <i class='mdi-content-clear'></i>
                                    </a>
                                    <a class='minimize' href='#'>
                                       <i class='mdi-navigation-expand-less'></i> 
                                    </a>
                                </div>
                                <figure class='hover-effect effect-zoe minw-0p'>
                                <img src='assets/_con/images/image-2.jpeg'>
<!--                            <span class='card-title' style='background'>Card Title</span> -->
                                <figcaption>
                                <h2>Creative <span>Zoe</span></h2>
                                    <p class='icon-links'>
                                       <a href='media-hover-effects.html#'><span class='fa fa-heart-o'></span></a>
                                       <a href='media-hover-effects.html#'><span class='fa fa-eye'></span></a>
                                       <a href='media-hover-effects.html#'><span class='fa fa-paperclip'></span></a>
                                    </p>
                                    <p class='description'>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                </figcaption>
                                </figure>
                                <div class='content'>
	                             I am a very simple card. I am good at containing small bits of information.
	                             I am convenient because I require little markup to use effectively.
	    
                                     <a href='#!'>This is a link</a>
                                 </div>
	                         <div class='card-action'>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-star-o'></i>
	                              </a>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-comment'></i></i> 
                                      </a>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-share'></i>
	                              </a>
                                  </div>
	                    </div>
                        </div>  
                        
                        <div id='test0' class='col s4 l4'>      
                          <div class='card'>
                               <div class='title'>
                                    <h5>Test</h5>
                                    <a class='close' href='#'>
	                               <i class='mdi-content-clear'></i>
                                    </a>
                                    <a class='minimize' href='#'>
                                       <i class='mdi-navigation-expand-less'></i> 
                                    </a>
                                </div>
                                <figure class='hover-effect effect-zoe minw-0p'>
                                <img src='assets/_con/images/gallery-8.jpg' >
<!--                            <span class='card-title' style='background'>Card Title</span> -->
                                <figcaption>
                                <h2>Creative <span>Zoe</span></h2>
                                    <p class='icon-links'>
                                       <a href='media-hover-effects.html#'><span class='fa fa-heart-o'></span></a>
                                       <a href='media-hover-effects.html#'><span class='fa fa-eye'></span></a>
                                       <a href='media-hover-effects.html#'><span class='fa fa-paperclip'></span></a>
                                    </p>
                                    <p class='description'>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                </figcaption>
                                </figure>
                                <div class='content'>
	                             I am a very simple card. I am good at containing small bits of information.
	                             I am convenient because I require little markup to use effectively.
	    
                                     <a href='#!'>This is a link</a>
                                 </div>
	                         <div class='card-action'>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-star-o'></i>
	                              </a>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-comment'></i></i> 
                                      </a>
	                              <a class='' href='#' style='color:black'>
	                                 <i class='fa fa-share'></i>
	                              </a>
                                  </div>
	                    </div>
                        </div>  
                          
                </div>
                
                
                
                <div id='test1' class='col s12'>
                
                <!-- Timeline -->
                <div class='timeline'>

                      <!-- Timeline Notification -->
                      <div class='timeline-block'>
                            <!-- icon -->
                            <div class='timeline-icon red lighten-2 white-text'>
                            <i class='ion ion-chatbubbles'></i>
                            </div>
                           <!-- /icon -->

                           <!-- content -->
                           <div class='timeline-content card-panel'>
                                <h4>Notification</h4>
                                <p>We invite you to test-drive the new service <a href='page-timeline.html#!'>Lorem</a>. Confirm the invitation and we will send you notes and hints.</p>
                                <a href='page-timeline.html#!' class='btn waves-effect'>Confirm</a>
                                <a href='page-timeline.html#!' class='btn-flat waves-effect'>Cancel</a>
                                <span class='timeline-date'>20 minutes ago</span>
                           </div>
                           <!-- content -->
                      </div>
                      <!-- /Timeline Notification -->

                      <!-- Timeline New Order -->
                      <div class='timeline-block'>
                           <!-- icon -->
                           <div class='timeline-icon blue lighten-2 white-text'>
                                <i class='mdi mdi-action-shopping-cart'></i>
                           </div>
                           <!-- /icon -->

                           <!-- content -->
                           <div class='timeline-content card-panel'>
                                <h4>New Order <small class='right'>#0004324</small></h4>

                                <div class='row'>
                                     <div class='col s12 m5 l4'>
                                          <img width='100' src='assets/_con/images/user4.jpg' alt='Patsy Griffin' class='circle photo'>
                                     </div>
                                     <div class='col s12 m7 l8'>
                                          <h4>Patsy Griffin</h4>
                                          6008 Cotton Nook, Arminto,
                                          <br>Montana, 59114-7319, US,
                                          <br><i class='mdi-communication-phone'></i> (406) 500-7506
                                     </div>
                                </div>

                                <div class='row'>
                                     <div class='col s6'>
                                          <a href='ecommerce-order-single.html' class='btn waves-effect'>See</a>
                                     </div>
                                    <div class='col s6 right-align'>
                                         <h4>$2,100.00</h4>
                                    </div>
                                </div>

                                <span class='timeline-date'>4 hours ago</span>
                           </div>
                           <!-- /content -->
                      </div>
                      <!-- /Timeline New Order -->

                      <!-- Timeline Message -->
                      <div class='timeline-block'>
                           <!-- icon -->
                           <div class='timeline-icon blue lighten-2 white-text'>
                                <img src='assets/_con/images/user.jpg' alt='Joht Doe' title='John Doe'>
                           </div>
                           <!-- /icon -->

                           <!-- content -->
                           <div class='timeline-content card-panel'>
                                Received a <a href='http://html.nkdev.info/_con/main-inbox.html'>message</a> from <strong>Max Brooks</strong>
                                <span class='timeline-date'>Saturday, March 8, 2015</span>
                           </div>
                      <!-- /content -->
                      </div>
                      <!-- /Timeline Message -->

                      <!-- Timeline Video -->
                      <div class='timeline-block'>
                           <!-- icon -->
                           <div class='timeline-icon teal lighten-2 white-text'>
                                <i class='fa fa-youtube-play'></i>
                           </div>
                           <!-- /icon -->

                           <!-- content -->
                           <div class='timeline-content card-panel'>
                                <div class='responsive-embed responsive-embed-16x9'>
                                     <iframe width='560' height='315' src='https://www.youtube.com/embed/aJNEbmFeFgg' frameborder='0' allowfullscreen></iframe>
                                </div>
                                <h4>New Electro &amp; House</h4>
                                2015 Party Music Collab Mix
                                <span class='timeline-date'>Published on Jan 10, 2015</span>
                           </div>
                           <!-- /content -->
                       </div>
                       <!-- /Timeline Video -->

                       <!-- Timeline Map -->
                       <div class='timeline-block'>
                            <!-- icon -->
                            <div class='timeline-icon indigo lighten-2 white-text'>
                                 <i class='mdi mdi-maps-place'></i>
                            </div>
                            <!-- /icon -->

                            <!-- content -->
                            <div class='timeline-content card-panel'>
                                 <h4>My New Location</h4>

                                 <div class='map' id='map1' style='height: 300px;'></div>

                                      <span class='timeline-date'>Jan 24</span>
                                 </div>
                            <!-- /content -->
                       </div>
                       <!-- /Timeline Map -->

                       <!-- Timeline Images -->
                       <div class='timeline-block'>
                            <!-- icon -->
                            <div class='timeline-icon deep-orange lighten-2 white-text'>
                                 <i class='fa fa-send'></i>
                            </div>
                            <!-- /icon -->

                            <!-- content -->
                            <div class='timeline-content card-panel'>
                                 <h4>Clickable Images</h4>
                                 <div class='row'>
                                      <div class='col s12 l6'>
                                           <img class='materialboxed' width='100%' src='assets/_con/images/timeline-img-1.jpg' alt='Timeline Image'>
                                      </div>
                                      <div class='col s12 l6'>
                                           <img class='materialboxed' width='100%' src='assets/_con/images/timeline-img-2.jpg' alt='Timeline Image'>
                                      </div>
                                 </div>
                                 <span class='timeline-date'>Dec 26</span>
                            </div>
                            <!-- /content -->
                       </div>
                       <!-- /Timeline Images -->

                </div>
                <!-- /Timeline -->
                
                </div>
                <div id='test2' class='col s12'>
                
                
                     <div class='card-panel of-h'>
                          <div class='row photoswipe-gallery isotope mt-0'>
                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-1.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-1-med.jpg' data-med-size='1440x900' data-author='John Doe'>
                               <img src='assets/_con/images/gallery-1-small.jpg' alt='' />
                               <figure>Magna tollit mei te</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-2.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-2-med.jpg' data-med-size='1440x900' data-author='Felicia Castro'>
                               <img src='assets/_con/images/gallery-2-small.jpg' alt='' />
                               <figure>Ex graeco deserunt posidonium pri, mei oblique bonorum recusabo te. Id mea diceret constituto, numquam persequeris per te. Eam no veri verear quaerendum, eam graecis adolescens dissentiunt eu, summo quaeque corpora ex eam. Libris molestiae anvix.</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-7.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-7-med.jpg' data-med-size='1440x900' data-author='Max Brooks'>
                               <img src='assets/_con/images/gallery-7-small.jpg' alt='' />
                               <figure>Pri quem blandit intellegebat</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-4.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-4-med.jpg' data-med-size='1440x900' data-author='Patsy Griffin'>
                               <img src='assets/_con/images/gallery-4-small.jpg' alt='' />
                               <figure>Vim ut eirmod minimum placerat</figure>
                               </a>

                               <a class='col s12 l9 item' href='assets/_con/images/gallery-9.jpg' data-size='5184x1034' data-med='assets/_con/images/gallery-9-med.jpg' data-med-size='4512x900' data-author='Chloe Morgan'>
                               <img src='assets/_con/images/gallery-9-small.jpg' alt='' />
                               <figure>Te eos velit graece</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-5.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-5-med.jpg' data-med-size='1440x900' data-author='Vernon Garrett'>
                               <img src='assets/_con/images/gallery-5-small.jpg' alt='' />
                               <figure>His ullum fastidii ea</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-6.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-6-med.jpg' data-med-size='1440x900' data-author='Greg Mcdonalid'>
                               <img src='assets/_con/images/gallery-6-small.jpg' alt='' />
                               <figure>Te solum viris vix</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-8.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-8-med.jpg' data-med-size='1440x900' data-author='Christian Jackson'>
                               <img src='assets/_con/images/gallery-8-small.jpg' alt='' />
                               <figure>Simul voluptua salutandi in pri</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-10.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-10-med.jpg' data-med-size='1440x900' data-author='Willie Kelly'>
                               <img src='assets/_con/images/gallery-10-small.jpg' alt='' />
                               <figure>An mea inani essent</figure>
                               </a>

                               <a class='col s12 m6 l3 item' href='assets/_con/images/gallery-3.jpg' data-size='2880x1800' data-med='assets/_con/images/gallery-3-med.jpg' data-med-size='1440x900' data-author='Jenny Phillips'>
                               <img src='assets/_con/images/gallery-3-small.jpg' alt='' />
                               <figure>Nam nisl diam graeci ex</figure>
                               </a>
                      </div>
                   </div>

                
                </div>

                
                <div id='test4' class='col s12'>
                     <div class='row'>
                          <div class='col s12 l3'>
                            <!-- Events -->
                            <div class='card-panel' id='events-list'>
                               <h4>Events</h4>
                               <p class='switch'>
                               <label>
                               <input type='checkbox' name='remove-draggable' />
                               <span class='lever'></span>
                               Remove After Drop
                               </label>
                               </p>

                               <div class='fc-event red lighten-1'>
                                    Learn Meteor.js
                               </div>

                               <div class='fc-event teal lighten-1'>
                                    Help users
                               </div>

                               <div class='fc-event indigo lighten-1'>
                                    Develop a new product
                               </div>

                               <div class='fc-event orange lighten-1'>
                                    Go to the zoo
                               </div>

                               <div class='fc-event'>
                                    Update Con
                               </div>

                           </div>
                         <!-- /Events -->
                         </div>
      
                         <div class='col s12 l9'>
                           <!-- Calendar -->
                           <div class='card'>
                              <div id='calendar'></div>
                           </div>
                         <!-- /Calendar -->
                         </div>
                   </div>
                </div>
                
                
                <div id='test5' class='col s12'>
                     <div class='col s12 l12'>     
                          <div class='card'>
                          <br><br><br><br><br><br><br><br><br>
                          </div>
                     </div>
                </div>
                
                
              </div>  
        </div>
        <!-- /About -->

      </div>
      
      <div class='col s12 l3'>

        <!-- Statistics -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='fa fa-bar-chart'></i> Statistics</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <div class='row center-align' style='margin-top: 0'>
              <div class='col m6 s12'>
                <strong>87</strong>
                <h5>Following</h5>
              </div>
              <div class='col m6 s12'>
                <strong>12</strong>
                <h5>Followers</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- /Statistics -->

        <p></p>

        <!-- Tags -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='fa fa-trophy'></i> Tags</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <a href='page-profile.html#!' class='skill'>JavaScript</a>
            <a href='page-profile.html#!' class='skill'>CSS3</a>
            <a href='page-profile.html#!' class='skill'>HTML5</a>
            <a href='page-profile.html#!' class='skill'>jQuery</a>
            <a href='page-profile.html#!' class='skill'>AngularJS</a>
            <a href='page-profile.html#!' class='skill'>Bootstrap</a>
            <a href='page-profile.html#!' class='skill'>PHP</a>
            <a href='page-profile.html#!' class='skill'>MySQL</a>
          </div>
        </div>
        <!-- /Tags -->
        
         <!-- Troops -->
        <div class='card profile-skills'>
          <div class='title'>
            <h5><i class='mdi-social-people'></i> Members</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <div class='row ' style='margin-top: 0'>
            
              <div class='col m12 s12'>
                <strong><h5>FaadFactory<span class='badge'>1</span></h5></strong>
                <!-- &nbsp;&nbsp;&nbsp;13 -->
              </div>
              
              <div class='col m12 s12'>
                <strong><h5>Tesico<span class='new badge'>4</span></h5></strong>
                <!-- &nbsp;&nbsp;&nbsp;27 -->
              </div>

            </div>
          </div>
        </div>
        <!-- /Troops -->

        <p></p>

        <!-- Send Message -->
        <div class='card'>
          <div class='title'>
            <h5><i class='fa fa-user'></i> Send Message</h5>
            <a class='close' href='page-profile.html#'>
              <i class='mdi-content-clear'></i>
            </a>
            <a class='minimize' href='page-profile.html#'>
              <i class='mdi-navigation-expand-less'></i>
            </a>
          </div>
          <div class='content'>
            <form action='page-profile.html#!'>
              <div class='input-field'>
                <textarea id='textarea1' class='materialize-textarea' name='message'></textarea>
                <label for='textarea1'>Send me message</label>
              </div>
              <button class='btn'>Send</button>
            </form>
          </div>
        </div>
        <!-- /Send Message -->

      </div>
    </div>

  </section>
  <!-- /Main Content -->

  <!-- Search Bar -->
  <div class='search-bar'>
    <div class='layer-overlay'></div>
    <div class='layer-content'>
      <form action='page-profile.html#!'>
        <!-- Header -->
        <a class='search-bar-toggle grey-text text-darken-2' href='page-profile.html#!'><i class='mdi-navigation-close'></i></a>

        <!-- Search Input -->
        <div class='input-field'>
          <i class='mdi-action-search prefix'></i>
          <input type='text' name='con-search' placeholder='Search...'>
        </div>

        <!-- Search Results -->
        <div class='search-results'>

          <div class='row'>
            <div class='col s12 l4'>
              <h4>Users</h4>

              <div class='each-result'>
                <img src='assets/_con/images/user2.jpg' alt='Felecia Castro' class='circle photo'>
                <div class='title'>Felecia Castro</div>
                <div class='label'>Content Manager</div>
              </div>

              <div class='each-result'>
                <img src='assets/_con/images/user3.jpg' alt='Max Brooks' class='circle photo'>
                <div class='title'>Max Brooks</div>
                <div class='label'>Programmer</div>
              </div>

              <div class='each-result'>
                <img src='assets/_con/images/user4.jpg' alt='Patsy Griffin' class='circle photo'>
                <div class='title'>Patsy Griffin</div>
                <div class='label'>Support</div>
              </div>

              <div class='each-result'>
                <img src='assets/_con/images/user6.jpg' alt='Vernon Garrett' class='circle photo'>
                <div class='title'>Vernon Garrett</div>
                <div class='label'>Photographer</div>
              </div>
            </div>
            <div class='col s12 l4'>
              <h4>Articles</h4>

              <div class='each-result'>
                <div class='icon circle blue white-text'>MD</div>
                <div class='title'>Material Design</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class='each-result'>
                <div class='icon circle teal white-text'>
                  <i class='fa fa-dashboard'></i>
                </div>
                <div class='title'>Admin Dashboard</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class='each-result'>
                <div class='icon circle orange white-text'>RD</div>
                <div class='title'>Responsive Design</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class='each-result'>
                <div class='icon circle red white-text'>
                  <i class='fa fa-tablet'></i>
                </div>
                <div class='title'>Mobile First</div>
                <div class='label nowrap'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>
            </div>
            <div class='col s12 l4'>
              <h4>Posts</h4>

              <div class='no-result'>No results were found ;(</div>
            </div>
          </div>

        </div>

      </form>
    </div>
  </div>
  <!-- /Search Bar -->



  <!--
  Chat
    .chat-light - light color scheme
-->
  <div class='chat'>
    <div class='layer-overlay'></div>

    <div class='layer-content'>

      <!-- Contacts -->
      <div class='contacts'>
        <!-- Top Bar -->
        <div class='topbar'>
          <a href='page-profile.html#!' class='text'>Chat</a>
          <a href='page-profile.html#!' class='chat-toggle'><i class='mdi-navigation-close'></i></a>
        </div>
        <!-- /Top Bar -->

        <div class='nano'>
          <div class='nano-content'>

            <span class='label'>Online</span>

            <div class='user'>
              <img src='assets/_con/images/user2.jpg' alt='Felecia Castro' class='circle photo'>

              <div class='name'>Felecia Castro</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user3.jpg' alt='Max Brooks' class='circle photo'>

              <div class='name'>Max Brooks</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user4.jpg' alt='Patsy Griffin' class='circle photo'>

              <div class='name'>Patsy Griffin</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user5.jpg' alt='Chloe Morgan' class='circle photo'>

              <div class='name'>Chloe Morgan</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='green-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user6.jpg' alt='Vernon Garrett' class='circle photo'>

              <div class='name'>Vernon Garrett</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='yellow-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user7.jpg' alt='Greg Mcdonalid' class='circle photo'>

              <div class='name'>Greg Mcdonalid</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='yellow-text fa fa-circle'></i>
              </div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user8.jpg' alt='Christian Jackson' class='circle photo'>

              <div class='name'>Christian Jackson</div>
              <div class='status'>Lorem status</div>

              <div class='online'><i class='yellow-text fa fa-circle'></i>
              </div>
            </div>


            <span class='label'>Offline</span>

            <div class='user'>
              <img src='assets/_con/images/user9.jpg' alt='Willie Kelly' class='circle photo'>

              <div class='name'>Willie Kelly</div>
              <div class='status'>Lorem status</div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user10.jpg' alt='Jenny Phillips' class='circle photo'>

              <div class='name'>Jenny Phillips</div>
              <div class='status'>Lorem status</div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user11.jpg' alt='Darren Cunningham' class='circle photo'>

              <div class='name'>Darren Cunningham</div>
              <div class='status'>Lorem status</div>
            </div>

            <div class='user'>
              <img src='assets/_con/images/user12.jpg' alt='Sandra Cole' class='circle photo'>

              <div class='name'>Sandra Cole</div>
              <div class='status'>Lorem status</div>
            </div>

          </div>
        </div>
      </div>
      <!-- /Contacts -->

      <!-- Messages -->
      <div class='messages'>

        <!-- Top Bar with back link -->
        <div class='topbar'>
          <a href='page-profile.html#!' class='chat-toggle'><i class='mdi-navigation-close'></i></a>
          <a href='page-profile.html#!' class='chat-back'><i class='mdi-hardware-keyboard-arrow-left'></i> Back</a>
        </div>
        <!-- /Top Bar with back link -->

        <!-- All messages list -->
        <div class='list'>
          <div class='nano scroll-bottom'>
            <div class='nano-content'>

              <div class='date'>Monday, Feb 23, 8:23 pm</div>

              <div class='from-me'>
                Hi, Felicia.
                <br>How are you?
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>Hi! I am good!
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                Glad to see you :)
                <br>This long text is intended to show how the chat will display it.
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>Also, we will send the longest word to show how it will fit in the chat window: <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong>
              </div>

              <div class='date'>Friday, Mar 10, 5:07 pm</div>

              <div class='from-me'>
                Hi again!
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>Hi! Glad to see you.
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                I want to add you in my Facebook.
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                Can you give me your page?
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>I do not use Facebook. But you can follow me in Twitter.
              </div>

              <div class='clear'></div>

              <div class='from-me'>
                It's good idea!
              </div>

              <div class='clear'></div>

              <div class='from-them'>
                <img src='assets/_con/images/user2.jpg' alt='John Doe' class='circle photo'>You can find me here - <a href='https://twitter.com/nkdevv'>https://twitter.com/nkdevv</a>
              </div>

            </div>
          </div>
        </div>
        <!-- /All messages list -->

        <!-- Send message -->
        <div class='send'>
          <form action='page-profile.html#!'>
            <div class='input-field'>
              <input id='chat-message' type='text' name='chat-message'>
            </div>

            <button class='btn waves-effect z-depth-0'><i class='mdi-content-send'></i>
            </button>
          </form>
        </div>
        <!-- /Send message -->

      </div>
      <!-- /Messages -->
    </div>

  </div>
  <!-- /Chat -->



  <footer>&copy; 2015 <strong>Artistarc</strong>. All rights reserved. <a href='http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=_nK'></a>
  </footer>
  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type='text/javascript' src='assets/_con/js/_demo.js'></script>

  <!-- jQuery -->
  <script type='text/javascript' src='assets/jquery/jquery.min.js'></script>


  <!-- d3 -->
  <script type='text/javascript' src='assets/d3/d3.min.js'></script>

  <!-- nvd3 -->
  <script type='text/javascript' src='assets/nvd3/nv.d3.min.js'></script>

  <!-- Rickshaw -->
  <script type='text/javascript' src='assets/rickshaw/rickshaw.min.js'></script>
  
  <!-- Main js -->
  <script type='text/javascript' src='assets/php/main.js'></script>
  
  <!-- jQuery RAF (improved animation performance) -->
  <script type='text/javascript' src='assets/jqueryRAF/jquery.requestAnimationFrame.min.js'></script>

  <!-- nanoScroller -->
  <script type='text/javascript' src='assets/nanoScroller/jquery.nanoscroller.min.js'></script>

  <!-- Materialize -->
  <script type='text/javascript' src='assets/materialize/js/materialize.min.js'></script>

  
  <!-- PhotoSwipe -->
  <script type='text/javascript' src='assets/PhotoSwipe/photoswipe.min.js'></script>
  <script type='text/javascript' src='assets/PhotoSwipe/photoswipe-ui-default.min.js'></script>

  <!-- Sortable -->
  <script type='text/javascript' src='assets/sortable/Sortable.min.js'></script>

  <!-- Main -->
  <script type='text/javascript' src='assets/_con/js/_con.min.js'></script>

  <!-- Full Calendar -->
  <script type='text/javascript' src='assets/fullcalendar/moment.min.js'></script>
  <script type='text/javascript' src='assets/fullcalendar/jquery-ui.custom.min.js'></script>
  <script type='text/javascript' src='assets/fullcalendar/fullcalendar.min.js'></script>

  
  <!-- Google Maps API -->
  <script src='http://maps.google.com/maps/api/js?sensor=true'></script>

  <!-- GMaps -->
  <script type='text/javascript' src='assets/gmaps/gmaps.min.js'></script>

  <!-- Google Prettify -->
  <script type='text/javascript' src='assets/google-code-prettify/prettify.js'></script>
  
    <script>
    
    (function($) {
      'use strict';
   
      // init map
      var map = new GMaps({
        div: '#map1',
        lat: 40.645244,
        lng: -73.9449975,
        zoom: 10,
        hideInfoWindows: true
      });
  
      // add Brooklyn marker
      map.addMarker({
        lat: 40.645244,
        lng: -73.9449975,
        title: 'Brooklyn',
        infoWindow: {
          content: '<b>Brooklyn</b> - my new home :)'
        }
      });
    }(jQuery));
  </script>
  
  <script>
    var removeDraggable = $('#events-list [name=remove-draggable]');
    $('#events-list .fc-event').each(function() {
      // store data so the calendar knows to render an event upon drop
      $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
        stick: true, // maintain when user navigates (see docs on the renderEvent method)
        className: this.className
      });
  
      $(this).draggable({
        zIndex: 999,
        revert: true, // will cause the event to go back to its
        revertDuration: 0 //  original position after the drag
      });
    });
  
    $('#calendar').fullCalendar({
      height: 700,
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2015-02-12',//new Date()
      editable: true,
      droppable: true,
      drop: function() {
        // is the 'remove after drop' checkbox checked?
        if (removeDraggable.is(':checked')) {
          // if so, remove the element from the 'Draggable Events' list
          $(this).remove();
        }
      },
      events: [
        {
          title: 'All Day Event',
          start: '2015-02-01'
        },
        {
          title: 'Long Event',
          start: '2015-02-07',
          end: '2015-02-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2015-02-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2015-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2015-02-11',
          end: '2015-02-13'
        },
        {
          title: 'Meeting',
          start: '2015-02-12T10:30:00',
          end: '2015-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2015-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2015-02-12T14:30:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2015-02-28'
        }
      ]
    });
  </script>
  <script>
  
  (function() {
      //Donut chart example
      nv.addGraph(function() {
        var chart = nv.models.pieChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .showLabels(true)     //Display pie labels
            .labelThreshold(.05)  //Configure the minimum slice size for labels to show up
            .labelType('percent') //Configure what type of data to show in the label. Can be 'key', 'value' or 'percent'
            .donut(true)          //Turn on Donut mode. Makes pie chart look tasty!
            .donutRatio(0.35)     //Configure how big you want the donut hole size to be.
            ;
    
          d3.select('#chart4').append('svg')
              .datum(exampleData())
              .transition().duration(350)
              .call(chart);
    
        return chart;
      });
    
      //Pie chart example data. Note how there is only a single array of key-value pairs.
      function exampleData() {
        return  [
            { 
              'label': 'One',
              'value' : 29.765957771107
            } , 
            { 
              'label': 'Two',
              'value' : 0
            } , 
            { 
              'label': 'Three',
              'value' : 32.807804682612
            } , 
            { 
              'label': 'Four',
              'value' : 196.45946739256
            } , 
            { 
              'label': 'Five',
              'value' : 0.19434030906893
            } , 
            { 
              'label': 'Six',
              'value' : 98.079782601442
            } , 
            { 
              'label': 'Seven',
              'value' : 13.925743130903
            } 
          ];
      }
    }());
  
  </script>
  <script>
    var rickshawLine1 = [ { x: 0, y: 43 }, { x: 1, y: 42 }, { x: 2, y: 32 }, { x: 3, y: 12 }, { x: 4, y: 46 }, { x: 5, y: 67 }, { x: 6, y: 34 }, { x: 7, y: 25 }, { x: 8, y: 32 }, { x: 9, y: 14 }, { x: 10, y: 2 }, { x: 11, y: 25 }, { x: 12, y: 48 } ];
    var rickshawLine2 = [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 24 }, { x: 3, y: 32 }, { x: 4, y: 67 }, { x: 5, y: 53 }, { x: 6, y: 42 }, { x: 7, y: 32 }, { x: 8, y: 12 }, { x: 9, y: 35 }, { x: 10, y: 87 }, { x: 11, y: 56 }, { x: 12, y: 36 } ];
    var rickshawLine3 = [ { x: 0, y: 30 }, { x: 1, y: 29 }, { x: 2, y: 12 }, { x: 3, y: 5 }, { x: 4, y: 38 }, { x: 5, y: 57 }, { x: 6, y: 21 }, { x: 7, y: 16 }, { x: 8, y: 29 }, { x: 9, y: 10 }, { x: 10, y: 0 }, { x: 11, y: 20 }, { x: 12, y: 37 } ];
    
    // Line
    (function() {
      var element = $('#rickshawLine');
      var graph = new Rickshaw.Graph( {
        element: element[0],
        renderer: 'line',
        stroke: true,
        series: [ {
          data: rickshawLine1,
          color: '#673ab7',
          name: 'Visits'
        }, {    
          data: rickshawLine3,
          color: '#2196f3',
          name: 'Posts'
        }]
      } );
      graph.render();
    
      var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        xFormatter: function(x) { return x + ' Jan 2015' },
        yFormatter: function(y) { return Math.floor(y) }
      });
    
      // responsive
      $(window).on('resize', function() {
        graph.configure({
          width: element.width()
        });
        graph.render();
      });
    }());
    
  </script>
</body>

</html>

     ";

?>