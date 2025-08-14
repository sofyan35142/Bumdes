<!doctype html>
<html lang="en">

@include('AdminPage.layouts.head')


<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


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
                                <h4 class="mb-0">Developer Kontak   </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                        <li class="breadcrumb-item active">Developer Kontak </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive mb-4">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="contacusercheck">
                                                            <label class="form-check-label"
                                                                for="contacusercheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Kontak</th>
                                                    <th scope="col">WA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="contacusercheck5">
                                                            <label class="form-check-label"
                                                                for="contacusercheck5"></label>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        {{-- <div class="avatar-xs d-inline-block me-2">
                                                            <div
                                                                class="avatar-title bg-primary-subtle rounded-circle text-primary">
                                                                <i class="mdi mdi-account-circle m-0"></i>
                                                            </div>
                                                        </div> --}}
                                                        Mukhamad Sofyan
                                                    </td>
                                                    <td>087859990555</td>
                                                    <td>
                                                        <a href="https://wa.me/6287859990555" target="_blank">
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                                                alt="WhatsApp" style="width:24px;height:24px;">
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="contacusercheck1">
                                                            <label class="form-check-label"
                                                                for="contacusercheck1"></label>
                                                        </div>
                                                    </th>
                                                    <td>Zaki Almukhtarom</td>
                                                    <td>081252055995</td>
                                                    <td>
                                                        <a href="https://wa.me/6281252055995" target="_blank">
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                                                alt="WhatsApp" style="width:24px;height:24px;">
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="contacusercheck2">
                                                            <label class="form-check-label"
                                                                for="contacusercheck2"></label>
                                                        </div>
                                                    </th>
                                                    <td>Dino Ibnu Zein</td>
                                                    <td>082131001209</td>
                                                    <td>
                                                        <a href="https://wa.me/6282131001209" target="_blank">
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                                                alt="WhatsApp" style="width:24px;height:24px;">
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="contacusercheck3">
                                                            <label class="form-check-label"
                                                                for="contacusercheck3"></label>
                                                        </div>
                                                    </th>
                                                    <td>Mohammad Ravlindo Saputra</td>
                                                    <td>0878744009902</td>
                                                    <td>
                                                        <a href="https://wa.me/62878744009902" target="_blank">
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                                                alt="WhatsApp" style="width:24px;height:24px;">
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="contacusercheck4">
                                                            <label class="form-check-label"
                                                                for="contacusercheck4"></label>
                                                        </div>
                                                    </th>
                                                    <td>Rizqullah Atsir Dafa Childyasa Nusa</td>
                                                    <td>08124788969</td>
                                                    <td>
                                                        <a href="https://wa.me/628124788969" target="_blank">
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                                                alt="WhatsApp" style="width:24px;height:24px;">
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>

            <!-- End Page-content -->


            @include('AdminPage.layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @include('AdminPage.layouts.scripts')
</body>

</html>
