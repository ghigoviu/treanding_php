<?php
    $title = "Página colaborativa";
    include '../layouts/header.php';
    include '../includes/components/product_card.php';
?>
<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <?php include_once '../includes/sidebar_menu.php'; ?>
    <!--end::Sidebar-->

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="d-flex flex-column flex-column-fluid">
                        <!-- Banner del perfil -->
                        <?php include_once "../includes/components/notif_seguidos.php" ?>

                        
                            <div class="profile-banner position-relative z-n1"></div>
                        <!-- end::Banner del perfil -->
                    </div>

                    <!-- Sidebar -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar">
                                    <div class="profile-card bg-white p-2 rounded shadow">
                                        <img src="../public/img/profile-picture.jpg" class="rounded-circle profile-picture z-3" alt="Profile Picture">
                                        <h4 class="mb-0">Steven Terrell</h4>
                                        <p class="text-muted">@sterrell</p>
                                        <div class="d-flex justify-content-center gap-4">
                                            <div>
                                                <p class="mb-0 fw-bold">46</p>
                                                <small class="text-muted">Posts</small>
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-bold">2.8k</p>
                                                <small class="text-muted">Followers</small>
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-bold">526</p>
                                                <small class="text-muted">Following</small>
                                            </div>
                                        </div>
                                        <p class="mt-2 text-muted">My name is Steven, I'm a professional outdoor photographer based in Austria.</p>
                                        <button class="subscribe-btn">Subscribe</button>
                                        <div class="mt-2">
                                            <span class="badge bg-light text-dark">#mindfulness</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item"><a href="#" class="nav-link">Todo</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link text-danger">Productos</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">PvP</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Eventos</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Experiencias</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Fundings</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Colaboraciones</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Amigos</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Términos & Condiciones</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <div class="col-md-7">
                                <div class="highlights mt-4">
                                    <h5>Highlights</h5>
                                    <div class="d-flex overflow-auto">
                                        <div class="highlight-item mx-2 text-center">
                                            <img src="../public/img/newhighlight.jpg" alt="Highlight" height="250">
                                        </div>
                                        <div class="highlight-item mx-2 text-center">
                                            <img src="../public/img/highlight1.jpg" alt="Highlight" height="250">
                                        </div>
                                        <div class="highlight-item mx-2 text-center">
                                            <img src="../public/img/highlight2.jpg" alt="Highlight" height="250">
                                        </div>
                                        <div class="highlight-item mx-2 text-center">
                                            <img src="../public/img/highlight1.jpg" alt="Highlight" height="250">
                                        </div>
                                        <div class="highlight-item mx-2 text-center">
                                            <img src="../public/img/highlight2.jpg" alt="Highlight" height="250">
                                        </div>
                                    </div>
                                </div>

                                <div class="separator separator-dashed my-5"></div>
                                <div class="d-flex flex-column flex-column-fluid">
                                    <!--begin::Row-->
                                    <h5>All products</h5>
									<div class="row g-2 g-xl-4">
										<div class="col-sm-6 col-md-4 col-xl-3 col-lg-4 col-xxl-4">
											<?php mostrarProducto(2); ?>
										</div>
										<div class="col-sm-6 col-md-4 col-xl-3 col-lg-4 col-xxl-4">
											<?php mostrarProducto(3); ?>
										</div>
										<div class="col-sm-6 col-md-4 col-xl-3 col-lg-4 col-xxl-4">
											<?php mostrarProducto(4); ?>
										</div>
										<div class="col-sm-6 col-md-4 col-xl-3 col-lg-4 col-xxl-4">
											<?php mostrarProducto(5); ?>
										</div>
										<div class="col-sm-6 col-md-4 col-xl-3 col-lg-4 col-xxl-4">
											<?php mostrarProducto(6); ?>
										</div> <!--end::Row-->
									</div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="separator separator-dashed my-5"></div>
                                <div class="mt-4">
                                    <div class="card mb-5 mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-1 pt-4">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-900">Creadores</span>
                                            </h3>
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Menu-->
                                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                    <i class="ki-duotone ki-dots-square fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </button>
                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-5">
                                                    <img src="../assets/media/avatars/300-11.jpg" class="h-50 align-self-center" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                    <!--begin:Author-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                                    <!--end:Action-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-5">
                                                    <img src="../assets/media/avatars/300-2.jpg" class="h-50 align-self-center" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                    <!--begin:Author-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Binford Ltd.</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                                    <!--end:Action-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-5">
                                                    <img src="../assets/media/avatars/300-7.jpg" class="h-50 align-self-center" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                    <!--begin:Author-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Acme Co.</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                                    <!--end:Action-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <!-- 📅 Calendario -->
                                    <div class="card mb-4">
                                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                            <span class="fw-bold">📅 Calendario</span>
                                            <i class="bi bi-gear black" style="font-size: 2rem; color: black;"></i> <!-- Icono de ajustes -->
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted">Feb 2024</p>

                                            <!-- Semana -->
                                            <div class="d-flex justify-content-between text-center">
                                                <div class="text-muted">Lun</div>
                                                <div class="text-muted">Mar</div>
                                                <div class="text-muted">Mie</div>
                                                <div class="text-muted">Jue</div>
                                                <div class="text-muted">Vie</div>
                                                <div class="text-muted">Sab</div>
                                                <div class="text-muted">Dom</div>
                                            </div>

                                            <!-- Fechas -->
                                            <div class="d-flex justify-content-between text-center mt-2">
                                                <div class="p-2 rounded bg-success text-white fw-bold">09</div>
                                                <div class="p-2">10</div>
                                                <div class="p-2">11</div>
                                                <div class="p-2">12</div>
                                                <div class="p-2">13</div>
                                                <div class="p-2">14</div>
                                                <div class="p-2">15</div>
                                            </div>
                                            <hr>
                                            <!-- Próximos eventos -->
                                            <h6 class="fw-bold">Upcoming schedule</h6>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">
                                                    <strong>🔴 Google job interview</strong><br>
                                                    <small class="text-muted">09:00 - 10:00 · Zoom Meeting</small>
                                                </li>
                                                <li class="mb-2">
                                                    <strong>🔵 Meeting with client</strong><br>
                                                    <small class="text-muted">20:00 - Starbucks</small>
                                                </li>
                                                <li>
                                                    <strong>🟡 Landing page creation</strong><br>
                                                    <small class="text-muted">09:00 - Zoom Meeting</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- 🤝 Solicitudes de amistad -->
                                    <div class="card mb-4">
                                        <div class="card-header bg-light">
                                            <h3>Solicitudes de amistad</h3>
                                        </div>
                                        <div class="card-body">
                                            <?php for ($i = 0; $i < 3; $i++): ?>
                                                <div class="d-flex align-items-center mb-2">
                                                    <img src="..\assets\media\avatars\300-2.jpg" class="rounded-circle me-2" width="40">
                                                    <div class="flex-grow-1">
                                                        <strong>Maria Gray</strong>
                                                    </div>
                                                    <button class="btn btn-success btn-sm me-1">Accept</button>
                                                    <button class="btn btn-danger btn-sm">Decline</button>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>

                                    <!-- 👥 Followers -->
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h3>Followers</h3>
                                        </div>
                                        <div class="card-body">
                                            <?php
                                            $status = ["follow back", "followed", "follow back", "followed"];
                                            foreach ($status as $s): ?>
                                                <div class="d-flex align-items-center mb-2">
                                                    <img src="..\assets\media\avatars\300-1.jpg" class="rounded-circle me-2" width="40">
                                                    <div class="flex-grow-1">
                                                        <strong>Jhon Doe</strong>
                                                    </div>
                                                    <button class="btn btn-outline-primary btn-sm <?= ($s === 'followed') ? 'text-danger' : '' ?>">
                                                        <?= ucfirst($s) ?>
                                                    </button>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include '../includes/footer.php'; ?>
                    <!--end::Footer-->
                </div>
                <!--end:::Content-->
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
</div>

<?php include '../layouts/footer.php'; ?>
