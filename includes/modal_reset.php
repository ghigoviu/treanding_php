<div class="modal fade" tabindex="-1" id="modal_reset_password">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title"></h3>

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
                                <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="authentication/layouts/corporate/new-password.html" action="#">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-10">
                                        <!--begin::Title-->
                                        <h1 class="text-gray-900 fw-bolder mb-3">¿Has olvidado tu contraseña ?</h1>
                                        <!--end::Title-->
                                        <!--begin::Link-->
                                        <div class="text-gray-500 fw-semibold fs-6">Ingresa tu correo electrónico para restablecer tu contraseña.</div>
                                        <!--end::Link-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Email-->
                                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                        <!--end::Email-->
                                    </div>
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                                        <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Enviar</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">Espera un momento... 
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            <!--end::Indicator progress-->
                                        </button>
                                        <a href="javascript:void(0)" data-bs-dismiss="modal" class="btn btn-light">Cancelar</a>
                                    </div>
                                    <!--end::Actions-->
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