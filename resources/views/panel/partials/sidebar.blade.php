<div class="left-side-menu">

    <div class="sidebar-icon-menu">
        <div class="logo-box">
            <a href="index.html">
                <img src="{{ asset("panel/assets/images/logo-sm.png") }}" alt="small logo" height="28">
            </a>
        </div>

        <div class="h-100" data-simplebar>
            <ul class="menu" id="two-col-sidenav-main">
                <li class="menu-item">
                    <a href="#dashboard" data-bs-title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" class="menu-link">
                        <span class="menu-icon"><i data-feather="home"></i></span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#apps" data-bs-title="Apps" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" class="menu-link">
                        <span class="menu-icon"><i data-feather="grid"></i></span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#pages" data-bs-title="Pages" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" class="menu-link">
                        <span class="menu-icon"><i data-feather="file-text"></i></span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#layouts" data-bs-title="Layouts" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" class="menu-link">
                        <span class="menu-icon"><i data-feather="layout"></i></span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#ui-elements" data-bs-title="UI Elements" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" class="menu-link">
                        <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#components" data-bs-title="Components" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" class="menu-link">
                        <span class="menu-icon"><i data-feather="package"></i></span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#widgets" data-bs-title="Widgets" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" class="menu-link">
                        <span class="menu-icon"><i data-feather="gift"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--- Menu -->
    <div class="app-menu">
        <!-- Brand Logo -->
        <div class="logo-box">
            <!-- Brand Logo Light -->
            <a href="index.html" class="logo-light">
                <img src="{{ asset("panel/assets/images/logo-light-2.png") }}" alt="logo" class="logo-lg">
                <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo-dark">
                <img src="{{ asset("panel/assets/images/logo-dark-2.png") }}" alt="dark logo" class="logo-lg">
                <img src="{{ asset("panel/assets/images/logo-sm.png") }}" alt="small logo" class="logo-sm">
            </a>
        </div>

        <div id="two-col-menu" class="h-100" data-simplebar>
            <div class="twocolumn-menu-item d-block" id="dashboard">
                <ul class="menu">
                    <li class="menu-title">Dashboards</li>
                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <span class="menu-text">Dashboard 1</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dashboard-2.html" class="menu-link">
                            <span class="menu-text">Dashboard 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dashboard-3.html" class="menu-link">
                            <span class="menu-text">Dashboard 3</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dashboard-4.html" class="menu-link">
                            <span class="menu-text">Dashboard 4</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="twocolumn-menu-item" id="apps">
                <ul class="menu">
                    <li class="menu-title">Apps</li>
                    <li class="menu-item">
                        <a href="apps-calendar.html" class="menu-link">
                            <span class="menu-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="apps-chat.html" class="menu-link">
                            <span class="menu-text"> Chat </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuEcommerce">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="ecommerce-dashboard.html" class="menu-link">
                                        <span class="menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-products.html" class="menu-link">
                                        <span class="menu-text">Products</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-product-detail.html" class="menu-link">
                                        <span class="menu-text">Product Detail</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-product-edit.html" class="menu-link">
                                        <span class="menu-text">Add Product</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-customers.html" class="menu-link">
                                        <span class="menu-text">Customers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-orders.html" class="menu-link">
                                        <span class="menu-text">Orders</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-order-detail.html" class="menu-link">
                                        <span class="menu-text">Order Detail</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-sellers.html" class="menu-link">
                                        <span class="menu-text">Sellers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-cart.html" class="menu-link">
                                        <span class="menu-text">Shopping Cart</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ecommerce-checkout.html" class="menu-link">
                                        <span class="menu-text">Checkout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuCrm" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> CRM </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuCrm">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="crm-dashboard.html" class="menu-link">
                                        <span class="menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="crm-contacts.html" class="menu-link">
                                        <span class="menu-text">Contacts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="crm-opportunities.html" class="menu-link">
                                        <span class="menu-text">Opportunities</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="crm-leads.html" class="menu-link">
                                        <span class="menu-text">Leads</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="crm-customers.html" class="menu-link">
                                        <span class="menu-text">Customers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuEmail" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuEmail">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="email-inbox.html" class="menu-link">
                                        <span class="menu-text">Inbox</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="email-read.html" class="menu-link">
                                        <span class="menu-text">Read Email</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="email-compose.html" class="menu-link">
                                        <span class="menu-text">Compose Email</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="email-templates.html" class="menu-link">
                                        <span class="menu-text">Email Templates</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="apps-social-feed.html" class="menu-link">
                            <span class="menu-text"> Social Feed </span>
                            <span class="badge bg-pink ms-auto">Hot</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="apps-companies.html" class="menu-link">
                            <span class="menu-text"> Companies </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#menuProjects" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> Projects </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuProjects">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="project-list.html" class="menu-link">
                                        <span class="menu-text">List</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="project-detail.html" class="menu-link">
                                        <span class="menu-text">Detail</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="project-create.html" class="menu-link">
                                        <span class="menu-text">Create Project</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuTasks" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> Tasks </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTasks">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="task-list.html" class="menu-link">
                                        <span class="menu-text">List</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="task-details.html" class="menu-link">
                                        <span class="menu-text">Details</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="task-kanban-board.html" class="menu-link">
                                        <span class="menu-text">Kanban Board</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuContacts" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> Contacts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuContacts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="contacts-list.html" class="menu-link">
                                        <span class="menu-text">Members List</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="contacts-profile.html" class="menu-link">
                                        <span class="menu-text">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuTickets" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> Tickets </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTickets">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="tickets-list.html" class="menu-link">
                                        <span class="menu-text">List</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="tickets-detail.html" class="menu-link">
                                        <span class="menu-text">Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="apps-file-manager.html" class="menu-link">
                            <span class="menu-text"> File Manager </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="twocolumn-menu-item" id="pages">
                <ul class="menu">
                    <li class="menu-title">Pages</li>
                    <li class="menu-item">
                        <a href="pages-starter.html" class="menu-link">
                            <span class="menu-text">Starter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-timeline.html" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-sitemap.html" class="menu-link">
                            <span class="menu-text">Sitemap</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-invoice.html" class="menu-link">
                            <span class="menu-text">Invoice</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-faqs.html" class="menu-link">
                            <span class="menu-text">FAQs</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-search-results.html" class="menu-link">
                            <span class="menu-text">Search Results</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-pricing.html" class="menu-link">
                            <span class="menu-text">Pricing</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-maintenance.html" class="menu-link">
                            <span class="menu-text">Maintenance</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-coming-soon.html" class="menu-link">
                            <span class="menu-text">Coming Soon</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-gallery.html" class="menu-link">
                            <span class="menu-text">Gallery</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404.html" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404-two.html" class="menu-link">
                            <span class="menu-text">Error 404 Two</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-404-alt.html" class="menu-link">
                            <span class="menu-text">Error 404-alt</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-500.html" class="menu-link">
                            <span class="menu-text">Error 500</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-500-two.html" class="menu-link">
                            <span class="menu-text">Error 500 Two</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#menuAuth" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-text"> Auth Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse collapse-md" id="menuAuth">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="auth-login.html" class="menu-link">
                                        <span class="menu-text">Log In</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-login-2.html" class="menu-link">
                                        <span class="menu-text">Log In 2</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-register.html" class="menu-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-register-2.html" class="menu-link">
                                        <span class="menu-text">Register 2</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-signin-signup.html" class="menu-link">
                                        <span class="menu-text">Signin - Signup</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-signin-signup-2.html" class="menu-link">
                                        <span class="menu-text">Signin - Signup 2</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-recoverpw.html" class="menu-link">
                                        <span class="menu-text">Recover Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-recoverpw-2.html" class="menu-link">
                                        <span class="menu-text">Recover Password 2</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-lock-screen.html" class="menu-link">
                                        <span class="menu-text">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-lock-screen-2.html" class="menu-link">
                                        <span class="menu-text">Lock Screen 2</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-logout.html" class="menu-link">
                                        <span class="menu-text">Logout</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-logout-2.html" class="menu-link">
                                        <span class="menu-text">Logout 2</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-confirm-mail.html" class="menu-link">
                                        <span class="menu-text">Confirm Mail</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-confirm-mail-2.html" class="menu-link">
                                        <span class="menu-text">Confirm Mail 2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="twocolumn-menu-item" id="layouts">
                <ul class="menu">
                    <li class="menu-title">Layouts</li>
                    <li class="menu-item">
                        <a href="layouts-horizontal.html" target="_blank" class="menu-link">
                            <span class="menu-text">Horizontal</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-detached.html" target="_blank" class="menu-link">
                            <span class="menu-text">Detached</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-two-column.html" target="_blank" class="menu-link">
                            <span class="menu-text">Two Column Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-two-tone-icons.html" target="_blank" class="menu-link">
                            <span class="menu-text">Two Tones Icons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="layouts-preloader.html" target="_blank" class="menu-link">
                            <span class="menu-text">Preloader</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="twocolumn-menu-item" id="ui-elements">
                <ul class="menu">
                    <li class="menu-title">UI Elements</li>
                    <li class="menu-item">
                        <a href="ui-buttons.html" class="menu-link">
                            <span class="menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-cards.html" class="menu-link">
                            <span class="menu-text">Cards</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-avatars.html" class="menu-link">
                            <span class="menu-text">Avatars</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-portlets.html" class="menu-link">
                            <span class="menu-text">Portlets</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tabs-accordions.html" class="menu-link">
                            <span class="menu-text">Tabs & Accordions</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-modals.html" class="menu-link">
                            <span class="menu-text">Modals</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-progress.html" class="menu-link">
                            <span class="menu-text">Progress</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-notifications.html" class="menu-link">
                            <span class="menu-text">Notifications</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-offcanvas.html" class="menu-link">
                            <span class="menu-text">Offcanvas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-placeholders.html" class="menu-link">
                            <span class="menu-text">Placeholders</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-spinners.html" class="menu-link">
                            <span class="menu-text">Spinners</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-images.html" class="menu-link">
                            <span class="menu-text">Images</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-carousel.html" class="menu-link">
                            <span class="menu-text">Carousel</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-list-group.html" class="menu-link">
                            <span class="menu-text">List Group</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-video.html" class="menu-link">
                            <span class="menu-text">Embed Video</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-dropdowns.html" class="menu-link">
                            <span class="menu-text">Dropdowns</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-ribbons.html" class="menu-link">
                            <span class="menu-text">Ribbons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tooltips-popovers.html" class="menu-link">
                            <span class="menu-text">Tooltips & Popovers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-general.html" class="menu-link">
                            <span class="menu-text">General UI</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-typography.html" class="menu-link">
                            <span class="menu-text">Typography</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-grid.html" class="menu-link">
                            <span class="menu-text">Grid</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="twocolumn-menu-item" id="components">
                <div class="title-box">
                    <ul class="menu">
                        <li class="menu-title">Components</li>
                        <li class="menu-item">
                            <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Extended UI </span>
                                <span class="badge bg-info ms-auto">Hot</span>
                            </a>
                            <div class="collapse" id="menuExtendedui">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="extended-nestable.html" class="menu-link">
                                            <span class="menu-text">Nestable List</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-range-slider.html" class="menu-link">
                                            <span class="menu-text">Range Slider</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-dragula.html" class="menu-link">
                                            <span class="menu-text">Dragula</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-animation.html" class="menu-link">
                                            <span class="menu-text">Animation</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-sweet-alert.html" class="menu-link">
                                            <span class="menu-text">Sweet Alert</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-tour.html" class="menu-link">
                                            <span class="menu-text">Tour Page</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-scrollspy.html" class="menu-link">
                                            <span class="menu-text">Scrollspy</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-loading-buttons.html" class="menu-link">
                                            <span class="menu-text">Loading Buttons</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuIcons">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="icons-material-symbols.html" class="menu-link">
                                            <span class="menu-text">Material Symbols </span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-two-tone.html" class="menu-link">
                                            <span class="menu-text">Two Tone Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-feather.html" class="menu-link">
                                            <span class="menu-text">Feather Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-mdi.html" class="menu-link">
                                            <span class="menu-text">Material Design Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-dripicons.html" class="menu-link">
                                            <span class="menu-text">Dripicons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-font-awesome.html" class="menu-link">
                                            <span class="menu-text">Font Awesome 5</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-themify.html" class="menu-link">
                                            <span class="menu-text">Themify</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-simple-line.html" class="menu-link">
                                            <span class="menu-text">Simple Line</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-weather.html" class="menu-link">
                                            <span class="menu-text">Weather</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuForms" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuForms">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="forms-elements.html" class="menu-link">
                                            <span class="menu-text">General Elements</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-advanced.html" class="menu-link">
                                            <span class="menu-text">Advanced</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-validation.html" class="menu-link">
                                            <span class="menu-text">Validation</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-pickers.html" class="menu-link">
                                            <span class="menu-text">Pickers</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-wizard.html" class="menu-link">
                                            <span class="menu-text">Wizard</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-masks.html" class="menu-link">
                                            <span class="menu-text">Masks</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-quilljs.html" class="menu-link">
                                            <span class="menu-text">Quilljs Editor</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-file-uploads.html" class="menu-link">
                                            <span class="menu-text">File Uploads</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-x-editable.html" class="menu-link">
                                            <span class="menu-text">X Editable</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-image-crop.html" class="menu-link">
                                            <span class="menu-text">Image Crop</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuTables" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuTables">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="tables-basic.html" class="menu-link">
                                            <span class="menu-text">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-datatables.html" class="menu-link">
                                            <span class="menu-text">Data Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-editable.html" class="menu-link">
                                            <span class="menu-text">Editable Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-responsive.html" class="menu-link">
                                            <span class="menu-text">Responsive Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-footables.html" class="menu-link">
                                            <span class="menu-text">FooTable</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-bootstrap.html" class="menu-link">
                                            <span class="menu-text">Bootstrap Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-tablesaw.html" class="menu-link">
                                            <span class="menu-text">Tablesaw Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-jsgrid.html" class="menu-link">
                                            <span class="menu-text">JsGrid Tables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuCharts">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="charts-apex.html" class="menu-link">
                                            <span class="menu-text">Apex Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-flot.html" class="menu-link">
                                            <span class="menu-text">Flot Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-morris.html" class="menu-link">
                                            <span class="menu-text">Morris Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-chartjs.html" class="menu-link">
                                            <span class="menu-text">Chartjs Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-peity.html" class="menu-link">
                                            <span class="menu-text">Peity Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-chartist.html" class="menu-link">
                                            <span class="menu-text">Chartist Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-c3.html" class="menu-link">
                                            <span class="menu-text">C3 Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-sparklines.html" class="menu-link">
                                            <span class="menu-text">Sparklines Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-knob.html" class="menu-link">
                                            <span class="menu-text">Jquery Knob Charts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMaps">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="maps-google.html" class="menu-link">
                                            <span class="menu-text">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="maps-vector.html" class="menu-link">
                                            <span class="menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="maps-mapael.html" class="menu-link">
                                            <span class="menu-text">Mapael Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-text"> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMultilevel">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="#menuMultilevel2" data-bs-toggle="collapse" class="menu-link">
                                            <span class="menu-text"> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="menuMultilevel2">
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#menuMultilevel3" data-bs-toggle="collapse" class="menu-link">
                                            <span class="menu-text">Third Level</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="menuMultilevel3">
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#menuMultilevel4" data-bs-toggle="collapse" class="menu-link">
                                                        <span class="menu-text">Item 2</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="menuMultilevel4">
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="javascript: void(0);" class="menu-link">
                                                                    <span class="menu-text">Item 1</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="javascript: void(0);" class="menu-link">
                                                                    <span class="menu-text">Item 2</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="twocolumn-menu-item" id="widgets">
                <ul class="menu">
                    <li class="menu-title">Other Page</li>
                    <li class="menu-item">
                        <a href="widgets.html" class="menu-link">
                            <span class="menu-text">Widgets</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <div class="clearfix"></div>

</div>
