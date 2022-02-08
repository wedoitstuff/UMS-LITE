<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Post-->
  <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
      <!--begin::Navbar-->
      <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
          <!--begin::Details-->
          <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
              <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                <img src="<?=  $this->user_avatar_file; ?>" alt="image" />
              </div>
            </div>
            <!--end::Pic-->
            <!--begin::Info-->
            <div class="flex-grow-1">
              <!--begin::Title-->
              <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                <!--begin::User-->
                <div class="d-flex flex-column">
                  <!--begin::Name-->
                  <div class="d-flex align-items-center mb-2">
                    <a href="javascript:void();" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1"><?= Request::userFullName(); ?></a>
                    <?php if($this->user_account_type == 7){ ?>
                      <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3 disabled" disabled>Super user</a>
                    <?php }elseif($this->user_account_type > 1 && $this->user_account_type < 7){ ?>
                      <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3 disabled" disabled>Pro user</a>
                    <?php }else{ ?>
                      <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3 " data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to pro</a>
                    <?php } ?>
                  </div>
                  <!--end::Name-->
                  <!--begin::Info-->
                  <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                    <span class="svg-icon svg-icon-4 me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                      </svg>
                    </span>
                    <!--end::Svg Icon--><?= $this->user_name; ?></a>
                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">

                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                    <span class="svg-icon svg-icon-4 me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
                      </svg>
                    </span>
                    <!--end::Svg Icon--><?= $this->user_email; ?></a>
                  </div>
                  <!--end::Info-->
                </div>
                <!--end::User-->
              </div>
              <!--end::Title-->
            </div>
            <!--end::Info-->
          </div>
          <!--end::Details-->
          <!--begin::Navs-->
          <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
              <a class="nav-link text-active-primary ms-0 me-10 py-5" href="user">Overview</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
              <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="user/settings">Settings</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
              <a class="nav-link text-active-primary ms-0 me-10 py-5" href="/user/api">API Keys</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
              <a class="nav-link text-active-primary ms-0 me-10 py-5" href="/user/deployments">Deployments</a>
            </li>
            <!--end::Nav item-->
          </ul>
          <!--begin::Navs-->
        </div>
      </div>
      <!--end::Navbar-->
      <!--begin::Basic info-->
      <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
          <!--begin::Card title-->
          <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Profile Details</h3>
          </div>
          <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
          <!--begin::Form-->
          <form  class="form" action="<?php echo Config::get('URL'); ?>user/uploadAvatar_action" method="post" enctype="multipart/form-data">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
              <!--begin::Input group-->
              <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                  <!--begin::Image input-->
                  <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?=  "themes/" . Config::get("THEME"); ?>/assets/media/svg/avatars/blank.svg')">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?=  $this->user_avatar_file; ?>)"></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                      <i class="bi bi-pencil-fill fs-7"></i>
                      <!--begin::Inputs-->
                      <input type="file" name="avatar_file" accept=".png, .jpg, .jpeg" />
                      <input type="hidden" name="avatar_remove" />
                      <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                      <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                      <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                      <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Remove-->
                  </div>
                  <!--end::Image input-->
                  <!--begin::Hint-->
                  <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                  <!--end::Hint-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                  <!--begin::Row-->
                  <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-12 fv-row">
                      <input type="text" name="user_full_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="<?= Request::userFullName(); ?>" />
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Row-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <?php /*
              <!--begin::Input group-->
              <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                  <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">
                  <span class="required">Contact Phone</span>
                  <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                </label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                  <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                  <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              */ ?>
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
              <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
              <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
            </div>
            <!--end::Actions-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Basic info-->
      <!--begin::Sign-in Method-->
      <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
          <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Sign-in Method</h3>
          </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_signin_method" class="collapse show">
          <!--begin::Card body-->
          <div class="card-body border-top p-9">
            <!--begin::Profile Name Change-->
            <div class="d-flex flex-wrap align-items-center">
              <!--begin::Label-->
              <div id="kt_signin_email">
                <div class="fs-6 fw-bolder mb-1">Email Address</div>
                <div class="fw-bold text-gray-600"><?= $this->user_email; ?></div>
              </div>
              <!--end::Label-->
              <!--begin::Edit-->
              <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                <!--begin::Form-->
                <form class="form" novalidate="novalidate" action="<?php echo Config::get('URL'); ?>user/editUserEmail_action" method="post">
                  <div class="row mb-6">
                    <div class="col-lg-12 mb-4 mb-lg-0">
                      <div class="fv-row mb-0">
                        <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Email Address</label>
                        <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="user_email"/>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button id="kt_signin_submit" type="submit" class="btn btn-primary me-2 px-6">Update Email</button>
                    <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                  </div>
                </form>
                <!--end::Form-->
              </div>
              <!--end::Edit-->
              <!--begin::Action-->
              <div id="kt_signin_email_button" class="ms-auto">
                <button class="btn btn-light btn-active-light-primary">Change Email Address</button>
              </div>
              <!--end::Action-->
            </div>
            <!--end::Profile Name Change-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::Email Address-->
            <div class="d-flex flex-wrap align-items-center">
              <!--begin::Label-->
              <div id="kt_signin_profile">
                <div class="fs-6 fw-bolder mb-1">Profile Name</div>
                <div class="fw-bold text-gray-600"><?= $this->user_name; ?></div>
              </div>
              <!--end::Label-->
              <!--begin::Edit-->
              <div id="kt_signin_profile_edit" class="flex-row-fluid d-none">
                <!--begin::Form-->
                <form class="form" novalidate="novalidate" action="<?php echo Config::get('URL'); ?>user/editUsername_action" method="post">
                  <div class="row mb-6">
                    <div class="col-lg-12 mb-4 mb-lg-0">
                      <div class="fv-row mb-0">
                        <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Profile Name</label>
                        <input type="text" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Profile Name" name="user_name"/>
                        <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button id="kt_profile_submit" type="submit" class="btn btn-primary me-2 px-6">Update Profile Name</button>
                    <button id="kt_profile_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                  </div>
                </form>
                <!--end::Form-->
              </div>
              <!--end::Edit-->
              <!--begin::Action-->
              <div id="kt_signin_profile_button" class="ms-auto">
                <button class="btn btn-light btn-active-light-primary">Change Profile Name</button>
              </div>
              <!--end::Action-->
            </div>
            <!--end::Email Address-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
              <!--begin::Label-->
              <div id="kt_signin_password">
                <div class="fs-6 fw-bolder mb-1">Password</div>
                <div class="fw-bold text-gray-600">************</div>
              </div>
              <!--end::Label-->
              <!--begin::Edit-->
              <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                <!--begin::Form-->
                <form method="post" action="<?php echo Config::get('URL'); ?>user/changePassword_action" name="new_password_form" class="form" novalidate="novalidate">
                  <div class="row mb-1">
                    <div class="col-lg-4">
                      <div class="fv-row mb-0">
                        <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
                        <input type="password" class="form-control form-control-lg form-control-solid" name='user_password_current' id="currentpassword" />
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="fv-row mb-0">
                        <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
                        <input type="password" class="form-control form-control-lg form-control-solid" name='user_password_new' id="newpassword" />
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="fv-row mb-0">
                        <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
                        <input type="password" class="form-control form-control-lg form-control-solid" name='user_password_repeat' id="confirmpassword" />
                      </div>
                    </div>
                  </div>
                  <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                  <div class="d-flex">
                    <button id="kt_password_submit" type="submit" name="submit_new_password" class="btn btn-primary me-2 px-6">Update Password</button>
                    <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                  </div>
                </form>
                <!--end::Form-->
              </div>
              <!--end::Edit-->
              <!--begin::Action-->
              <div id="kt_signin_password_button" class="ms-auto">
                <button class="btn btn-light btn-active-light-primary">Reset Password</button>
              </div>
              <!--end::Action-->
            </div>
            <!--end::Password-->
            <?php /*
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
              <!--begin::Icon-->
              <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
              <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
                  <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
              <!--end::Icon-->
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                <!--begin::Content-->
                <div class="mb-3 mb-md-0 fw-bold">
                  <h4 class="text-gray-900 fw-bolder">Secure Your Account</h4>
                  <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                </div>
                <!--end::Content-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                <!--end::Action-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
            */ ?>
          </div>
          <!--end::Card body-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Sign-in Method-->
      <?php /*
      <!--begin::Connected Accounts-->
      <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
          <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Connected Accounts</h3>
          </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_connected_accounts" class="collapse show">
          <!--begin::Card body-->
          <div class="card-body border-top p-9">
            <!--begin::Items-->
            <div class="py-2">
              <!--begin::Item-->
              <div class="d-flex flex-stack">
                <div class="d-flex">
                  <img src="<?=  "themes/" . Config::get("THEME"); ?>/assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
                  <div class="d-flex flex-column">
                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
                    <div class="fs-6 fw-bold text-gray-400">Plan properly your workflow</div>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <div class="form-check form-check-solid form-switch">
                    <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
                    <label class="form-check-label" for="googleswitch"></label>
                  </div>
                </div>
              </div>
              <!--end::Item-->
            </div>
            <!--end::Items-->
          </div>
          <!--end::Card body-->
          <!--begin::Card footer-->
          <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
            <button class="btn btn-primary">Save Changes</button>
          </div>
          <!--end::Card footer-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Connected Accounts-->
      */ ?>
      <!--begin::Deactivate Account-->
      <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
          <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Deactivate Account</h3>
          </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_deactivate" class="collapse show">
          <!--begin::Form-->
          <form id="kt_account_deactivate_form" class="form" action = "user/deactivate" method = "post">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
              <!--begin::Notice-->
              <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                  <!--begin::Content-->
                  <div class="fw-bold">
                    <h4 class="text-gray-900 fw-bolder">You Are Deactivating Your Account</h4>
                    <div class="fs-6 text-gray-700">Please note by deactivating your account, you will not be able to sign in, or use any active deployment tools.
                    <br />
                    <a class="fw-bolder" href="#">Learn more</a></div>
                  </div>
                  <!--end::Content-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Notice-->
              <!--begin::Form input row-->
              <div class="form-check form-check-solid fv-row">
                <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" required/>
                <label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
              </div>
              <!--end::Form input row-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
              <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-bold" >Deactivate Account</button>
            </div>
            <!--end::Card footer-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Deactivate Account-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Post-->
</div>
<!--end::Content-->
