<div class='main-container'>
	<!-- Page wrapper  -->
	<div class="page-wrapper">
		<!-- Container fluid  -->
		<div class="container-fluid">
			<div class='card-content'>
				<p class='path-nav'><a href="<?= base_url("Applicant/dashboard")?>">Home</a>
					<i class="fa fa-chevron-right"></i> Cancelled Application
                </p>
			</div>
			<div class='card-content'>
				<div class='card-title'>
					<h1>Cancelled Application</h1>
				</div>
				<div class='card-body'>
					<div class="table-responsive">
						<table id='table_id' class='table table-striped table-hover'>
							<thead>
								<tr>
									<th scope="col">Company Name</th>
									<th scope="col">Company HR</th>
									<th scope="col">Position</th>
									<th scope="col">Requirements</th>
									<th scope="col">Date Posted</th>
									<th scope="col">Date Applied</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody id='show_cancelled_application'>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="reapply_application" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-form" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h1 class="modal-title"></h1>
			</div>
			<div id="job_desc">

			</div>
			<div class="modal-footer">
				<button id="confirm_cancel" class="btn btn-primary">
					<i class='fa fa-check btn-icon'></i>Confirm Cancellation</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<script>
	var page_info = 'application';
</script>
