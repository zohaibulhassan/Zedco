@php
    $html_tag_data = [];
    $title = 'Settings';
    $description = 'Medical Assistant';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data,'title'=>$title,'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css" />
@endsection

@section('js_vendor')
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/settings.js"></script>
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
            <div class="col-xl-8">
                <!-- Profile Start -->
                <h2 class="small-title">Profile</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="sw-6 sw-xl-14">
                                    <img src="{{asset('assets/img/profile/profile-1.webp')}}" class="img-fluid rounded-100" alt="thumb" />
                                </div>
                            </div>
                            <div class="col d-flex flex-column justify-content-between">
                                <div class="d-flex flex-row justify-content-between">
                                    <div>
                                        <div class="h5 mb-0 mt-2">Alicia Owens</div>
                                        <div class="text-muted mb-2">Highschool Teacher</div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-icon btn-icon-start" type="button">
                                        <i data-acorn-icon="edit"></i>
                                        <span>Edit</span>
                                    </button>
                                </div>
                                <div class="d-flex mb-1">
                                    <div class="me-3 me-md-7">
                                        <p class="text-small text-muted mb-1">BLOOD</p>
                                        <p class="mb-0">A+</p>
                                    </div>
                                    <div class="me-3 me-md-7">
                                        <p class="text-small text-muted mb-1">AGE</p>
                                        <p class="mb-0">27</p>
                                    </div>
                                    <div class="me-3 me-md-7">
                                        <p class="text-small text-muted mb-1">WEIGHT</p>
                                        <p class="mb-0">64</p>
                                    </div>
                                    <div>
                                        <p class="text-small text-muted mb-1">HEIGHT</p>
                                        <p class="mb-0">1.68</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile End -->

                <!-- Personal Information Start -->
                <h2 class="small-title">Personal Information</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Lisa Jackson" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="writerofrohan" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Company</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Colored Strategies" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Birthday</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control date-picker-close" id="birthday" value="08/08/1988" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <select class="select-single-no-search" data-width="100%" id="genderSelect">
                                        <option label="&nbsp;"></option>
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                        <option value="3">Other</option>
                                        <option value="4">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Bio</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <textarea class="form-control" rows="3">I'm a Cyborg, But That's OK</textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Personal Information End -->

                <!-- Contact Start -->
                <h2 class="small-title">Contact</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Primary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Secondary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="lisajackson@gmail.com" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="+6443884455" />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact End -->
            </div>
            <div class="col-xl-4">
                <!-- Payment Methods Start -->
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Payment Methods</h2>
                    <button class="btn btn-icon btn-icon-start btn-xs btn-background-alternate p-0 text-small pe-1" type="button">
                        <i data-acorn-icon="edit" class="align-middle me-1" data-acorn-size="14"></i>
                        <span class="align-bottom">Edit</span>
                    </button>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="text-primary mb-1">Visa</div>
                            <div>xxxx-xxxx-xxxx-4294</div>
                            <div class="text-muted">Added on 17.02.2021</div>
                            <div class="text-muted">Active</div>
                        </div>
                        <div class="mb-4">
                            <div class="text-primary mb-1">Master Card</div>
                            <div>xxxx-xxxx-xxxx-4354</div>
                            <div class="text-muted">Added on 11.02.2021</div>
                            <div class="text-muted">Active</div>
                        </div>
                        <div>
                            <div class="text-primary mb-1">Paypal</div>
                            <div>aliciaowens@gmail.com</div>
                            <div class="text-muted">Added on 04.01.2021</div>
                            <div class="text-muted">Inactive</div>
                        </div>
                    </div>
                </div>
                <!-- Payment Methods End -->

                <!-- Billing History Start -->
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Billing History</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                        <span class="align-bottom">View All</span>
                        <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                    </button>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="text-primary mb-1">17.07.2021</div>
                            <div>$ 19.99</div>
                            <div class="text-muted">Monthly Payment</div>
                        </div>
                        <div class="mb-4">
                            <div class="text-primary mb-1">08.06.2021</div>
                            <div>$ 3,529.05</div>
                            <div class="text-muted">Checkup</div>
                        </div>
                        <div class="mb-4">
                            <div class="text-primary mb-1">28.06.2021</div>
                            <div>$ 144.33</div>
                            <div class="text-muted">Doctor Control</div>
                        </div>
                        <div class="mb-4">
                            <div class="text-primary mb-1">11.06.2021</div>
                            <div>$ 114.21</div>
                            <div class="text-muted">Blood Test</div>
                        </div>
                        <div>
                            <div class="text-primary mb-1">10.05.2021</div>
                            <div>$ 331.24</div>
                            <div class="text-muted">Physical Examination</div>
                        </div>
                    </div>
                </div>
                <!-- Billing History End -->
            </div>
        </div>
    </div>
@endsection
