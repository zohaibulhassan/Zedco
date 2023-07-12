@php
    $html_tag_data = [];
    $title = 'Doctors';
    $description = 'Medical Assistant';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data,'title'=>$title,'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/doctors.js"></script>
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

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" />
                    <span class="search-magnifier-icon">
          <i data-acorn-icon="search"></i>
        </span>
                    <span class="search-delete-icon d-none">
          <i data-acorn-icon="close"></i>
        </span>
                </div>
            </div>
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                <div class="d-inline-block">
                    <!-- Export Dropdown Start -->
                    <div class="d-inline-block">
                        <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
            <span class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown" data-bs-delay="0" data-bs-placement="top"
                  data-bs-toggle="tooltip" title="Export">
              <i data-acorn-icon="download"></i>
            </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <button class="dropdown-item export-copy" type="button">Copy</button>
                            <button class="dropdown-item export-excel" type="button">Excel</button>
                            <button class="dropdown-item export-cvs" type="button">Cvs</button>
                        </div>
                    </div>
                    <!-- Export Dropdown End -->

                    <!-- Length Start -->
                    <div class="dropdown-as-select d-inline-block ms-1" data-childSelector="span">
                        <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
            <span class="btn btn-foreground-alternate dropdown-toggle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay="0"
                  title="Item Count">
              10 Items
            </span>
                        </button>
                        <div class="dropdown-menu shadow dropdown-menu-end">
                            <a class="dropdown-item" href="#">5 Items</a>
                            <a class="dropdown-item active" href="#">10 Items</a>
                            <a class="dropdown-item" href="#">20 Items</a>
                        </div>
                    </div>
                    <!-- Length End -->
                </div>
            </div>
        </div>
        <!-- Controls End -->

        <!-- Doctors Start -->

        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-1.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Lola Brown, M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                            <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="support" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Available Online</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="health" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Cardiology</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">La Trobe University</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-2.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Trent Dawson M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-3.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Grant Donovan, M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                            <div class="text-muted d-inline-block text-small align-text-top">(55)</div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="support" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Available Online</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="health" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Haematology</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">University of Melbourne</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-4.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Rayan Higgins, M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                            <div class="text-muted d-inline-block text-small align-text-top">(12)</div>
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
                                <div class="d-flex align-items-center lh-1-25">Gynecology</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">University of Canberra</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-5.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Miracle Hinton, M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                            <div class="text-muted d-inline-block text-small align-text-top">(7)</div>
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
                                <div class="d-flex align-items-center lh-1-25">Maternity</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Deakin University</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-6.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Jaycee Wall, M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                            <div class="text-muted d-inline-block text-small align-text-top">(15)</div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="support" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Available Online</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="health" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Microbiology</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">Bond University</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-7.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Marquis Higgins, M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                            <div class="text-muted d-inline-block text-small align-text-top">(41)</div>
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
                                <div class="d-flex align-items-center lh-1-25">Nutrition and Dietetics</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">University of Queensland</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="/Doctors/Detail">
                        <img src="/img/profile/profile-large-8.webp" class="card-img-top sh-30" alt="card image" />
                    </a>
                    <div class="card-body">
                        <a href="/Doctors/Detail">Karter Kidd, M.D.</a>
                        <div class="text-muted mb-1">Neurologist</div>
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
                            <div class="text-muted d-inline-block text-small align-text-top">(29)</div>
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
                                <div class="d-flex align-items-center lh-1-25">Ophthalmology</div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <div class="sw-3 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="book" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="d-flex align-items-center lh-1-25">University of Divinity</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2">
                                <i data-acorn-icon="health"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-outline-primary sw-25">Load More</button>
            </div>
        </div>
        <!-- Doctors End -->
    </div>
@endsection
