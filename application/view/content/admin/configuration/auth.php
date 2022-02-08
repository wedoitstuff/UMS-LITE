<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<form method = 'post' action = '<?= Config::get("URL"); ?>admin/auth_settings' enctype="multipart/form-data">
				<div class="container-fluid mt-4">
					<div class="card">

						<div class="row">
							<div class="col">
								<div class="card-body py-5">
									<h5 class="card-title py-4">Registrations</h5>
									<div class = 'row py-4'>
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
															<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
															<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
															<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
															<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
															</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end:Icon-->

													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Enable Registrations</span>
														<span class="fs-7 text-muted">By unselecting this, only Super users can add people</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->

												<!--begin:Input-->
												<span class="form-check form-check-custom form-switch form-check-solid">
													<input class="form-check-input" type="checkbox"  name="REG_ENABLE" value="1" <?=  ($_ENV['REG_ENABLE'] == 1 ? 'checked = "checked"' : null); ?>/>
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
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
															<path opacity="0.5" d="M12.4343 12.4343L10.75 10.75C10.3358 10.3358 9.66421 10.3358 9.25 10.75C8.83579 11.1642 8.83579 11.8358 9.25 12.25L12.2929 15.2929C12.6834 15.6834 13.3166 15.6834 13.7071 15.2929L19.25 9.75C19.6642 9.33579 19.6642 8.66421 19.25 8.25C18.8358 7.83579 18.1642 7.83579 17.75 8.25L13.5657 12.4343C13.2533 12.7467 12.7467 12.7467 12.4343 12.4343Z" fill="black"/>
															<path d="M8.43431 12.4343L6.75 10.75C6.33579 10.3358 5.66421 10.3358 5.25 10.75C4.83579 11.1642 4.83579 11.8358 5.25 12.25L8.29289 15.2929C8.68342 15.6834 9.31658 15.6834 9.70711 15.2929L15.25 9.75C15.6642 9.33579 15.6642 8.66421 15.25 8.25C14.8358 7.83579 14.1642 7.83579 13.75 8.25L9.56569 12.4343C9.25327 12.7467 8.74673 12.7467 8.43431 12.4343Z" fill="black"/>
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
													<input class="form-check-input" type="checkbox" value="1" name="VERIFY_EMAIL" <?=  ($_ENV['VERIFY_EMAIL'] == 1 ? 'checked = "checked"' : null); ?>/>
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
								<h5 class="card-title py-4">Legal Bit</h5>
								<div class = 'row py-4'>
									<div class="col-12">
										<label for="formGroupExampleInput2" class="form-label fw-bolder text-dark fs-6">Terms & Conditions wording</label>
										<textarea name="USER_TERMS_CONDITIONS_WORDING" id="kt_docs_ckeditor_classic">
											<?= $_ENV['USER_TERMS_CONDITIONS_WORDING']  ?>
										</textarea>
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
									<input type = 'submit' value = 'Update settings' class = 'btn btn-lg btn-primary'>
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
