<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
			<div class="login d-flex align-items-center py-5 mx-auto text-light">
				<h1 class = "text-light login-heading"><?= Request::siteDetails('siteTitle'); ?></h1>
			</div>
		</div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto text-center">
              <div class = 'row mb-4'>
								<div class = 'col'>
									<h3 class="login-heading">Account Verified</h3>
								</div>
							</div>
							<div class = 'row mb-4'>
								<div class = 'col'>
									<hp class="lead">You can now access your account.</hp>
								</div>
							</div>
							<div class = 'row mb-4'>
								<div class = 'col d-grid gap-2'>
									<a href='<?= Config::get("URL"); ?>login' class='btn btn-success btn-block'>
										Login
									</a>
								</div>
							</div>

              <!-- Sign In Form -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
