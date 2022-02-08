<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Post-->
  <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
      <?php if(Request::updateRequired()) { ?>
        <div class = 'row g-5 g-xl-8 mb-5'>
          <div class = 'col-xl-12'>
            <div class="notice d-flex bg-light-info rounded border-info border border-dashed p-6">
              <!--begin::Icon-->
              <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
              <span class="svg-icon svg-icon-2tx svg-icon-info me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"/>
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
                </svg>
              </span>
              <!--end::Svg Icon-->
              <!--end::Icon-->
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                <!--begin::Content-->
                <div class="mb-3 mb-md-0 fw-bold">
                  <h4 class="text-gray-900 fw-bolder">Update available</h4>
                  <div class="fs-6 text-gray-700 pe-7">Your version of UMS Framework (<?= Config::get("VERSION_LONG_TITLE"); ?>) is out of date. Version: <?= Request::RemoteVersion(); ?> is now available. We recommend updating now.</div>
                </div>
                <!--end::Content-->
                <!--begin::Action-->
                <a href="admin/check_update" class="btn btn-info px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Update Now</a>
                <!--end::Action-->
              </div>
              <!--end::Wrapper-->
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
          <!--begin::Statistics Widget 5-->
          <a href="admin/users" class="card bg-body hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
              <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com014.svg-->
              <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
                <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
                <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
                <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
              </svg></span>
              <!--end::Svg Icon-->
              <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5"><?= Request::userCount(); ?></div>
              <div class="fw-bold text-gray-400">Users</div>
            </div>
            <!--end::Body-->
          </a>
          <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-4">
          <!--begin::Statistics Widget 5-->
          <a href="admin/user_groups" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
              <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
              <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="black"></path>
                  <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="black"></path>
                  <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="black"></path>
                </svg>
              </span>
              <!--end::Svg Icon-->
              <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5"><?= Request::userGroupCount(); ?></div>
              <div class="fw-bold text-gray-100">User Groups</div>
            </div>
            <!--end::Body-->
          </a>
          <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-4">
          <!--begin::Statistics Widget 5-->
          <a href="admin/check_update" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
              <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
              <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="black"></path>
                  <path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="black"></path>
                </svg>
              </span>
              <!--end::Svg Icon-->
              <div class="text-white fw-bolder fs-2 mb-2 mt-5">UMS Version</div>
              <div class="fw-bold text-white"><?= Config::get('VERSION_LONG_TITLE') . Request::UMSversion(); ?></div>
            </div>
            <!--end::Body-->
          </a>
          <!--end::Statistics Widget 5-->
        </div>
      </div>
      <div class = "row g-5 g-xl-8">
        <div class = 'col-xl-12'>
          <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
              <!--begin::Card title-->
              <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                  <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                      <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                </div>
                <!--end::Search-->
              </div>
              <!--begin::Card title-->
              <!--begin::Card toolbar-->
              <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                  <div class = 'card-title m-0'>
                    <h3 class = 'card-title m-0'>User List</h3>
                  </div>
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                  <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                  </div>
                  <!--end::Group actions-->
                </div>
                <!--end::Card toolbar-->
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body py-4">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                  <!--begin::Table head-->
                  <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                      <th class="min-w-125px">User</th>
                      <th class="min-w-125px">Role</th>
                      <th class="min-w-125px">Email Verified?</th>
                      <th class="min-w-125px">Status</th>
                      <th class="min-w-125px">Profile Link</th>
                      <th class="text-end min-w-100px">Actions</th>
                    </tr>
                    <!--end::Table row-->
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody class="text-gray-600 fw-bold">
                    <?php foreach ($this->users as $user) { ?>
                    <!--begin::Table row-->
                    <tr>
                      <!--begin::User=-->
                      <td class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                          <a href="admin/edit_user/<?= $user->user_id; ?>">
                            <?php if (isset($user->user_avatar_link)) { ?>
                              <div class="symbol-label">
                                <img src="<?= $user->user_avatar_link; ?>" alt="<?= $user->user_full_name; ?>" class="w-100" />
                              </div>
                            <?php } ?>

                          </a>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::User details-->
                        <div class="d-flex flex-column">
                          <a href="admin/edit_user/<?= $user->user_id; ?>" class="text-gray-800 text-hover-primary mb-1"><?= $user->user_full_name; ?></a>
                          <span><?= $user->user_email; ?></span>
                        </div>
                        <!--begin::User details-->
                      </td>
                      <!--end::User=-->
                      <!--begin::Role=-->
                      <td><?= Request::userLevelByInt($user->user_account_type); ?></td>
                      <!--end::Role=-->
                      <!--begin::Last login=-->
                      <td>
                        <div class="badge badge-<?= ($user->user_active == 0 ? 'light' : 'success') ?> fw-bolder"><?= ($user->user_active == 0 ? 'No' : 'Yes'); ?></div>
                      </td>
                      <!--end::Last login=-->
                      <!--begin::Last login=-->
                      <td>
                        <div class="badge badge-<?= ($user->user_deleted == 1 ? 'warning' : 'info') ?> fw-bolder"><?= ($user->user_deleted == 1 ? 'Deactivated' : 'Activated'); ?></div>
                      </td>
                      <!--end::Last login=-->
                      <!--begin::Two step=-->
                      <td><a href="<?= Config::get('URL') . 'profile/u/' . $user->user_name; ?>">Profile</a></td>
                      <!--end::Two step=-->
                      <!--begin::Action=-->
                      <td class="text-end">
                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                          </svg>
                        </span>
                        <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="javascript:void();" class="menu-link px-3">Edit</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="admin/<?= ($user->user_deleted == 0 ? 'delete_user' : 'enable_user') ?>/<?= $user->user_id; ?>" class="menu-link px-3" data-kt-users-table-filter="delete_row"><?= ($user->user_deleted == 0 ? 'Delete' : 'Restore') ?></a>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                      </td>
                      <!--end::Action=-->
                    </tr>
                    <!--end::Table row-->
                    <?php } ?>
                  </tbody>
                  <!--end::Table body-->
                </table>
                  <!--end::Table-->
                </div>
                <!--end::Card body-->
              </div>
            </div>
          </div>

        </div>
        <!--end::Container-->
      </div>
      <!--end::Post-->
    </div>
    <!--end::Content-->
