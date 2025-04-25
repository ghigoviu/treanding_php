<div class="modal fade" tabindex="-1" id="modal_registro">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-gray-900 fw-bolder">Sign Up</h1>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Form-->
                <!--<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="#">-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="register.php" method="POST">

                    <!--begin::Input group=-->
                    <div class="fv-row mb-4">
                        <input type="text" placeholder="Nombre completo" name="full-name" autocomplete="off" class="form-control bg-transparent border-2 rounded-3 py-3 px-4" />
                    </div>
                    <!--end::Input group=-->
                    
                    <!--begin::Input group=-->
                    <div class="fv-row mb-4">
                        <input type="email" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent border-2 rounded-3 py-3 px-4" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-4" data-kt-password-meter="true">
                        <div class="position-relative mb-3">
                            <input class="form-control bg-transparent border-2 rounded-3 py-3 px-4" type="password" id="password" placeholder="Contraseña" name="password" autocomplete="off" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-2"></i>
                                <i class="ki-duotone ki-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div id="password-strength-meter" class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary rounded h-5px"></div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Repeat Password-->
                    <div class="fv-row mb-4">
                        <input placeholder="Repetir contraseña" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent border-2 rounded-3 py-3 px-4" />
                    </div>
                    <!--end::Repeat Password-->
                    
                    <!--begin::Accept-->
                    <div class="fv-row mb-4">
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="toc" value="1" />
                            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Acepto los <a href="#" class="ms-1 link-primary">términos y condiciones</a></span>
                        </label>
                    </div>
                    <!--end::Accept-->
                    
                    <!--begin::Submit button-->
                    <div class="d-grid mb-4">
                        <button type="submit" id="kt_sign_up_submit" class="btn btn-primary rounded-3 py-3">
                            <span class="indicator-label">Sign Up</span>
                            <span class="indicator-progress">Espera un momento... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Submit button-->
                    
                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">¿Ya tienes una cuenta? 
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_registro" class="link-primary fw-semibold">Inicia sesión</a>
                    </div>
                    <!--end::Sign up-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>

<!-- Estilos adicionales -->
<style>
    .modal-content {
        border-radius: 15px;
    }
    .modal-body {
        padding: 2rem;
    }
    .form-control {
        border-radius: 10px;
        font-size: 16px;
    }
    .btn-primary {
        background-color: #0066ff;
        border-color: #0066ff;
        font-weight: 600;
    }
    .btn-primary:hover {
        background-color: #0056e3;
        border-color: #0056e3;
    }
    .modal-header {
        border-bottom: none;
    }
    .modal-body {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }
    .modal-content {
        border-radius: 10px;
        padding: 20px;
    }
    #password-strength-meter .flex-grow-1 {
        height: 5px;
    }
</style>

<!-- Script para el Password Meter -->
<script>
    document.getElementById("password").addEventListener("input", function() {
        var password = this.value;
        var meter = document.getElementById("password-strength-meter").children;
        
        // Criterios de seguridad para la contraseña
        var strength = 0;
        if (password.length >= 8) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[a-z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;

        // Cambiar la coloración del medidor de seguridad
        for (var i = 0; i < meter.length; i++) {
            if (i < strength) {
                meter[i].classList.remove('bg-secondary');
                meter[i].classList.add('bg-success');
            } else {
                meter[i].classList.remove('bg-success');
                meter[i].classList.add('bg-secondary');
            }
        }
    });
</script>


<!-- Script para el Password Meter -->
<script>
    document.getElementById("password").addEventListener("input", function() {
        var password = this.value;
        var meter = document.getElementById("password-strength-meter").children;
        
        var strength = 0;
        if (password.length >= 8) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[a-z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;

        for (var i = 0; i < meter.length; i++) {
            if (i < strength) {
                meter[i].classList.remove('bg-secondary');
                meter[i].classList.add('bg-success');
            } else {
                meter[i].classList.remove('bg-success');
                meter[i].classList.add('bg-secondary');
            }
        }
    });
</script>

<!-- Script para enviar el formulario vía fetch -->
<!--<script>
    document.getElementById('kt_sign_up_form').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('../services/register.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                alert('✅ Usuario registrado con éxito');
                this.reset();
                document.querySelector('#modal_registro .btn[data-bs-dismiss="modal"]').click();
            } else {
                alert('⚠️ ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error al registrar:', error);
            alert('❌ Error al registrar el usuario');
        });
    });
</script>-->
<script>
    document.getElementById('kt_sign_up_form').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('../services/register.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                // ✅ Si todo sale bien, redirige a verify_email.php
                window.location.href = data.redirect;
            } else {
                // ⚠️ Si hay error, mostrar alerta
                alert('⚠️ ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error al registrar:', error);
            alert('❌ Error al registrar el usuario');
        });
    });
</script>

