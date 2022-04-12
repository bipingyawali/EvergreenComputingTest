<!DOCTYPE html>
<html lang="en">
@include('layout.partial.main._head')

<body>
<!-- Begin page -->
<div id="wrapper">

    @include('layout.partial.main._navbar')

    @include('layout.partial.main._sidebar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">@yield('page_title')</h4>
                    </div>
                </div>

                @yield('content')

            </div>
        </div> <!-- content -->



        @include('layout.partial.main._footer')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    @include('layout.partial.main._modal')
</div>
<!-- END wrapper -->

@include('layout.partial.main._script')


</body>
</html>
