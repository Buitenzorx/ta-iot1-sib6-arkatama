<!doctype html>
<html lang="en">

<head>
    @include('layouts.dashboard._head')
</head>

<body>
    <div id="loading">
        @include('layouts.dashboard.loader')
    </div>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
        @include('layouts.dashboard.sidebar')
         </div>
        <!-- Sidebar END -->
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
        @include('layouts.dashboard.header')
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    @include('layouts.dashboard.footer')
    </footer>
    <!-- Footer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('layouts.dashboard._foot')
</body>

</html>
