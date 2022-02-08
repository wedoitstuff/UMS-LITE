<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <form method='post' action='<?= Config::get("URL"); ?>admin/mail_settings' enctype="multipart/form-data">
                <div class="container-fluid mt-4">
                    <div class="card">

                        <div class="row">
                            <div class="col">
                                <div class="card-body py-5">
                                    <h5 class="card-title py-4">Mail Basics</h5>
                                    <div class='row py-4'>
                                        <div class="form-group col-12">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-danger">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                  rx="10" fill="black"/>
															<path opacity="0.5"
                                                                  d="M12.4343 12.4343L10.75 10.75C10.3358 10.3358 9.66421 10.3358 9.25 10.75C8.83579 11.1642 8.83579 11.8358 9.25 12.25L12.2929 15.2929C12.6834 15.6834 13.3166 15.6834 13.7071 15.2929L19.25 9.75C19.6642 9.33579 19.6642 8.66421 19.25 8.25C18.8358 7.83579 18.1642 7.83579 17.75 8.25L13.5657 12.4343C13.2533 12.7467 12.7467 12.7467 12.4343 12.4343Z"
                                                                  fill="black"/>
															<path d="M8.43431 12.4343L6.75 10.75C6.33579 10.3358 5.66421 10.3358 5.25 10.75C4.83579 11.1642 4.83579 11.8358 5.25 12.25L8.29289 15.2929C8.68342 15.6834 9.31658 15.6834 9.70711 15.2929L15.25 9.75C15.6642 9.33579 15.6642 8.66421 15.25 8.25C14.8358 7.83579 14.1642 7.83579 13.75 8.25L9.56569 12.4343C9.25327 12.7467 8.74673 12.7467 8.43431 12.4343Z"
                                                                  fill="black"/>
															</svg>
															</span>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Require Email Verification</span>
														<span class="fs-7 text-muted">By unselecting this, people won't have to verify their email</span>
													</span>
                                                    <!--end:Info-->
												</span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
                                                           name="VERIFY_EMAIL" <?= ($_ENV['VERIFY_EMAIL'] == 1 ? 'checked = "checked"' : null); ?>/>
												</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="card-body py-5">
                                    <h5 class="card-title py-4">SMTP Credentials</h5>
                                    <div class='row py-4'>
                                        <div class="form-group col-12">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-info">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-info">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                      fill="black"/>
																<path opacity="0.3"
                                                                      d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                      fill="black"/>
																</svg>
															</span>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Use SMTP</span>
														<span class="fs-7 text-muted">Use this option if you want to use your own email / smtp credentials (Some servers block SMTP ports)</span>
													</span>
                                                    <!--end:Info-->
												</span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="radio" value="phpmailer"
                                                           name="EMAIL_USED_MAILER" <?= ($_ENV['EMAIL_USED_MAILER'] == "phpmailer" ? 'checked = "checked"' : null); ?> id="mailer_used"/>
												</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                    </div>

                                    <div class='row py-4'>
                                        <div class="form-group col-6">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">SMTP Host</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   id="formGroupExampleInput" placeholder="e.g. My Website"
                                                   name='EMAIL_SMTP_HOST' value='<?= $_ENV["EMAIL_SMTP_HOST"]; ?>'>

                                        </div>
                                        <div class="form-group col-6">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">SMTP Email</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   id="formGroupExampleInput" placeholder="e.g. My Website"
                                                   name='EMAIL_SMTP_USERNAME'
                                                   value='<?= $_ENV["EMAIL_SMTP_USERNAME"]; ?>'>
                                        </div>
                                    </div>
                                    <div class='row py-4'>
                                        <div class="form-group col-6">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">SMTP Password</label>
                                            <input type="password"
                                                   class="form-control form-control-lg form-control-solid"
                                                   id="formGroupExampleInput" placeholder="e.g. My Website"
                                                   name='EMAIL_SMTP_PASSWORD'
                                                   value='<?= $_ENV["EMAIL_SMTP_PASSWORD"]; ?>'>

                                        </div>
                                        <div class="form-group col-4">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">SMTP Security</label>
                                            <select class='form-select form-select-lg form-select-solid'
                                                    name='EMAIL_SMTP_ENCRYPTION'>
                                                <option value='<?= $_ENV["EMAIL_SMTP_ENCRYPTION"]; ?>'>Current
                                                    (<?= $_ENV["EMAIL_SMTP_ENCRYPTION"]; ?>)
                                                </option>
                                                <option value='ssl'>ssl</option>
                                                <option value='tls'>tls</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">SMTP Port</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   id="formGroupExampleInput" placeholder="e.g. My Website"
                                                   name='EMAIL_SMTP_PORT' value='<?= $_ENV["EMAIL_SMTP_PORT"]; ?>'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="card-body py-5">
                                    <h5 class="card-title py-4">Mailgun Credentials</h5>
                                    <div class='row py-4'>
                                        <div class="form-group col-12">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-primary">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3"
      d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
      fill="black"/>
<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
      fill="black"/>
</svg>
															</span>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Use Mailgun API</span>
														<span class="fs-7 text-muted">The Mailgun API provides a free way to send transactional emails from verified domains without firewalls blocking it. </span>
													</span>
                                                    <!--end:Info-->
												</span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="radio" value="mailgun"
                                                           name="EMAIL_USED_MAILER" <?= ($_ENV['EMAIL_USED_MAILER'] == "mailgun" ? 'checked = "checked"' : null); ?> id="mailer_used"/>
												</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                    <div class='row py-4'>
                                        <div class="form-group col-2">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">API Server
                                                Endpoint</label>
                                            <select class='form-select form-select-lg form-select-solid'
                                                    name='EMAIL_MAILGUN_SERVER'>
                                                <option value='<?= $_ENV["EMAIL_MAILGUN_SERVER"]; ?>'>Current
                                                    (<?= $_ENV["EMAIL_MAILGUN_SERVER"]; ?>)
                                                </option>
                                                <option value='eu'>EU</option>
                                                <option value='us'>US</option>
                                            </select>

                                        </div>
                                        <div class="form-group col-4">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">Mailgun API
                                                Domain</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   id="formGroupExampleInput" placeholder="e.g. My Website"
                                                   name='EMAIL_MAILGUN_DOMAIN'
                                                   value='<?= $_ENV["EMAIL_MAILGUN_DOMAIN"]; ?>'>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="formGroupExampleInput"
                                                   class="form-label fw-bolder text-dark fs-6">Mailgun API Key</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   id="formGroupExampleInput" placeholder="e.g. My Website"
                                                   name='EMAIL_MAILGUN_API' value='<?= $_ENV["EMAIL_MAILGUN_API"]; ?>'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="card-body py-5">
                                    <h5 class="card-title py-4">Email Content: Verification Email</h5>
                                    <div class='row py-4'>
                                        <div class="col-12">
                                            <div class='row py-4'>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">From Name</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_VERIFICATION_FROM_NAME'
                                                           value='<?= $_ENV["EMAIL_VERIFICATION_FROM_NAME"]; ?>'>

                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">From
                                                        Email</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_VERIFICATION_FROM_EMAIL'
                                                           value='<?= $_ENV["EMAIL_VERIFICATION_FROM_EMAIL"]; ?>'>
                                                </div>
                                            </div>
                                            <div class='row py-4'>
                                                <div class="form-group col-12">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Email
                                                        Subject</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_VERIFICATION_SUBJECT'
                                                           value='<?= $_ENV["EMAIL_VERIFICATION_SUBJECT"]; ?>'>

                                                </div>
                                            </div>
                                            <div class='row py-4'>
                                                <div class="form-group col-12">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Email
                                                        Body</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_VERIFICATION_CONTENT'
                                                           value='<?= $_ENV["EMAIL_VERIFICATION_CONTENT"]; ?>'>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-icon mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="card-body py-5">
                                    <h5 class="card-title py-4">Email Content: Password Reset Email</h5>
                                    <div class='row py-4'>
                                        <div class="col-12">
                                            <div class='row py-4'>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">From Name</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_PASSWORD_RESET_FROM_NAME'
                                                           value='<?= $_ENV["EMAIL_PASSWORD_RESET_FROM_NAME"]; ?>'>

                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">From
                                                        Email</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_PASSWORD_RESET_FROM_EMAIL'
                                                           value='<?= $_ENV["EMAIL_PASSWORD_RESET_FROM_EMAIL"]; ?>'>
                                                </div>
                                            </div>
                                            <div class='row py-4'>
                                                <div class="form-group col-12">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Email
                                                        Subject</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_PASSWORD_RESET_SUBJECT'
                                                           value='<?= $_ENV["EMAIL_PASSWORD_RESET_SUBJECT"]; ?>'>

                                                </div>
                                            </div>
                                            <div class='row py-4'>
                                                <div class="form-group col-12">
                                                    <label for="formGroupExampleInput"
                                                           class="form-label fw-bolder text-dark fs-6">Email
                                                        Body</label>
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="formGroupExampleInput" placeholder="e.g. My Website"
                                                           name='EMAIL_PASSWORD_RESET_CONTENT'
                                                           value='<?= $_ENV["EMAIL_PASSWORD_RESET_CONTENT"]; ?>'>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-icon mt-5 py-4">
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
