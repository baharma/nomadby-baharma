  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">

              <span class="d-none d-lg-block">Form Admin</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->
      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
              <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      <i class="fa-solid fa-bars-staggered"></i>

                      <span class="m-1">
                          {{Auth::user()->username}}
                      </span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li class="dropdown-header">
                          <h6>
                              {{ Auth::user()->name}}</h6>
                          <span>{{Auth::user()->roles}}</span>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>


                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                              <i class="bi bi-question-circle"></i>
                              <span>Need Help?</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li>
                          <form action="{{url('logout')}}" method="POST">
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  @csrf
                                  <i class="bi bi-box-arrow-right"></i>

                                  <button type="submit" style="border: none; background: none">logout</button>

                              </a>
                          </form>
                      </li>
                  </ul><!-- End Profile Dropdown Items -->
              </li><!-- End Profile Nav -->
          </ul>
      </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->