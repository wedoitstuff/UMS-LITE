<script src="https://cdn.tiny.cloud/1/o603afb40hzlhy1khv5usay79o0xmersnsnw1787kaaoxrcz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<form method = 'post' action = '<?= Config::get("URL"); ?>admin/about_settings' enctype="multipart/form-data">
				<div class="container-fluid mt-4">
					

				

				<div class="card card-icon mt-5">
					<div class="row">
						<div class="col">
							<div class="card-body py-5">
								<h5 class="card-title py-4">About Page - edit content</h5>
								<div class = 'row py-4'>
									<div class="col-12">
                                        <label for="basic-example" class="form-label fw-bolder text-dark fs-6">Write some about information</label>
										<textarea name="ABOUT_PAGE_WORDING"><?php if(isset($_ENV['ABOUT_PAGE_WORDING'])){echo $_ENV['ABOUT_PAGE_WORDING'];}else{echo"Let's start making an about page...";}  ?></textarea>
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
<script>
    tinymce.init({
        selector: 'textarea',
        toolbar_mode: 'floating',
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount '
        ],
    });
</script>
