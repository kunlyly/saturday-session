@include('layout.header')

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-logo">
    @include('layout.head')
    <div class="clearfix"></div>
    <!-- BEGIN CONTAINER -->
    <div  class="page-container">

        {{-- @include('admin.layout.sidebar1') --}}

        <div class="container">
            @yield('contents')
        </div>

    </div>
</body>

@include('layout.footer')