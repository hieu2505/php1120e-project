@include('layout.head')

<body>
    <div class="page-body-buong">
        
        @include('layout.header')
        <h1 style="display: none;">HÀ LINH COMPUTER</h1>

        <div id="main" class="wrapper">
            @include('layout.sidebar')
            
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".top-category").click(function () {
                        $(".nav-category-home").slideToggle();
                    });
                });
            </script>
            @yield('wrapper')
        </div>
       
       @include('layout.footer')

        @include('layout.contact')
    </div>
    
   

    <div id="fb-root"></div>
    @include ('layout.script')

</body>

</html>