<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
	<!--begin::Menu wrapper-->
	<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
		<!--begin::Menu-->
		<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
			<!--begin:Menu item-->
			<div class="menu-item me-0 me-lg-2">
				<!--begin:Menu link-->
				<a href="javascript:void(0)" class="btn btn-danger btn-color-white fw-bold">
					<i class="fa-solid fa-plus"></i>
					Create new
				</a>
				<!--end:Menu link-->
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
				<!--begin::Heading-->
				<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
					<!--begin::Title-->
					<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
						<span class="fs-8 opacity-75 ps-3">24 reports</span>
					</h3>
					<!--end::Title-->
					<!--begin::Tabs-->
					<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
						<li class="nav-item">
							<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
						</li>

					</ul>
					<!--end::Tabs-->
				</div>
				<!--end::Heading-->
				<!--begin::Tab content-->
				<div class="tab-content">
					<!--begin::Tab panel-->
					<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
						<!--begin::Items-->
						<div class="scroll-y mh-325px my-5 px-8">
							<!--begin::Item-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-35px me-4">
										<span class="symbol-label bg-light-primary">
											<i class="ki-duotone ki-abstract-28 fs-2 text-primary">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="mb-0 me-2">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
										<div class="text-gray-500 fs-7">Phase 1 development</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<span class="badge badge-light fs-8">1 hr</span>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-35px me-4">
										<span class="symbol-label bg-light-danger">
											<i class="ki-duotone ki-information fs-2 text-danger">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="mb-0 me-2">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
										<div class="text-gray-500 fs-7">Confidential staff documents</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<span class="badge badge-light fs-8">2 hrs</span>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-35px me-4">
										<span class="symbol-label bg-light-warning">
											<i class="ki-duotone ki-briefcase fs-2 text-warning">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="mb-0 me-2">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
										<div class="text-gray-500 fs-7">Corporeate staff profiles</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<span class="badge badge-light fs-8">5 hrs</span>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-35px me-4">
										<span class="symbol-label bg-light-success">
											<i class="ki-duotone ki-abstract-12 fs-2 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="mb-0 me-2">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
										<div class="text-gray-500 fs-7">New frontend admin theme</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<span class="badge badge-light fs-8">2 days</span>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-35px me-4">
										<span class="symbol-label bg-light-primary">
											<i class="ki-duotone ki-colors-square fs-2 text-primary">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="mb-0 me-2">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
										<div class="text-gray-500 fs-7">Product launch status update</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<span class="badge badge-light fs-8">21 Jan</span>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-35px me-4">
										<span class="symbol-label bg-light-info">
											<i class="ki-duotone ki-picture fs-2 text-info"></i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="mb-0 me-2">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
										<div class="text-gray-500 fs-7">Collection of banner images</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<span class="badge badge-light fs-8">21 Jan</span>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Section-->
								<div class="d-flex align-items-center">
									<!--begin::Symbol-->
									<div class="symbol symbol-35px me-4">
										<span class="symbol-label bg-light-warning">
											<i class="ki-duotone ki-color-swatch fs-2 text-warning">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
												<span class="path11"></span>
												<span class="path12"></span>
												<span class="path13"></span>
												<span class="path14"></span>
												<span class="path15"></span>
												<span class="path16"></span>
												<span class="path17"></span>
												<span class="path18"></span>
												<span class="path19"></span>
												<span class="path20"></span>
												<span class="path21"></span>
											</i>
										</span>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="mb-0 me-2">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
										<div class="text-gray-500 fs-7">Collection of SVG icons</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<span class="badge badge-light fs-8">20 March</span>
								<!--end::Label-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Items-->
						<!--begin::View more-->
						<div class="py-3 text-center border-top">
							<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
								<i class="ki-duotone ki-arrow-right fs-5">
									<span class="path1"></span>
									<span class="path2"></span>
								</i></a>
						</div>
						<!--end::View more-->
					</div>
					<!--end::Tab panel-->


				</div>
				<!--end::Tab content-->
			</div>
			<!--end::Menu-->
			<!--end::Menu wrapper-->
		</div>
		<!--end::Notifications-->
		<!--begin::config shop-->
		<div class="app-navbar-item ms-1 ms-md-4">
			<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
				<i class="fa-solid fa-book-tanakh fs-2"></i>
			</div>
		</div>
		<!--end::config shop-->
		<!--begin::Compras-->
		<div class="app-navbar-item ms-1 ms-md-4">
			<!--begin::Menu wrapper-->
			<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
				<i class="fa-solid fa-cart-shopping fs-2"></i>
			</div>
			<!--begin::My apps-->
		</div>
		<!--end::Compras-->
		<!--begin::config shop-->
		<div class="app-navbar-item ms-1 ms-md-4">
			<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
				<i class="fa-solid fa-shop fs-2"></i>
			</div>
		</div>
		<!--end::config shop-->
		<!--begin::User menu sin loguear-->
		<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
			<!--begin::Menu wrapper-->
			<div class="cursor-pointer symbol symbol-35px" data-bs-toggle="modal" data-bs-target="#modal_loguin">
				<i class="fas fa-sign-in-alt text-primary fs-2"></i>
			</div>

			<!--end::Menu wrapper-->
		</div>

		<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
			<!--begin::Menu wrapper-->
			<div class="cursor-pointer symbol symbol-35px" data-bs-toggle="modal" data-bs-target="#modal_registro">
				<i class="fas fa-user-plus text-primary fs-2"></i>
			</div>

			<!--end::Menu wrapper-->
		</div>
		<!--end::User menu sin loguear-->

		<!--begin::User menu logueado-->

		<!-- El componente se encuentra en includes/componente_usuario_logueado_top_menu.php solo
									agregarlo si el usuario se encuentra logueado -->
		<!-- include('includes/componente_usuario_logueado_top_menu.php'); ?> -->

		<!--end::User menu logueado-->

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
	<!--end::Navbar-->
</div>