// Slick Carousel
$(document).ready(function(){
    $('.slick-carousel').slick({
        slidesToShow: 4,  // Muestra 4 productos a la vez
        slidesToScroll: 1, // Desliza un producto a la vez
        arrows: true,      // Muestra las flechas
        dots: true,       // Opcional, muestra los puntos de navegación
        infinite: true,    // Habilita el bucle infinito
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,  // 4 productos a la vez en pantallas medianas
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,  // 2 productos en pantallas pequeñas
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,  // 1 producto en pantallas muy pequeñas
                    slidesToScroll: 1
                }
            }
        ]
    });
});

// Obtener todos los botones con la clase .btn-outline
const botones = document.querySelectorAll('.btn-outline');

// Función para manejar el cambio de color y activación de botones
botones.forEach(boton => {
    boton.addEventListener('click', function() {
        // Primero, desactivar todos los botones
        botones.forEach(b => {
            b.classList.remove('btn-activo'); // Remover la clase de activación
            b.style.backgroundColor = '';     // Limpiar el color de fondo
            b.style.color = 'black';           // Restaurar el color de texto
        });

        // Activar el botón clickeado
        if (!boton.classList.contains('btn-activo')) {
            boton.classList.add('btn-activo');  // Añadir la clase para color de fondo
        }
    });
});

// Manejo del botón del carrito en instancias repetidas
const btnCarritos = document.querySelectorAll('.btn-cart'); // Seleccionamos todos los botones de carrito

btnCarritos.forEach(btnCart => {
    btnCart.addEventListener('click', function() {
        // Cambiar color del botón del carrito cuando se hace clic
        if (!btnCart.classList.contains('activo-cart')) {
            btnCart.classList.add('activo-cart');  // Añadir la clase activa para cambiar el color del ícono
            btnCart.style.backgroundColor = '#70a7ff';  // Fondo azul claro
            btnCart.style.color = 'white';  // Texto blanco
        } else {
            btnCart.classList.remove('activo-cart');  // Remover la clase activa para desactivar
            btnCart.style.backgroundColor = '';  // Limpiar fondo
            btnCart.style.color = 'black';  // Volver texto negro
        }
    });
});

// Agregar usuarios a la colaboración.
$(document).ready(function() {
    $("#add-more").click(function(e) {
        e.preventDefault();
        let newUser = `<div class="d-flex align-items-center border p-2 mb-2 user-entry">
            <input type="text" class="form-control me-2" placeholder="Users name">
            <select class="form-select me-2">
                <option selected>Rol</option>
                <option>Supplier</option>
                <option>Partner</option>
            </select>
            <input type="text" class="form-control me-2" placeholder="%">
            <button class="btn btn-outline-primary me-2"><i class="bi bi-pencil"></i></button>
            <button class="btn btn-outline-danger remove-user"><i class="bi bi-x-circle"></i></button>
        </div>`;
        $("#user-list").append(newUser);
    });

    $(document).on("click", ".remove-user", function() {
        $(this).closest(".user-entry").remove();
    });
});

// Drag and Drop functionality
document.addEventListener("DOMContentLoaded", function () {
    const dropZone = document.getElementById("drop-zone");
    const fileInput = document.getElementById("file-input");
    
    dropZone.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZone.classList.add("drag-over");
    });

    dropZone.addEventListener("dragleave", () => {
        dropZone.classList.remove("drag-over");
    });

    dropZone.addEventListener("drop", (e) => {
        e.preventDefault();
        dropZone.classList.remove("drag-over");
        
        const files = e.dataTransfer.files;
        fileInput.files = files; // Asignar archivos al input
    });

    dropZone.addEventListener("click", () => fileInput.click());

    fileInput.addEventListener("change", () => {
        console.log("Files selected:", fileInput.files);
    });

    // Discount Button Toggle Functionality
    const discountButtons = document.querySelectorAll(".discount-btn");
    
    discountButtons.forEach(button => {
        button.addEventListener("click", () => {
            discountButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los botones con la clase '.btn-reaction'
    const botones = document.querySelectorAll('.btn-reaction');

    // Añadir un evento de clic a cada botón
    botones.forEach(function(boton) {
        boton.addEventListener('click', function() {
            // Alternar la clase 'active' en el botón clickeado
            boton.classList.toggle('active');
        });
    });
});

function startCountdown(targetDate) {
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance <= 0) {
            document.getElementById("countdown-timer").innerHTML = "00:00:00";
            return;
        }

        const hours = Math.floor(distance / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown-timer").innerHTML =
            `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000); // Ahora actualiza cada segundo
}

// Configurar cuenta regresiva a 5 horas desde ahora
const countdownEndDate = new Date();
countdownEndDate.setHours(countdownEndDate.getHours() + 5);
startCountdown(countdownEndDate);

function ocultarCensura(boton, acceso) {
    if (acceso) {
        let capa = boton.closest(".capa-censura");
        if (capa) {
            alert(capa);
            capa.remove(); // 💥 Esto elimina la censura completamente
        }
    }
}
