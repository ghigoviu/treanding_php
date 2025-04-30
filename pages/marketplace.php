<?php
$title = "Marketplace";
session_start();

include '../layouts/header.php';
include '../includes/components/product_card.php';
include '../includes/components/event_card.php';
include '../includes/components/charity_card.php';
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

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <div class="bg-light-primary py-10 rounded" style="background: linear-gradient(135deg, #f6d365 0%, #fda085 100%); position: relative;">
                            <div class="container text-center">
                                <!-- Barra de Búsqueda -->
                                <div class="d-flex justify-content-center mb-5">
                                    <input type="text" class="form-control w-50 rounded-pill" placeholder="Buscar..." aria-label="Buscar" style="max-width: 500px;">
                                </div>

                                <!-- Botones Redondeados -->
                                <div class="d-flex justify-content-center gap-4">
                                    <button class="btn btn-light rounded-circle shadow p-4"><i class="bi bi-shield-lock"></i></button>
                                    <button class="btn btn-light rounded-circle shadow p-4"><i class="bi bi-command"></i></button>
                                    <button class="btn btn-light rounded-circle shadow p-4"><i class="bi bi-ticket"></i></button>
                                    <button class="btn btn-light rounded-circle shadow p-4"><i class="bi bi-rocket "></i></button>
                                    <button class="btn btn-light rounded-circle shadow p-4"><i class="bi bi-heart"></i></button>
                                    <button class="btn btn-light rounded-circle shadow p-4"><i class="bi bi-flag"></i></button>
                                    <button class="btn btn-light rounded-circle shadow p-4"><i class="bi bi-person"></i></button>
                                </div>
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

<?php
if (isset($_SESSION['success_login'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            alert('" . addslashes($_SESSION['success_login']) . "');
        });
    </script>";
    unset($_SESSION['success_login']);
}

if (isset($_SESSION['error_login'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            alert('" . addslashes($_SESSION['error_login']) . "');
        });
    </script>";
    unset($_SESSION['error_login']);
}
?>