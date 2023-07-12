@php
    $html_tag_data = [];
    $title = 'Doctor Dashboard';
    $description = 'Medical Assistant';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data,'title'=>$title,'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/fullcalendar.min.css" />
@endsection

@section('js_vendor')
    <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="/js/vendor/chartjs-plugin-crosshair.js"></script>
    <script src="/js/vendor/fullcalendar/main.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboards.doctor.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <span class="align-middle text-muted d-inline-block lh-1 pb-2 pt-2 text-small">Home</span>
                    <h1 class="mb-0 pb-0 display-4" id="title">Good morning, Alicia!</h1>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Patients Start -->
            <div class="col-xl-6 mb-5">
                <div class="d-flex">
                    <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                        <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            <span class="small-title"></span>
                        </a>
                        <div class="dropdown-menu font-standard">
                            <div class="nav flex-column" role="tablist">
                                <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Tomorrow's</a>
                                <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="small-title">Patients</h2>
                </div>
                <div class="card mb-2">
                    <div class="card-body py-3">
                        <label class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 mt-2">
                            <input type="checkbox" class="form-check-input" checked />
                            <span class="form-check-label">
              <span class="content">
                <span class="mb-1 lh-1-25">Blaine Cottrell</span>
                <span class="d-block text-small text-primary">10:30</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body py-3">
                        <label class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 mt-2">
                            <input type="checkbox" class="form-check-input" checked />
                            <span class="form-check-label">
              <span class="content">
                <span class="mb-1 lh-1-25">Winry Rockbell</span>
                <span class="d-block text-small text-primary">11:30</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body py-3">
                        <label class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 mt-2">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">
              <span class="content">
                <span class="mb-1 lh-1-25">Kirby Peters</span>
                <span class="d-block text-small text-primary">13:00</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body py-3">
                        <label class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 mt-2">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">
              <span class="content">
                <span class="mb-1 lh-1-25">Olli Hawkins</span>
                <span class="d-block text-small text-primary">13:30</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body py-3">
                        <label class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 mt-2">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">
              <span class="content">
                <span class="mb-1 lh-1-25">Daisy Hartley</span>
                <span class="d-block text-small text-primary">14:30</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body py-3">
                        <label class="form-check custom-icon mb-0 checked-line-through checked-opacity-75 mt-2">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">
              <span class="content">
                <span class="mb-1 lh-1-25">Kathryn Mengel</span>
                <span class="d-block text-small text-primary">15:00</span>
              </span>
            </span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- Patients End -->

            <!-- Schedule Calendar Start -->
            <div class="col-xl-6 mb-5">
                <h2 class="small-title">Schedule</h2>
                <div class="card h-auto h-xl-100-card">
                    <div class="card-body sh-xl-50">
                        <div id="calendar" class="compact h-100"></div>
                    </div>
                </div>
            </div>
            <!-- Schedule Calendar End -->

            <!-- Schedule Modal Start -->
            <div class="modal modal-right fade" id="scheduleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">19 December 2021</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body border-last-none">
                            <div class="border-bottom border-separator-light pb-3 mb-3">
                                <div class="text-primary">09:00 - 10:00</div>
                                <div class="mb-2">Meeting with the team</div>
                                <div class="text-muted">Dessert oat cake pudding jujubes jujubes tiramisu candy lollipop.</div>
                            </div>
                            <div class="border-bottom border-separator-light pb-3 mb-3">
                                <div class="text-primary">12:00 - 13:00</div>
                                <div class="mb-2">Cardiovascular Online Symposium</div>
                                <div class="text-muted">Carrot cake ice cream macaroon sweet roll muffin liquorice.</div>
                            </div>
                            <div class="border-bottom border-separator-light pb-3 mb-3">
                                <div class="text-primary">18:00 - 19:00</div>
                                <div class="mb-2">Dinner with Chief Physician</div>
                                <div class="text-muted">Chocolate cake apple pie bear claw wafer cupcake topping topping oat cake.</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Schedule Modal End -->
        </div>

        <!-- Departments Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Departments</h2>
            <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                <span class="align-bottom">View All</span>
                <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
            </button>
        </div>
        <div class="row g-2 mb-5">
            <div class="col-6 col-md-4 col-xl-2 sh-23">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center d-flex flex-column align-items-center" href="#">
                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                            <i data-acorn-icon="brain" class="text-primary"></i>
                        </div>
                        <p class="heading mt-3 text-body">Cardiology</p>
                        <div class="text-extra-small fw-medium text-muted">3 DOCTORS</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 sh-23">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center d-flex flex-column align-items-center" href="#">
                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                            <i data-acorn-icon="lungs" class="text-primary"></i>
                        </div>
                        <p class="heading mt-3 text-body">Gastroenterology</p>
                        <div class="text-extra-small fw-medium text-muted">5 DOCTORS</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 sh-23">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center d-flex flex-column align-items-center" href="#">
                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                            <i data-acorn-icon="dermatology" class="text-primary"></i>
                        </div>
                        <p class="heading mt-3 text-body">Gynecology</p>
                        <div class="text-extra-small fw-medium text-muted">2 DOCTORS</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 sh-23">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center d-flex flex-column align-items-center" href="#">
                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                            <i data-acorn-icon="urinary" class="text-primary"></i>
                        </div>
                        <p class="heading mt-3 text-body">Haematology</p>
                        <div class="text-extra-small fw-medium text-muted">4 DOCTORS</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 sh-23">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center d-flex flex-column align-items-center" href="#">
                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                            <i data-acorn-icon="blood" class="text-primary"></i>
                        </div>
                        <p class="heading mt-3 text-body">Microbiology</p>
                        <div class="text-extra-small fw-medium text-muted">2 DOCTORS</div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 sh-23">
                <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center d-flex flex-column align-items-center" href="#">
                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                            <i data-acorn-icon="gynecology" class="text-primary"></i>
                        </div>
                        <p class="heading mt-3 text-body">Nephrology</p>
                        <div class="text-extra-small fw-medium text-muted">6 DOCTORS</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Departments End -->

        <!-- Charts Start -->
        <div class="row">
            <div class="col-xl-6 mb-5">
                <h2 class="small-title">Patients by Age</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="sh-35">
                            <canvas id="ageChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-5">
                <h2 class="small-title">Patients by Gender</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="sh-35">
                            <canvas id="genderChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Charts End -->

        <!-- Quick Links Start -->
        <h2 class="small-title">Quick Links</h2>
        <div class="row g-2 h-lg-100-card mb-5">
            <div class="col-12 col-lg-6 col-xl-3 h-100">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <div class="cta-4 mb-3">Lab Results</div>
                            <div class="text-muted mb-4 clamp-line" data-line="3">
                                Tootsie roll sweet roll pudding. Pastry liquorice wafer sweet. Chocolate bar jelly sugar plum cake sesame snaps gummies lollipop.
                            </div>
                        </div>
                        <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-12">
                            <i data-acorn-icon="form-check"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 h-100">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <div class="cta-4 mb-3">Imaging Results</div>
                            <div class="text-muted mb-4 clamp-line" data-line="3">
                                Candy canes jelly beans donut gummies gummi biscuit chocolate bar powder bears halvah pie bear claw wafer cupcake oat cake marzipan.
                            </div>
                        </div>
                        <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-12">
                            <i data-acorn-icon="file-image"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 h-100">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <div class="cta-4 mb-3">Prescriptions</div>
                            <div class="text-muted mb-4 clamp-line" data-line="3">
                                Tootsie roll sweet roll pudding. Pastry liquorice wafer sweet. Chocolate bar jelly sugar plum cake sesame snaps gummies lollipop.
                            </div>
                        </div>
                        <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-12">
                            <i data-acorn-icon="health"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 h-100">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <div class="cta-4 mb-3">Guides</div>
                            <div class="text-muted mb-4 clamp-line" data-line="3">
                                Candy canes jelly beans donut gummies gummi biscuit ice cream chocolate bar powder bears halvah sweet roll muffin oat cake marzipan.
                            </div>
                        </div>
                        <a href="#" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link sw-12">
                            <i data-acorn-icon="notebook-1"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Links End -->
    </div>
@endsection
