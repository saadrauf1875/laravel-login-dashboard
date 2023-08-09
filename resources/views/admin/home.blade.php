

<!doctype html>
<html lang="en" dir="ltr">

<head>

   @include('admin.css')

</head>

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('admin.header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
           @include('admin.sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            @include('admin.body')
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
 
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        @include('admin.countryselector')
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        @include('admin.footer')
        <!-- FOOTER END -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

   @include('admin.javascript')

</body>

</html>