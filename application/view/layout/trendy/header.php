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
	<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Aside Toolbarl-->
					<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
						<!--begin::Aside user-->
						<!--begin::User-->
						<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px">
								<img src="<?=  $this->user_avatar_file; ?>" alt="" />
							</div>
							<!--end::Symbol-->
							<!--begin::Wrapper-->
							<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
								<!--begin::Section-->
								<div class="d-flex">
									<!--begin::Info-->
									<div class="flex-grow-1 me-2">
										<!--begin::Username-->
										<a href="#" class="text-white text-hover-primary fs-6 fw-bold"><?= Request::userFullName(); ?></a>
										<!--end::Username-->
										<!--begin::Description-->
										<span class="text-gray-600 fw-bold d-block fs-8 mb-1"><?= $this->user_name; ?></span>
										<!--end::Description-->
									</div>
									<!--end::Info-->
									<!--begin::User menu-->
									<div class="me-n2">
										<!--begin::Action-->
										<a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
											<span class="svg-icon svg-icon-muted svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
													<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
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

										</div>
										<!--end::User account menu-->
										<!--end::Action-->
									</div>
									<!--end::User menu-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::User-->

						<!--end::Aside user-->
					</div>
					<!--end::Aside Toolbarl-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<a class="menu-link <?= Request::active($this->page_name, 'Dashboard'); ?>" href="dashboard">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Account</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item <?= Request::show('user'); ?> menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
													<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
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
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Controls</span>
									</div>
								</div>

									<div data-kt-menu-trigger="click" class="menu-item <?= Request::show('admin'); ?> menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 18.3V4H20H5C4.4 4 4 4.4 4 5V20C10.9 20 16.7 15.6 19 9.5V18.3C18.4 18.6 18 19.3 18 20C18 21.1 18.9 22 20 22C21.1 22 22 21.1 22 20C22 19.3 21.6 18.6 21 18.3Z" fill="black"></path>
													<path d="M22 4C22 2.9 21.1 2 20 2C18.9 2 18 2.9 18 4C18 4.7 18.4 5.29995 18.9 5.69995C18.1 12.6 12.6 18.2 5.70001 18.9C5.30001 18.4 4.7 18 4 18C2.9 18 2 18.9 2 20C2 21.1 2.9 22 4 22C4.8 22 5.39999 21.6 5.79999 20.9C13.8 20.1 20.1 13.7 20.9 5.80005C21.6 5.40005 22 4.8 22 4Z" fill="black"></path>
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
					<div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
						<a href="javascript::void();" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Get started with UMS">
							<span class="btn-label">Docs &amp; Components</span>
							<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
							<span class="svg-icon btn-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
									<rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
									<rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
									<rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
									<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch">
						<!--begin::Brand-->
						<div class="header-brand">
							<!--begin::Logo-->
							<a href="dashboard">
								<?=  Request::siteLogo('filePathLight'); ?>
							</a>
							<!--end::Logo-->
							<!--begin::Aside minimize-->
							<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
								<span class="svg-icon svg-icon-1 me-n1 minimize-default">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black" />
										<path d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z" fill="black" />
										<path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
								<span class="svg-icon svg-icon-1 minimize-active">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
										<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
										<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Aside minimize-->
							<!--begin::Aside toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>

							<!--end::Aside toggle-->
						</div>
						<!--end::Brand-->
						<!--begin::Toolbar-->
						<div class="toolbar d-flex align-items-stretch">
							<!--begin::Toolbar container-->
							<div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
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
								<!--end::Page title-->
								<!--begin::Action group-->
								<div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
									<!--begin::Action wrapper-->
                                    <div class="d-flex align-items-center"></div>
										<!--begin::Label-->

									<!--end::Action wrapper-->
                                    <div class="d-flex align-items-center"></div>
								</div>
								<!--end::Action group-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
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
