<?php
session_start();

if (isset($_SESSION['success_login'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            alert('{$_SESSION['success_login']}');
        });
    </script>";
    unset($_SESSION['success_login']);
}
?>
<?php
$title = "Marketplace";
include '../layouts/header.php';
include '../includes/components/product_card.php';
include '../includes/components/event_card.php';
include '../includes/components/charity_card.php';
?>
<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <?php if (isset($_SESSION['usuario'])): ?>
    <?php include_once '../includes/sidebar_menu.php'; ?>
    <?php endif; ?>
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
                                <?php mostrarProducto(2); ?>
                            </div>
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarProducto(3); ?>
                            </div>
                            
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarEvento(4); ?>
                            </div>

                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarCharity(10); ?>
                            </div>

                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarProducto(4); ?>
                            </div>
                            
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarCharity(2); ?>
                            </div>
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarProducto(5); ?>
                            </div>
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarProducto(6); ?>
                            </div>
                            
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarEvento(4); ?>
                            </div>

                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarCharity(6); ?>
                            </div>

                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarProducto(7); ?>
                            </div>
                            
                            <div class="col-sm-6 col-md-3 col-xl-3 col-lg-3 col-xxl-3">
                                <?php mostrarCharity(2); ?>
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
