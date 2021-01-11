<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Juniorise') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<style>
    .hat-icon {
        bottom: 12px;
        right: 2px;
        transform: matrix(0.87, 0.46, -0.51, 0.88, 0, 0);
    }

    .searchbar {
        height: 100%;
        min-height: 48px;
        padding: 8px 16px;
        outline: none;
    }

    .search-btn {
        cursor: pointer;
    }

    .category {
        cursor: pointer;
    }
    .smart-scroll{
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }
    .scrolled-down{
        transform:translateY(-100%); transition: all 0.3s ease-in-out;
    }
    .scrolled-up{
        transform:translateY(0); transition: all 0.3s ease-in-out;
    }
    .navbar{
        padding: 0 !important;
    }
    .modal-backdrop {
        /* bug fix - no overlay */
        display: none !important;
    }
    .modal-backdrop {
        z-index: 1040 !important;
    }
    .modal-content {
        margin: 2px auto;
        z-index: 1100 !important;
    }
</style>

<body>
    <div id="app">
        @include('layouts.header')
        @include('layouts.edit')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/emoji-toggle.js') }}"></script>
    <script>
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

        // detect scroll top or down
        if ($('.smart-scroll').length > 0) { // check if element exists
            var last_scroll_top = 0;
            $(window).on('scroll', function() {
                scroll_top = $(this).scrollTop();
                if(scroll_top < last_scroll_top) {
                    $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
                }
                else {
                    $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
                }
                last_scroll_top = scroll_top;
            });
        }

        $(document).on('click','.open_modal',function(){
            // var url = "domain.com/yoururl";
            // var id= $(this).val();
            // $.get(url + '/' + id, function (data) {
                //success data
                // $('#tour_id').val(data.id);
                // $('#name').val(data.name);
                // $('#details').val(data.details);
                // $('#btn-save').val("update");
                $('#edit-modal').modal('show');
                $("#edit-modal").appendTo("body");
            // })
        });

        function hidemodal(){
            $('#edit-modal').modal('hide');
        }

        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
