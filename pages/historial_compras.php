<?php
$title = "Historial compras";
include '../layouts/header.php';
?>
<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
	<!--begin::Sidebar-->
	<?php include_once '../includes/sidebar_menu.php'; ?>
	<!--end::Sidebar-->

	<!--begin::Main -->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
						<!--begin::Title-->
						<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Historial de compras</h1>
						<!--end::Title-->
					</div>
					<!--end::Page title-->
				</div>
				<!--end::Toolbar container-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div class="container mt-4 card p-5">
					<!-- Pestañas -->
					<ul class="nav nav-tabs mb-3" id="purchaseHistoryTabs" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="compras-tab" data-bs-toggle="tab" data-bs-target="#compras" type="button" role="tab">Compras</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="refunds-tab" data-bs-toggle="tab" data-bs-target="#refunds" type="button" role="tab">Refunds</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="gifts-tab" data-bs-toggle="tab" data-bs-target="#gifts" type="button" role="tab">Gifts</button>
						</li>
					</ul>

					<div class="row">
						<!-- Lista de historial -->
						<div class="col-md-4">
							<!-- Buscador -->
							<div class="tab-content">
								<div class="tab-pane active" id="compras">
									<div class="col-12 mb-3 d-flex justify-content-between align-items-center">
										<div class="search-bar">
											<input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar">
										</div>
									</div>
									<div class="list-group">
										<?php for ($i = 1; $i <= 5; $i++): ?>
											<button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
												<img src="../public/img/producto<?= $i ?>.jpg" alt="img-producto" height="60" width="60">
												<span>Producto <?= $i ?></span>
												<small class="text-muted">May 2022</small>
											</button>
										<?php endfor; ?>
									</div>
								</div>

								<div class="tab-pane" id="devoluciones">
									<div class="col-12 mb-3 d-flex justify-content-between align-items-center">
										<div class="search-bar">
											<input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar">
										</div>
									</div>
									<div class="list-group">
										<?php for ($i = 1; $i <= 5; $i++): ?>
											<button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
												<img src="../public/img/producto<?= $i ?>.jpg" alt="img-producto" height="60" width="60">
												<span>Producto <?= $i ?></span>
												<small class="text-muted">May 2022</small>
											</button>
										<?php endfor; ?>
									</div>
								</div>

								<div class="tab-pane" id="regalos">
									<div class="col-12 mb-3 d-flex justify-content-between align-items-center">
										<div class="search-bar">
											<input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar">
										</div>
									</div>
									<div class="list-group">
										<?php for ($i = 1; $i <= 5; $i++): ?>
											<button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
												<img src="../public/img/producto<?= $i ?>.jpg" alt="img-producto" height="60" width="60">
												<span>Producto <?= $i ?></span>
												<small class="text-muted">May 2022</small>
											</button>
										<?php endfor; ?>
									</div>
								</div>
							</div>
						</div>

						<!-- Detalles del producto -->
						<div class="col-md-8">
							<div class="card">
								<div class="row g-0">
									<div class="col-md-4">
										<img src="../public/img/producto.jpg" class="img-fluid rounded-start" alt="Paraglider">
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">Paraglider Ozone Mantra M4</h5>
											<p class="card-text">
												<strong>Quality Selected:</strong> Premium<br>
												<strong>Style:</strong> Minimal<br>
												<strong>Color:</strong> Blue<br>
												<strong>Size:</strong> M<br>
												<strong>Price:</strong> $2,500.00<br>
												<strong>Order ID:</strong> 56789-12345
											</p>
											<button class="btn btn-outline-secondary btn-sm">Ver más detalles</button>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<p class="text-muted">Total inc. impuestos: $2,525.00</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Content wrapper-->

		<!--begin::Footer-->
		<?php include '../includes/footer.php'; ?>
		<!--end::Footer-->
	</div>
	<!--end::Main-->

</div>
<!--end::Wrapper-->
<?php include '../layouts/footer.php'; ?>