<?php
require_once '../controller/Sesion.php';
$sesion = new Sesion();
?>

<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
	<!--begin::Menu wrapper-->
	<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
		<!--begin::Menu-->
		<div class="menu menu-rounded menu-column menu-lg-row my-lg-0 align-items-stretch fw-semibold px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
			<!--begin:Menu item-->
			<div class="menu-item me-0 position-relative">
				<a href="#" class="btn fw-bold btn-active-color-primary" id="adminMenuToggle">
					<i class="fa-solid fa-shop fs-2"></i>
				</a>
				<div id="adminDropdownMenu" class="dropdown-menu shadow rounded-3 p-4" style="min-width: 300px; display: none; position: absolute; top: 100%; left: 0; background: white; z-index: 1000;">
					<div class="fw-bold text-muted mb-3">Admin</div>
					<div class="row g-3">
						<div class="col-4 text-center">
							<i class="fa-solid fa-chart-line fs-3"></i>
							<div class="fw-bold mt-1 text-primary">Sales</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-boxes-stacked fs-3"></i>
							<div class="fw-bold mt-1">Catalog</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-tags fs-3"></i>
							<div class="fw-bold mt-1">Discounts</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-chart-pie fs-3"></i>
							<div class="fw-bold mt-1">Reports</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-users fs-3"></i>
							<div class="fw-bold mt-1">Customers</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-file-invoice fs-3"></i>
							<div class="fw-bold mt-1">Statements</div>
						</div>
						<div class="col-12 text-center border-top pt-3 mt-3">
							<i class="fa-solid fa-gear fs-3"></i>
							<div class="fw-bold mt-1">Settings</div>
						</div>
					</div>
				</div>
			</div>

			<div class="menu-item me-0">
				<a href="#" class="btn fw-bold btn-active-color-primary" id="addnewMenuToggle">
					<i class="fa-solid fa-box fs-2"></i>
				</a>
				<div id="addNewDropdownMenu" class="dropdown-menu shadow rounded-3 p-4" style="min-width: 300px; display: none; position: absolute; top: 100%; left: 0; background: white; z-index: 1000;">
					<div class="fw-bold text-muted mb-3">Add New</div>
					<div class="row g-3">
						<div class="col-4 text-center">
							<i class="fa-solid fa-shield fs-3"></i>
							<div class="fw-bold mt-1 text-primary">Product</div>
						</div>
						<div class="col-4 text-center">
							<i class="bi bi-command fs-4"></i>
							<div class="fw-bold mt-1">Digital</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-ticket fs-3"></i>
							<div class="fw-bold mt-1">Event</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-rocket fs-3"></i>
							<div class="fw-bold mt-1">Activity</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-heart fs-3"></i>
							<div class="fw-bold mt-1">Charity</div>
						</div>
						<div class="col-4 text-center">
							<i class="fa-solid fa-flag fs-3"></i>
							<div class="fw-bold mt-1">Page</div>
						</div>
					</div>
				</div>
			</div>
			<!--end:Menu item-->
			<div class="menu-item mx-12">
				<input type="text" class="form-control" placeholder="" aria-label="Buscar" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button"><i class="bi bi-search lg"></i></button>
				</div>
			</div>
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-title"> </span>
					<span class="menu-arrow d-lg-none"></span>
				</span>

			</div>
			<!--end:Menu item-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
	<!--begin::Navbar-->
	<div class="app-navbar flex-shrink-0">
		<!--begin::Notifications-->
		<div class="app-navbar-item ms-1 ms-md-4">
			<!--begin::Menu- wrapper-->
			<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
				<i class="fa-solid fa-bell fs-2"></i>
			</div>
			<!--begin::Menu-->
			<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
				<!--begin::Header-->
				<div class="d-flex flex-stack px-4 py-3 border-bottom">
					<h3 class="text-gray-800 fw-semibold fs-6">Notifications</h3>
					<span class="badge bg-light text-muted fs-8">99 total</span>
				</div>
				<!--end::Header-->

				<!--begin::Body-->
				<div class="scroll-y px-4 py-3" style="max-height: 450px; overflow-y: auto; font-size: 0.775rem;">
					<!--begin::Item-->
					<div class="d-flex align-items-start mb-4">
						<img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Adidas_Logo.svg" class="rounded-circle me-3" style="width: 40px; height: 40px;" />
						<div class="flex-grow-1">
							<div class="fw-normal text-dark">Ashwin Bose invited you to <strong>Adidas Designers</strong>.</div>
							<div class="d-flex gap-2 mt-2">
								<button class="btn btn-sm btn-primary p-1 px-2">Accept</button>
								<button class="btn btn-sm p-1 px-2">Decline</button>
							</div>
						</div>
						<span class="text-muted fs-8 ms-2">2m</span>
					</div>
					<!--end::Item-->

					<div class="d-flex align-items-start mb-4">
						<img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" style="width: 40px; height: 40px;" />
						<div class="flex-grow-1">
							<div><strong>Samantha</strong> has posted a discount on the <strong>Nike Runner Shoes</strong> on <strong>Adidas Designers</strong>.</div>
						</div>
						<span class="text-muted fs-8 ms-2">14h</span>
					</div>

					<div class="d-flex align-items-start mb-4">
						<img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" style="width: 40px; height: 40px;" />
						<div class="flex-grow-1">
							<div><strong>Samantha</strong> has given you a gift.<br />
								<span class="text-danger"><i class="fa-solid fa-gift me-1"></i>Nike Runner</span> – Tracking code <a href="#">PJC152QW2475S</a>
							</div>
						</div>
						<span class="text-muted fs-8 ms-2">14h</span>
					</div>

					<div class="d-flex align-items-start">
						<img src="https://randomuser.me/api/portraits/women/22.jpg" class="rounded-circle me-3" style="width: 40px; height: 40px;" />
						<div class="flex-grow-1">
							<div><strong>New Feature Alert!</strong><br />
								We're pleased to introduce the latest enhancements in our templating experience.
							</div>
							<button class="btn btn-sm btn-primary p-1 px-2">Complete now</button>
						</div>
						<span class="text-muted fs-8 ms-2">14h</span>
					</div>
				</div>
				<!--end::Body-->

			</div>
			<!--end::Menu-->
			<!--end::Menu wrapper-->
		</div>
		<!--end::Notifications-->
		<!--begin::config shop-->
		<div class="app-navbar-item ms-1 ms-md-4">
			<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
				<i class="fa-solid fa-shop fs-2"></i>
			</div>
		</div>
		<!--end::config shop-->
		<?php if (!$sesion->isAuthenticated()): ?>
			<!--begin::User menu sin loguear-->
			<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
				<!--begin::Menu wrapper-->
				<div class="cursor-pointer symbol symbol-35px" data-bs-toggle="modal" data-bs-target="#modal_loguin">
					<img src="../assets/media/avatars/blank.png" class="rounded-3" alt="user" />
				</div>
				<!--end::Menu wrapper-->
			</div>
			<!--end::User menu sin loguear-->
		<?php else: ?>
			<!--begin::User menu logueado-->
			<?php include '../includes/components/logged_user.php'; ?>
			<!--end::User menu logueado-->
		<?php endif; ?>

		<!-- 
		<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
			<div class="cursor-pointer symbol symbol-35px" data-bs-toggle="modal" data-bs-target="#modal_registro">
				<i class="fas fa-user-plus text-primary fs-2"></i>
			</div>
		</div>
		-->

		<!--begin::Header menu toggle-->
		<div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
			<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
				<i class="ki-duotone ki-element-4 fs-1">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</div>
		</div>
		<!--end::Header menu toggle-->
		<!--begin::Aside toggle-->
		<!--end::Header menu toggle-->
	</div>

	<script>
		const toggle_admin = document.getElementById('adminMenuToggle');
		const menu_admin = document.getElementById('adminDropdownMenu');

		toggle_admin.addEventListener('click', function(e) {
			e.preventDefault();
			menu_admin.style.display = menu_admin.style.display === 'none' || menu_admin.style.display === '' ? 'block' : 'none';
		});

		// Cierra el menú si se da click fuera
		document.addEventListener('click', function(e) {
			if (!toggle_admin.contains(e.target) && !menu_admin.contains(e.target)) {
				menu_admin.style.display = 'none';
			}
		});

		const toggle_addnew = document.getElementById('addnewMenuToggle');
		const menu_addnew = document.getElementById('addNewDropdownMenu');

		toggle_addnew.addEventListener('click', function(e) {
			e.preventDefault();
			menu_addnew.style.display = menu_addnew.style.display === 'none' || menu_addnew.style.display === '' ? 'block' : 'none';
		});

		// Cierra el menú si se da click fuera
		document.addEventListener('click', function(e) {
			if (!toggle_addnew.contains(e.target) && !menu_addnew.contains(e.target)) {
				menu_addnew.style.display = 'none';
			}
		});
	</script>

	<!--end::Navbar-->
</div>