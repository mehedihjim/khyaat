<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="#" class="logo-dark">
            <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="/images/logo-dark.png" class="logo-lg" alt="logo dark">
        </a>

        <a href="#" class="logo-light">
            <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="/images/logo-light.png" class="logo-lg" alt="logo light">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">General</li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarProducts">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Products </span>
                </a>
                <div class="collapse" id="sidebarProducts">
                    <ul class="nav sub-navbar-nav">
                    <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Grid</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Details</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Edit</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarCategory">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Category </span>
                </a>
                <div class="collapse" id="sidebarCategory">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Edit</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarInventory">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Inventory </span>
                </a>
                <div class="collapse" id="sidebarInventory">
                    <ul class="nav sub-navbar-nav">

                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Warehouse</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Received Orders</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarOrders">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Orders </span>
                </a>
                <div class="collapse" id="sidebarOrders">
                    <ul class="nav sub-navbar-nav">

                         <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Details</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Cart</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Check Out</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarPurchases" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarPurchases">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:card-send-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Purchases </span>
                </a>
                <div class="collapse" id="sidebarPurchases">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Order</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Return</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarAttributes" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarAttributes">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:confetti-minimalistic-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Attributes </span>
                </a>
                <div class="collapse" id="sidebarAttributes">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Edit</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarInvoice">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Invoices </span>
                </a>
                <div class="collapse" id="sidebarInvoice">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Details</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Settings </span>
                </a>
            </li>

            <li class="menu-title mt-2">Users</li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Profile </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarRoles">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Roles </span>
                </a>
                <div class="collapse" id="sidebarRoles">
                    <ul class="nav sub-navbar-nav">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="#">List</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="#">Edit</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="#">Create</a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:checklist-minimalistic-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Permissions </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarCustomers">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Customers </span>
                </a>
                <div class="collapse" id="sidebarCustomers">
                    <ul class="nav sub-navbar-nav">

                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Details</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarSellers">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Sellers </span>
                </a>
                <div class="collapse" id="sidebarSellers">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Details</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Edit</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-title mt-2">Other</li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarCoupons">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Coupons </span>
                </a>
                <div class="collapse" id="sidebarCoupons">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Add</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Reviews </span>
                </a>
            </li>

            <li class="menu-title mt-2">Other Apps</li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:chat-round-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Chat </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Email </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Calendar </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:checklist-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Todo </span>
                </a>
            </li>

            <li class="menu-title mt-2">Support</li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:help-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Help Center </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> FAQs </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:document-text-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Privacy Policy </span>
                </a>
            </li>

            <li class="menu-title mt-2">Custom</li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarPages">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:gift-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Pages </span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Welcome</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Coming Soon</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Timeline</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Pricing</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Maintenance</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">404 Error</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">404 Error (alt)</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarAuthentication">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:lock-keyhole-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Authentication </span>
                </a>
                <div class="collapse" id="sidebarAuthentication">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Sign In</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Sign Up</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Reset
                                Password</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Lock
                                Screen</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:atom-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text">Widgets</span>
                    <span class="badge bg-info badge-pill text-end">9+</span>
                </a>
            </li>

            <li class="menu-title mt-2">Components</li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarBaseUI" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarBaseUI">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:bookmark-square-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Base UI </span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Accordion</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Alerts</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Avatar</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Badge</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Breadcrumb</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Buttons</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Card</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Carousel</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Collapse</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Dropdown</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">List Group</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Modal</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Tabs</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Offcanvas</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Pagination</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Placeholders</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Popovers</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Progress</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Scrollspy</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Spinners</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Toasts</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Tooltips</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarExtendedUI" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarExtendedUI">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:case-round-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Advanced UI </span>
                </a>
                <div class="collapse" id="sidebarExtendedUI">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Ratings</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Sweet Alert</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Swiper Slider</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Scrollbar</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Toastify</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarCharts">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:pie-chart-2-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Charts </span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="nav sub-navbar-nav">
                       <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Area</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Bar</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Bubble</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Candlestick</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Column</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Heatmap</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Line</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Mixed</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Timeline</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Boxplot</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Treemap</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Pie</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Radar</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">RadialBar</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Scatter</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Polar Area</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarForms">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Forms </span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Basic Elements</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Checkbox &amp; Radio</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Choice Select</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Clipboard</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Flatepicker</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Validation</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Wizard</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">File Upload</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Editors</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Input Mask</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Slider</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarTables">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:tuning-2-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Tables </span>
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Basic Tables</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Grid Js</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarIcons">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:ufo-2-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Icons </span>
                </a>
                <div class="collapse" id="sidebarIcons">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Boxicons</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Solar Icons</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarMaps">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:streets-map-point-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Maps </span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="nav sub-navbar-nav">
                         <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Google Maps</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="#">Vector Maps</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:volleyball-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text">Badge Menu</span>
                    <span class="badge bg-danger badge-pill text-end">1</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarMultiLevelDemo" data-bs-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="sidebarMultiLevelDemo">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:share-circle-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Menu Item </span>
                </a>
                <div class="collapse" id="sidebarMultiLevelDemo">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="javascript:void(0);">Menu Item 1</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link  menu-arrow" href="#sidebarItemDemoSubItem" data-bs-toggle="collapse"
                               role="button" aria-expanded="false" aria-controls="sidebarItemDemoSubItem">
                                <span> Menu Item 2 </span>
                            </a>
                            <div class="collapse" id="sidebarItemDemoSubItem">
                                <ul class="nav sub-navbar-nav">
                                    <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="javascript:void(0);">Menu Sub item</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:user-block-rounded-bold-duotone"></iconify-icon>
                         </span>
                    <span class="nav-text"> Disable Item </span>
                </a>
            </li>
        </ul>
    </div>
</div>
