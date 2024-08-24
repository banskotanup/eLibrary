  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                        <img src="/assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li><a href="{{url('explore')}}">Explore</a></li>
                        <li><a href="{{url('book_dtl')}}">Item Details</a></li>
                        @if (Route::has('login'))
                        @auth
                          <li>
                            <a href="{{url('book_history')}}">My History</a>
                          </li>
                        @endauth
                            
                        @endif
                        
                  

                        @if (Route::has('login'))
                            @auth
                            <div style="margin-top: 8px;">
                              <div class="dropdown bottom-right open">
                                <a href="#dropDown" aria-expanded="false" data-toggle="collapse">
                                    <img
                                      src="/admin/img/avatar-7.jpg"
                                      class="rounded-circle"
                                      height="25"
                                      alt="Black and White Portrait of a Man"
                                      loading="lazy"
                                    />
                                  </a>
                                  <ul
                                    id="dropDown"
                                    class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="navbarDropdownMenuAvatar"
                                     style="background-color: #1d2129;left:auto!important; right:0!important;"
                                  >
                                    <li>
                                      <a class="dropdown-item" href="/user/profile">My profile</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="{{url('log_out')}}">Logout</a>
                                    </li>
                                  </ul>
                              </div>
                            </div>                                
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endauth
                        @endif
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header> 
  <!-- ***** Header Area End ***** -->
