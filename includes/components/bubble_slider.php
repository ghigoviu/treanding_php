<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Usuarios -->
    <div class="tns tns-default py-3" style="direction: ltr;">
        <!--begin::Slider-->
        <div
            data-tns="true"
            data-tns-loop="true"
            data-tns-swipe-angle="false"
            data-tns-speed="2000"
            data-tns-autoplay="false"
            data-tns-controls="true"
            data-tns-nav="false"
            data-tns-mouse-drag="true"
            data-tns-items="5"
            data-tns-center="false"
            data-tns-dots="false"
            data-tns-prev-button="#kt_team_slider_prev1"
            data-tns-next-button="#kt_team_slider_next1">
            <?php
            for ($i = 0; $i < 15; $i++) {
                echo
                '<div class="text-center px-2 py-1 min-w-90px min-h-90px mw-90px mh-90px">
                            <div class="symbol symbol-50 symbol-circle">
                                <div class="symbol-label position-relative" style="background-image:url(assets/media/avatars/300-6.jpg)"></div>
                                <span class="w-15px h-15px position-absolute top-100 start-100 translate-middle  badge badge-circle badge-success">5</span>
                            </div>
                            <div class="fw-bold mt-2">Carla Miller</div>
                        </div>
                        ';
            }
            ?>
        </div>
        <!--end::Slider-->
        <!--begin::Slider button-->
        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
            <span class="svg-icon fs-3x">
                <i class="ki-solid ki-left fs-1"></i>
            </span>
        </button>
        <!--end::Slider button-->
        <!--begin::Slider button-->
        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
            <span class="svg-icon fs-3x">
                <i class="ki-solid ki-right fs-1"></i>
            </span>
        </button>
        <!--end::Slider button-->
    </div>
    <!--end::Usuarios -->
</div>