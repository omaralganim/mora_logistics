<div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                <div class="topbar-main">
                    <div class="container-fluid">

                        <!-- Logo-->
                        <div>
                            
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="" height="26"> 
                            </a>

                        </div>
                        <!-- End Logo-->

                        <div class="menu-extras topbar-custom navbar p-0">

                            <ul class="list-inline d-none d-lg-block mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        Create New <i class="mdi mdi-plus"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                                <li class="list-inline-item notification-list">
                                    <a href="#" class="nav-link waves-effect">
                                        Activity
                                    </a>
                                </li>
    
                            </ul>

                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline ml-auto mb-0">
                                
                                <!-- notification-->

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-pill noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <div class="slimscroll-noti">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                                <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                        </div>
                                        

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="{{route('aboutus.index')}}"><i class="mdi mdi-account-supervisor-circle"></i> About Us</a>
                                        <a class="dropdown-item" href="{{route('policy.index')}}"><i class="mdi mdi-clipboard-text-outline"></i> Policy</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                                <li class="menu-item list-inline-item">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>

                        </div>
                        <!-- end menu-extras -->

                        <div class="clearfix"></div>

                    </div> <!-- end container -->
                </div>
                <!-- end topbar-main -->

                <!-- MENU Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        
                        <div id="navigation">

                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="{{url('/')}}"><i class="dripicons-home"></i> Dashboard</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-home"></i> Services</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-suitcase"></i> User Interface <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="ui-alerts.html">Alerts</a></li>
                                                <li><a href="ui-badge.html">Badge</a></li>
                                                <li><a href="ui-buttons.html">Buttons</a></li>
                                                <li><a href="ui-cards.html">Cards</a></li>
                                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                                <li><a href="ui-navs.html">Navs</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                                <li><a href="ui-modals.html">Modals</a></li>
                                                <li><a href="ui-images.html">Images</a></li>
                                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                                <li><a href="ui-pagination.html">Pagination</a></li>
                                                <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-spinner.html">Spinner</a></li>
                                                <li><a href="ui-carousel.html">Carousel</a></li>
                                                <li><a href="ui-video.html">Video</a></li>
                                                <li><a href="ui-typography.html">Typography</a></li>
                                                <li><a href="ui-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-help"></i> Components <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Icons</a>
                                            <ul class="submenu">
                                                <li><a href="icons-material.html">Material Design</a></li>
                                                <li><a href="icons-ion.html">Ion Icons</a></li>
                                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                                <li><a href="icons-themify.html">Themify Icons</a></li>
                                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                                <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Charts </a>
                                            <ul class="submenu">
                                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                                <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                                <li><a href="charts-c3.html">C3 Chart</a></li>
                                                <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Forms</a>
                                            <ul class="submenu">
                                                <li><a href="form-elements.html">Form Elements</a></li>
                                                <li><a href="form-validation.html">Form Validation</a></li>
                                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                                <li><a href="form-editors.html">Form Editors</a></li>
                                                <li><a href="form-uploads.html">Form File Upload</a></li>
                                                <li><a href="form-mask.html">Form Mask</a></li>
                                                <li><a href="form-summernote.html">Summernote</a></li>
                                                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Tables </a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                                <li><a href="tables-datatable.html">Data Table</a></li>
                                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                                <li><a href="tables-editable.html">Editable Table</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Maps</a>
                                            <ul class="submenu">
                                                <li><a href="maps-google.html"> Google Map</a></li>
                                                <li><a href="maps-vector.html"> Vector Map</a></li>
                                            </ul>
                                        </li>
    
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-archive"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="advanced-alertify.html">Alertify</a></li>
                                        <li><a href="advanced-rating.html">Rating</a></li>
                                        <li><a href="advanced-nestable.html">Nestable</a></li>
                                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                        <li><a href="advanced-sweet-alert.html">Sweet-Alert 2</a></li>
                                        <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-duplicate"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="pages-pricing.html">Pricing</a></li>
                                                <li><a href="pages-invoice.html">Invoice</a></li>
                                                <li><a href="pages-timeline.html">Timeline</a></li>
                                                <li><a href="pages-faqs.html">FAQs</a></li>
                                                <li><a href="pages-blank.html">Blank Page</a></li>
                                                <li><a href="pages-login.html">Login</a></li>
                                                <li><a href="pages-register.html">Register</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                                <li><a href="pages-404.html">Error 404</a></li>
                                                <li><a href="pages-500.html">Error 500</a></li>
                                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                                <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end container -->
                </div> <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

        </div>