<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link href="/assets/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/assets/admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/assets/admin/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="/assets/admin/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/admin/css/starlight.css">
</head>

<body>

<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
<div class="sl-sideleft">
    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
        @foreach($sideMenu as $foo)
            {!! $foo !!}
        @endforeach

    </div>
    <br>
</div>

<div class="sl-header">

    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div>

    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
                    <img src="/assets/admin/img/img3.jpg" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        @foreach($profileMenu as $foo)
                            {!! $foo !!}
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="sl-mainpanel">

    @yield('page')

</div>

<script src="/assets/admin/lib/jquery/jquery.js"></script>
<script src="/assets/admin/lib/popper.js/popper.js"></script>
<script src="/assets/admin/lib/bootstrap/bootstrap.js"></script>
<script src="/assets/admin/lib/jquery-ui/jquery-ui.js"></script>
<script src="/assets/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="/assets/admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="/assets/admin/lib/chart.js/Chart.js"></script>
<script src="/assets/admin/lib/Flot/jquery.flot.js"></script>
<script src="/assets/admin/lib/Flot/jquery.flot.pie.js"></script>
<script src="/assets/admin/lib/Flot/jquery.flot.resize.js"></script>
<script src="/assets/admin/lib/flot-spline/jquery.flot.spline.js"></script>
<script src="/assets/admin/js/starlight.js"></script>
<script src="/assets/admin/js/ResizeSensor.js"></script>
</body>
</html>
