<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

      <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ url('/index') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icon-nav" data-bs-toggle="collapse" href="{{ route('logout') }}">
      <i class="bi bi-journal-text"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icon-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/crud') }}">
          <i class="bi bi-circle"></i><span>Icon</span>
        </a>
      </li>
    </ul>
  </li>   
                <!-- End Header Nav -->

                 <!-- Start Contact Nav -->
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-lines-fill"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="contact-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="contact.php">
          <i class="bi bi-circle"></i><span>Add contact</span>
        </a>
      </li>
    </ul>
  </li>      --}}
                    <!-- End Contact Nav -->

                    <!-- Start Blog Nav -->
    {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-substack"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="blog-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="blog.php">
          <i class="bi bi-circle"></i><span>Add Blog</span>
        </a>
      </li>
    </ul>
  </li>      --}}
                    <!-- End Blog Nav -->

                    <!-- Start Review Nav -->
    {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#review-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-star-fill"></i><span>Review</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="review-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="review.php">
          <i class="bi bi-circle"></i><span>Add Review</span>
        </a>
      </li>
    </ul>
  </li>      --}}
                     <!-- End Review Nav -->

                        <!-- Start Chefs Nav -->
    {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#Chefs-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-standing"></i><span>Chefs</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="Chefs-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="Chefs.php">
          <i class="bi bi-circle"></i><span>Add Chefs</span>
        </a>
      </li>
    </ul>
  </li>      --}}
                     <!-- End Chefs Nav -->

                      <!-- Start Booking Nav -->
    {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#booking-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-table"></i><span>Table Booking</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="booking-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="booking.php">
          <i class="bi bi-circle"></i><span>Booking</span>
        </a>
      </li>
    </ul>
  </li>      --}}
                     <!-- End Booking Nav -->

  <!-- home -->

  {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-house-check-fill"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="home.php">
          <i class="bi bi-circle"></i><span>Add Home</span>
        </a>
      </li>
    </ul>
  </li> --}}
  
  <!-- End home-->

  <!-- service -->
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#Service-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-life-preserver"></i><span>Service</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="Service-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="service.php">
          <i class="bi bi-circle"></i><span>Add Service</span>
          
        </a>
      </li>
    </ul>
  </li> --}}
  <!-- service -end -->

     <!-- menu start -->
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-sliders"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="menu-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="menu.php">
          <i class="bi bi-circle"></i><span>Add menu</span>
        </a>
        <a href="menu2.php">
          <i class="bi bi-circle"></i><span>Menu</span>
        </a>
      </li>
    </ul>
  </li> --}}
  <!-- service -end -->
<!-- about as -->
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-file-earmark-person-fill"></i><span>About Us</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="about-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="about.php">
          <i class="bi bi-circle"></i><span>About</span>
          
        </a>
      </li>
    </ul>
  </li> --}}
  <!-- about as end -->


  {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/components-alerts') }}">
          <i class="bi bi-circle"></i><span>Alerts</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-accordion') }}">
          <i class="bi bi-circle"></i><span>Accordion</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-badges') }}">
          <i class="bi bi-circle"></i><span>Badges</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-breadcrumbs') }}">
          <i class="bi bi-circle"></i><span>Breadcrumbs</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-buttons') }}">
          <i class="bi bi-circle"></i><span>Buttons</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-cards') }}">
          <i class="bi bi-circle"></i><span>Cards</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-carousel') }}">
          <i class="bi bi-circle"></i><span>Carousel</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-list-group') }}">
          <i class="bi bi-circle"></i><span>List group</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-modal') }}">
          <i class="bi bi-circle"></i><span>Modal</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-tabs') }}">
          <i class="bi bi-circle"></i><span>Tabs</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-pagination') }}">
          <i class="bi bi-circle"></i><span>Pagination</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-progress') }}">
          <i class="bi bi-circle"></i><span>Progress</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-spinners') }}">
          <i class="bi bi-circle"></i><span>Spinners</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-tooltips') }}">
          <i class="bi bi-circle"></i><span>Tooltips</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/components-pagination') }}">
          <i class="bi bi-circle"></i><span>Form Elements</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/forms-layouts') }}">
          <i class="bi bi-circle"></i><span>Form Layouts</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-pagination') }}">
          <i class="bi bi-circle"></i><span>Form Editors</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/forms-validation') }}">
          <i class="bi bi-circle"></i><span>Form Validation</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/tables-general') }}">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/tables-data') }}">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.php">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
      <li>
        <a href="charts-apexcharts.php">
          <i class="bi bi-circle"></i><span>ApexCharts</span>
        </a>
      </li>
      <li>
        <a href="charts-echarts.php">
          <i class="bi bi-circle"></i><span>ECharts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/icons-bootstrap') }}">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/icons-boxicons') }}">
          <i class="bi bi-circle"></i><span>Remix Icons</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/icons-remix') }}">
          <i class="bi bi-circle"></i><span>Boxicons</span>
        </a>
      </li>
    </ul>
  </li><!-- End Icons Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/users-profile') }}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-faq') }}">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-contact') }}">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-register') }}">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-login') }}">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-error-404') }}">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li><!-- End Error 404 Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-blank.php">
      <i class="bi bi-file-earmark"></i>
      <span>Blank</span>
    </a>
  </li><!-- End Blank Page Nav -->

</ul> --}}

</aside><!-- End Sidebar-->
    
</body>
</html>
</div>
