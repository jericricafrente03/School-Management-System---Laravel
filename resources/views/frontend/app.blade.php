<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    @stack('css')
</head>
<body>
	@include('frontend.partial.navbar')

	@yield('content')

	@include('frontend.partial.footer')

    <script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/parsley.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/type.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-notify.js')}}"></script>
 
   <script>

    $(function() {
        $(".navigation__icon").click(function() {
        $(".navigation").toggleClass('navigation-open');
       });
    });
    mybutton = document.getElementById('myBtn');
    window.onscroll = function() {
        scrollFunction();
    }
    function scrollFunction(){
        if (document.body.scrollTop>20 || document.documentElement.scrollTop >20 ) {
            mybutton.style.display = "block";
        }else{
            mybutton.style.display = "none";
        }
    }
    function topfunction(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    jQuery(document).ready(function($) {
        $('.count').counterUp({
            delay: 10,
            time: 3000
        });
         $('#validate_form').parsley();
       let options = {
            strings: [ "The Web Developer.", "The Best.","Creative. " ],
            typeSpeed:100,
            loop:true
         }    
         let typed = new Typed(".element",options);
    });
    </script>
    @include('sweetalert::alert')

    @stack('script')
</body>
</html>