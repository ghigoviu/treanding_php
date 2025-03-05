<!-- Producto -->
<?php
$data = json_decode(file_get_contents('../assets/data/data.json'), true);

$id_producto = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$producto = null;
foreach ($data['productos'] as $product) {
    if ($product['id'] === $id_producto) {
        $producto = $product;
        break;
    }
}

if (!$producto) {
    die('Producto no encontrado');
}

?>


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
    <div class="position-relative">
        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover">
            <img src="../assets/media/products/1.png" class="card-img-top mt-2" alt="Producto" style="height: 200px;">
        </div>
    </div>
    <div class="card-footer px-3 py-4">
        <div class="d-flex justify-content-center flex-column me-0">
            <a href="./detalle_producto.php" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                <span><?php echo $producto['nombre']; ?></span>
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