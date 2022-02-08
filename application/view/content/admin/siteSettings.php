<main>
	<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
		<div class="container-fluid px-4">
			<div class="page-header-content">
				<div class="row align-items-center justify-content-between pt-3">
					<div class="col-auto mb-3">
						<h1 class="page-header-title">
							<div class="page-header-icon"><i data-feather="user"></i></div>
							Site Settings
						</h1>
					</div>
						<!-- <div class="col-12 col-xl-auto mb-3">
						<a class="btn btn-sm btn-light text-primary" href="javascript:void();">
						<i class="me-1" data-feather="user-plus"></i>
						Add New User
					</a>
				</div> -->
				</div>
			</div>
		</div>
	</header>
<form method = 'post' action = '<?= Config::get("URL"); ?>admin/updateSiteSettings' enctype="multipart/form-data">
	<div class="container-fluid mt-4">
		<div class="card card-icon">
			<div class="row no-gutters">
				<div class="col">
					<div class="card-body py-5">
						<h5 class="card-title mb-5">Site Identity</h5>
						<div class = 'row'>
							<div class="form-group col-6">
								<label for="formGroupExampleInput">Site title (Displayed in the tab header, footer copyright and top nav bar)</label>
								<input type="text" class="form-control" id="formGroupExampleInput" placeholder="e.g. My Website" name = 'siteTitle' value = '<?= Request::siteDetails('siteTitle'); ?>'>
							</div>
							<div class="form-group col-6">
								<label for="formGroupExampleInput">Site Logo (Current: <?= Request::siteDetails('filePath'); ?>)</label>
								<input class="form-control" type="file" id="formFile" name = 'filePath'>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card card-icon mt-5">
			<div class="row no-gutters">
				<div class="col">
					<div class="card-body py-5">
						<h5 class="card-title mb-5">Basic Styling</h5>
						<div class = 'row'>
							<div class="form-group col-6">
								<div class="form-group">
									<label for="formGroupExampleInput3">Top navbar theme (Default: Light)</label>
									<select class = 'form-control' name = 'topBarTheme'>
										<option value = '<?= Request::siteDetails('topBarTheme'); ?>'>Current Theme</option>
										<option value = 'bg-white navbar-light'>Light Theme</option>
										<option value = 'bg-dark navbar-dark'>Dark Theme</option>
										<option value = 'bg-primary navbar-dark'>Primary Theme</option>
										<option value = 'bg-info navbar-light'>Info Theme</option>
										<option value = 'bg-success navbar-dark'>Success Theme</option>
										<option value = 'bg-warning navbar-dark'>Warning Theme</option>
										<option value = 'bg-danger navbar-dark'>Danger Theme</option>
									</select>
								</div>
							</div>
							<div class="form-group col-6">
								<div class="form-group">
									<label for="formGroupExampleInput4">Side navbar theme (Default: Dark)</label>
									<select class = 'form-control' name = 'sideBarTheme'>
										<option value = '<?= Request::siteDetails('sideBarTheme'); ?>'>Current Theme</option>
										<option value = 'sidenav-light'>Light Theme</option>
										<option value = 'sidenav-dark'>Dark Theme</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card card-icon mt-5">
			<div class="row no-gutters">
				<div class="col">
					<div class="card-body py-5">
						<h5 class="card-title mb-5">Dashboard Settings</h5>
						<div class = 'row'>
							<div class="form-group col-6">
								<label for="formGroupExampleInput2">Software version (Displayed in the footer)</label>
								<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="e.g. 1.0.0 build 13" name = 'version' value='<?= Request::siteDetails('VERSION'); ?>'>
							</div>
							<div class="form-group col-6">
								<div class="form-group">
									<label for="formGroupExampleInput2">Contact email (Displayed in the footer)</label>
									<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="e.g. email@mywebsite.com" name = 'contactEmail' value='<?= Request::siteDetails('contactEmail'); ?>'>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card card-icon mt-5 mb-5">
			<div class="row no-gutters">
				<div class="col">
					<div class="card-body py-5">
						<div class="d-grid gap-2">
						  <input type = 'submit' value = 'Update settings' class = 'btn btn-success btn-block'>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</form>
</main>
