<!-- Charity -->
<?php
    include 'egood_cardheader.php';
?>

<div class="card shadow-sm">
    <?php headerUsuario(10) ?>
    <div class="position-relative charity-info">
        <img src="../assets/media/books/4.png" class="card-img-top" alt="Producto" style="height: 100%;">
        <span class="position-absolute top-0 start-0 bg-dark text-white p-1 small">00:00:00</span>
        <div class="botones-charity-card">
            <button class="btn-charity"><i class="bi bi-heart"></i></button>
            <button class="btn-charity"><i class="bi bi-bookmark"></i></button>
            <button class="btn-charity"><i class="bi bi-share"></i></button>
        </div>
    </div>

    <div class="card-body p-2">
        <p class="fw-bold mb-1">Charity event</p>
        <div class="d-flex gap-2 mb-2">
            <button class="btn btn-outline btn-sm">$10</button>
            <button class="btn btn-outline btn-sm">$100</button>
            <button class="btn btn-outline btn-sm">$1,000</button>
            <button class="btn text-white btn-sm"><i class="bi bi-cart"></i></button>
        </div>
    </div>
</div>