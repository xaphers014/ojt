<div class='main-container'>
	<!-- Page wrapper  -->
	<div class="page-wrapper">
		<!-- Container fluid  -->
		<div class="container-fluid">
			<div class='card-content'>
				<h1>Welcome
					<?= $this->session->userdata('username')?>!</h1>
				<p>Here is today's newsletter!</p>
				<ul>
					<li>Last time signed in: 4/22/18 2:31pm</li>
				</ul>
			</div>

			<div class="row">
				<div class='col-xs-12 col-sm-4 col-md-4'>
					<div class='card-content'>
						<div class='dashboard-notify'>
							<a href='<?= base_url("Company/pending_apps")?>'>
								<div class='dashboard-badge'>
									<span id='pending_app_no' class='dashboard-badge-no'></span>
								</div>
							</a>
							<div class="text-center">
								<div class="dashboard-badge-label">
									<h4>Pending Applications</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class='col-xs-12 col-sm-4 col-md-4'>
					<div class='card-content'>
						<div class='dashboard-notify'>
							<a href='<?= base_url("Company/post_job")?>'>
								<div class='dashboard-badge'>
									<span id='posted_jobs_no' class='dashboard-badge-no'></span>
								</div>
							</a>
							<div class="text-center">
								<div class="dashboard-badge-label">
									<h4>Posted Jobs</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class='col-xs-12 col-sm-4 col-md-4'>
					<div class='card-content'>
						<div class='dashboard-notify'>
							<a href='<?= base_url("Applicant/")?>'>
								<div class='dashboard-badge'>
									<span id='' class='dashboard-badge-no'></span>
								</div>
							</a>
							<div class="text-center">
								<div class="dashboard-badge-label">
									<h4>Employees</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
