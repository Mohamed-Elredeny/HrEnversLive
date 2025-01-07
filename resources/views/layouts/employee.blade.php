<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>

    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('assets/css/Leave_Requests.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    <!-- google font Syne -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <!-- google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

    <!-- google font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>


</head>
<body>
<div id="sideBar" class="sidebar">
    <ul>
        <li>
            <a href="#">
                <div class="image-dark home-dark active image">
                    <img src="{{ asset('assets/images/sign-in/Home@3x.png') }}" alt="icon">
                </div>
                <div class="image-light home-light image">
                    <img src="{{ asset('assets/images/sign-in/Home-light@3x-3.png') }}" alt="icon">
                </div>
            </a>
            <span>Home</span>
        </li>
        <li class="open">
            <a href="#">
                <div class="image-dark employee-dark image">
                    <img src="{{ asset('assets/images/sign-in/Home@3x-5.png') }}" alt="icon">
                </div>
                <div class="image-light employee-light active image">
                    <img src="{{ asset('assets/images/sign-in/Home-light@3x-2.png') }}" alt="icon">
                </div>
            </a>
            <span>Requests</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark hrStaff-dark active image">
                    <img src="{{ asset('assets/images/sign-in/Home@3x-1.png') }}" alt="icon">
                </div>
                <div class="image-light hrStaff-light image">
                    <img src="{{ asset('assets/images/sign-in/Home-light@3x-4.png') }}" alt="icon">
                </div>
            </a>
            <span>HR Staff</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark calendar-dark active image">
                    <img src="{{ asset('assets/images/sign-in/Home@3x-4.png') }}" alt="icon">
                </div>
                <div class="image-light calendar-light image">
                    <img src="{{ asset('assets/images/sign-in/Home-light@3x-1.png') }}" alt="icon">
                </div>
            </a>
            <span>Calendar</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark settings-dark active image">
                    <img src="{{ asset('assets/images/sign-in/Home@3x-2.png') }}" alt="icon">
                </div>
                <div class="image-light settings-light image">
                    <img src="{{ asset('assets/images/sign-in/Home-light@3x-5.png') }}" alt="icon">
                </div>
            </a>
            <span>Settings</span>
        </li>
    </ul>
</div>
<div id="openslider" class="openslider">
    <div id="home" class="home sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">Home</h2>
            <div class="image order-1 order-md-2">
                <img src="{{ asset('assets/images/sign-in/Home-light@3x-3.png') }}" alt="icon">
            </div>
        </div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div id="employee" class="employee open sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">Requests</h2>
            <div class="image order-1 order-md-2">
                <img src="{{ asset('assets/images/sign-in/Home-light@3x-2.png') }}" alt="icon">
            </div>
        </div>
        <ul>
            <li><a href="{{ url('KPI/index') }}">KPI <span>12</span></a></li>
            <li><a href="{{ url('Personal_Certificate/index') }}">Personal Certificate <span>1</span></a></li>
            <li><a class="open" href="#">Leave Requests <span>6</span></a></li>
            <li><a href="#">HR Expenses Form <span>9</span></a></li>
            <li><a href="#">Job Description <span>18</span></a></li>
        </ul>
    </div>
    <!-- Similar updates for other sections -->
</div>

<button id="openBtn" class="open-btn active" onclick="openSidebar()">
    <i class="fa-solid fa-bars-staggered"></i>
</button>
<button id="closeBtn" class="close-btn" onclick="closeSidebar()">
    <i class="fa-solid fa-arrow-left"></i>
</button>
<div class="overlayOpenSlider" id="overlayOpenSlider" onclick="closeSidebar()"></div>

<div id="mainContent" class="content">
    <header>
        <div class="logo">
            <div class="img-fluid">
                <img src="{{ asset('assets/images/sign-in/Logos@3x.png') }}" alt="logos">
            </div>
            <div class="titleLogo">
                <p>Name Company</p>
            </div>
        </div>
        <div class="account">
            <div class="image">
                <div class="img-fluid">
                    <img src="{{ asset('assets/images/sign-in/1718183412_1694698427_Mohamed1.jpg') }}"
                         alt="Personal photo">
                </div>
            </div>
            <div class="name">
                <p>Ahmed Elsayed</p>
                <span>HR Supervisor</span>
            </div>
            <div class="arrow">
                <div class="img-fluid">
                    <img onclick="openEdit()" src="{{ asset('assets/images/sign-in/Arrow@3x-1.png') }}"
                         alt="arrow-down">
                </div>
            </div>
        </div>
    </header>
    @yield('content')
</div>
@yield('scripts')

<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/all.min.js') }}"></script>


<!-- Custom JavaScript -->
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- SweetAlert2 JS -->

</body>
</html>
