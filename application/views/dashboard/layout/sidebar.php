<div class="app-content">
	<div class="app-sidebar">
		<!-- tambahin class active jika mau aktif  -->
		<a href="<?php echo base_url('admin') ?>" class="app-sidebar-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard Admin">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
				<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
				<polyline points="9 22 9 12 15 12 15 22" />
			</svg>
		</a>


		<a href="<?php echo base_url(''); ?>admin/data_warga" class="app-sidebar-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Data Warga">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
				<rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
				<line x1="16" y1="2" x2="16" y2="6" />
				<line x1="8" y1="2" x2="8" y2="6" />
				<line x1="3" y1="10" x2="21" y2="10" />
			</svg>
		</a>

		<a href="<?php echo base_url(''); ?>admin/data_berkas" class="app-sidebar-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Data Berkas">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
				<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
				<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
				<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
			</svg>
		</a>

		<a href="<?php echo base_url('auth/logout'); ?>" class="app-sidebar-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Logout">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
				<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
				<polyline points="16 17 21 12 16 7"></polyline>
				<line x1="21" y1="12" x2="9" y2="12"></line>
			</svg>
		</a>
	</div>
