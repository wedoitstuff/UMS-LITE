<?php
if (Session::userIsLoggedIn()){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<!--begin::Head-->
	<head><base href="<?= Config::get("URL"); ?>">
		<title><?= $this->page_name . " || " . Request::siteDetails('siteTitle'); ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?=  "themes/" . Config::get("THEME"); ?>/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?=  "themes/" . Config::get("THEME"); ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=  "themes/" . Config::get("THEME"); ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?=  "themes/" . Config::get("THEME"); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=  "themes/" . Config::get("THEME"); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=  "themes/" . Config::get("THEME"); ?>/assets/plugins/custom/cookiealert/cookiealert.bundle.css" rel="stylesheet" type="text/css"/>
        <?php
        if($_ENV['CUSTOM_HEADER'] == 1){
            echo $_ENV['CUSTOM_HEADER_CONTENT'];
        }
        if($_ENV['GOOGLE_META'] == 1){
            echo $_ENV['GOOGLE_META_TAG'];
        }
        ?>
		<!--end::Global Stylesheets Bundle-->	
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
                <div id="kt_aside" class="aside pt-7 pb-4 pb-lg-7 pt-lg-17" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                    <!--begin::Brand-->
                    <div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">
                        <!--begin::Logo-->
                        <a href="dashboard">
                            <?php
                                echo Request::siteLogo('filePathDark');
                            ?>
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Aside user-->

                    <!--end::Aside user-->
                    <!--begin::Aside menu-->
                    <div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
                        <!--begin::Aside Menu-->
                        <div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded fw-bold my-auto" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<a class="menu-link <?= Request::active($this->page_name, 'Dashboard'); ?>" href="dashboard">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item <?= Request::show('user'); ?> menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Account</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link <?= Request::active($this->page_name, 'Account Overview'); ?>" href="user">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link <?= Request::active($this->page_name, 'Account Settings'); ?>" href="user/settings">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Settings</span>
											</a>
										</div>
									</div>
								</div>
								<?php if(Session::get("user_account_type") == 7){ ?>
                                <div data-kt-menu-trigger="click" class="menu-item <?= Request::show('admin'); ?> menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
												<span class="svg-icon svg-icon-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
                                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
                                                    </svg>
                                                </span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Administration</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<div class="menu-item">
												<a class="menu-link <?= Request::active($this->page_name, 'Admin Overview'); ?>" href="admin">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
											</div>

											<div data-kt-menu-trigger="click" class="menu-item <?= Request::showParentChild('users,groups,subscriptions'); ?> menu-accordion">
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">User Management</span>
													<span class="menu-arrow"></span>
												</span>
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<div class="menu-item">
														<a class="menu-link <?= Request::active($this->page_name, 'User Management - Users'); ?>" href="admin/users">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
														</a>
													</div>
<!--													<div class="menu-item">-->
<!--														<a class="menu-link --><?//= Request::active($this->page_name, 'User Management - Groups'); ?><!--" href="admin/groups">-->
<!--															<span class="menu-bullet">-->
<!--																<span class="bullet bullet-dot"></span>-->
<!--															</span>-->
<!--															<span class="menu-title">User Groups</span>-->
<!--														</a>-->
<!--													</div>-->
												</div>
											</div>
										</div>
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<div data-kt-menu-trigger="click" class="menu-item <?= Request::showParentChild('basic,auth,payment,mail,backups,about'); ?> menu-accordion">
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Configuration</span>
													<span class="menu-arrow"></span>
												</span>
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<div class="menu-item">
														<a class="menu-link <?= Request::active($this->page_name, 'Site Settings - Basic'); ?>" href="admin/configuration/basic">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Basic</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link <?= Request::active($this->page_name, 'Site Settings - Auth'); ?>" href="admin/configuration/auth">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Authentication</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link <?= Request::active($this->page_name, 'Site Settings - Mail'); ?>" href="admin/configuration/mail">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Mail Settings</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link <?= Request::active($this->page_name, 'Site Settings - Backups'); ?>" href="admin/configuration/backups">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Backups</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
                    <!--begin::Footer-->
                    <div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
                        <!--begin::User panel-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-40px">
                                    <img alt="Logo" src="<?=  $this->user_avatar_file; ?>" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::User info-->
                                <div class="ms-2">
                                    <!--begin::Name-->
                                    <a href="user" class="text-gray-800 text-hover-primary fs-6 fw-bolder lh-1"><?= Request::userFullName(); ?></a>
                                    <!--end::Name-->
                                    <!--begin::Major-->
                                    <span class="text-muted fw-bold d-block fs-7 lh-1"><?= Request::userLevelByInt($this->user_account_type); ?></span>
                                    <!--end::Major-->
                                </div>
                                <!--end::User info-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::User menu-->
                            <div class="ms-1">
                                <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                    <span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
											<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
										</svg>
									</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="<?=  $this->user_avatar_file; ?>" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5"><?= Request::userFullName(); ?></div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?= $this->user_email; ?></a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="user/index" class="menu-link px-5">Account Overview</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="login/logout" class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            </div>
                            <!--end::User menu-->
                        </div>
                        <!--end::User panel-->
                    </div>
                    <!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
                            <!--begin::Page title-->
                            <div class="page-title d-flex justify-content-center flex-column me-5">
                                <!--begin::Title-->
                                <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0"><?= $this->page_name; ?></h1>
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="dashboard" class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <!--end::Item-->
                                    <?= Request::breadcrumb(); ?>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title=-->
                            <!--begin::Wrapper-->
                            <div class="d-flex d-lg-none align-items-center ms-n3 me-2">
                                <!--begin::Aside mobile toggle-->
                                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-1 mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Aside mobile toggle-->
                                <!--begin::Logo-->
                                <a href="dashboard" class="d-flex align-items-center">
                                    <?php echo   Request::siteLogo('filePathDark'); ?>
                                </a>
                                <!--end::Logo-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-center flex-shrink-0">
                                <!--begin::Theme mode-->
                                <div class="d-flex align-items-center ms-3 ms-lg-4">
                                </div>
                                <!--end::Theme mode-->
                                <!--begin::Sidebar Toggler-->
                                <!--end::Sidebar Toggler-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->

				<?php }else{ ?>
					<html lang="en">
					<!--begin::Head-->
					<head><base href="<?= Config::get("URL"); ?>">
						<title>Authentication - <?= Request::siteDetails('siteTitle'); ?></title>
						<meta charset="utf-8" />
						<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
						<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
						<meta name="viewport" content="width=device-width, initial-scale=1" />
						<meta property="og:locale" content="en_US" />
						<meta property="og:type" content="article" />
						<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
						<meta property="og:url" content="https://keenthemes.com/metronic" />
						<meta property="og:site_name" content="Keenthemes | Metronic" />
						<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
						<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
						<!--begin::Fonts-->
						<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
						<!--end::Fonts-->
						<!--begin::Global Stylesheets Bundle(used by all pages)-->
						<link href="<?=  "themes/" . Config::get("THEME"); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
						<link href="<?=  "themes/" . Config::get("THEME"); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
						<!--end::Global Stylesheets Bundle-->
                        <?php
                        if($_ENV['CUSTOM_HEADER'] == 1){
                            echo $_ENV['CUSTOM_HEADER_CONTENT'];
                        }
                        if($_ENV['GOOGLE_META'] == 1){
                            echo $_ENV['GOOGLE_META_TAG'];
                        }
                        ?>
					</head>
					<body id="kt_body" class="bg-body">
					<?php } ?>
