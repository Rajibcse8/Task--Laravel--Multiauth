<div class="nk-wrap ">


    <!-- main header @s -->
    <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ml-n1">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-header-brand d-xl-none">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                    </a>
                </div><!-- .nk-header-brand -->
                <div class="nk-header-search ml-3 ml-xl-0">
                    <em class="icon ni ni-search"></em>
                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                </div><!-- .nk-header-news -->
                
                <div class="nk-header-tools">
                    <ul class="nk-quick-nav">
                     

                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                <div class="user-toggle">
                                    <div class="user-avatar sm">
                                        <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info d-none d-xl-block">
                                        
                                        <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                           
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{ Auth::user()->name }}</span>
                                            <span class="sub-text">{{ Auth::user()->email }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
          
                                        <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="{{ route('logout') }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-header-wrap -->
        </div><!-- .container-fliud -->
    </div>