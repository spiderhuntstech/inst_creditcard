<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.svg" alt="" height="22"> 
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
            </span>
        </a>

        <a href="index.php" class="logo logo-light">
            <span class="logo-lg">
                <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
            </span>
            <span class="logo-sm">
                <img src="assets/images/logo-sm.svg" alt="" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo $language["Menu"]; ?></li>

                <li>
                    <a href="index.php">
                        <i class="bx bx-tachometer icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards"><?php echo $language["Dashboard"]; ?></span>
                        <span class="badge rounded-pill bg-success">5+</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications"><?php echo $language["Applications"]; ?></li>

                <li>
                    <a href="apps-calendar.php">
                        <i class="bx bx-calendar icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar"><?php echo $language["Calendar"]; ?></span>
                    </a>
                </li>

                <li>
                    <a href="apps-chat.php">
                        <i class="bx bx-chat icon nav-icon"></i>
                        <span class="menu-item" data-key="t-chat"><?php echo $language["Chat"]; ?></span>
                        <span class="badge rounded-pill bg-danger" data-key="t-hot"><?php echo $language["Hot"]; ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-envelope icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email"><?php echo $language["Email"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.php" data-key="t-inbox"><?php echo $language["Inbox"]; ?></a></li>
                        <li><a href="email-read.php" data-key="t-read-email"><?php echo $language["Read_Email"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-store icon nav-icon"></i>
                        <span class="menu-item" data-key="t-ecommerce"><?php echo $language["Ecommerce"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.php" data-key="t-products"><?php echo $language["Products"]; ?></a></li>
                        <li><a href="ecommerce-product-detail.php" data-key="t-product-detail"><?php echo $language["Product_Detail"]; ?></a></li>
                        <li><a href="ecommerce-orders.php" data-key="t-orders"><?php echo $language["Orders"]; ?></a></li>
                        <li><a href="ecommerce-customers.php" data-key="t-customers"><?php echo $language["Customers"]; ?></a></li>
                        <li><a href="ecommerce-cart.php" data-key="t-cart"><?php echo $language["Cart"]; ?></a></li>
                        <li><a href="ecommerce-checkout.php" data-key="t-checkout"><?php echo $language["Checkout"]; ?></a></li>
                        <li><a href="ecommerce-shops.php" data-key="t-shops"><?php echo $language["Shops"]; ?></a></li>
                        <li><a href="ecommerce-add-product.php" data-key="t-add-product"><?php echo $language["Add_Product"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-receipt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-invoices"><?php echo $language["Invoices"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.php" data-key="t-invoice-list"><?php echo $language["Invoice_List"]; ?></a></li>
                        <li><a href="invoices-detail.php" data-key="t-invoice-detail"><?php echo $language["Invoice_Detail"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-user-detail icon nav-icon"></i>
                        <span class="menu-item" data-key="t-contacts"><?php echo $language["Contacts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.php" data-key="t-user-grid"><?php echo $language["User_Grid"]; ?></a></li>
                        <li><a href="contacts-list.php" data-key="t-user-list"><?php echo $language["User_List"]; ?></a></li>
                        <li><a href="contacts-profile.php" data-key="t-user-settings"><?php echo $language["Profile"]; ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-pages"><?php echo $language["Pages"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-authentication"><?php echo $language["Authentication"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="page-login.php" data-key="t-login"><?php echo $language["Login"]; ?></a></li>
                        <li><a href="page-register.php" data-key="t-register"><?php echo $language["Register"]; ?></a></li>
                        <li><a href="page-recoverpw.php" data-key="t-recover-password"><?php echo $language["ecover_Password"]; ?></a></li>
                        <li><a href="auth-lock-screen.php" data-key="t-lock-screen"><?php echo $language["Lock_Screen"]; ?></a></li>
                        <li><a href="auth-logout.php" data-key="t-logout"><?php echo $language["Log_Out"]; ?></a></li>
                        <li><a href="auth-confirm-mail.php" data-key="t-confirm-mail"><?php echo $language["Confirm_Mail"]; ?></a></li>
                        <li><a href="auth-email-verification.php" data-key="t-email-verification"><?php echo $language["Email_Verification"]; ?></a></li>
                        <li><a href="auth-two-step-verification.php" data-key="t-two-step-verification"><?php echo $language["Two_Step_Verification"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility"><?php echo $language["Utility"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.php" data-key="t-starter-page"><?php echo $language["Starter_Page"]; ?></a></li>
                        <li><a href="pages-maintenance.php" data-key="t-maintenance"><?php echo $language["Maintenance"]; ?></a></li>
                        <li><a href="pages-comingsoon.php" data-key="t-coming-soon"><?php echo $language["Coming_Soon"]; ?></a></li>
                        <li><a href="pages-timeline.php" data-key="t-timeline"><?php echo $language["Timeline"]; ?></a></li>
                        <li><a href="pages-faqs.php" data-key="t-faqs"><?php echo $language["FAQs"]; ?></a></li>
                        <li><a href="pages-pricing.php" data-key="t-pricing"><?php echo $language["Pricing"]; ?></a></li>
                        <li><a href="pages-404.php" data-key="t-error-404"><?php echo $language["Error_404"]; ?></a></li>
                        <li><a href="pages-500.php" data-key="t-error-500"><?php echo $language["Error_500"]; ?></a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="layouts-vertical.php">
                        <i class="bx bx-layout icon nav-icon"></i>
                        <span class="menu-item" data-key="t-vertical"><?php echo $language["Vertical"]; ?></span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-components"><?php echo $language["Components"]; ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxl-bootstrap icon nav-icon"></i>
                        <span class="menu-item" data-key="t-bootstrap"><?php echo $language["Bootstrap"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.php" data-key="t-alerts"><?php echo $language["Alerts"]; ?></a></li>
                        <li><a href="ui-buttons.php" data-key="t-buttons"><?php echo $language["Buttons"]; ?></a></li>
                        <li><a href="ui-cards.php" data-key="t-cards"><?php echo $language["Cards"]; ?></a></li>
                        <li><a href="ui-carousel.php" data-key="t-carousel"><?php echo $language["Carousel"]; ?></a></li>
                        <li><a href="ui-dropdowns.php" data-key="t-dropdowns"><?php echo $language["Dropdowns"]; ?></a></li>
                        <li><a href="ui-grid.php" data-key="t-grid"><?php echo $language["Grid"]; ?></a></li>
                        <li><a href="ui-images.php" data-key="t-images"><?php echo $language["Images"]; ?></a></li>
                        <li><a href="ui-modals.php" data-key="t-modals"><?php echo $language["Modals"]; ?></a></li>
                        <li><a href="ui-offcanvas.php" data-key="t-offcanvas"><?php echo $language["Offcanvas"]; ?></a></li>
                        <li><a href="ui-placeholders.php" data-key="t-placeholders"><?php echo $language["Placeholders"]; ?></a></li>
                        <li><a href="ui-progressbars.php" data-key="t-progress-bars"><?php echo $language["Progress_Bars"]; ?></a></li>
                        <li><a href="ui-tabs-accordions.php" data-key="t-tabs-accordions"><?php echo $language["Tabs_n_Accordions"]; ?></a></li>
                        <li><a href="ui-typography.php" data-key="t-typography"><?php echo $language["Typography"]; ?></a></li>
                        <li><a href="ui-video.php" data-key="t-video"><?php echo $language["Video"]; ?></a></li>
                        <li><a href="ui-general.php" data-key="t-general"><?php echo $language["General"]; ?></a></li>
                        <li><a href="ui-colors.php" data-key="t-colors"><?php echo $language["Colors"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-disc icon nav-icon"></i>
                        <span class="menu-item" data-key="t-extended"><?php echo $language["Extended"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extended-lightbox.php" data-key="t-lightbox"><?php echo $language["Lightbox"]; ?></a></li>
                        <li><a href="extended-rangeslider.php" data-key="t-range-slider"><?php echo $language["Range_Slider"]; ?></a></li>
                        <li><a href="extended-sweet-alert.php" data-key="t-sweet-alert"><?php echo $language["SweetAlert_2"]; ?></a></li>
                        <li><a href="extended-rating.php" data-key="t-rating"><?php echo $language["Rating"]; ?></a></li>
                        <li><a href="extended-notifications.php" data-key="t-notifications"><?php echo $language["Notifications"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-eraser icon nav-icon"></i>
                        <span class="menu-item" data-key="t-forms"><?php echo $language["Forms"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.php" data-key="t-basic-elements"><?php echo $language["Basic_Elements"]; ?></a></li>
                        <li><a href="form-validation.php"data-key="t-validation"><?php echo $language["Validation"]; ?></a></li>
                        <li><a href="form-advanced.php"data-key="t-advanced-plugins"><?php echo $language["Advanced_Plugins"]; ?></a></li>
                        <li><a href="form-editors.php"data-key="t-editors"><?php echo $language["Editors"]; ?></a></li>
                        <li><a href="form-uploads.php"data-key="t-file-upload"><?php echo $language["File_Upload"]; ?></a></li>
                        <li><a href="form-wizard.php"data-key="t-wizard"><?php echo $language["Wizard"]; ?></a></li>
                        <li><a href="form-mask.php" data-key="t-mask"><?php echo $language["Mask"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-list-ul icon nav-icon"></i>
                        <span class="menu-item" data-key="t-tables"><?php echo $language["Tables"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.php" data-key="t-bootstrap-basic"><?php echo $language["Bootstrap_Basic"]; ?></a></li>
                        <li><a href="tables-advanced.php" data-key="t-advanced-tables"><?php echo $language["Advance_Tables"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-bar-chart-alt-2 icon nav-icon"></i>
                        <span class="menu-item" data-key="t-charts"><?php echo $language["Charts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.php" data-key="t-apex-charts"><?php echo $language["Apex"]; ?></a></li>
                        <li><a href="charts-chartjs.php" data-key="t-chartjs-charts"><?php echo $language["Chartjs"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-aperture icon nav-icon"></i>
                        <span class="menu-item" data-key="t-icons"><?php echo $language["Icons"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-feather.php" data-key="t-feather"><?php echo $language["Feather"]; ?></a></li>
                        <li><a href="icons-boxicons.php" data-key="t-boxicons"><?php echo $language["Boxicons"]; ?></a></li>
                        <li><a href="icons-materialdesign.php" data-key="t-material-design"><?php echo $language["Material_Design"]; ?></a></li>
                        <li><a href="icons-dripicons.php" data-key="t-dripicons"><?php echo $language["Dripicons"]; ?></a></li>
                        <li><a href="icons-fontawesome.php" data-key="t-font-awesome"><?php echo $language["Font_awesome"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-map icon nav-icon"></i>
                        <span class="menu-item" data-key="t-maps"><?php echo $language["Maps"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.php" data-key="t-google"><?php echo $language["Google"]; ?></a></li>
                        <li><a href="maps-vector.php" data-key="t-vector"><?php echo $language["Vector"]; ?></a></li>
                        <li><a href="maps-leaflet.php" data-key="t-leaflet"><?php echo $language["Leaflet"]; ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-share-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-multi-level"><?php echo $language["Multi_Level"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1.1"><?php echo $language["Level_1_1"]; ?></a></li>
                        <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2"><?php echo $language["Level_1_2"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2.1"><?php echo $language["Level_2_1"]; ?></a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2.2"><?php echo $language["Level_2_2"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->