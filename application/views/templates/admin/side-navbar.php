<nav class='side-navbar-container' style='padding:0;'>
	<div class='ustp-menu'>
		<div class='watermark'>
			<h1>USTP</h1>
		</div>
		<div class='side-nav-close'>
			<a type='button' id='closeNav'>
				<i class='fa fa-times'></i>
			</a>
		</div>
	</div>
	<ul class='side-navbar'>
		<a href="<?= base_url('Admin/dashboard');?>">
			<li>
				<i class='fa fa-clipboard nav-icon'></i>Dashboard</li>
		</a>
		<a href="<?= base_url('Admin/company');?>">
			<li>
				<i class='fa fa-briefcase nav-icon'></i>Company</li>
		</a>
		<a href="<?= base_url('Admin/pending_company');?>">
			<li>
				<i class='fa fa-file-alt nav-icon'></i>Pending Company</li>
		</a>
		<a href="<?= base_url('Admin/applicants');?>">
			<li>
				<i class='fa fa-users nav-icon'></i>Applicants</li>
		</a>
		<a href="<?= base_url('Admin/pending_applicants');?>">
			<li>
				<i class='fa fa-file-alt nav-icon'></i>Pending Applicants</li>
		</a>
		<a href="<?= base_url('Admin/hirings');?>">
			<li>
				<i class='fa nav-icon'></i>Hirings</li>
		</a>
		<a href="<?= base_url('Admin/pending hirings');?>">
			<li>
				<i class='fa nav-icon'></i>Pending Hirings</li>
		</a>
		<a href="<?= base_url('Admin/evaluation');?>">
			<li>
				<i class='fa nav-icon'></i>Evaluation</li>
		</a>
		<a href="<?= base_url('Admin/end_of_contract');?>">
			<li>
				<i class='fa nav-icon'></i>End of Contract</li>
		</a>
	</ul>
</nav>
