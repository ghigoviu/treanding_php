<?php
require_once '../controller/Sesion.php';
$sesion = new Sesion();

// ✅ Verificar si el usuario está logueado
if (!$sesion->isAuthenticated()) {
    header('Location: ./security/login.php');
    exit;
}

$usuario = $sesion->getUserData();

if (!$usuario) {
    die('Error al recuperar la información del usuario.');
}

?>

<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Profile Details</span>
        </h3>
    </div>
    <!--begin::Body-->

    <!--begin::Form-->
    <form id="kt_account_profile_details_form" class="form" action="../services/update_user.php" method="POST" enctype="multipart/form-data">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>" />
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-semibold fs-6">Profile pic</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-3">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-125px h-125px">
                            <img src="<?php echo $usuario['imagen_perfil']; ?>" alt="Foto de perfil" width="125px" height="125px" />
                        </div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs name="avatar"  -->
                            <input type="file" name="img_perfil" accept=".png, .jpg, .jpeg" />
                            <!-- <input type="hidden" /> -->
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Hint-->
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Hint-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-5">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-275px h-125px" style="background-image: url(assets/media/auth/bg2.jpg)">
                            <div class="image-input-wrapper w-275px h-125px">
                                <img src="<?php echo $usuario['imagen_portada']; ?>" alt="Foto de portada" width="275px" height="125px" />
                            </div>
                        </div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>

                            <!--begin::Inputs-->
                            <input type="file" name="img_portada" accept=".png, .jpg, .jpeg" />
                            <!-- <input type="hidden" /> -->
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Hint-->
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Hint-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group Nombre -->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nombre</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <div class="col-lg-12 fv-row">
                        <input type="text" name="nombre"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                            placeholder="Nombre" value="<?php echo $usuario['nombre']; ?>" />
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group Birthday -->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Birthday</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <input type="date" name="birthdate"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                            value="<?php echo isset($usuario['birthdate']) ? date('Y-m-d', strtotime($usuario['birthdate'])) : ''; ?>" />
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group Bio -->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Bio</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <textarea
                        class="form-control form-control-lg form-control-solid"
                        name="bio"><?php echo htmlspecialchars($usuario['bio']); ?>
                    </textarea>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="email" name="email" class="form-control form-control-lg form-control-solid" value="<?php echo $usuario['email']; ?>" />
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group Phone -->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                    <span class="required">Phone</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="<?php echo '5593394644' //$usuario['nombre']; 
                                                                                                                                                ?>" />
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="treanding.com" />
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

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

    <!--end::Body-->
</div>
<!--end::Card-->
<!--begin::Sign-in Method-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Sign-in Method</h3>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_signin_method" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Email Address-->
            <div class="d-flex flex-wrap align-items-center">
                <!--begin::Label-->
                <div id="kt_signin_email">
                    <div class="fs-6 fw-bold mb-1">Email Address</div>
                    <div class="fw-semibold text-gray-600"><? echo $usuario['email'] ?></div>
                </div>
                <!--end::Label-->
                <!--begin::Edit-->
                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                        <div class="row mb-6">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="fv-row mb-0">
                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-0">
                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->
                <!--begin::Action-->
                <div id="kt_signin_email_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Change Email</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Email Address-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
                <!--begin::Label-->
                <div id="kt_signin_password">
                    <div class="fs-6 fw-bold mb-1">Password</div>
                    <div class="fw-semibold text-gray-600">************</div>
                </div>
                <!--end::Label-->
                <!--begin::Edit-->
                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                </div>
                            </div>
                        </div>
                        <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                        <div class="d-flex">
                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->
                <!--begin::Action-->
                <div id="kt_signin_password_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Password-->
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                <!--begin::Icon-->
                <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
                    <div class="mb-3 mb-md-0 fw-semibold">
                        <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
                        <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                    </div>
                    <!--end::Content-->
                    <!--begin::Action-->
                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                    <!--end::Action-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Content-->
</div>
<!--end::Sign-in Method-->
<!--begin::Connected Accounts-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Connected Accounts</h3>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_connected_accounts" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-semibold">
                        <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.
                            <a href="#" class="fw-bold">Learn More</a>
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
            <!--begin::Items-->
            <div class="py-2">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <div class="d-flex">
                        <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
                        <div class="d-flex flex-column">
                            <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
                            <div class="fs-6 fw-semibold text-gray-500">Plan properly your workflow</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="form-check form-check-solid form-check-custom form-switch">
                            <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
                            <label class="form-check-label" for="googleswitch"></label>
                        </div>
                    </div>
                </div>
                <!--end::Item-->
                <div class="separator separator-dashed my-5"></div>

            </div>
            <!--end::Items-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
            <button class="btn btn-primary">Save Changes</button>
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Content-->
</div>
<!--end::Connected Accounts-->
<!--begin::Deactivate Account-->
<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Deactivate Account</h3>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_deactivate" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_deactivate_form" class="form">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-semibold">
                            <h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
                            <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
                                <br />
                                <a class="fw-bold" href="#">Learn more</a>
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
                <!--begin::Form input row-->
                <div class="form-check form-check-solid fv-row">
                    <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                    <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
                </div>
                <!--end::Form input row-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
            </div>
            <!--end::Card footer-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Deactivate Account-->