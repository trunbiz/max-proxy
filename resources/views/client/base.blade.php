<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Themepixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title>DashByte - Premium Dashboard Template</title>

    <base href="{{ asset('assets') }}/" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="lib/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="lib/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="lib/apexcharts/apexcharts.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <a href="/" class="sidebar-logo">dashbyte</a>
    </div><!-- sidebar-header -->
    <div id="sidebarMenu" class="sidebar-body">
        <div class="nav-group show">
            <a href="#" class="nav-label">Dashboard</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="dashboard/finance.html" class="nav-link"><i class="ri-pie-chart-2-line"></i> <span>Finance Monitoring</span></a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/events.html" class="nav-link"><i class="ri-calendar-todo-line"></i> <span>Events Management</span></a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/sales.html" class="nav-link"><i class="ri-shopping-bag-3-line"></i> <span>Sales Monitoring</span></a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/analytics.html" class="nav-link active"><i class="ri-bar-chart-2-fill"></i>
                        <span>Website Analytics</span></a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/crypto.html" class="nav-link"><i class="ri-coin-line"></i> <span>Cryptocurrency</span></a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/helpdesk.html" class="nav-link"><i class="ri-service-line"></i> <span>Helpdesk Service</span></a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/storage.html" class="nav-link"><i class="ri-hard-drive-2-line"></i> <span>Storage Management</span></a>
                </li>
                <li class="nav-item">
                    <a href="dashboard/product.html" class="nav-link"><i class="ri-suitcase-2-line"></i> <span>Product Management</span></a>
                </li>
            </ul>
        </div><!-- nav-group -->
        <div class="nav-group show">
            <a href="#" class="nav-label">Applications</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="apps/file-manager.html" class="nav-link"><i class="ri-folder-2-line"></i> <span>File Manager</span></a>
                </li>
                <li class="nav-item">
                    <a href="apps/email.html" class="nav-link"><i class="ri-mail-send-line"></i>
                        <span>Email</span></a>
                </li>
                <li class="nav-item">
                    <a href="apps/calendar.html" class="nav-link"><i class="ri-calendar-line"></i>
                        <span>Calendar</span></a>
                </li>
                <li class="nav-item">
                    <a href="apps/chat.html" class="nav-link"><i class="ri-question-answer-line"></i>
                        <span>Chat</span></a>
                </li>
                <li class="nav-item">
                    <a href="apps/contact.html" class="nav-link"><i class="ri-contacts-book-line"></i>
                        <span>Contacts</span></a>
                </li>
                <li class="nav-item">
                    <a href="apps/tasks.html" class="nav-link"><i class="ri-checkbox-multiple-line"></i> <span>Task Manager</span></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-gallery-line"></i> <span>Media Gallery</span></a>
                    <nav class="nav nav-sub">
                        <a href="apps/gallery-music.html" class="nav-sub-link">Music Stream</a>
                        <a href="apps/gallery-video.html" class="nav-sub-link">Video Stream</a>
                    </nav>
                </li>
            </ul>
        </div><!-- nav-group -->
        <div class="nav-group show">
            <a href="#" class="nav-label">Pages</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-account-circle-line"></i>
                        <span>User Pages</span></a>
                    <nav class="nav nav-sub">
                        <a href="pages/profile.html" class="nav-sub-link">User Profile</a>
                        <a href="pages/people.html" class="nav-sub-link">People &amp; Groups</a>
                        <a href="pages/activity.html" class="nav-sub-link">Activity Log</a>
                        <a href="pages/events.html" class="nav-sub-link">Events</a>
                        <a href="pages/settings.html" class="nav-sub-link">Settings</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-lock-2-line"></i> <span>Authentication</span></a>
                    <nav class="nav nav-sub">
                        <a href="pages/sign-in.html" class="nav-sub-link">Sign In Basic</a>
                        <a href="pages/sign-in-2.html" class="nav-sub-link">Sign In Cover</a>
                        <a href="pages/sign-up.html" class="nav-sub-link">Sign Up Basic</a>
                        <a href="pages/sign-up-2.html" class="nav-sub-link">Sign Up Cover</a>
                        <a href="pages/verify-account.html" class="nav-sub-link">Verify Account</a>
                        <a href="pages/forgot-password.html" class="nav-sub-link">Forgot Password</a>
                        <a href="pages/lock-screen.html" class="nav-sub-link">Lock Screen</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-error-warning-line"></i>
                        <span>Error Pages</span></a>
                    <nav class="nav nav-sub">
                        <a href="pages/error-404.html" class="nav-sub-link">Page Not Found</a>
                        <a href="pages/error-500.html" class="nav-sub-link">Internal Server Error</a>
                        <a href="pages/error-503.html" class="nav-sub-link">Service Unavailable</a>
                        <a href="pages/error-505.html" class="nav-sub-link">Forbidden</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-file-text-line"></i> <span>Other Pages</span></a>
                    <nav class="nav nav-sub">
                        <a href="pages/pricing.html" class="nav-sub-link">Pricing</a>
                        <a href="pages/faq.html" class="nav-sub-link">FAQ</a>
                    </nav>
                </li>
            </ul>
        </div><!-- nav-group -->
        <div class="nav-group show mb-3">
            <a href="#" class="nav-label">UI Elements</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-pencil-ruler-2-line"></i>
                        <span>Getting Started</span></a>
                    <nav class="nav nav-sub">
                        <a href="docs/layout-grid.html" class="nav-sub-link">Grid System</a>
                        <a href="docs/layout-columns.html" class="nav-sub-link">Columns</a>
                        <a href="docs/layout-gutters.html" class="nav-sub-link">Gutters</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-suitcase-line"></i> <span>Components</span></a>
                    <nav class="nav nav-sub">
                        <a href="docs/com-accordion.html" class="nav-sub-link">Accordion</a>
                        <a href="docs/com-alerts.html" class="nav-sub-link">Alerts</a>
                        <a href="docs/com-avatars.html" class="nav-sub-link">Avatars</a>
                        <a href="docs/com-badge.html" class="nav-sub-link">Badge</a>
                        <a href="docs/com-breadcrumbs.html" class="nav-sub-link">Breadcrumbs</a>
                        <a href="docs/com-buttons.html" class="nav-sub-link">Buttons</a>
                        <a href="docs/com-cards.html" class="nav-sub-link">Cards</a>
                        <a href="docs/com-carousel.html" class="nav-sub-link">Carousel</a>
                        <a href="docs/com-collapse.html" class="nav-sub-link">Collapse</a>
                        <a href="docs/com-dropdown.html" class="nav-sub-link">Dropdown</a>
                        <a href="docs/com-images.html" class="nav-sub-link">Images</a>
                        <a href="docs/com-listgroup.html" class="nav-sub-link">List Group</a>
                        <a href="docs/com-markers.html" class="nav-sub-link">Markers</a>
                        <a href="docs/com-modal.html" class="nav-sub-link">Modal</a>
                        <a href="docs/com-navtabs.html" class="nav-sub-link">Navs &amp; Tabs</a>
                        <a href="docs/com-offcanvas.html" class="nav-sub-link">Offcanvas</a>
                        <a href="docs/com-pagination.html" class="nav-sub-link">Pagination</a>
                        <a href="docs/com-placeholders.html" class="nav-sub-link">Placeholders</a>
                        <a href="docs/com-popovers.html" class="nav-sub-link">Popovers</a>
                        <a href="docs/com-progress.html" class="nav-sub-link">Progress</a>
                        <a href="docs/com-scrollspy.html" class="nav-sub-link">Scrollspy</a>
                        <a href="docs/com-spinners.html" class="nav-sub-link">Spinners</a>
                        <a href="docs/com-toasts.html" class="nav-sub-link">Toasts</a>
                        <a href="docs/com-tooltips.html" class="nav-sub-link">Tooltips</a>
                        <a href="docs/com-tables.html" class="nav-sub-link">Tables</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-list-check-2"></i> <span>Forms</span></a>
                    <nav class="nav nav-sub">
                        <a href="docs/form-elements.html" class="nav-sub-link">Text Elements</a>
                        <a href="docs/form-selects.html" class="nav-sub-link">Selects</a>
                        <a href="docs/form-checksradios.html" class="nav-sub-link">Checks &amp; Radios</a>
                        <a href="docs/form-tagsmasks.html" class="nav-sub-link">Tags &amp; Masks</a>
                        <a href="docs/form-range.html" class="nav-sub-link">Range</a>
                        <a href="docs/form-pickers.html" class="nav-sub-link">Pickers</a>
                        <a href="docs/form-wizards.html" class="nav-sub-link">Wizards</a>
                        <a href="docs/form-layouts.html" class="nav-sub-link">Layouts</a>
                        <a href="docs/form-validation.html" class="nav-sub-link">Validation</a>
                        <a href="docs/form-editors.html" class="nav-sub-link">Editors</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-bar-chart-2-line"></i>
                        <span>Charts &amp; Graphs</span></a>
                    <nav class="nav nav-sub">
                        <a href="docs/chart-flot.html" class="nav-sub-link">Flot</a>
                        <a href="docs/chart-apex.html" class="nav-sub-link">Apexcharts</a>
                        <a href="docs/chart-chartjs.html" class="nav-sub-link">Chartjs</a>
                        <a href="docs/chart-peity.html" class="nav-sub-link">Peity</a>
                        <a href="docs/chart-morris.html" class="nav-sub-link">Morris</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-stack-line"></i> <span>Maps &amp; Icons</span></a>
                    <nav class="nav nav-sub">
                        <a href="docs/map-leaflet.html" class="nav-sub-link">Leaflet Maps</a>
                        <a href="docs/map-vector.html" class="nav-sub-link">Vector Maps</a>
                        <a href="docs/icon-remix.html" class="nav-sub-link">Remixicon</a>
                        <a href="docs/icon-feather.html" class="nav-sub-link">Feathericons</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link has-sub"><i class="ri-briefcase-4-line"></i> <span>Utilities</span></a>
                    <nav class="nav nav-sub">
                        <a href="docs/util-animation.html" class="nav-sub-link">Animation</a>
                        <a href="docs/util-background.html" class="nav-sub-link">Background</a>
                        <a href="docs/util-border.html" class="nav-sub-link">Border</a>
                        <a href="docs/util-colors.html" class="nav-sub-link">Colors</a>
                        <a href="docs/util-divider.html" class="nav-sub-link">Divider</a>
                        <a href="docs/util-flex.html" class="nav-sub-link">Flex</a>
                        <a href="docs/util-sizing.html" class="nav-sub-link">Sizing</a>
                        <a href="docs/util-spacing.html" class="nav-sub-link">Spacing</a>
                        <a href="docs/util-opacity.html" class="nav-sub-link">Opacity</a>
                        <a href="docs/util-position.html" class="nav-sub-link">Position</a>
                        <a href="docs/util-typography.html" class="nav-sub-link">Typography</a>
                        <a href="docs/util-shadows.html" class="nav-sub-link">Shadows</a>
                        <a href="docs/util-extras.html" class="nav-sub-link">Extras</a>
                    </nav>
                </li>
            </ul>
        </div><!-- nav-group -->
    </div><!-- sidebar-body -->
    <div class="sidebar-footer">
        <div class="sidebar-footer-top">
            <div class="sidebar-footer-thumb">
                <img src="assets/img/img1.jpg" alt="">
            </div><!-- sidebar-footer-thumb -->
            <div class="sidebar-footer-body">
                <h6><a href="pages/profile.html">Shaira Diaz</a></h6>
                <p>Premium Member</p>
            </div><!-- sidebar-footer-body -->
            <a id="sidebarFooterMenu" href="" class="dropdown-link"><i class="ri-arrow-down-s-line"></i></a>
        </div><!-- sidebar-footer-top -->
        <div class="sidebar-footer-menu">
            <nav class="nav">
                <a href=""><i class="ri-edit-2-line"></i> Edit Profile</a>
                <a href=""><i class="ri-profile-line"></i> View Profile</a>
            </nav>
            <hr>
            <nav class="nav">
                <a href=""><i class="ri-question-line"></i> Help Center</a>
                <a href=""><i class="ri-lock-line"></i> Privacy Settings</a>
                <a href=""><i class="ri-user-settings-line"></i> Account Settings</a>
                <a href=""><i class="ri-logout-box-r-line"></i> Log Out</a>
            </nav>
        </div><!-- sidebar-footer-menu -->
    </div><!-- sidebar-footer -->
</div><!-- sidebar -->
<div class="header-main px-3 px-lg-4">
    <a id="menuSidebar" href="#" class="menu-link me-3 me-lg-4"><i class="ri-menu-2-fill"></i></a>

    <div class="form-search me-auto">
        <input type="text" class="form-control" placeholder="Search">
        <i class="ri-search-line"></i>
    </div><!-- form-search -->

    <div class="dropdown dropdown-skin">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
                class="ri-settings-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f">
            <label>Skin Mode</label>
            <nav id="skinMode" class="nav nav-skin">
                <a href="" class="nav-link active">Light</a>
                <a href="" class="nav-link">Dark</a>
            </nav>
            <hr>
            <label>Sidebar Skin</label>
            <nav id="sidebarSkin" class="nav nav-skin">
                <a href="" class="nav-link active">Default</a>
                <a href="" class="nav-link">Prime</a>
                <a href="" class="nav-link">Dark</a>
            </nav>
            <hr>
            <label>Direction</label>
            <nav id="layoutDirection" class="nav nav-skin">
                <a href="" class="nav-link active">LTR</a>
                <a href="" class="nav-link">RTL</a>
            </nav>
        </div><!-- dropdown-menu -->
    </div><!-- dropdown -->

    <div class="dropdown dropdown-notification ms-3 ms-xl-4">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><small>3</small><i
                class="ri-notification-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f me--10-f">
            <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
            </div><!-- dropdown-menu-header -->
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="avatar online"><img src="assets/img/img10.jpg" alt=""></div>
                    <div class="list-group-body">
                        <p><strong>Dominador Manuel</strong> and <strong>100 other people</strong> reacted to your
                            comment "Tell your partner that...</p>
                        <span>Aug 20 08:55am</span>
                    </div><!-- list-group-body -->
                </li>
                <li class="list-group-item">
                    <div class="avatar online"><img src="assets/img/img11.jpg" alt=""></div>
                    <div class="list-group-body">
                        <p><strong>Angela Ighot</strong> tagged you and <strong>9 others</strong> in a post.</p>
                        <span>Aug 18 10:30am</span>
                    </div><!-- list-group-body -->
                </li>
                <li class="list-group-item">
                    <div class="avatar"><span class="avatar-initial bg-primary">a</span></div>
                    <div class="list-group-body">
                        <p>New listings were added that match your search alert <strong>house for rent</strong></p>
                        <span>Aug 15 08:10pm</span>
                    </div><!-- list-group-body -->
                </li>
                <li class="list-group-item">
                    <div class="avatar online"><img src="assets/img/img14.jpg" alt=""></div>
                    <div class="list-group-body">
                        <p>Reminder: <strong>Jerry Cuares</strong> invited you to like <strong>Cuares Surveying
                                Services</strong>. <br><a href="">Accept</a> or <a href="">Decline</a></p>
                        <span>Aug 14 11:50pm</span>
                    </div><!-- list-group-body -->
                </li>
                <li class="list-group-item">
                    <div class="avatar online"><img src="assets/img/img15.jpg" alt=""></div>
                    <div class="list-group-body">
                        <p><strong>Dyanne Aceron</strong> reacted to your post <strong>King of the Bed</strong>.</p>
                        <span>Aug 10 05:30am</span>
                    </div><!-- list-group-body -->
                </li>
            </ul>
            <div class="dropdown-menu-footer"><a href="">Show all Notifications</a></div>
        </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    <div class="dropdown dropdown-profile ms-3 ms-xl-4">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside">
            <div class="avatar online"><img src="assets/img/img1.jpg" alt=""></div>
        </a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f">
            <div class="dropdown-menu-body">
                <div class="avatar avatar-xl online mb-3"><img src="assets/img/img1.jpg" alt=""></div>
                <h5 class="mb-1 text-dark fw-semibold">Shaira Diaz</h5>
                <p class="fs-sm text-secondary">Premium Member</p>

                <nav class="nav">
                    <a href=""><i class="ri-edit-2-line"></i> Edit Profile</a>
                    <a href=""><i class="ri-profile-line"></i> View Profile</a>
                </nav>
                <hr>
                <nav class="nav">
                    <a href=""><i class="ri-question-line"></i> Help Center</a>
                    <a href=""><i class="ri-lock-line"></i> Privacy Settings</a>
                    <a href=""><i class="ri-user-settings-line"></i> Account Settings</a>
                    <a href=""><i class="ri-logout-box-r-line"></i> Log Out</a>
                </nav>
            </div><!-- dropdown-menu-body -->
        </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
</div><!-- header-main -->
@yield('content')

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="lib/jqvmap/jquery.vmap.min.js"></script>
<script src="lib/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="lib/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/script.js"></script>
<script src="assets/js/db.data.js"></script>
<script src="assets/js/db.analytics.js"></script>

</body>
</html>

