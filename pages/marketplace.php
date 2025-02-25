<?php
$title = "Marketplace";
include '../layouts/header.php';
?>
<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <?php include_once '../includes/sidebar_menu.php'; ?>
    <!--end::Sidebar-->

    <!--begin::Main -->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Usuarios -->
                        <div class="tns tns-default py-3" style="direction: ltr;">
                            <!--begin::Slider-->
                            <div
                                data-tns="true"
                                data-tns-loop="true"
                                data-tns-swipe-angle="false"
                                data-tns-speed="2000"
                                data-tns-autoplay="false"
                                data-tns-controls="true"
                                data-tns-nav="false"
                                data-tns-mouse-drag="true"
                                data-tns-items="5"
                                data-tns-center="false"
                                data-tns-dots="false"
                                data-tns-prev-button="#kt_team_slider_prev1"
                                data-tns-next-button="#kt_team_slider_next1">

                                <?php
                                for ($i = 0; $i < 15; $i++) {
                                    echo
                                    '<div class="text-center px-2 py-1 min-w-90px min-h-90px mw-90px mh-90px">
                                                <div class="symbol symbol-50 symbol-circle">
                                                    <div class="symbol-label position-relative" style="background-image:url(../assets/media/avatars/300-6.jpg)"></div>
                                                    <span class="w-15px h-15px position-absolute top-100 start-100 translate-middle  badge badge-circle badge-success">5</span>
                                                </div>
                                                <div class="fw-bold mt-2">Carla Miller</div>
                                            </div>
                                            ';
                                }
                                ?>

                            </div>
                            <!--end::Slider-->

                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                                <span class="svg-icon fs-3x">
                                    <i class="ki-solid ki-left fs-1"></i>
                                </span>
                            </button>
                            <!--end::Slider button-->

                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                                <span class="svg-icon fs-3x">
                                    <i class="ki-solid ki-right fs-1"></i>
                                </span>
                            </button>
                            <!--end::Slider button-->
                        </div>
                        <!--end::Usuarios -->
                    </div>
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Opciones -->
                        <div class="tns tns-default py-4" style="direction: ltr;background-image:url(../assets/media/patterns/pattern-1.jpg); 
                                    border-radius: 10px">
                            <!--begin::Slider-->
                            <div
                                data-tns="true"
                                data-tns-loop="true"
                                data-tns-swipe-angle="false"
                                data-tns-speed="2000"
                                data-tns-autoplay="false"
                                data-tns-controls="true"
                                data-tns-nav="false"
                                data-tns-mouse-drag="true"
                                data-tns-items="5"
                                data-tns-center="false"
                                data-tns-dots="false"
                                data-tns-prev-button="#kt_team_slider_prev2"
                                data-tns-next-button="#kt_team_slider_next2">


                                <div class="  text-center min-w-100px min-h-100px mw-100px mh-100px">
                                    <a href="javascript:;" class="btn btn-link btn-color-gray-500 hover-elevate-up btn-active-color-white">
                                        <div class="symbol symbol-50 symbol-circle">
                                            <div class="symbol-label position-relative" style="background-image:url(../assets/media/auth/bg10.jpeg)"></div>
                                        </div>
                                        <div class="fw-bold mt-2">Exclusives</div>
                                    </a>
                                </div>

                                <div class=" text-center min-w-100px min-h-100px mw-100px mh-100px">
                                    <a href="javascript:;" class="btn btn-link btn-color-gray-500 hover-elevate-up btn-active-color-white">
                                        <div class="symbol symbol-50 symbol-circle">
                                            <div class="symbol-label position-relative" style="background-image:url(../assets/media/auth/bg10.jpeg)"></div>
                                        </div>
                                        <div class="fw-bold mt-2">Items Fisicos</div>
                                    </a>
                                </div>

                                <div class=" text-center min-w-100px min-h-100px mw-100px mh-100px">
                                    <a href="javascript:;" class="btn btn-link btn-color-gray-500 hover-elevate-up btn-active-color-white">
                                        <div class="symbol symbol-50 symbol-circle">
                                            <div class="symbol-label position-relative" style="background-image:url(../assets/media/auth/bg10.jpeg)"></div>
                                        </div>
                                        <div class="fw-bold mt-2">Items Digitals</div>
                                    </a>
                                </div>

                                <div class=" text-center min-w-100px min-h-100px mw-100px mh-100px">
                                    <a href="javascript:;" class="btn btn-link btn-color-gray-500 hover-elevate-up btn-active-color-white">
                                        <div class="symbol symbol-50 symbol-circle">
                                            <div class="symbol-label position-relative" style="background-image:url(../assets/media/auth/bg10.jpeg)"></div>
                                        </div>
                                        <div class="fw-bold mt-2">Events</div>
                                    </a>
                                </div>

                                <div class=" text-center min-w-100px min-h-100px mw-100px mh-100px">
                                    <a href="javascript:;" class="btn btn-link btn-color-gray-500 hover-elevate-up btn-active-color-white">
                                        <div class="symbol symbol-50 symbol-circle">
                                            <div class="symbol-label position-relative" style="background-image:url(../assets/media/auth/bg10.jpeg)"></div>
                                        </div>
                                        <div class="fw-bold mt-2">Torneos</div>
                                    </a>
                                </div>

                                <div class=" text-center min-w-100px min-h-100px mw-100px mh-100px">
                                    <a href="javascript:;" class="btn btn-link btn-color-gray-500 hover-elevate-up btn-active-color-white">
                                        <div class="symbol symbol-50 symbol-circle">
                                            <div class="symbol-label position-relative" style="background-image:url(../assets/media/auth/bg10.jpeg)"></div>
                                        </div>
                                        <div class="fw-bold mt-2">Chartiries</div>
                                    </a>
                                </div>

                                <div class=" text-center min-w-100px min-h-100px mw-100px mh-100px">
                                    <a href="javascript:;" class="btn btn-link btn-color-gray-500 hover-elevate-up btn-active-color-white">
                                        <div class="symbol symbol-50 symbol-circle">
                                            <div class="symbol-label position-relative" style="background-image:url(../assets/media/auth/bg10.jpeg)"></div>
                                        </div>
                                        <div class="fw-bold mt-2">Out Activities</div>
                                    </a>
                                </div>

                            </div>
                            <!--end::Slider-->

                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-active-color-primary px-1" id="kt_team_slider_prev2">
                                <span class="svg-icon fs-3x">
                                    <i class="ki-solid ki-left fs-5"></i>
                                </span>
                            </button>
                            <!--end::Slider button-->

                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next2">
                                <span class="svg-icon fs-3x">
                                    <i class="ki-solid ki-right fs-5"></i>
                                </span>
                            </button>
                            <!--end::Slider button-->
                        </div>
                        <!--end::Opciones -->
                    </div>
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->

                    <div class="d-flex flex-column flex-column-fluid">
                        <div class="card card-flush ">
                            <div class="card-header">
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-2">

                                        <!--begin::Label-->
                                        <div class="text-gray-500 fs-7 me-2">
                                            <i class="fa-solid fa-filter"></i> &nbsp;
                                            Filter
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Brands-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fs-7 me-1">
                                                <i class="fa-solid fa-cube"></i>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option selected="selected">Brands</option>
                                                <option value="Show All">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category A</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Brands-->

                                        <!--begin::category-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fs-7 me-1">
                                                <i class="fa-solid fa-icons"></i>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option selected="selected">Category</option>
                                                <option value="Show All">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category A</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::category-->

                                        <!--begin::Collections-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fs-7 me-1">
                                                <i class="fa-solid fa-clover"></i>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option selected="selected">Collections</option>
                                                <option value="Show All">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category A</option>
                                            </select>
                                        </div>

                                        <div class="d-flex align-items-center fw-bold">
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fs-7 me-1">
                                                <i class="fa-solid fa-tag"></i>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option selected="selected">Price Range</option>
                                                <option value="Show All">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category A</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Price Range-->

                                        <!--begin::Out Sale-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <!--begin::Label-->
                                            <div class="text-gray-500 fs-7 me-1">
                                                <i class="fa-solid fa-rocket"></i>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option selected="selected">Out Sale</option>
                                                <option value="Show All">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category A</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Out Sale-->
                                    </div>
                                    <!--begin::Filters-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </div>
                    </div>

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->

                    <!--begin::productos -->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Row-->
                        <div class="row g-2 g-xl-4">
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <div class="card shadow-sm">
                                    <div class="card-header px-3 py-1">
                                        <div class="card-title py-0 m-0">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-40px symbol-circle me-1">
                                                <img alt="Pic" src="../assets/media/avatars/300-5.jpg">
                                            </div>

                                            <div class="d-flex justify-content-center flex-column me-1">
                                                <a href="#" class="fs-7 fw-bold text-gray-900 text-hover-primary me-1 mb-1 lh-1">Brian Cox</a>
                                                <!--begin::Info-->
                                                <div class="mb-0 lh-1">
                                                    <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                    <span class="fs-8 fw-semibold text-muted">Active</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                        </div>

                                        <div class="card-toolbar py-0 my-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-link btn-color-muted btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="fa-solid fa-ellipsis fs-3"></i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-information fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Groups</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Create Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Invite Members</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px"
                                            style="background-image:url(../assets/media/products/1.png)">
                                        </div>
                                    </div>
                                    <div class="card-footer px-3 py-4">
                                        <div class="d-flex justify-content-center flex-column me-0">
                                            <a href="./detalle_producto.php" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                                                Producto e-good
                                            </a>
                                            <div class="">
                                                <div class="rating justify-content-start">
                                                    <label class="rating-label" for="kt_rating_input_1">
                                                        <i class="ki-duotone ki-star fs-7"></i>
                                                    </label>
                                                    <input class="rating-input" name="rating" value="1" type="radio" id="kt_rating_input_1" />
                                                    <label class="rating-label" for="kt_rating_input_2">
                                                        <i class="ki-duotone ki-star fs-7"></i>
                                                    </label>
                                                    <input class="rating-input" name="rating" value="2" type="radio" id="kt_rating_input_2" />
                                                    <label class="rating-label" for="kt_rating_input_3">
                                                        <i class="ki-duotone ki-star fs-7"></i>
                                                    </label>
                                                    <input class="rating-input" name="rating" value="3" type="radio" id="kt_rating_input_3" />

                                                    <label class="rating-label" for="kt_rating_input_4">
                                                        <i class="ki-duotone ki-star fs-7"></i>
                                                    </label>
                                                    <input class="rating-input" name="rating" value="4" type="radio" id="kt_rating_input_4" />

                                                    <label class="rating-label" for="kt_rating_input_5">
                                                        <i class="ki-duotone ki-star fs-7"></i>
                                                    </label>
                                                    <input class="rating-input" name="rating" value="5" type="radio" id="kt_rating_input_5" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center ">
                                                <div class="fs-5 fw-bold text-gray-800 me-3">$ 2575.00</div>
                                                <button type="button" class="btn btn-sm  btn-light btn-active-light-primary">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <div class="card p-2">
                                    <div class="card-header px-3 py-1" id='producto'>
                                        <div class="card-title py-0 m-0">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-40px symbol-circle me-1">
                                                <img alt="Pic" src="../assets/media/avatars/300-5.jpg">
                                            </div>

                                            <div class="d-flex justify-content-center flex-column me-1">
                                                <a href="#" class="fs-7 fw-bold text-gray-900 text-hover-primary me-1 mb-1 lh-1">Brian Cox</a>
                                                <!--begin::Info-->
                                                <div class="mb-0 lh-1">
                                                    <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                    <span class="fs-8 fw-semibold text-muted">Active</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                        </div>

                                        <div class="card-toolbar py-0 my-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-link btn-color-muted btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="fa-solid fa-ellipsis fs-3"></i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-information fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span></a>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Groups</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Create Group</a>
                                                        </div>

                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Invite Members</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative">
                                        <img src="../assets/media/products/2.png" class="card-img-top mt-2" alt="Producto">
                                        <span class="position-absolute top-0 start-0 bg-dark text-white p-1 small">00:00:00</span>
                                    </div>
                                    <div class="card-body p-2">
                                        <p class="fw-bold mb-1">Gameplay event</p>
                                        <h5 class="fw-bold text-primary">$1290 <span class="text-muted text-decoration-line-through">US $1340</span></h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-danger">-16%</span>
                                            <button class="btn btn-pink text-white"><i class="bi bi-cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <div class="card p-2">
                                    <div class="card-header px-3 py-1" id='producto'>
                                        <div class="card-title py-0 m-0">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-40px symbol-circle me-1">
                                                <img alt="Pic" src="../assets/media/avatars/300-5.jpg">
                                            </div>

                                            <div class="d-flex justify-content-center flex-column me-1">
                                                <a href="#" class="fs-7 fw-bold text-gray-900 text-hover-primary me-1 mb-1 lh-1">Brian Cox</a>
                                                <!--begin::Info-->
                                                <div class="mb-0 lh-1">
                                                    <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                    <span class="fs-8 fw-semibold text-muted">Active</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                        </div>

                                        <div class="card-toolbar py-0 my-0">
                                            <!--begin::Menu-->
                                            <button class="btn btn-link btn-color-muted btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="fa-solid fa-ellipsis fs-3"></i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-information fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Groups</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Create Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Invite Members</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <div class="position-relative">
                                        <img src="../assets/media/books/3.png" class="card-img-top mt-2" alt="Producto">
                                        <span class="position-absolute top-0 start-0 bg-dark text-white p-1 small">00:00:00</span>
                                    </div>
                                    <div class="card-body p-2">
                                        <p class="fw-bold mb-1">Charity event</p>
                                        <div class="d-flex gap-2 mb-2">
                                            <button class="btn btn-outline">$10</button>
                                            <button class="btn btn-outline">$100</button>
                                            <button class="btn btn-outline">$1,000</button>
                                        </div>
                                        <button class="btn btn-pink text-white w-100"><i class="bi bi-cart"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!--end::Row-->

                        </div>
                        <!--end::productos -->

                        <!--end::Content-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content wrapper-->

            <!--begin::Footer-->
            <?php include '../includes/footer.php'; ?>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Main-->

</div>
<!--end::Wrapper-->
<?php include '../layouts/footer.php'; ?>
