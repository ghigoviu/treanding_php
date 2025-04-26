<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modal Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons (para la flechita) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        .modal-content {
            max-width: 400px;
            margin: auto;
            border-radius: 20px;
            border: none;
            padding: 2rem;
            position: relative;
        }

        input.form-control {
            height: 45px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .btn-light:hover {
            background-color: #f0f0f0;
        }

        .btn-primary {
            background-color: #8ecae6;
            border: none;
        }

        .idioma-select {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 1.5rem;
        }

        .idioma-select img {
            width: 20px;
        }

        .idioma-select select {
            border-radius: 10px;
        }
    </style>
</head>
<body>

<!-- Botón para abrir el modal 
<div class="d-flex justify-content-center mt-5">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_loguin">
        Abrir Login
    </button>
</div>-->

<!-- Modal Login -->
<div class="modal fade" tabindex="-1" id="modal_loguin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow">

            <!-- Flecha hacia atrás -->
            <button type="button" class="btn btn-light rounded-circle shadow-sm position-absolute"
                    data-bs-dismiss="modal" aria-label="Close"
                    style="top: 15px; left: 15px; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-arrow-left" style="font-size: 18px;"></i>
            </button>

            <div class="modal-body pt-4">
                <!-- Título -->
                <h2 class="text-center mb-4 fw-bold">Log in</h2>

                <!-- Formulario -->
                <form method="POST" action="../security/login.php">
                    <!-- Email -->
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" required />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <input type="password" class="form-control" placeholder="Password" name="password" required />
                    </div>

                    <!-- Botón Sign In -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Sign In
                        </button>
                    </div>
                </form>

                <!-- Selector de idioma con bandera -->
                <div class="idioma-select mt-4">
                    <img id="flag-icon" src="https://flagcdn.com/gb.svg" alt="Idioma">
                    <select id="language-select" class="form-select form-select-sm w-auto">
                        <option value="en" selected>English</option>
                        <option value="es">Español</option>
                        <option value="fr">Français</option>
                        <option value="de">Deutsch</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para cambiar bandera según idioma -->
<script>
    const flagIcon = document.getElementById('flag-icon');
    const langSelect = document.getElementById('language-select');

    const flags = {
        en: 'https://flagcdn.com/gb.svg',
        es: 'https://flagcdn.com/mx.svg',
        fr: 'https://flagcdn.com/fr.svg',
        de: 'https://flagcdn.com/de.svg'
    };

    langSelect.addEventListener('change', function () {
        const selectedLang = langSelect.value;
        flagIcon.src = flags[selectedLang];
    });
</script>

</body>
</html>