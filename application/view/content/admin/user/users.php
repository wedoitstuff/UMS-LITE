<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Post-->
  <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
      <!--begin::Card-->
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
              <!--begin::Add user-->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                  <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->Add User</button>
              <!--end::Add user-->
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
      <!--end::Card-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Post-->
</div>
<!--end::Content-->
