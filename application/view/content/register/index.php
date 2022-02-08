<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
  <!--begin::Authentication - Sign-in -->
  <div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #a29bfe">
      <!--begin::Wrapper-->
      <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
        <!--begin::Content-->
        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
          <!--begin::Logo-->
          <a href="index" class="py-9 mb-5 text-light">
            <?= Request::siteLogo('filePathLight'); ?>
          </a>
          <!--end::Logo-->
          <!--begin::Title-->
          <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #dfe6e9;">Welcome to <?= Request::siteDetails('siteTitle'); ?></h1>
          <!--end::Title-->
          <!--begin::Description-->
          <p class="fw-bold fs-2" style="color: #dfe6e9;">Embrace your development
          <br />with great build tools</p>
          <!--end::Description-->
        </div>
        <!--end::Content-->
        <!--begin::Illustration-->
        <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(<?=  "themes/" . Config::get("THEME"); ?>/assets/media/illustrations/sigma-1/17.png"></div>
        <!--end::Illustration-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Aside-->
    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
      <!--begin::Content-->
      <div class="d-flex flex-center flex-column flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
          <!--begin::Form-->
          <form class="form w-100" novalidate="novalidate" method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
            <!--begin::Heading-->
            <div class="mb-10 text-center">
              <!--begin::Title-->
              <h1 class="text-dark mb-3">Create an Account</h1>
              <!--end::Title-->
              <!--begin::Link-->
              <div class="text-gray-400 fw-bold fs-4">Already have an account?
              <a href="login" class="link-primary fw-bolder">Sign in here</a></div>
              <!--end::Link-->
            </div>
            <!--end::Heading-->

            <!--begin::Input group-->
            <div class="row fv-row mb-7">
              <!--begin::Col-->
              <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name='user_first_name' autocomplete="off" />
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name='user_last_name' autocomplete="off" />
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
              <label class="form-label fw-bolder text-dark fs-6">Email</label>
              <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name='user_email' autocomplete="off" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-10 fv-row" data-kt-password-meter="true">
              <!--begin::Wrapper-->
              <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                <!--end::Label-->
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                  <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name='user_password_new' autocomplete="off" />
                  <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                  </span>
                </div>
                <!--end::Input wrapper-->
                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Hint-->
              <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
              <!--end::Hint-->
            </div>
            <!--end::Input group=-->
            <!--begin::Input group-->
            <div class="fv-row mb-5">
              <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
              <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name='user_password_repeat' autocomplete="off" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
              <label class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="ms-1 link-primary">Terms and conditions</a>.</span>
              </label>
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
              <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              </button>
            </div>
            <!--end::Actions-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Body-->
  </div>
  <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--end::Main-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Legal Notice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= $_ENV['USER_TERMS_CONDITIONS_WORDING']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>