<?php
$title = "Detalle producto";
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
                    <div class="row g-4 py-5">
                        <!--begin::Wrapper-->
                        <div class="col-lg-8 ">
                            <div class="card mb-5 mb-xxl-8">
                                <div class="card-body pt-9 pb-0">
                                    <!--begin::Details-->
                                    <!--begin::Sliders-->
                                    <div class="tns tns-default mb-3" style="direction: ltr">
                                        <!--begin::Slider-->
                                        <div data-tns="true" 
                                            data-tns-loop="true" 
                                            data-tns-swipe-angle="false"
                                            data-tns-speed="2000" 
                                            data-tns-autoplay="true"
                                            data-tns-autoplay-timeout="18000" 
                                            data-tns-items="1"
                                            data-tns-center="true" 
                                            data-tns-slide-by="true"
                                            data-tns-nav-container="#kt_slider_thumbnails"
                                            data-tns-nav-as-thumbnails="true"
                                            data-tns-prev-button="#kt_slider_prev"
                                            data-tns-next-button="#kt_slider_next">
                                            <!--begin::Item-->
                                            <div class="text-center px-2 py-2">
                                                <img src="../assets/media/stock/600x400/img-1.jpg"
                                                    class="card-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="text-center px-2 py-2">
                                                <img src="../assets/media/stock/600x400/img-2.jpg"
                                                    class="card-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="text-center px-2 py-2">
                                                <img src="../assets/media/stock/600x400/img-3.jpg"
                                                    class="card-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="text-center px-2 py-2">
                                                <img src="../assets/media/stock/600x400/img-4.jpg"
                                                    class="card-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Slider-->
                                        <!--begin::Slider button-->
                                        <button class="btn btn-icon btn-active-color-primary"
                                            id="kt_slider_prev">
                                            <i class="ki-duotone ki-left fs-1x"></i> 
                                        </button>
                                        <!--end::Slider button-->
                                        <!--begin::Slider button-->
                                        <button class="btn btn-icon btn-active-color-primary"
                                            id="kt_slider_next">
                                            <i class="ki-duotone ki-right fs-1x"></i> 
                                        </button>
                                        <!--end::Slider button-->
                                    </div>
                                    <!--end::Sliders-->
                                    <!--begin::Thumbnails-->
                                    <div class="d-flex flex-center">
                                        <ul
                                            class="d-flex align-items-center list-unstyled gap-5 cursor-pointer">
                                            <li class="d-flex gap-3" id="kt_slider_thumbnails">
                                                <img src="../assets/media/stock/600x400/img-1.jpg"
                                                    class="w-100px rounded" alt="" />
                                                <img src="../assets/media/stock/600x400/img-2.jpg"
                                                    class="w-100px rounded" alt="" />
                                                <img src="../assets/media/stock/600x400/img-3.jpg"
                                                    class="w-100px rounded" alt="" />
                                                <img src="../assets/media/stock/600x400/img-4.jpg"
                                                    class="w-100px rounded" alt="" />
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Thumbnails-->
                                    <!--end::Details-->
                                    
                                    <div class="separator separator-dashed my-5"></div>

                                    <!-- Information product  -->
                                    <div class="mb-5">
                                        <h2 class="text-dark">Tennis Nike para Corredor</h2>
                                        <div class="d-flex flex-wrap">
                                            <div class="rating justify-content-start">
                                                <!--begin::Star 1-->
                                                <label class="rating-label" for="kt_rating_input_1">
                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                </label>
                                                <input class="rating-input" name="rating" value="1" type="radio" id="kt_rating_input_1"/>
                                                <!--end::Star 1-->

                                                <!--begin::Star 2-->
                                                <label class="rating-label" for="kt_rating_input_2">
                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                </label>
                                                <input class="rating-input" name="rating" value="2" type="radio" id="kt_rating_input_2"/>
                                                <!--end::Star 2-->

                                                <!--begin::Star 3-->
                                                <label class="rating-label" for="kt_rating_input_3">
                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                </label>
                                                <input class="rating-input" name="rating" value="3" type="radio" id="kt_rating_input_3"/>
                                                <!--end::Star 3-->

                                                <!--begin::Star 4-->
                                                <label class="rating-label" for="kt_rating_input_4">
                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                </label>
                                                <input class="rating-input" name="rating" value="4" type="radio" id="kt_rating_input_4"/>
                                                <!--end::Star 4-->

                                                <!--begin::Star 5-->
                                                <label class="rating-label" for="kt_rating_input_5">
                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                </label>
                                                <input class="rating-input" name="rating" value="5" type="radio" id="kt_rating_input_5"/>
                                                <!--end::Star 5-->
                                            </div>
                                            <span class="text-muted fs-7 fw-bold me-2">(4.5)</span>
                                            <span class="text-muted fs-7 fw-bold me-2">|</span>
                                            <span class="text-muted fs-7 fw-bold me-4">3 Reviews</span>
                                            
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-location-dot me-2"></i>
                                                <span class="text-muted fs-7 fw-bold ">Dirección para pickup</span>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-2"></div>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge badge-light-primary">#tag</span>
                                            <span class="badge badge-light-primary">#tag</span>
                                            <span class="badge badge-light-primary">#tag</span>
                                            <span class="badge badge-light-primary">#tag</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                            
                                </div>
                                <!--end::Card body-->
                                <div class="card-footer px-8 py-3">
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold mb-5 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" 
                                            href="#kt_tab_pane_1">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" 
                                            href="#kt_tab_pane_2">Specifications</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" 
                                            href="#kt_tab_pane_3">Accesories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" 
                                            href="#kt_tab_pane_4">Faq's</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" 
                                            href="#kt_tab_pane_5">Reviews</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end::Card-->
                            <div class="card card-flush">
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                            <!--begin::About--> 
                                            <h3 class="fw-bold mb-5">About</h3>
                                            <p class=" fs-7 lh-xl text-justify">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
                                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
                                                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                                                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore 
                                                et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                                                nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid 
                                                ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea 
                                                voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
                                                eum fugiat quo voluptas nulla pariatur?
                                            </p>
                                            <!--end::About-->
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                            <!-- begin::Specifications -->
                                            <h3 class="fw-bold mb-5">Specifications</h3>
                                            <p class=" fs-7 lh-xl text-justify">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
                                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
                                                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            </p>
                                            <!-- end::Specifications -->
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                                            <!-- begin::Accesories -->
                                            <h3 class="fw-bold mb-5">Accesories</h3>
                                            <ul>
                                                <li>Item 1</li>
                                                <li>Item 2</li>
                                                <li>Item 3</li>
                                                <li>Item 4</li>
                                                <li>Item 5</li>
                                            </ul>
                                            <!-- end::Accesories -->
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
                                            <!-- begin::Faq's -->
                                            <h3 class="fw-bold mb-5">Faq's</h3>
                                            <div class="m-0">
                                                <!--begin::Heading-->
                                                <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2" aria-expanded="false">
                                                    <!--begin::Icon-->
                                                    <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                        <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Do I need a designer to use Admin Theme ?</h4>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div id="kt_job_4_2" class="fs-6 ms-1 collapse">
                                                    <!--begin::Text-->
                                                    <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed"></div>
                                                <!--end::Separator-->
                                            </div>
                                            <!-- end::Faq's -->
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                                            <!-- begin::Reviews -->
                                            
                                            <!--begin::Body-->
                                            <div class="fs-6 fw-semibold mb-5 d-flex flex-wrap">
                                                <h3 class="fw-bold mb-5 me-5">Reviews</h3>
                                                <!--begin::Rating-->
                                                <div class="rating me-4">
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                                <!--end::Rating-->
                                                <!--begin::Text-->
                                                <p class="mb-0">5.0</p>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                            <!--begin::Comment-->
                                            <div class="d-flex">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="../assets/media/avatars/300-13.jpg" alt="">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column flex-row-fluid">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center flex-wrap mb-0">
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                                        <!--end::Name-->
                                                        <!--begin::rating-->
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-duotone ki-star fs-7"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-duotone ki-star fs-7"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-duotone ki-star fs-7"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-duotone ki-star fs-7"></i>
                                                            </div>
                                                            <div class="rating-label">
                                                                <i class="ki-duotone ki-star fs-7"></i>
                                                            </div>
                                                        </div>
                                                        <!--end::rating-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Text-->
                                                    <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Comment-->
                                            
                                            <div class="d-flex align-items-center pt-5">
                                                <!--begin::Author-->
                                                <div class="symbol symbol-35px me-3">
                                                    <img src="../assets/media/avatars/300-3.jpg" alt="">
                                                </div>
                                                <!--end::Author-->
                                                <!--begin::Input group-->
                                                <div class="position-relative w-100">
                                                    <!--begin::Input-->
                                                    <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 44.0964px;"></textarea>
                                                    <!--end::Input-->
                                                    <!--begin::Actions-->
                                                    <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n2">
                                                        
                                                        <!--begin::Btn-->
                                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                                            <i class="fa-solid fa-paper-plane"></i>
                                                        </button>
                                                        <!--end::Btn-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!-- end::Reviews -->

                                        </div>            
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="col-lg-4">
                            <!--begin::Caracteristics-->
                            <div class="card card-flush mb-5 mb-xl-8">
                                <div class="card-body">
                                    <!--begin::Select Quality-->
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Select Quality:</span><span id="valueQuality"></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Buttons-->
                                        <div class="d-flex flex-stack gap-5">
                                            <button type="button" 
                                                class="btn btn-light-primary w-100 btn-sm" 
                                                data-kt-docs-advanced-forms="interactive">
                                                Basic
                                            </button>
                                            <button type="button" 
                                                class="btn btn-light-primary w-100 btn-sm" 
                                                data-kt-docs-advanced-forms="interactive">
                                                Premium
                                            </button>
                                        </div>
                                        <!--begin::Buttons-->
                                    </div>
                                    <!--end::Select Quality-->
                                    <!--begin::Select Quality-->
                                    <div class="d-flex flex-column mb-5 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Style:</span><span id="valueStyle"></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Buttons-->
                                        <div class="d-flex flex-wrap  gap-5 mb-3">
                                            <button type="button" 
                                                class="btn btn-light-primary w-30 btn-sm" 
                                                data-kt-docs-advanced-forms="interactive">
                                                Minimal
                                            </button>
                                            <button type="button" 
                                                class="btn btn-light-primary w-30 btn-sm" 
                                                data-kt-docs-advanced-forms="interactive">
                                                Bohemian
                                            </button>
                                            <button type="button" 
                                                class="btn btn-light-primary w-30 btn-sm" 
                                                data-kt-docs-advanced-forms="interactive">
                                                Other
                                            </button>
                                        </div>
                                        <!--begin::Buttons-->
                                    </div>
                                    <!--end::Select Quality-->
                                    <div class="pe-0">
                                        <!--begin::Dialer-->
                                        <div class="position-relative d-flex flex-center " data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                            <!--begin::Decrease control-->
                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="decrease">
                                                <i class="ki-duotone ki-minus fs-3x"></i>
                                            </button>
                                            <!--end::Decrease control-->
                                            <!--begin::Input control-->
                                            <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                            <!--end::Input control-->
                                            <!--begin::Increase control-->
                                            <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="increase">
                                                <i class="ki-duotone ki-plus fs-3x"></i>
                                            </button>
                                            <!--end::Increase control-->
                                        </div>
                                        <!--end::Dialer-->
                                    </div>
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--end::Separator-->
                                    <!--begin::Price -->
                                    <div class="d-flex justify-content-center px-0">
                                        <div class="mb-0 text-center">
                                            <span class="fs-1  text-gray-500 me-1 mt-n1">$</span> 
                                            <span class="fs-3x fw-bold " id="valuePrice">500.00</span>
                                        </div>
                                        <div class="py-3 px-2 ">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <span class="badge badge-danger fs-base ">-20%</span>
                                            </div>
                                            <div class="fw-semibold fs-6 ">600.00</div>
                                            <!--end::Label-->
                                        </div>
                                        
                                    </div>
                                    <!--end::Price -->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Card body-->
                                <div class="card-footer px-5 py-5" >
                                    <div class="d-flex justify-content-center" >
                                    <a href="#" class="btn btn-icon btn-danger me-2"
                                        title="Add to favorites">
                                        <i class="fa-solid fa-heart fs-1"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary w-100">Add to cart</button>
                                    </div>
                                    
                                </div>

                                
                            </div>
                            <!--end::Content-->
                            <!-- invite friends -->
                            <div class="card mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Sugerencias para ti</span>
                                    </h3>
                                    
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '
                                        <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-5">
                                                    <img src="../assets/media/avatars/300-11.jpg" class="h-50 align-self-center" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                    <!--begin:Author-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-light fs-8 fw-bold">share</a>
                                                    <!--end:Action-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                        ';
                                    }
                                ?>
                                    
                                    
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Invite Friends-->

                            <!-- created by -->
                            <div class="card mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Created by</span>
                                    </h3>
                                    
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '
                                        <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-5">
                                                    <img src="../assets/media/avatars/300-9.jpg" class="h-50 align-self-center" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                    <!--begin:Author-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
                                                    </div>
                                                    <!--end:Author-->
                                                    <!--begin:Action-->
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-light fs-8 fw-bold">invite</a>
                                                    <!--end:Action-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                        ';
                                    }
                                ?>
                                    
                                    
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::created by-->

                            <!-- begin::products -->
                            <div id="kt_carousel_2_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="8000">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <!--begin::Label-->
                                    <span class="fs-4 fw-bold pe-2">Related Product</span>
                                    <!--end::Label-->

                                    <!--begin::Carousel Indicators-->
                                    <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet">
                                        <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="0" class="ms-1 active"></li>
                                        <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="1" class="ms-1"></li>
                                        <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="2" class="ms-1"></li>
                                    </ol>
                                    <!--end::Carousel Indicators-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Carousel-->
                                <div class="carousel-inner pt-8">
                                    <!--begin::Item-->
                                    <div class="carousel-item active">
                                        <div class="card shadow-sm">
                                            <div class="card-header px-3 py-1">
                                                <div class="card-title py-0 m-0">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-40px symbol-circle me-1">
                                                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg">
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex justify-content-center flex-column me-1">
                                                        <a href="" class="fs-7 fw-bold text-gray-900 text-hover-primary me-1 mb-1 lh-1">Brian Cox</a>
                                                        <!--begin::Info-->
                                                        <div class="mb-0 lh-1">
                                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                            <span class="fs-8 fw-semibold text-muted">Active</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                
                                                <div class="card-toolbar py-0 my-0">
                                                <!--begin::Menu-->
                                                    <button class="btn btn-link btn-color-muted btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="fa-solid fa-ellipsis fs-3"></i>    
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
                                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                                                                <i class="ki-duotone ki-information fs-7">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Groups</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Create Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Invite Members</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <div class="card-body p-0">
                                                <!-- begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px"
                                                    style="background-image:url(../assets/media/products/1.png)">
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <div class="card-footer px-3 py-4">
                                                <!--begin::action info-->
                                                    <div class="d-flex justify-content-center flex-column me-0">
                                                    
                                                        <!--begin::Info-->
                                                        <a href="./detalle_producto.php" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                                                            Reloj Smart watch 
                                                        </a>
                                                        <div class="">
                                                            <div class="rating justify-content-start">
                                                                <!--begin::Star 1-->
                                                                <label class="rating-label" for="kt_rating_input_1">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="1" type="radio" id="kt_rating_input_1"/>
                                                                <!--end::Star 1-->

                                                                <!--begin::Star 2-->
                                                                <label class="rating-label" for="kt_rating_input_2">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="2" type="radio" id="kt_rating_input_2"/>
                                                                <!--end::Star 2-->

                                                                <!--begin::Star 3-->
                                                                <label class="rating-label" for="kt_rating_input_3">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="3" type="radio" id="kt_rating_input_3"/>
                                                                <!--end::Star 3-->

                                                                <!--begin::Star 4-->
                                                                <label class="rating-label" for="kt_rating_input_4">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="4" type="radio" id="kt_rating_input_4"/>
                                                                <!--end::Star 4-->

                                                                <!--begin::Star 5-->
                                                                <label class="rating-label" for="kt_rating_input_5">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="5" type="radio" id="kt_rating_input_5"/>
                                                                <!--end::Star 5-->
                                                            </div>
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Price-->
                                                        
                                                        <div class="d-flex justify-content-between align-items-center ">
                                                            <div class="fs-5 fw-bold text-gray-800 me-3">$ 2575.00</div>
                                                            <!--begin::Add to cart-->
                                                            <button type="button" class="btn btn-sm  btn-light btn-active-light-primary">
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </button>
                                                            <!--end::Add to cart-->
                                                        </div>
                                                        
                                                        <!--end::Price-->

                                                    </div>
                                                    <!--end::action info-->
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="carousel-item">
                                        <div class="card shadow-sm">
                                            <div class="card-header px-3 py-1">
                                                <div class="card-title py-0 m-0">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-40px symbol-circle me-1">
                                                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg">
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex justify-content-center flex-column me-1">
                                                        <a href="" class="fs-7 fw-bold text-gray-900 text-hover-primary me-1 mb-1 lh-1">Brian Cox</a>
                                                        <!--begin::Info-->
                                                        <div class="mb-0 lh-1">
                                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                            <span class="fs-8 fw-semibold text-muted">Active</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                
                                                <div class="card-toolbar py-0 my-0">
                                                <!--begin::Menu-->
                                                    <button class="btn btn-link btn-color-muted btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="fa-solid fa-ellipsis fs-3"></i>    
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" >
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
                                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                                                                <i class="ki-duotone ki-information fs-7">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Groups</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Create Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Invite Members</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <div class="card-body p-0">
                                                <!-- begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px"
                                                    style="background-image:url(/assets/media/products/1.png)">
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <div class="card-footer px-3 py-4">
                                                <!--begin::action info-->
                                                    <div class="d-flex justify-content-center flex-column me-0">
                                                    
                                                        <!--begin::Info-->
                                                        <a href="./detalle_producto.php" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                                                            Reloj Smart watch 
                                                        </a>
                                                        <div class="">
                                                            <div class="rating justify-content-start">
                                                                <!--begin::Star 1-->
                                                                <label class="rating-label" for="kt_rating_input_1">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="1" type="radio" id="kt_rating_input_1"/>
                                                                <!--end::Star 1-->

                                                                <!--begin::Star 2-->
                                                                <label class="rating-label" for="kt_rating_input_2">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="2" type="radio" id="kt_rating_input_2"/>
                                                                <!--end::Star 2-->

                                                                <!--begin::Star 3-->
                                                                <label class="rating-label" for="kt_rating_input_3">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="3" type="radio" id="kt_rating_input_3"/>
                                                                <!--end::Star 3-->

                                                                <!--begin::Star 4-->
                                                                <label class="rating-label" for="kt_rating_input_4">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="4" type="radio" id="kt_rating_input_4"/>
                                                                <!--end::Star 4-->

                                                                <!--begin::Star 5-->
                                                                <label class="rating-label" for="kt_rating_input_5">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="5" type="radio" id="kt_rating_input_5"/>
                                                                <!--end::Star 5-->
                                                            </div>
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Price-->
                                                        
                                                        <div class="d-flex justify-content-between align-items-center ">
                                                            <div class="fs-5 fw-bold text-gray-800 me-3">$ 2575.00</div>
                                                            <!--begin::Add to cart-->
                                                            <button type="button" class="btn btn-sm  btn-light btn-active-light-primary">
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </button>
                                                            <!--end::Add to cart-->
                                                        </div>
                                                        
                                                        <!--end::Price-->

                                                    </div>
                                                    <!--end::action info-->
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="carousel-item">
                                        <div class="card shadow-sm">
                                            <div class="card-header px-3 py-1">
                                                <div class="card-title py-0 m-0">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-40px symbol-circle me-1">
                                                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg">
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex justify-content-center flex-column me-1">
                                                        <a href="" class="fs-7 fw-bold text-gray-900 text-hover-primary me-1 mb-1 lh-1">Brian Cox</a>
                                                        <!--begin::Info-->
                                                        <div class="mb-0 lh-1">
                                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                            <span class="fs-8 fw-semibold text-muted">Active</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                
                                                <div class="card-toolbar py-0 my-0">
                                                <!--begin::Menu-->
                                                    <button class="btn btn-link btn-color-muted btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="fa-solid fa-ellipsis fs-3"></i>    
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
                                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                                                                <i class="ki-duotone ki-information fs-7">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Groups</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Create Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Invite Members</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <div class="card-body p-0">
                                                <!-- begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover min-h-175px"
                                                    style="background-image:url(assets/media/products/1.png)">
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <div class="card-footer px-3 py-4">
                                                <!--begin::action info-->
                                                    <div class="d-flex justify-content-center flex-column me-0">
                                                    
                                                        <!--begin::Info-->
                                                        <a href="./detalle_producto.php" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                                                            Reloj Smart watch 
                                                        </a>
                                                        <div class="">
                                                            <div class="rating justify-content-start">
                                                                <!--begin::Star 1-->
                                                                <label class="rating-label" for="kt_rating_input_1">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="1" type="radio" id="kt_rating_input_1"/>
                                                                <!--end::Star 1-->

                                                                <!--begin::Star 2-->
                                                                <label class="rating-label" for="kt_rating_input_2">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="2" type="radio" id="kt_rating_input_2"/>
                                                                <!--end::Star 2-->

                                                                <!--begin::Star 3-->
                                                                <label class="rating-label" for="kt_rating_input_3">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="3" type="radio" id="kt_rating_input_3"/>
                                                                <!--end::Star 3-->

                                                                <!--begin::Star 4-->
                                                                <label class="rating-label" for="kt_rating_input_4">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="4" type="radio" id="kt_rating_input_4"/>
                                                                <!--end::Star 4-->

                                                                <!--begin::Star 5-->
                                                                <label class="rating-label" for="kt_rating_input_5">
                                                                    <i class="ki-duotone ki-star fs-7"></i>
                                                                </label>
                                                                <input class="rating-input" name="rating" value="5" type="radio" id="kt_rating_input_5"/>
                                                                <!--end::Star 5-->
                                                            </div>
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Price-->
                                                        
                                                        <div class="d-flex justify-content-between align-items-center ">
                                                            <div class="fs-5 fw-bold text-gray-800 me-3">$ 2575.00</div>
                                                            <!--begin::Add to cart-->
                                                            <button type="button" class="btn btn-sm  btn-light btn-active-light-primary">
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </button>
                                                            <!--end::Add to cart-->
                                                        </div>
                                                        
                                                        <!--end::Price-->

                                                    </div>
                                                    <!--end::action info-->
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Carousel-->
                            </div>
                            <!-- end::products -->
                        </div>

                        <!--end::Wrapper-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content wrapper-->

        <!--begin::Footer-->
        <?php include '../includes/footer.php'; ?>
        <!--end::Footer-->
    </div>
    <!--end:::Main-->

</div>
<!--end::Wrapper-->
<?php include '../layouts/footer.php'; ?>