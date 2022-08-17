<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ ('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ ('css/custom.css') }}">
    <link rel="stylesheet" href="{{ ('css/jasny-bootstrap.min.css') }}">
</head>

<body>


        <input type="checkbox" id="check">
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>UCC<span> RESTAURANTS POS</span></h3>
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="1.png" class="mobile_profile_image" alt="">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        {{-- <div class="mobile_nav_items">
            <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
            <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
            <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </div> --}}
    </div>

    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <img src="1.png" class="profile_image" alt="">
            <h4>Jessica</h4>
        </div>
        <a href="/"><i class=" fa fa-home"></i><span>Home</span></a>
        <a href="/inventory"><i class="fas fa-cogs"></i><span>Inventory</span></a>
        <a href="/orders"><i class="fa-solid fa-bowl-hot"></i><span>Orders</span></a>
        <a href="/menu"><i class="fas fa-th"></i><span>Menu</span></a>
        <a href="/about"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="/settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        @yield('content')
    </div>



</body>

</html>
