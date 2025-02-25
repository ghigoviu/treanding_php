<?php
// Simulación de datos del evento
$event = [
    'title' => 'Webinar - Raising Ducks For Egg Production',
    'date' => '7 OCT AT 07:00 - 11 OCT AT 12:00',
    'pledged' => 162000,
    'donations' => 162,
    'goal' => 59689,
    'friends' => 3240,
    'users' => [
        ['name' => 'Monroe Parker', 'location' => 'Turkey'],
        ['name' => 'Martin Gray', 'location' => 'Dubai'],
        ['name' => 'James Lewis', 'location' => 'London']
    ]
];
$title = "Inicio";
include '../layouts/header.php';
?>

<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <?php include_once '../includes/sidebar_menu.php'; ?>
    <!--end::Sidebar-->

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="separator separator-dashed my-5"></div>
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header text-center bg-primary text-white" style=" position: relative; background-image: url(../public/img/funding-event.jpg); height:550px">
                                <div style="position: absolute; bottom: 0px;">
                                    <h1 class="bordered-text"><?php echo $event['title']; ?></h1>
                                    <h3 class="bordered-text"><?php echo $event['date']; ?></h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-7">
                                    <ul class="nav nav-tabs" id="eventTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">About</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Reviews</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="status-tab" data-bs-toggle="tab" data-bs-target="#status" type="button" role="tab">Status</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">Specifications</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="faqs-tab" data-bs-toggle="tab" data-bs-target="#faqs" type="button" role="tab">FAQ's</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-3" id="eventTabsContent">
                                        <div class="tab-pane fade show active" id="about" role="tabpanel">
                                            <h5>About</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique hic eaque adipisci ullam placeat ipsa? Fugit cumque odit ab,
                                                perferendis quo earum cupiditate officia sint impedit ipsum a explicabo excepturi? Lorem ipsum dolor sit amet consectetur adipisicing e
                                                lit. <br><br> Tempora nostrum labore aspernatur alias minima similique, optio reprehenderit, totam magnam harum possimus beatae? Doloribus odit
                                                iure minima animi nisi explicabo ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil dicta hic id eos laboriosam
                                                officia, cum animi reiciendis maiores corrupti illum exercitationem facilis commodi reprehenderit similique ea iure laudantium!
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repellat, dolorem rem architecto eveniet harum quia tempora ipsum
                                                cumque fuga aliquid odit hic velit nisi deleniti enim eos recusandae ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                Sit veniam, incidunt error aut laborum autem harum provident a delectus, illo laudantium repellat? Iure soluta quas deserunt est cum
                                                voluptates et.
                                                <br><br>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique hic eaque adipisci ullam placeat ipsa? Fugit cumque odit ab,
                                                perferendis quo earum cupiditate officia sint impedit ipsum a explicabo excepturi? Lorem ipsum dolor sit amet consectetur adipisicing e
                                                lit. <br><br> Tempora nostrum labore aspernatur alias minima similique, optio reprehenderit, totam magnam harum possimus beatae? Doloribus odit
                                                iure minima animi nisi explicabo ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil dicta hic id eos laboriosam
                                                officia, cum animi reiciendis maiores corrupti illum exercitationem facilis commodi reprehenderit similique ea iure laudantium!
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repellat, dolorem rem architecto eveniet harum quia tempora ipsum
                                                cumque fuga aliquid odit hic velit nisi deleniti enim eos recusandae ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                Sit veniam, incidunt error aut laborum autem harum provident a delectus, illo laudantium repellat? Iure soluta quas deserunt est cum
                                                voluptates et.
                                            </p>
                                            <img src="../public/img/vr.jpg" alt="Example" width="90%">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique hic eaque adipisci ullam placeat ipsa? Fugit cumque odit ab,
                                                perferendis quo earum cupiditate officia sint impedit ipsum a explicabo excepturi? Lorem ipsum dolor sit amet consectetur adipisicing e
                                                lit. <br><br> Tempora nostrum labore aspernatur alias minima similique, optio reprehenderit, totam magnam harum possimus beatae? Doloribus odit
                                                iure minima animi nisi explicabo ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil dicta hic id eos laboriosam
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <h5>Reviews</h5>
                                            <p>No reviews yet.</p>
                                        </div>
                                        <div class="tab-pane fade" id="status" role="tabpanel">
                                            <h5>Status</h5>
                                            <p><strong><?php echo number_format($event['pledged']); ?></strong> Pledged</p>
                                            <p><strong><?php echo $event['donations']; ?></strong> Donations</p>
                                            <p><strong><?php echo number_format($event['goal']); ?></strong> Goal</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: <?php echo ($event['pledged'] / $event['goal']) * 100; ?>%;"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="specs" role="tabpanel">
                                            <h5>Specifications</h5>
                                            <p>Details about the event specifications.</p>
                                        </div>
                                        <div class="tab-pane fade" id="faqs" role="tabpanel">
                                            <h5>FAQ's</h5>
                                            <p>Frequently asked questions about the event.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h5>Status</h5>
                                    <p><strong><?php echo number_format($event['pledged']); ?></strong> Pledged</p>
                                    <p><strong><?php echo $event['donations']; ?></strong> Donations</p>
                                    <p><strong><?php echo number_format($event['goal']); ?></strong> Goal</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo ($event['pledged'] / $event['goal']) * 100; ?>%;"></div>
                                    </div>
                                    <h5 class="mt-3">Invite Friends</h5>
                                    <ul class="list-group">
                                        <?php foreach ($event['users'] as $user): ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <img class="invited-friends" src="../assets/media/avatars/300-17.jpg" /><?php echo $user['name']; ?> <span class="badge bg-secondary"> <?php echo $user['location']; ?> </span>
                                                <button class="btn btn-sm btn-primary">Invite</button>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include '../includes/footer.php'; ?>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

</div>
<?php include '../layouts/footer.php'; ?>