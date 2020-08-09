<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/real-sports/cricket-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Aug 2020 16:46:48 GMT -->
<head>
    <title>Cricket</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('images/fav.ico') }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CMontserrat:300,500%7COswald:400,500" rel="stylesheet">

    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- ALL CSS FILES -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- MOB.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link rel="stylesheet" href="{{ asset('css/mob.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js')}}"></script>
    <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<!--SECTION: LEFT MENU-->
<section>
    <!-- LEFT SIDE NAVIGATION MENU -->
    <div class="menu">
        <ul>
            <!-- MAIN MENU -->
            <li>
                <a href="{{route('teams')}}" class="{{ request()->routeIs('teams') ?'menu-lef-act':'' }}"><img src="{{ asset('images/icon/f7.png')}}" alt=""> Teams</a>
            </li>
            <li>
                <a href="{{ route('matches') }}" class="{{ request()->routeIs('matches') ?'menu-lef-act':'' }}"><img src="{{ asset('images/icon/c6.png')}}" alt=""> Matches</a>
            </li>
            <li>
                <a href="{{ route('points') }}" class="{{ request()->routeIs('points') ?'menu-lef-act':'' }}"><img src="{{ asset('images/icon/c3.png')}}" alt=""> Points Table</a>
            </li>
        </ul>
    </div>

    <!-- RIGHT SIDE NAVIGATION MENU -->
    <!-- MOBILE MENU(This mobile menu show on 0px to 767px windows only) -->
    <div class="mob-menu">
        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div class="mob-close">
        <span><i class="fa fa-times" aria-hidden="true"></i></span>
    </div>
</section>

<!-- TOP BAR -PHONE EMAIL AND TOP MENU -->
<section class="i-head-top">
    <div class="i-head row">
        <!-- TOP CONTACT INFO -->
        <div class="i-head-left i-head-com col-md-6">
            <ul>
                <li><a href="#">phone: +91-9971801865</a>
                </li>
                <li><a href="#">Email: shahdeepak88@gmail.com</a>
                </li>
            </ul>
        </div>
        <!-- TOP FIXED MENU -->
        <div class="i-head-right i-head-com col-md-6 col-sm-12 col-xs-12">
            <ul>
                <li class="top-scal"><a><i class="fa fa-ticket" aria-hidden="true"></i> Cricket Assignment</a>
                </li>
            </ul>
        </div>
    </div>
</section>

@yield('content')


<!--== Bootstrap & Latest JS ==-->
<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>
