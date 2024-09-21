<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-1">
            <div class="logo-box">
                <a href="index.html" class="logo-light">
                    <img src="{{ asset("panel/assets/images/logo-light.png") }}" alt="logo" class="logo-lg">
                    <img src="{{ asset("panel/assets/images/logo-sm.png") }}" alt="small logo" class="logo-sm">
                </a>

                <a href="index.html" class="logo-dark">
                    <img src="{{ asset("panel/assets/images/logo-dark.png") }}" alt="dark logo" class="logo-lg">
                    <img src="{{ asset("panel/assets/images/logo-sm.png") }}" alt="small logo" class="logo-sm">
                </a>
            </div>
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>
            {{--<div class="dropdown d-none d-xl-block">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down ms-1"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-briefcase me-1"></i>
                        <span>New Projects</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-user me-1"></i>
                        <span>Create Users</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-bar-chart-line- me-1"></i>
                        <span>Revenue Report</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-headphones me-1"></i>
                        <span>Help & Support</span>
                    </a>

                </div>
            </div>
            <div class="dropdown dropdown-mega d-none d-xl-block">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down  ms-1"></i>
                </a>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="widgets.html">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="extended-nestable.html">Nestable List</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Sliders</a>
                                        </li>
                                        <li>
                                            <a href="pages-gallery.html">Masonry Items</a>
                                        </li>
                                        <li>
                                            <a href="extended-sweet-alert.html">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Treeview Page</a>
                                        </li>
                                        <li>
                                            <a href="extended-tour.html">Tour Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Applications</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="ecommerce-products.html">eCommerce Pages</a>
                                        </li>
                                        <li>
                                            <a href="crm-dashboard.html">CRM Pages</a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">Email</a>
                                        </li>
                                        <li>
                                            <a href="apps-calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="contacts-list.html">Team Contacts</a>
                                        </li>
                                        <li>
                                            <a href="task-kanban-board.html">Task Board</a>
                                        </li>
                                        <li>
                                            <a href="email-templates.html">Email Templates</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Extra Pages</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Left Sidebar with User</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Menu Collapsed</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Small Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">New Header Style</a>
                                        </li>
                                        <li>
                                            <a href="pages-search-results.html">Search Result</a>
                                        </li>
                                        <li>
                                            <a href="pages-gallery.html">Gallery Pages</a>
                                        </li>
                                        <li>
                                            <a href="pages-coming-soon.html">Maintenance & Coming Soon</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center mt-3">
                                <h3 class="text-dark">Special Discount Sale!</h3>
                                <h4>Save up to 70% off.</h4>
                                <a href="https://1.envato.market/uboldadmin" target="_blank" class="btn btn-primary rounded-pill mt-3">Download Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>

        <ul class="topbar-menu d-flex align-items-center">
            <li class="d-none d-md-inline-block">
                <a class="nav-link waves-effect waves-dark" href="" data-toggle="fullscreen">
                    <i class="fe-maximize font-22"></i>
                </a>
            </li>
            <li class="dropdown d-none d-md-inline-block">
                <a class="nav-link dropdown-toggle waves-effect waves-dark arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-grid font-22"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                    <div class="p-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset("panel/assets/images/brands/slack.png") }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset("panel/assets/images/brands/github.png") }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset("panel/assets/images/brands/dribbble.png") }}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset("panel/assets/images/brands/bitbucket.png") }}" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset("panel/assets/images/brands/dropbox.png") }}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset("panel/assets/images/brands/g-suite.png") }}" alt="G Suite">
                                    <span>G Suite</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link waves-effect waves-dark" id="light-dark-mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-dark" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-user-5-fill font-22"></i>
                    <span class="ms-1 d-none d-md-inline-block">
                                        {{ \Illuminate\Support\Facades\Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
            <li>
                <a class="nav-link waves-effect waves-dark" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                    <i class="fe-settings font-22"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
