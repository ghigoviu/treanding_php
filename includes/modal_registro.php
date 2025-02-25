<div class="modal fade" tabindex="-1" id="modal_registro">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title text-gray-900 fw-bolder">Crear cuenta nueva</h1>
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
                                <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="authentication/layouts/corporate/sign-in.html" action="#">
                                    <!--begin::Login options-->
                                    <div class="row g-3 mb-9">
                                        <!--begin::Col-->
                                        <div class="col-md-12">
                                            <!--begin::Google link=-->
                                            <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Entrar con Google</a>
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
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control bg-transparent" type="password" placeholder="Contraseña" name="password" autocomplete="off" />
                                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                    <i class="ki-duotone ki-eye-slash fs-2"></i>
                                                    <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">Usar 8 o más letras y/o numeros.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--end::Input group=-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Repeat Password-->
                                        <input placeholder="Repetir contraseña" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
                                        <!--end::Repeat Password-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Accept-->
                                    <div class="fv-row mb-8">
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Acepto los <a href="#" class="ms-1 link-primary">terminos y condiciones</a> 
                                            </span>
                                        </label>
                                    </div>
                                    <!--end::Accept-->
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Registrarme</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">Espera un momento... 
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            <!--end::Indicator progress-->
                                        </button>
                                    </div>
                                    <!--end::Submit button-->
                                    <!--begin::Sign up-->
                                    <div class="text-gray-500 text-center fw-semibold fs-6">¿Ya tienes una cuenta? 
                                    <a href="javascript:void(0)"data-bs-toggle="modal" data-bs-target="#modal_loguin" 
                                        class="link-primary fw-semibold">Inicia sesion</a></div>
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