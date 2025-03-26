<?php
// Simulación de datos del evento
include '../includes/components/charity_card.php';
$event = [
    'title' => 'Charity Event',
    'date' => '7 OCT AT 07:00 - 11 OCT AT 12:00',
    'pledged' => 16200,
    'donations' => 162,
    'goal' => 59689,
    'friends' => 3240,
    'days_left' => 5,
    'users' => [
        ['name' => 'Monroe Parker', 'location' => 'Turkey'],
        ['name' => 'Martin Gray', 'location' => 'Dubai'],
        ['name' => 'James Lewis', 'location' => 'London']
    ]
];
$title = $event['title'];
include '../layouts/header.php';
?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <?php include_once '../includes/sidebar_menu.php'; ?>
    <!--end::Sidebar-->

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="separator separator-dashed my-5"></div>

                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header text-center bg-primary text-white" style="position: relative; background-image: url(../public/img/funding-event.jpg); height:550px">
                                <div id="countdown-timer" class="countdown-timer"></div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-7">
                                    <div class="card m-3 p-3">
                                        <h1><?php echo $event['title']; ?></h1>
                                        <h3><?php echo $event['date']; ?></h3>
                                        <div class="mt-2">
                                            <span class="badge bg-light text-dark">#mindfulness</span>
                                            <span class="badge bg-light text-dark m-2">#education</span>
                                            <span class="badge bg-light text-dark m-2">#hashtag</span>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <ul class="nav nav-tabs" id="eventTabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">About</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Reviews</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="status-tab" data-bs-toggle="tab" data-bs-target="#status" type="button" role="tab">Status</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">Specifications</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="faqs-tab" data-bs-toggle="tab" data-bs-target="#faqs" type="button" role="tab">FAQ's</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content p-3" id="eventTabsContent">
                                            <div class="tab-pane fade show active" id="about" role="tabpanel">
                                                <h5>About</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique hic eaque adipisci ullam placeat ipsa? Fugit cumque odit ab,
                                                    perferendis quo earum cupiditate officia sint impedit ipsum a explicabo excepturi? Lorem ipsum dolor sit amet consectetur adipisicing e
                                                    lit. <br><br> Tempora nostrum labore aspernatur alias minima similique, optio reprehenderit, totam magnam harum possimus beatae? Doloribus odit
                                                    iure minima animi nisi explicabo ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil dicta hic id eos laboriosam
                                                    officia, cum animi reiciendis maiores corrupti illum exercitationem facilis commodi reprehenderit similique ea iure laudantium!
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repellat, dolorem rem architecto eveniet harum quia tempora ipsum
                                                    cumque fuga aliquid odit hic velit nisi deleniti enim eos recusandae ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Sit veniam, incidunt error aut laborum autem harum provident a delectus, illo laudantium repellat? Iure soluta quas deserunt est cum
                                                    voluptates et.
                                                    <br><br>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique hic eaque adipisci ullam placeat ipsa? Fugit cumque odit ab,
                                                    perferendis quo earum cupiditate officia sint impedit ipsum a explicabo excepturi? Lorem ipsum dolor sit amet consectetur adipisicing e
                                                    lit. <br><br> Tempora nostrum labore aspernatur alias minima similique, optio reprehenderit, totam magnam harum possimus beatae? Doloribus odit
                                                    iure minima animi nisi explicabo ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil dicta hic id eos laboriosam
                                                    officia, cum animi reiciendis maiores corrupti illum exercitationem facilis commodi reprehenderit similique ea iure laudantium!
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repellat, dolorem rem architecto eveniet harum quia tempora ipsum
                                                    cumque fuga aliquid odit hic velit nisi deleniti enim eos recusandae ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Sit veniam, incidunt error aut laborum autem harum provident a delectus, illo laudantium repellat? Iure soluta quas deserunt est cum
                                                    voluptates et.
                                                </p>
                                                <img src="../public/img/vr.jpg" alt="Example" width="90%">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique hic eaque adipisci ullam placeat ipsa? Fugit cumque odit ab,
                                                    perferendis quo earum cupiditate officia sint impedit ipsum a explicabo excepturi? Lorem ipsum dolor sit amet consectetur adipisicing e
                                                    lit. <br><br> Tempora nostrum labore aspernatur alias minima similique, optio reprehenderit, totam magnam harum possimus beatae? Doloribus odit
                                                    iure minima animi nisi explicabo ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil dicta hic id eos laboriosam
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                                <h5>Reviews</h5>
                                                <p>No reviews yet.</p>
                                            </div>
                                            <div class="tab-pane fade" id="status" role="tabpanel">
                                                <h5>Status</h5>
                                                <p><strong><?php echo number_format($event['pledged']); ?></strong> Pledged</p>
                                                <p><strong><?php echo $event['donations']; ?></strong> Donations</p>
                                                <p><strong><?php echo number_format($event['goal']); ?></strong> Goal</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: <?php echo ($event['pledged'] / $event['goal']) * 100; ?>%;"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="specs" role="tabpanel">
                                                <h5>Specifications</h5>
                                                <p>Details about the event specifications.</p>
                                            </div>
                                            <div class="tab-pane fade" id="faqs" role="tabpanel">
                                                <h5>FAQ's</h5>
                                                <p>Frequently asked questions about the event.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="donation-card p-3 shadow-sm border-0 rounded-3 mt-5">
                                        <div class="d-flex gap-2 flex-wrap">
                                            <button class="btn btn-light donation-btn" data-amount="$10">
                                                <span class="emoji">😊</span>
                                                <span class="amount">$10</span>
                                            </button>
                                            <button class="btn btn-light donation-btn" data-amount="$100">
                                                <span class="emoji">😁</span>
                                                <span class="amount">$100</span>
                                            </button>
                                            <button class="btn btn-light donation-btn" data-amount="$1000">
                                                <span class="emoji">😢</span>
                                                <span class="amount">$1000</span>
                                            </button>
                                            <button class="btn btn-light donation-btn" data-amount="$5000">
                                                <span class="emoji">😍</span>
                                                <span class="amount">$5000</span>
                                            </button>
                                            <button class="btn btn-light donation-btn" data-amount="$8000">
                                                <span class="emoji">🥰</span>
                                                <span class="amount">$8000</span>
                                            </button>
                                            <button class="btn btn-light donation-btn" data-amount="$10000">
                                                <span class="emoji">😆</span>
                                                <span class="amount">$10000</span>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mt-2">
                                            <button id="like-btn" class="btn btn-outline-secondary">
                                                <i class="bi bi-heart"></i>
                                            </button>
                                            <input type="text" class="form-control" placeholder="$ other">
                                            <select class="form-select">
                                                <option>USD</option>
                                            </select>
                                            <button class="btn btn-dark">Check out</button>
                                            <button class="btn btn-light">...</button>
                                        </div>
                                    </div>

                                    <div class="card p-3 shadow-sm border-0 rounded-3 mt-5">
                                        <h5 class="fw-bold mb-3">Status</h5>

                                        <!-- Donaciones y Meta -->
                                        <div class="d-flex justify-content-between align-items-center gap-4 m-8">
                                            <div class="d-flex align-items-center pl-3">
                                                <div class="rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-heart-fill m-1 text-danger" style="font-size: 2rem;"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="mb-0 fw-bold fs-4"><?php echo number_format($event['donations']); ?>k</p>
                                                    <small class="text-muted fs-6">Donations</small>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <div class="text-white bg-success rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-currency-dollar m-2" style="font-size: 2rem; color:aliceblue;"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="mb-0 fw-bold fs-4">$<?php echo number_format($event['goal']); ?> <span class="text-muted">dls</span></p>
                                                    <small class="text-muted fs-6">Goal</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Amigos y Tiempo Restante -->
                                        <div class="d-flex justify-content-between align-items-left gap-5 mx-8 mb-8">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-people-fill m-2" style="font-size: 2rem;"></i>
                                                <p class="mb-0 text-muted fs-5"><strong><?php echo number_format($event['friends']); ?></strong> friends</p>
                                            </div>

                                            <div class="d-flex align-items-center pe-7">
                                                <i class="bi bi-calendar-event m-2" style="font-size: 2rem;"></i>
                                                <p class="mb-0 fw-bold fs-5"><?php echo $event['days_left']; ?> days left</p>
                                            </div>
                                        </div>

                                        <!-- Barra de Progreso -->
                                        <div>
                                            <p class="mb-1 fw-bold text-primary fs-5">Raised of $<?php echo number_format($event['pledged']); ?></p>
                                            <div class="progress bg-light rounded-pill" style="height: 12px;">
                                                <div class="progress-bar bg-success rounded-pill" role="progressbar" style="width: <?php echo ($event['pledged'] / $event['goal']) * 100; ?>%;"></div>
                                            </div>
                                            <p class="mb-0 text-muted text-end fw-bold fs-5"><?php echo round(($event['pledged'] / $event['goal']) * 100, 1); ?>%</p>
                                        </div>
                                    </div>

                                    <!-- Creadores -->
                                    <div class="card mt-5 mb-xl-8">
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
                                                        <span class="text-muted fw-semibold d-block fs-7">41k seguidores</span>
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
                                                        <span class="text-muted fw-semibold d-block fs-7">1.5k seguidores</span>
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
                                                        <span class="text-muted fw-semibold d-block fs-7">150 seguidores</span>
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

                                    <!-- Invitar amigos -->
                                    <div class="card mt-5 mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="container-fluid card-header border-1 d-flex justify-content-between align-items-center">
                                            <h3 class="card-title fw-bold text-gray-900 mb-0">Invitar amigos</h3>
                                            <input class="form-control form-control-sm" type="search" placeholder="Buscar" aria-label="Buscar" style="max-width: 200px;">
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
                                                        <span class="text-muted fw-semibold d-block fs-7">41 k seguidores</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Invitar</a>
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
                                                        <span class="text-muted fw-semibold d-block fs-7">4.5 k seguidores</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Invitar</a>
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
                                                        <span class="text-muted fw-semibold d-block fs-7">150 seguidores</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Invitar</a>
                                                    <!--end:Action-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                </div>
                                <!-- Begin: Carousel de productos relacionados -->
                                <div class="carousel-container" id="related-products">
                                    <h4 class="fs-4 fw-bold">Eventos relacionados</h4>
                                    <!-- Carrusel de Slick -->
                                    <div class="slick-carousel">
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(2); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(6); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(10); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(2); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(6); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(10); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(2); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(6); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(10); ?>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                            <?php mostrarCharity(2); ?>
                                        </div>
                                    </div>
                                    <!-- End: Carousel de productos relacionados -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include '../includes/footer.php'; ?>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

</div>
<?php include '../layouts/footer.php'; ?>