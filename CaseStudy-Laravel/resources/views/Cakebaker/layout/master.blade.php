<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cake - Bakery</title>

    <!-- Icon css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
{{--    <link href="{{ asset('Cake-Baker/css/font-awesome.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('Cake-Baker/vendors/linearicons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Cake-Baker/vendors/flat-icon/flaticon.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('Cake-Baker/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{ asset('Cake-Baker/vendors/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('Cake-Baker/vendors/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('Cake-Baker/vendors/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('Cake-Baker/vendors/animate-css/animate.css') }}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link href="{{ asset('Cake-Bake/vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Cake-Baker/vendors/magnifc-popup/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('Cake-Baker/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Cake-Baker/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- navbar -->

@include('Cakebaker.layout.header')
{{--<div class="search-bar">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-10 mx-auto">--}}
{{--                <form action="">--}}
{{--                    <div class="p-1 bg-light shadow-sm">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="search" placeholder="bạn muốn tìm gì...." class="form-control">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@yield('content')



<!-- search     -->

<!-- carousel -->

@include('Cakebaker.layout.footer')
<script src="{{ asset('Cake-Baker/js/jquery-3.2.1.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('Cake-Baker/js/popper.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/js/bootstrap.min.js') }}"></script>
<!-- Rev slider js -->
<script src="{{ asset('Cake-Baker/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<!-- Extra plugin js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

{{--<script src="{{ asset('Cake-Baker/vendors/owl-carousel/owl.carousel.min.js') }}"></script>--}}
<script src="{{ asset('Cake-Baker/vendors/magnifc-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/datetime-picker/js/moment.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('Cake-Baker/vendors/lightbox/simpleLightbox.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


<script src="{{ asset('Cake-Baker/js/theme.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


@if(Session::has('add'))
    <script>
        toastr.success("{!! Session::get('add') !!}")
    </script>
@endif
@if(Session::has('update'))
    <script>
        toastr.success("{!! Session::get('update') !!}")
    </script>
@endif
@if(Session::has('delete'))
    <script>
        toastr.success("{!! Session::get('delete') !!}")
    </script>
@endif
@if(Session::has('error'))
    <script>
        toastr.success("{!! Session::get('error') !!}")
    </script>
@endif

</body>

</html>
