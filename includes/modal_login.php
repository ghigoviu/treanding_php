<div class="modal fade" tabindex="-1" id="modal_loguin">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title text-gray-900 fw-bolder">INICIAR SESION</h1>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                        <!--begin::Form-->
                        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                            <!--begin::Wrapper-->
                            <div class="w-lg-500px p-10">
                                <!--begin::Form-->
                                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="index.html" action="#">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-11">
                                        <!--begin::Subtitle-->
                                        <div class="text-gray-500 fw-semibold fs-6">Iniciar con Google</div>
                                        <!--end::Subtitle=-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Login options-->
                                    <div class="row g-3 mb-9">
                                        <!--begin::Col-->
                                        <div class="col-md-12">
                                            <!--begin::Google link=-->
                                            <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Iniciar con Google</a>
                                            <!--end::Google link=-->
                                        </div>
                                        <!--end::Col-->
                                        
                                    </div>
                                    <!--end::Login options-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-content my-14">
                                        <span class="w-125px text-gray-500 fw-semibold fs-7">O email</span>
                                    </div>
                                    <!--end::Separator-->
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Email-->
                                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Input group=-->
                                    <div class="fv-row mb-3">
                                        <!--begin::Password-->
                                        <input type="password" placeholder="Contraseña" name="password" autocomplete="off" class="form-control bg-transparent" />
                                        <!--end::Password-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                        <div></div>
                                        <!--begin::Link-->
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_reset_password"  class="link-primary">¿Olvidaste tu contraseña?</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Iniciar sesion</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">Espera un momento... 
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            <!--end::Indicator progress-->
                                        </button>
                                    </div>
                                    <!--end::Submit button-->
                                    <!--begin::Sign up-->
                                    <div class="text-gray-500 text-center fw-semibold fs-6">¿Aun no tienes cuenta? 
                                    <a href=javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_registro" class="link-primary">Registrate</a></div>
                                    <!--end::Sign up-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>