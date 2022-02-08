<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <form method='post' action='<?= Config::get("URL"); ?>admin/updateSiteSettings'
                  enctype="multipart/form-data">
                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class = "card-header" style = "border-bottom: none;">
                            <h5 class="card-title py-4">Site Identity</h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card-body py-5">
                                    <div class='row py-4'>
                                        <div class="form-group col-6">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">Company Name</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   id="formGroupExampleInput" placeholder="e.g. My Website"
                                                   name='siteTitle' value='<?= Request::siteDetails('siteTitle'); ?>'/>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput2"
                                                       class="form-label fw-bolder text-dark fs-6">Contact email</label>
                                                <input type="text"
                                                       class="form-control form-control-lg form-control-solid"
                                                       id="formGroupExampleInput2"
                                                       placeholder="e.g. email@mywebsite.com" name='contactEmail'
                                                       value='<?= Request::siteDetails('contactEmail'); ?>'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row py-4'>
                                        <div class="form-group col-6">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">Site Logo Light
                                                (Current: <?= $_ENV['filePathLight']; ?>)</label>
                                            <input class="form-control form-control-lg form-control-solid" type="file"
                                                   id="formFile" name='filePathLight'>
                                            <div class='row mt-5 bg-dark py-5 text-light'>
                                                <div class='col mx-auto text-center'>
                                                    <?php
                                                        echo Request::siteLogo('filePathLight');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">Site Logo Dark
                                                (Current: <?= $_ENV['filePathDark']; ?>)</label>
                                            <input class="form-control form-control-lg form-control-solid" type="file"
                                                   id="formFile" name='filePathDark'>
                                            <div class='row mt-5 py-5 bg-light'>
                                                <div class='col mx-auto text-center'>
                                                    <?php
                                                    echo Request::siteLogo('filePathDark');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5">
                        <div class = "card-header" style = "border-bottom: none;">
                            <h5 class="card-title py-4">Theme Chooser</h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body py-5">

                                            <div class='row py-4'>
                                                <div class = 'form-group col-4'>
                                                    <!--begin::Option-->
                                                    <input type="radio" class="btn-check" name="THEME" value="simple" <?= ($_ENV['THEME'] == "simple" ? 'checked = "checked"' : null); ?>  id="kt_radio_buttons_2_option_1"/>
                                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_radio_buttons_2_option_1">
                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                        <span class="svg-icon svg-icon-4x me-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->

                                                        <span class="d-block fw-bold text-start">
                                                            <span class="text-dark fw-bolder d-block fs-3">Simple</span>
                                                            <span class="text-muted fw-bold fs-6">
                                                                A clean, minimalistic interface, tastefully coloured
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <div class = 'form-group col-4'>
                                                    <!--begin::Option-->
                                                    <input type="radio" class="btn-check" name="THEME" value="elegant" <?= ($_ENV['THEME'] == "elegant" ? 'checked = "checked"' : null); ?>  id="kt_radio_buttons_2_option_2"/>
                                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_radio_buttons_2_option_2">
                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                        <span class="svg-icon svg-icon-4x me-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M6.45801 14.775L9.22501 17.542C11.1559 16.3304 12.9585 14.9255 14.605 13.349L10.651 9.39502C9.07452 11.0415 7.66962 12.8441 6.45801 14.775Z" fill="black"/>
<path d="M9.19301 17.51C9.03401 19.936 6.76701 21.196 3.55701 21.935C3.34699 21.9838 3.12802 21.9782 2.92074 21.9189C2.71346 21.8596 2.52471 21.7484 2.37231 21.5959C2.2199 21.4434 2.10886 21.2545 2.04967 21.0472C1.99048 20.8399 1.98509 20.6209 2.034 20.411C2.772 17.201 4.03401 14.934 6.45801 14.775L9.19301 17.51ZM21.768 4.43697C21.9476 4.13006 22.0204 3.77232 21.9751 3.41963C21.9297 3.06694 21.7687 2.73919 21.5172 2.48775C21.2658 2.2363 20.9381 2.07524 20.5854 2.02986C20.2327 1.98449 19.8749 2.0574 19.568 2.23701C16.2817 4.20292 13.2827 6.61333 10.656 9.39998L14.61 13.354C17.395 10.7252 19.8037 7.72455 21.768 4.43697Z" fill="black"/>
</svg>
                                                        </span>
                                                        <!--end::Svg Icon-->

                                                        <span class="d-block fw-bold text-start">
                                                            <span class="text-dark fw-bolder d-block fs-3">Elegant</span>
                                                            <span class="text-muted fw-bold fs-6">
                                                                A fancy blend of additional curves and splashes of colour
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <div class = 'form-group col-4'>
                                                    <!--begin::Option-->
                                                    <input type="radio" class="btn-check" name="THEME" value="trendy" <?= ($_ENV['THEME'] == "trendy" ? 'checked = "checked"' : null); ?>  id="kt_radio_buttons_2_option_3"/>
                                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_radio_buttons_2_option_3">
                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                        <span class="svg-icon svg-icon-4x me-4 ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z" fill="black"/>
<path d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z" fill="black"/>
</svg>
                                                        </span>
                                                        <!--end::Svg Icon-->

                                                        <span class="d-block fw-bold text-start">
                                                            <span class="text-dark fw-bolder d-block fs-3">Trendy</span>
                                                            <span class="text-muted fw-bold fs-6">
                                                                Bold, a classic dashboard reborn with stunning colour
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5 py-4">
                        <div class = "card-header" style = "border-bottom: none;">
                            <h5 class="card-title py-4">Google Services</h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body py-5">
                                            <div class='row py-4'>
                                                <div class="form-group col-6">
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-warning">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-warning">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z"
                                                                  fill="black"/>
                                                            <path opacity="0.3"
                                                                  d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z"
                                                                  fill="black"/>
                                                            </svg>
                                                                </span>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                                            <!--end:Icon-->

                                                            <!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Enable Google Analytics</span>
														<span class="fs-7 text-muted">By unselecting this, you will no longer be able to use google analytics</span>
													</span>
                                                            <!--end:Info-->
												</span>
                                                        <!--end:Label-->

                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
                                                           name="GOOGLE_ANALYTICS" <?= ($_ENV['GOOGLE_ANALYTICS'] == 1 ? 'checked = "checked"' : null); ?>/>
												</span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <div class="form-group col-6">
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-dark">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-danger">
                                                                <img alt="Logo" src="<?=  "themes/" . Config::get("THEME"); ?>/assets/media/svg/brand-logos/google-icon.svg" class="h-20px " />
                                                            </span>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                                            <!--end:Icon-->

                                                            <!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Enable Google Site Verification (META)</span>
														<span class="fs-7 text-muted">By unselecting this, you will no longer be able to verify your site using Google META tag</span>
													</span>
                                                            <!--end:Info-->
												</span>
                                                        <!--end:Label-->

                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
                                                           name="GOOGLE_META" <?= ($_ENV['GOOGLE_META'] == 1 ? 'checked = "checked"' : null); ?>/>
												</span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                            </div>
                                            <div class='row py-4'>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Google Analytics
                                                        Code</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput2"
                                                           placeholder="e.g. UA-1234567" name='GOOGLE_ANALYTICS_CODE'
                                                           value='<?= Request::siteDetails('GOOGLE_ANALYTICS_CODE'); ?>'>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Google META Tag</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput2"
                                                           placeholder="e.g. <meta name='google-site-verification' content='.......' />" name='GOOGLE_META_TAG'
                                                           value='<?= Request::siteDetails('GOOGLE_META_TAG'); ?>'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5 py-4">
                        <div class = "card-header" style = "border-bottom: none;">
                            <h5 class="card-title py-4">Custom Elements</h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-body py-5">
                                            <div class='row py-4'>
                                                <div class="form-group col-6">
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-primary">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M18 22C19.7 22 21 20.7 21 19C21 18.5 20.9 18.1 20.7 17.7L15.3 6.30005C15.1 5.90005 15 5.5 15 5C15 3.3 16.3 2 18 2H6C4.3 2 3 3.3 3 5C3 5.5 3.1 5.90005 3.3 6.30005L8.7 17.7C8.9 18.1 9 18.5 9 19C9 20.7 7.7 22 6 22H18Z" fill="black"/>
                                                            <path d="M18 2C19.7 2 21 3.3 21 5H9C9 3.3 7.7 2 6 2H18Z" fill="black"/>
                                                            <path d="M9 19C9 20.7 7.7 22 6 22C4.3 22 3 20.7 3 19H9Z" fill="black"/>
                                                            </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                                            <!--end:Icon-->

                                                            <!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Enable Custom Header Links</span>
														<span class="fs-7 text-muted">Perfect for adding extra style sheet links or meta tags</span>
													</span>
                                                            <!--end:Info-->
												</span>
                                                        <!--end:Label-->

                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
                                                           name="CUSTOM_HEADER" <?= ($_ENV['CUSTOM_HEADER'] == 1 ? 'checked = "checked"' : null); ?>/>
												</span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <div class="form-group col-6">
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="black"/>
                                                                <path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="black"/>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                                            <!--end:Icon-->

                                                            <!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Enable Custom Scripts</span>
														<span class="fs-7 text-muted">Enable custom scripts, ensure any code is encapsulated in its correct tags</span>
													</span>
                                                            <!--end:Info-->
												</span>
                                                        <!--end:Label-->

                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
                                                           name="CUSTOM_SCRIPT" <?= ($_ENV['CUSTOM_SCRIPT'] == 1 ? 'checked = "checked"' : null); ?>/>
												</span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                            </div>
                                            <div class='row py-4'>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Custom Header Content</label>
                                                    <textarea rows="7"
                                                              class="form-control form-control-lg form-control-solid"
                                                              id="formGroupExampleInput2"
                                                              placeholder='e.g <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">' name='CUSTOM_HEADER_CONTENT'
                                                    ><?= Request::siteDetails('CUSTOM_HEADER_CONTENT'); ?></textarea>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Custom Scripts Content</label>
                                                    <textarea rows="7"
                                                              class="form-control form-control-lg form-control-solid"
                                                              id="formGroupExampleInput2"
                                                              placeholder='e.g <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>' name='CUSTOM_SCRIPT_CONTENT'><?= Request::siteDetails('CUSTOM_SCRIPT_CONTENT'); ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5 py-4 ">
                        <div class="row">
                            <div class="col">
                                <div class="card-body py-5">
                                    <div class="d-grid gap-2">
                                        <input type='submit' value='Update settings' class='btn btn-lg btn-primary'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
