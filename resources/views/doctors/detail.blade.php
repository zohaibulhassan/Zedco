@php
    $html_tag_data = [];
    $title = 'Doctor Detail';
    $description = 'Medical Assistant';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data,'title'=>$title,'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/doctors.detail.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <a href="/" class="muted-link pb-1 d-inline-block breadcrumb-back">
                        <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                        <span class="text-small align-middle">Home</span>
                    </a>
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row gx-5">
            <div class="col-xl-4">
                <!-- Profile Start -->
                <h2 class="small-title">Profile</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="mb-4 d-flex align-items-center flex-column">
                            <div class="sw-13 position-relative mb-3">
                                <img src="/img/profile/profile-15.webp" class="img-fluid rounded-xl" alt="thumb" />
                            </div>
                            <div class="h5 mb-0">Carmelo Avril, M.B.B.S.</div>
                            <div class="text-muted mb-2">Cardiology</div>
                            <div class="text-muted text-center mb-2">Sugar plum marshmallow apple pie caramels fruitcake tart dessert jelly beans pudding.</div>
                            <div class="mb-3">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(35)</div>
                            </div>
                            <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                                <button type="button" class="btn btn-primary w-100 me-2">Appointment</button>
                                <button type="button" class="btn btn-outline-primary me-2">Review</button>
                                <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                    <i data-acorn-icon="more-horizontal"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="user" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Available in Person</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="health" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Gastroenterology</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">University of Tasmania</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile End -->

                <!-- Subspecialties Start -->
                <h2 class="small-title">Subspecialties</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" href="#">
                            <span>Echocardiologist</span>
                        </a>
                        <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" href="#">
                            <span>Electrophysiologist</span>
                        </a>
                        <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" href="#">
                            <span>Nuclear</span>
                        </a>
                        <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" href="#">
                            <span>Transplant</span>
                        </a>
                        <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" href="#">
                            <span>Surgeon</span>
                        </a>
                        <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" href="#">
                            <span>Mitraclip</span>
                        </a>
                        <a class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" href="#">
                            <span>Atrial septal defect</span>
                        </a>
                    </div>
                </div>
                <!-- Subspecialties End -->

                <!-- Honors and Awards Start -->
                <h2 class="small-title">Honors and Awards</h2>
                <div class="card mb-5">
                    <div class="card-body mb-n3">
                        <div class="mb-3">
                            <div>Lasker Award</div>
                            <div class="text-muted">2014</div>
                        </div>
                        <div class="mb-3">
                            <div>Florey Medal</div>
                            <div class="text-muted">2012</div>
                        </div>
                        <div class="mb-3">
                            <div>Outstanding Physician-Clinician Award</div>
                            <div class="text-muted">2008</div>
                        </div>
                        <div class="mb-3">
                            <div>Medical School Scholarship, University of Sydney</div>
                            <div class="text-muted">2005</div>
                        </div>
                        <div class="mb-3">
                            <div>Valedictorian University of Canberra</div>
                            <div class="text-muted">2001</div>
                        </div>
                    </div>
                </div>
                <!-- Honors and Awards End -->
            </div>

            <div class="col-xl-8">
                <!-- Experience Start -->
                <h2 class="small-title">Experience</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1"></div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Consultant Cardiologist</a>
                                            <div class="text-alternate">Lismore Base Hospital</div>
                                            <div class="text-alternate">2015-Present</div>
                                            <div class="text-muted mt-1">
                                                <div>Lemon drops cotton candy bear claw oat cake tootsie roll halvah.</div>
                                                <div>Bonbon pie lollipop fruitcake bonbon chocolate cake gummies.</div>
                                                <div>Donut biscuit chocolate cake pie topping.</div>
                                                <div>Cake cookie chocolate.</div>
                                                <div>Caramels jujubes.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Cardiologist</a>
                                            <div class="text-alternate">Gosford Hospital</div>
                                            <div class="text-alternate">2011-2014</div>
                                            <div class="text-muted mt-1">
                                                <div>Chocolate cake apple pie bear claw wafer cupcake topping topping oat cake.</div>
                                                <div>Jelly-o sugar plum fruitcake.</div>
                                                <div>Lemon drops tart gummies cake fruitcake.</div>
                                                <div>Caramels cookie gummies sweet bear claw jelly-o.</div>
                                                <div>Danish dragée toffee bonbon.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link">Cardiology Registrar</a>
                                            <div class="text-alternate">Flinders Medical Centre</div>
                                            <div class="text-alternate">2008-2010</div>
                                            <div class="text-muted mt-1">
                                                <div>Apple pie icing gingerbread candy canes marzipan halvah sugar plum tart marzipan.</div>
                                                <div>Sesame snaps chocolate apple pie chocolate cake chupa chups.</div>
                                                <div>Lemon drops cotton candy bear claw oat cake tootsie roll halvah.</div>
                                                <div>Bonbon pie lollipop fruitcake bonbon chocolate cake gummies.</div>
                                                <div>Plum fruitcake bonbon.</div>
                                                <div>Chupa chups bonbon.</div>
                                                <div>Danish dragée toffee bonbon.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                            </div>
                            <div class="col">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="heading stretched-link pt-0">Basic Physician Trainee</a>
                                            <div class="text-alternate">The Royal Melbourne Hospital City</div>
                                            <div class="text-alternate">2005-2007</div>
                                            <div class="text-muted mt-1">
                                                <div>Chocolate apple pie powder.</div>
                                                <div>Tart chupa chups bonbon.</div>
                                                <div>Jelly-o marshmallow cake.</div>
                                                <div>Caramels jujubes.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience End -->

                <!-- Reviews Start -->
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Reviews</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                        <span class="align-bottom">View All</span>
                        <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                    </button>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Olli Hawkins</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Cupcake cake fruitcake. Powder chocolate bar soufflé gummi bears topping donut.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Kirby Peters</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Nice, very tasty.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3 border-bottom border-separator-light">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-4.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Ronald Doyle</div>
                                    <div class="text-muted text-small mb-2">1 week ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">
                                        Apple pie icing gingerbread candy canes marzipan halvah sugar plum tart marzipan. Sesame snaps chocolate apple pie chocolate cake
                                        chupa chups shortbread tiramisu sugar plum.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3 border-bottom border-separator-light">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="{{asset('assets/img/profile/profile-1.webp')}}" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Cherish Kerr</div>
                                    <div class="text-muted text-small mb-2">2 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Macaroon!</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3 border-bottom border-separator-light">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-8.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Grant Donovan</div>
                                    <div class="text-muted text-small mb-2">1 week ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Gummi bears icing tiramisu gummi bears fruitcake.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-5.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Miracle Hinton</div>
                                    <div class="text-muted text-small mb-2">1 week ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Apple pie croissant cake halvah wafer croissant croissant sweet.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Reviews End -->

                <!-- Publications Start -->
                <h2 class="small-title">Publications</h2>
                <div class="card">
                    <div class="card-body mb-n3">
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                Guillain-Barré Syndrome During the COVID-19 Pandemic and the Relationship Between Acute Phase Reactants and Disability
                            </a>
                            <div>Karter Kidd, M.D., Rayan Higgins, M.D., Miracle Hinton, M.D.</div>
                            <div class="text-muted">05.2021</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                Very Low Vitamin D Levels are a Strong Independent Predictor of Mortality in Hospitalized Patients with Severe COVID-19
                            </a>
                            <div>Rayan Higgins, M.D., Miracle Hinton, M.D.</div>
                            <div class="text-muted">03.2021</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                Rheumatological Immune-related Adverse Events of Checkpoints Inhibitors: a Narrative Review for the Latin American Rheumatologist
                            </a>
                            <div>Miracle Hinton, M.B.B.S., Marquis Higgins, M.D.</div>
                            <div class="text-muted">02.2021</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                Abo Blood Group, Atherothrombotic Comorbidities, and COVID-19: A Case-Control Study of their Association in the Mexican Population
                            </a>
                            <div>Heath Mckay, M.D., Marquis Higgins, M.B.B.S.</div>
                            <div class="text-muted">02.2021</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                Sociodemographic and Clinical Factors Associated with Severe Obesity in Mexican Adults
                            </a>
                            <div>Trent Dawson M.D., Grant Donovan, M.D.</div>
                            <div class="text-muted">02.2021</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                Management of Infections caused by Multidrug-resistant Gram-negative Pathogens: Recent Advances and Future Directions
                            </a>
                            <div>Rayan Higgins, M.D., Ronald Doyle, M.D.</div>
                            <div class="text-muted">02.2021</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                LncRNA RGMB-AS1 up-regulates ANKRD1 through competitively sponging miR-3614-5p to promote OSA cell proliferation and invasion
                            </a>
                            <div>Rayan Higgins, M.D., Miracle Hinton, M.D.</div>
                            <div class="text-muted">01.2021</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                Seroconversion in septic ICU patients presenting with COVID-19: necessary but not sufficient
                            </a>
                            <div>Miracle Hinton, M.B.B.S.</div>
                            <div class="text-muted">11.2020</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                C/EBP β Mediates the Aberrant Inflammatory Response and Cell Cycle Arrest in Lps-stimulated Human Renal Tubular Epithelial Cells by
                                Regulating NF-κB Pathway
                            </a>
                            <div>Valentino Ellis M.B.B.S., Miracle Hinton, M.B.B.S.</div>
                            <div class="text-muted">10.2020</div>
                        </div>
                        <div class="position-relative mb-4">
                            <a href="#" class="mb-1 d-inline-block stretched-link">
                                In vitro and In vivo Synergistic Interactions of the Flavonoid Rutin with Paracetamol and with Non-Steroidal Anti-Inflammatory Drugs
                            </a>
                            <div>Evan Horn M.D., Triston Zavala, M.D., Ronald Doyle, M.D.</div>
                            <div class="text-muted">10.2020</div>
                        </div>
                        <nav>
                            <ul class="pagination semibordered justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i data-acorn-icon="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i data-acorn-icon="chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Publications End -->
            </div>
        </div>
    </div>
@endsection
