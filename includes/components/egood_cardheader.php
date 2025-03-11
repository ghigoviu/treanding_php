<?php
if (!function_exists('headerUsuario')) {
    function headerUsuario($id)
    {
        $data = json_decode(file_get_contents('../assets/data/data.json'), true);

        $usuario = null;
        foreach ($data['usuarios'] as $user) {
            if ($user['id'] === $id) {
                $usuario = $user;
                break;
            }
        }

        if (!$usuario) {
            echo "<h2>Usuario no encontrado</h2>";
            return;
        }

?>
        <!-- Card header Goods -->
        <div class="card-header px-3 py-1">
            <div class="card-title py-0 m-0">
                <!--begin::Avatar-->
                <div class="symbol symbol-40px symbol-circle me-1">
                    <img alt="Pic" src="../assets/media/avatars/<?php echo htmlspecialchars($usuario['img_perfil']); ?>">
                </div>

                <div class="d-flex justify-content-center flex-column me-1">
                    <a href="#" class="fs-7 fw-bold text-gray-900 text-hover-primary me-1 mb-1 lh-1"><?php echo $usuario['nombre']; ?></a>
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
                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Amigos</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Seguir</a>
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
        <!-- Card header Goods -->

<?php
    }
}
?>