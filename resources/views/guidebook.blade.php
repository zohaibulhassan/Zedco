@php
    $html_tag_data = [];
    $title = 'Guidebook';
    $description = 'Medical Assistant';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data,'title'=>$title,'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
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
            <div class="col-lg-4 mb-5">
                <!-- Index Start -->
                <h2 class="small-title">Index</h2>
                <div id="guidebookIndex">
                    <div class="card mb-2">
                        <div class="card-body px-5 py-4">
                            <div
                                    class="d-flex flex-row align-content-center align-items-center cursor-pointer accordion-button p-0 no-shadow h5 m-0"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                            >
                                <i data-acorn-icon="virus" data-acorn-size="16" class="me-2 sw-2"></i>
                                <span class="flex-grow-1">Communicable Diseases</span>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#guidebookIndex">
                                <div class="mt-4 mb-n2">
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Sesame snaps chocolate apple pie chocolate</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Brownie candy biscuit chupa chups</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Cotton candy caramels icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Marshmallow liquorice cake liquorice</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Pudding pastry icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Biscuit halvah muffin dragée</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Halvah cheesecake tootsie</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body px-5 py-4">
                            <div
                                    class="d-flex flex-row align-content-center align-items-center cursor-pointer accordion-button p-0 no-shadow h5 m-0 collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                            >
                                <i data-acorn-icon="brain" data-acorn-size="16" class="me-2 sw-2"></i>
                                <span class="flex-grow-1">Conditions and Treatments</span>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#guidebookIndex">
                                <div class="mt-4 mb-n2">
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Pastry lollipop cake lollipop</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Cotton candy caramels icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Marshmallow liquorice cake liquorice</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Chocolate cake apple pie bear claw wafer</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Biscuit halvah muffin dragée</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Carrot cake toffee sugar plum candy canes</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Chocolate cake apple pie bear claw</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Carrot cake ice cream macaroon</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body px-5 py-4">
                            <div
                                    class="d-flex flex-row align-content-center align-items-center cursor-pointer accordion-button p-0 no-shadow h5 m-0 collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                            >
                                <i data-acorn-icon="stomach" data-acorn-size="16" class="me-2 sw-2"></i>
                                <span class="flex-grow-1">Drugs and Prescriptions</span>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#guidebookIndex">
                                <div class="mt-4 mb-n2">
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Apple pie icing gingerbread candy canes marzipan halvah sugar plum tart marzipan</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Marshmallow liquorice cake liquorice</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Pudding pastry icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Biscuit halvah muffin dragée</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Halvah cheesecake tootsie</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body px-5 py-4">
                            <div
                                    class="d-flex flex-row align-content-center align-items-center cursor-pointer accordion-button p-0 no-shadow h5 m-0 collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour"
                                    aria-expanded="false"
                                    aria-controls="collapseFour"
                            >
                                <i data-acorn-icon="surgery" data-acorn-size="16" class="me-2 sw-2"></i>
                                <span class="flex-grow-1">By Specialty</span>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#guidebookIndex">
                                <div class="mt-4 mb-n2">
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Macaroon chocolate cake croissant chocolate bar tootsie roll apple pie</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Marshmallow liquorice cake liquorice</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Pudding pastry icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Biscuit halvah muffin dragée</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Halvah cheesecake tootsie</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body px-5 py-4">
                            <div
                                    class="d-flex flex-row align-content-center align-items-center cursor-pointer accordion-button p-0 no-shadow h5 m-0 collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive"
                                    aria-expanded="false"
                                    aria-controls="collapseFive"
                            >
                                <i data-acorn-icon="ambulance" data-acorn-size="16" class="me-2 sw-2"></i>
                                <span class="flex-grow-1">Helping Workers Get Back to Work</span>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#guidebookIndex">
                                <div class="mt-4 mb-n2">
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Cotton candy caramels icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Marshmallow liquorice cake liquorice</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Pudding pastry icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Biscuit halvah muffin dragée</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Halvah cheesecake tootsie</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body px-5 py-4">
                            <div
                                    class="d-flex flex-row align-content-center align-items-center cursor-pointer accordion-button p-0 no-shadow h5 m-0 collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix"
                                    aria-expanded="false"
                                    aria-controls="collapseSix"
                            >
                                <i data-acorn-icon="band-aid" data-acorn-size="16" class="me-2 sw-2"></i>
                                <span class="flex-grow-1">Treatment Guidelines and Resources</span>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#guidebookIndex">
                                <div class="mt-4 mb-n2">
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Pudding pastry icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Biscuit halvah muffin dragée</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Halvah cheesecake tootsie</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body px-5 py-4">
                            <div
                                    class="d-flex flex-row align-content-center align-items-center cursor-pointer accordion-button p-0 no-shadow h5 m-0 collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven"
                                    aria-expanded="false"
                                    aria-controls="collapseSeven"
                            >
                                <i data-acorn-icon="heart-check" data-acorn-size="16" class="me-2 sw-2"></i>
                                <span class="flex-grow-1">Treating Crime Victims</span>
                            </div>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#guidebookIndex">
                                <div class="mt-4 mb-n2">
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Croissant marzipan candy canes liquorice croissant</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Gummi bears icing tiramisu gummi bears</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Pudding pastry icing</span>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="body-link d-flex align-items-center">
                                            <i data-acorn-icon="chevron-right" data-acorn-size="16" class="me-2 sw-2"></i>
                                            <span class="align-middle flex-grow-1">Biscuit halvah muffin dragée</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Index End -->
            </div>
            <div class="col-lg-8">
                <!-- Details Start -->
                <h2 class="small-title">Simplified billing for workers</h2>
                <div class="card">
                    <div class="card-body">
                        <p><strong>Moon Tempor</strong></p>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                            haven't heard of them accusamus labore sustainable VHS.
                        </p>
                        <br />
                        <p><strong>Accusamus Labore</strong></p>
                        <p>
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            <br />
                            <br />
                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                            sustainable VHS. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                            them accusamus labore sustainable VHS.
                        </p>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                            haven't heard of them accusamus labore sustainable VHS.
                        </p>
                        <p><strong>Ad vegan excepteur butcher vice lomo</strong></p>
                        <p>
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            <br />
                            <br />
                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                            sustainable VHS. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                            them accusamus labore sustainable VHS.
                        </p>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                            haven't heard of them accusamus labore sustainable VHS.
                        </p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Details End -->
            </div>
        </div>
    </div>
@endsection
