<?php
$title = "Usuario";
require_once '../controller/Sesion.php';
$sesion = new Sesion();

// ✅ Verificar si el usuario está logueado
if (!$sesion->isAuthenticated()) {
	header('Location: ./security/login.php');
	exit;
}

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
			<!--begin::Content container-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::Content-->
					<!-- Bubble Slider   -->

					
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Row-->
						<div class="tab-content mt-5" id="myTabContent">
							<div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
								<?php include '../componentProfile/setting.php'; ?>
							</div>
							<div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
								...
							</div>
							<div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
								<?php include '../componentProfile/activity.php'; ?>
							</div>
							<div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
								<?php include 'componentProfile/billing.php'; ?>
							</div>
							<div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
								<?php include '../componentProfile/statements.php'; ?>
							</div>
							<div class="tab-pane fade" id="kt_tab_pane_6" role="tabpanel">
								...
							</div>
							<div class="tab-pane fade" id="kt_tab_pane_7" role="tabpanel">
								<?php include '../componentProfile/apykeys.php'; ?>
							</div>
							<div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
								...
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include '../includes/footer.php'; ?>
		</div>
	</div>
	<!--end::Main-->

</div>
<!--end::Wrapper-->
<?php include '../layouts/footer.php'; ?>
