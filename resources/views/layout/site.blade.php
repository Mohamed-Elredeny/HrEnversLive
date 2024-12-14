{{--@extends('layout.site')--}}
{{--@section('content')--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset("assets/css/dashboard.css")}}">

    <!-- google font Syne-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <!-- google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- google font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}">

</head>
<body>

<div id="sideBar" class="sidebar">
    <ul>
        <li class="open">
            <a href="#">
                <div class="image-dark home-dark  image">
                    <img src="../assets/images/sign-in/Home@3x.png" alt="icon">
                </div>
                <div class="image-light home-light active image">
                    <img src="../assets/images/sign-in/Home-light@3x-3.png" alt="icon">
                </div>
            </a>
            <span>Home</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark employee-dark active image">
                    <img src="../assets/images/sign-in/Home@3x-5.png" alt="icon">
                </div>
                <div class="image-light employee-light image">
                    <img src="../assets/images/sign-in/Home-light@3x-2.png" alt="icon">
                </div>
            </a>
            <span>Requests</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark hrStaff-dark  active image">
                    <img src="../assets/images/sign-in/Home@3x-1.png" alt="icon">
                </div>
                <div class="image-light  hrStaff-light image">
                    <img src="../assets/images/sign-in/Home-light@3x-4.png" alt="icon">
                </div>
            </a>
            <span>HR Staff</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark calendar-dark active image">
                    <img src="../assets/images/sign-in/Home@3x-4.png" alt="icon">
                </div>
                <div class="image-light  calendar-light image">
                    <img src="../assets/images/sign-in/Home-light@3x-1.png" alt="icon">
                </div>
            </a>
            <span>Calendar</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark settings-dark active image">
                    <img src="../assets/images/sign-in/Home@3x-2.png" alt="icon">
                </div>
                <div class="image-light  settings-light image">
                    <img src="../assets/images/sign-in/Home-light@3x-5.png" alt="icon">
                </div>
            </a>
            <span>Settings</span>
        </li>

    </ul>
</div>
<div id="openslider" class="openslider">
    <div id="home" class="home open sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">
                Home
            </h2>
            <div class="image order-1 order-md-2">
                <img src="../assets/images/sign-in/Home-light@3x-3.png" alt="icon">
            </div>
        </div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div id="employee" class="employee sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">
                Requests
            </h2>
            <div class="image order-1 order-md-2">
                <img src="../assets/images/sign-in/Home-light@3x-2.png" alt="icon">
            </div>
        </div>
        <ul>
            <li><a href="#">KPI <span>12</span> </a></li>
            <li><a href="#">Personal Certificate <span>1</span> </a></li>
            <li><a href="#">Leave Requests <span>6</span> </a></li>
            <li><a href="#">HR Expenses From <span>9</span> </a></li>
            <li><a href="#">Jop Description <span>18</span> </a></li>
        </ul>
    </div>
    <div id="hrStaff" class="hrStaff sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1" style="padding-inline-start: 15px;">
                HR Staff
            </h2>
            <div class="image order-1 order-md-2">
                <img src="../assets/images/sign-in/Home-light@3x-1.png" alt="icon">
            </div>
        </div>
        <ul>
            <li><a href="#">Welcome Note <span>2</span> </a></li>
            <li><a href="#">Separation Letter </a></li>
            <li><a href="#">Confirmation Letter <span>12</span> </a></li>
        </ul>
    </div>
    <div id="calendar"  class="calendar sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">
                Calendar
            </h2>
            <div class="image order-1 order-md-2">
                <img src="../assets/images/sign-in/Home-light@3x-4.png" alt="icon">
            </div>
        </div>
        <ul>
            <li><a href="#">Welcome Note <span>2</span> </a></li>
            <li><a href="#">Separation Letter </a></li>
            <li><a href="#">Confirmation Letter <span>12</span> </a></li>
        </ul>
    </div>
    <div id="settings" class="settings sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">
                Settings
            </h2>
            <div class="image order-1 order-md-2">
                <img src="../assets/images/sign-in/Home-light@3x-5.png" alt="icon">
            </div>
        </div>
        <ul>
            <li>
                <a href="#" id="edit" >
                    <div class="iconSetting" id="editicon" >
                        <i class="fa-solid fa-camera-retro"></i>
                    </div>
                    <p id="editphoto" >
                        Edit Photo
                    </p>
                </a>
            </li>
            <li>
                <a href="#" id="log" >
                    <div class="iconSetting" id="iconlog" >
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <p id="logout" >
                        Log out
                    </p>
                </a>
            </li>
        </ul>
    </div>
</div>
<button id="openBtn" class="open-btn active" onclick="openSidebar()">
    <i class="fa-solid fa-bars-staggered"></i>
</button>
<button id="closeBtn" class="close-btn " onclick="closeSidebar()">
    <i class="fa-solid fa-arrow-left"></i>
</button>
<div class="overlayOpenSlider" id="overlayOpenSlider" onclick="closeSidebar()"></div>

    @yield('content')

</body>
</html>





