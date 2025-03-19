<?php
$title = "Nuevo producto";
include '../layouts/header.php';
include '../includes/components/product_card.php';
?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <?php include '../includes/sidebar_menu.php'; ?>
    <!--end::Sidebar-->

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="card mb-5 mb-xl-10" id="product_form">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Registrar nuevo producto</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9 mb-6">
                                    <!-- Imagen - Thumbnail -->
                                    <div class="row mb-6">
                                        <label class="col-lg-3 col-form-label fw-semibold fs-6">Thumbnail</label>
                                        <div class="col-lg-8">
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="ki-duotone ki-pencil fs-7"></i>
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                </label>
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                    <i class="ki-duotone ki-cross fs-2"></i>
                                                </span>
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                    <i class="ki-duotone ki-cross fs-2"></i>
                                                </span>
                                            </div>
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        </div>
                                    </div>

                                    <!-- Nombre del producto -->
                                    <div class="row mb-6">
                                        <label class="col-lg-3 col-form-label required fw-semibold fs-6">Nombre de producto</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="pname" class="form-control form-control-lg form-control-solid" placeholder="Nombre del producto" />
                                        </div>
                                    </div>

                                    <!-- Descripción -->
                                    <div class="row mb-6">
                                        <label class="col-lg-3 col-form-label required fw-semibold fs-6">Descripción</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="description" class="form-control form-control-lg form-control-solid" placeholder="Descripción del producto" />
                                        </div>
                                    </div>

                                    <!-- Drag and Drop de imágenes -->
                                    <div class="row mb-6">
                                        <label class="col-lg-3 col-form-label fw-semibold fs-6">Media</label>
                                        <div class="col-lg-8">
                                            <div class="dropzone border-dashed p-5 text-center" style="border-color: #009ef7; background-color: #f1faff;">
                                                <p class="text-primary fw-bold">Drop files here or click to upload.</p>
                                                <p class="text-muted">Upload up to 10 files</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sección de precios -->
                                    <div class="border-top pt-6 mt-6">
                                        <h4 class="mb-4">Pricing</h4>
                                        <div class="row mb-6">
                                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Base Price</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="base_price" class="form-control form-control-lg form-control-solid" placeholder="Product price" />
                                            </div>
                                        </div>

                                        <!-- Tipo de Descuento -->
                                        <div class="row mb-6">
                                            <label class="col-lg-3 col-form-label fw-semibold fs-6">Discount Type</label>
                                            <div class="col-lg-8 d-flex gap-3">
                                                <button type="button" class="btn btn-outline-primary active">No Discount</button>
                                                <button type="button" class="btn btn-outline-primary">Percentage %</button>
                                                <button type="button" class="btn btn-outline-primary">Fixed Price</button>
                                            </div>
                                        </div>

                                        <!-- Clase de Impuesto e IVA -->
                                        <div class="row mb-6">
                                            <label class="col-lg-3 col-form-label required fw-semibold fs-6">Tax Class</label>
                                            <div class="col-lg-4">
                                                <select class="form-select form-select-lg form-control-solid">
                                                    <option>Select an option</option>
                                                    <option>Standard</option>
                                                    <option>Reduced</option>
                                                </select>
                                            </div>
                                            <label class="col-lg-2 col-form-label fw-semibold fs-6">VAT Amount (%)</label>
                                            <div class="col-lg-2">
                                                <input type="text" name="vat_amount" class="form-control form-control-lg form-control-solid" placeholder="%" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--end::Card body-->
                                <div class="card-body border-top p-9 mb-6">
                                    <div class="row mb-6">
                                        <label class="col-lg-12 col-form-label fw-semibold fs-6"><strong>Team Up</strong> - make this product a collaboration</label>
                                        <div class="col-12">
                                            <div id="user-list">
                                                <!-- Usuario base -->
                                                <div class="d-flex align-items-center border p-2 mb-2 user-entry">
                                                    <input type="text" class="form-control me-2" placeholder="Users name">
                                                    <select class="form-select me-2">
                                                        <option selected>Rol</option>
                                                        <option>Supplier</option>
                                                        <option>Partner</option>
                                                    </select>
                                                    <input type="text" class="form-control me-2" placeholder="%">
                                                    <button class="btn btn-outline-primary me-2"><i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-outline-danger remove-user"><i class="bi bi-x-circle"></i></button>
                                                </div>
                                            </div>

                                            <!-- Botón Add More -->
                                            <div class="text-center mt-2">
                                                <a href="#" id="add-more" class="text-decoration-underline">Add more</a>
                                            </div>

                                            <hr>

                                            <!-- Advertencias -->
                                            <p class="text-danger small">
                                                *Warning: Reviews, returns, reports and bad experiences regarding the sale will also be shared. <br>
                                                *Notification will be sent to each user before publishing the product. <br>
                                                Until all users accept, the product will be published.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Card body-->

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
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
    <!--end::Main-->

</div>
<!--end::Wrapper-->
<?php include '../layouts/footer.php'; ?>