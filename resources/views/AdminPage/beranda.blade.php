<!doctype html>
<html lang="en">

<head>
    @include('AdminPage.layouts.head')
</head>


<body>


    <!-- Begin page -->
    <div id="layout-wrapper">
        {{-- header --}}
        @include('AdminPage.layouts.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('AdminPage.layouts.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                                        <p class="text-muted mb-0">Total Revenue</p>
                                    </div>
                                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                                class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                                        <p class="text-muted mb-0">Orders</p>
                                    </div>
                                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                                class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                                        <p class="text-muted mb-0">Customers</p>
                                    </div>
                                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                                class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="growth-chart" data-colors='["--bs-warning"]'></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                                        <p class="text-muted mb-0">Growth</p>
                                    </div>
                                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                                class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-reset" href="#"
                                                id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="fw-semibold">Sort By:</span> <span
                                                    class="text-muted">Yearly<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton5">
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title mb-4">Sales Analytics</h4>

                                    <div class="mt-1">
                                        <ul class="list-inline main-chart mb-0">
                                            <li class="list-inline-item chart-border-left me-0 border-0">
                                                <h3 class="text-primary">$<span
                                                        data-plugin="counterup">2,371</span><span
                                                        class="text-muted d-inline-block font-size-15 ms-3">Income</span>
                                                </h3>
                                            </li>
                                            <li class="list-inline-item chart-border-left me-0">
                                                <h3><span data-plugin="counterup">258</span><span
                                                        class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                                                </h3>
                                            </li>
                                            <li class="list-inline-item chart-border-left me-0">
                                                <h3><span data-plugin="counterup">3.6</span>%<span
                                                        class="text-muted d-inline-block font-size-15 ms-3">Conversation
                                                        Ratio</span></h3>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-3">
                                        <div id="sales-analytics-chart"
                                            data-colors='["--bs-primary", "#dfe2e6", "--bs-warning"]'
                                            class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-sm-8">
                                            <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better
                                                outreach <i class="mdi mdi-arrow-right"></i></p>
                                            <div class="mt-4">
                                                <a href="javascript: void(0);"
                                                    class="btn btn-success waves-effect waves-light">Upgrade
                                                    Account!</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mt-4 mt-sm-0">
                                                <img src="assets/images/setup-analytics-amico.svg" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-reset" href="#"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold">Sort By:</span> <span
                                                    class="text-muted">Yearly<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-4">Top Selling Products</h4>


                                    <div class="row align-items-center g-0 mt-3">
                                        <div class="col-sm-3">
                                            <p class="text-truncate mt-1 mb-0"><i
                                                    class="mdi mdi-circle-medium text-primary me-2"></i> Desktops </p>
                                        </div>

                                        <div class="col-sm-9">
                                            <div class="progress mt-1" style="height: 6px;">
                                                <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                                    style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                                    aria-valuemax="52">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                    <div class="row align-items-center g-0 mt-3">
                                        <div class="col-sm-3">
                                            <p class="text-truncate mt-1 mb-0"><i
                                                    class="mdi mdi-circle-medium text-info me-2"></i> iPhones </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-1" style="height: 6px;">
                                                <div class="progress-bar progress-bar bg-info" role="progressbar"
                                                    style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                                    aria-valuemax="45">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                    <div class="row align-items-center g-0 mt-3">
                                        <div class="col-sm-3">
                                            <p class="text-truncate mt-1 mb-0"><i
                                                    class="mdi mdi-circle-medium text-success me-2"></i> Android </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-1" style="height: 6px;">
                                                <div class="progress-bar progress-bar bg-success" role="progressbar"
                                                    style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                                    aria-valuemax="48">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                    <div class="row align-items-center g-0 mt-3">
                                        <div class="col-sm-3">
                                            <p class="text-truncate mt-1 mb-0"><i
                                                    class="mdi mdi-circle-medium text-warning me-2"></i> Tablets </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-1" style="height: 6px;">
                                                <div class="progress-bar progress-bar bg-warning" role="progressbar"
                                                    style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                    aria-valuemax="78">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                    <div class="row align-items-center g-0 mt-3">
                                        <div class="col-sm-3">
                                            <p class="text-truncate mt-1 mb-0"><i
                                                    class="mdi mdi-circle-medium text-purple me-2"></i> Cables </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-1" style="height: 6px;">
                                                <div class="progress-bar progress-bar bg-purple" role="progressbar"
                                                    style="width: 63%" aria-valuenow="63" aria-valuemin="0"
                                                    aria-valuemax="63">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end Col -->
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">All Members<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="#">Locations</a>
                                                <a class="dropdown-item" href="#">Revenue</a>
                                                <a class="dropdown-item" href="#">Join Date</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title mb-4">Top Users</h4>

                                    <div data-simplebar style="max-height: 339px;">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-centered table-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 20px;"><img
                                                                src="assets/images/users/avatar-4.jpg"
                                                                class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i
                                                                    class="mdi mdi-map-marker"></i> Nevada</p>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-danger-subtle text-danger font-size-12">Cancel</span>
                                                        </td>
                                                        <td class="text-muted fw-semibold text-end"><i
                                                                class="icon-xs icon me-2 text-success"
                                                                data-feather="trending-up"></i>$250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-5.jpg"
                                                                class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i
                                                                    class="mdi mdi-map-marker"></i> Texas</p>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-success-subtle text-success font-size-12">Success</span>
                                                        </td>
                                                        <td class="text-muted fw-semibold text-end"><i
                                                                class="icon-xs icon me-2 text-danger"
                                                                data-feather="trending-down"></i>$110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-6.jpg"
                                                                class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i
                                                                    class="mdi mdi-map-marker"></i> California</p>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-info-subtle text-info font-size-12">Active</span>
                                                        </td>
                                                        <td class="text-muted fw-semibold text-end"><i
                                                                class="icon-xs icon me-2 text-success"
                                                                data-feather="trending-up"></i>$420.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-7.jpg"
                                                                class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i
                                                                    class="mdi mdi-map-marker"></i> Montana</p>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-warning-subtle text-warning font-size-12">Pending</span>
                                                        </td>
                                                        <td class="text-muted fw-semibold text-end"><i
                                                                class="icon-xs icon me-2 text-danger"
                                                                data-feather="trending-down"></i>$120.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-8.jpg"
                                                                class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i
                                                                    class="mdi mdi-map-marker"></i> Colorado</p>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-info-subtle text-info font-size-12">Active</span>
                                                        </td>
                                                        <td class="text-muted fw-semibold text-end"><i
                                                                class="icon-xs icon me-2 text-success"
                                                                data-feather="trending-up"></i>$112.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg"
                                                                class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i
                                                                    class="mdi mdi-map-marker"></i> Australia</p>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-success-subtle text-success font-size-12">Success</span>
                                                        </td>
                                                        <td class="text-muted fw-semibold text-end"><i
                                                                class="icon-xs icon me-2 text-danger"
                                                                data-feather="trending-down"></i>$120.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-1.jpg"
                                                                class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i
                                                                    class="mdi mdi-map-marker"></i> India</p>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-danger-subtle text-danger font-size-12">Cancel</span>
                                                        </td>
                                                        <td class="text-muted fw-semibold text-end"><i
                                                                class="icon-xs icon me-2 text-success"
                                                                data-feather="trending-up"></i>$112.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- enbd table-responsive-->
                                    </div> <!-- data-sidebar-->
                                </div><!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">Recent<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton3">
                                                <a class="dropdown-item" href="#">Recent</a>
                                                <a class="dropdown-item" href="#">By Users</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-4">Recent Activity</h4>

                                    <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 339px;">
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <p class="text-muted mb-1 font-size-13">Today<small
                                                        class="d-inline-block ms-1">12:20 pm</small></p>
                                                <p class="mb-0">Andrei Coman magna sed porta finibus, risus
                                                    posted a new article: <span class="text-primary">Forget UX
                                                        Rowland</span></p>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">22 Jul, 2020 <small
                                                    class="d-inline-block ms-1">12:36 pm</small></p>
                                            <p class="mb-0">Andrei Coman posted a new article: <span
                                                    class="text-primary">Designer Alex</span></p>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">18 Jul, 2020 <small
                                                    class="d-inline-block ms-1">07:56 am</small></p>
                                            <p class="mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace
                                                Commented <span class="text-primary"> Developer Moreno</span></p>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">10 Jul, 2020 <small
                                                    class="d-inline-block ms-1">08:42 pm</small></p>
                                            <p class="mb-0">Zack Wetass, Chris combined Commented <span
                                                    class="text-primary">UX Murphy</span></p>
                                        </li>

                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">23 Jun, 2020 <small
                                                    class="d-inline-block ms-1">12:22 am</small></p>
                                            <p class="mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace
                                                Commented <span class="text-primary"> Developer Moreno</span></p>
                                        </li>
                                        <li class="feed-item pb-1">
                                            <p class="text-muted mb-1 font-size-13">20 Jun, 2020 <small
                                                    class="d-inline-block ms-1">09:48 pm</small></p>
                                            <p class="mb-0">Zack Wetass, Chris combined Commented <span
                                                    class="text-primary">UX Murphy</span></p>
                                        </li>

                                    </ol>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">

                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton4"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">Monthly<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton4">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title">Social Source</h4>

                                    <div class="text-center">
                                        <div class="avatar-sm mx-auto mb-4">
                                            <span class="avatar-title rounded-circle bg-primary-subtle font-size-24">
                                                <i class="mdi mdi-facebook text-primary"></i>
                                            </span>
                                        </div>
                                        <p class="font-16 text-muted mb-2"></p>
                                        <h5><a href="#" class="text-reset ">Facebook - <span
                                                    class="text-muted font-16">125 sales</span> </a></h5>
                                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                            sapien ut libero venenatis faucibus tincidunt.</p>
                                        <a href="#" class="text-reset font-16">Learn more <i
                                                class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                        <i class="mdi mdi-facebook text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Facebook</h5>
                                                <p class="text-muted mb-0">125 sales</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-info font-size-16">
                                                        <i class="mdi mdi-twitter text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Twitter</h5>
                                                <p class="text-muted mb-0">112 sales</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-pink font-size-16">
                                                        <i class="mdi mdi-instagram text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Instagram</h5>
                                                <p class="text-muted mb-0">104 sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 text-center">
                                        <a href="#" class="text-primary font-size-14 fw-medium">View All Sources
                                            <i class="mdi mdi-chevron-right"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Transaction</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck1">
                                                            <label class="form-check-label"
                                                                for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Order ID</th>
                                                    <th>Billing Name</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Payment Status</th>
                                                    <th>Payment Method</th>
                                                    <th>View Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck2">
                                                            <label class="form-check-label"
                                                                for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);"
                                                            class="text-body fw-bold">#MB2540</a> </td>
                                                    <td>Neal Matthews</td>
                                                    <td>
                                                        07 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $400
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck3">
                                                            <label class="form-check-label"
                                                                for="customCheck3">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);"
                                                            class="text-body fw-bold">#MB2541</a> </td>
                                                    <td>Jamal Burnett</td>
                                                    <td>
                                                        07 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $380
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-danger-subtle text-danger font-size-12">Chargeback</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck4">
                                                            <label class="form-check-label"
                                                                for="customCheck4">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);"
                                                            class="text-body fw-bold">#MB2542</a> </td>
                                                    <td>Juan Mitchell</td>
                                                    <td>
                                                        06 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $384
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck5">
                                                            <label class="form-check-label"
                                                                for="customCheck5">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);"
                                                            class="text-body fw-bold">#MB2543</a> </td>
                                                    <td>Barry Dick</td>
                                                    <td>
                                                        05 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $412
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck6">
                                                            <label class="form-check-label"
                                                                for="customCheck6">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);"
                                                            class="text-body fw-bold">#MB2544</a> </td>
                                                    <td>Ronald Taylor</td>
                                                    <td>
                                                        04 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $404
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-warning-subtle text-warning font-size-12">Refund</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck7">
                                                            <label class="form-check-label"
                                                                for="customCheck7">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);"
                                                            class="text-body fw-bold">#MB2545</a> </td>
                                                    <td>Jacob Hunter</td>
                                                    <td>
                                                        04 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $392
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            {{-- footer --}}
            @include('AdminPage.layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                        value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                        value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                        value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                        value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                        value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                        value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                        value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored"
                        value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
                    <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
                        value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
                        value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')
</body>

</html>
