<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />
      <title>@yield('page_title')</title>

      <!-- ========== All CSS files linkup ========= -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
   </head>

   <body>
      <!-- ======== sidebar-nav start =========== -->
      <aside class="sidebar-nav-wrapper mCustomScrollbar" data-mcs-theme="dark">
         <div class="navbar-logo">
            <a href="index.html">
               <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" />
            </a>
         </div>
         <nav class="sidebar-nav">
            <ul>
               <li class="nav-item active">
                  <a href="#0">
                     <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22">
                           <path
                              d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                        </svg>
                     </span>
                     <span class="text">Dashboard</span>
                  </a>
               </li>
               <li class="nav-item nav-item-has-children">
                  <a href="#0" class="" data-bs-toggle="collapse" data-bs-target="#ddmenu_55" aria-controls="ddmenu_55"
                     aria-expanded="true" aria-label="Toggle navigation">
                     <span class="icon">
                        <i class="lni lni-users"></i>
                     </span>
                     <span class="text">User Management</span>
                  </a>
                  <ul id="ddmenu_55" class="dropdown-nav collapse show" style="">
                     <li>
                        <a href="{{ route('director.user.index') }}"> All Users </a>
                     </li>
                     <li>
                        <a href="{{ route('director.user.create') }}"> Add New User </a>
                     </li>
                     <li>
                        <a href="#"> Roles </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </nav>
      </aside>
      <div class="overlay"></div>
      <!-- ======== sidebar-nav end =========== -->

      <!-- ======== main-wrapper start =========== -->
      <main class="main-wrapper">
         <!-- ========== header start ========== -->
         <header class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-5 col-md-5 col-6">
                     <div class="header-left d-flex align-items-center">
                        <div class="menu-toggle-btn mr-20">
                           <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                              <i class="lni lni-chevron-left me-2"></i> Menu
                           </button>
                        </div>
                        <div class="header-search d-none d-md-flex">
                           <form action="#">
                              <input type="text" placeholder="Search..." />
                              <button><i class="lni lni-search-alt"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-6">
                     <div class="header-right">
                        <!-- notification start -->
                        <div class="notification-box ml-15 d-none d-md-flex">
                           <button class="dropdown-toggle" type="button" id="notification" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class="lni lni-alarm"></i>
                              <span>2</span>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{ asset('assets/images/lead/lead-6.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>
                                          John Doe
                                          <span class="text-regular">
                                             comment on a product.
                                          </span>
                                       </h6>
                                       <p>
                                          Lorem ipsum dolor sit amet, consect etur adipiscing
                                          elit Vivamus tortor.
                                       </p>
                                       <span>10 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{ asset('assets/images/lead/lead-1.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>
                                          Jonathon
                                          <span class="text-regular">
                                             like on a product.
                                          </span>
                                       </h6>
                                       <p>
                                          Lorem ipsum dolor sit amet, consect etur adipiscing
                                          elit Vivamus tortor.
                                       </p>
                                       <span>10 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <!-- notification end -->
                        <!-- message start -->
                        <div class="header-message-box ml-15 d-none d-md-flex">
                           <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class="lni lni-envelope"></i>
                              <span>3</span>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{asset('assets/images/lead/lead-5.png')}}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>Jacob Jones</h6>
                                       <p>Hey!I can across your profile and ...</p>
                                       <span>10 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{asset('assets/images/lead/lead-3.png')}}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>John Doe</h6>
                                       <p>Would you mind please checking out</p>
                                       <span>12 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{asset('assets/images/lead/lead-2.png')}}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>Anee Lee</h6>
                                       <p>Hey! are you available for freelance?</p>
                                       <span>1h ago</span>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <!-- message end -->
                        <!-- filter start -->
                        <div class="filter-box ml-15 d-none d-md-flex">
                           <button class="" type="button" id="filter">
                              <i class="lni lni-funnel"></i>
                           </button>
                        </div>
                        <!-- filter end -->
                        <!-- profile start -->
                        <div class="profile-box ml-15">
                           <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <div class="profile-info">
                                 <div class="info">
                                    <h6>{{ Auth::guard('director')->user()->name }}</h6>
                                    <div class="image">
                                       <img src="{{asset('assets/images/profile/defaultUser.png')}}" alt="" />
                                       <span class="status"></span>
                                    </div>
                                 </div>
                              </div>
                              <i class="lni lni-chevron-down"></i>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                              <li>
                                 <a href="#0">
                                    <i class="lni lni-user"></i> View Profile
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <i class="lni lni-alarm"></i> Notifications
                                 </a>
                              </li>
                              <li>
                                 <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                              </li>
                              <li>
                                 <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                              </li>
                              <li>
                                 <a href="{{ route('director.logout') }}"> <i class="lni lni-exit"></i> Sign Out </a>
                              </li>
                           </ul>
                        </div>
                        <!-- profile end -->
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- ========== header end ========== -->

         <!-- ========== section start ========== -->
         <section class="section">
            <div class="container">
               <!-- ========== title-wrapper start ========== -->
               <div class="title-wrapper">
                  <div class="row align-items-center py-2">
                     <div class="col-md-6">
                        <div class="titlemb-30">
                           <h3>@yield('page_heading')</h2>
                        </div>
                     </div>
                     <!-- end col -->
                     <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item">
                                    <a href="#0">Dashboard</a>
                                 </li>
                                 <li class="breadcrumb-item active" aria-current="page">
                                    Page
                                 </li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                     <!-- end col -->
                  </div>
                  <!-- end row -->
               </div>
               <!-- ========== title-wrapper end ========== -->

               <div class="main_content">
                  @yield('main_content')
               </div>
            </div>
            <!-- end container -->
         </section>
         <!-- ========== section end ========== -->

         <!-- ========== footer start =========== -->
         <footer class="footer">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 order-last order-md-first">
                     <div class="copyright text-center text-md-start">
                        <p class="text-sm">
                           Designed and Developed by
                           <a href="https://zemicolon.com" rel="nofollow" target="_blank">
                              ZDA
                           </a>
                        </p>
                     </div>
                  </div>
                  <!-- end col-->
                  <div class="col-md-6">
                     <div class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                ">
                        <a href="#0" class="text-sm">Term & Conditions</a>
                        <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                     </div>
                  </div>
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </footer>
         <!-- ========== footer end =========== -->
      </main>
      <!-- ======== main-wrapper end =========== -->

      <!-- ========= All Javascript files linkup ======== -->
      <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
      <script src="{{ asset('assets/js/moment.min.js') }}"></script>
      <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
      <script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
      <script src="{{ asset('assets/js/world-merc.js') }}"></script>
      <script src="{{ asset('assets/js/polyfill.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script>
         (function ($) {
        $(window).on("load", function () {
          $(".content").mCustomScrollbar();
        });
      })(jQuery);
      </script>
   </body>

</html>
