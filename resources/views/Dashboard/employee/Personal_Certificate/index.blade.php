<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset("assets/css/Personal_Certificate.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/KPI.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/KPIEdit.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/dashboard.css")}}">

    <!-- google font Syne-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <!-- google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- google font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}">

</head>
<body>

<div id="sideBar" class="sidebar">
    <ul>
        <li>
            <a href="#">
                <div class="image-dark home-dark active image">
                    <img src="{{asset("assets/images/sign-in/Home@3x.png")}}" alt="icon">
                </div>
                <div class="image-light home-light  image">
                    <img src="{{asset("assets/images/sign-in/Home-light@3x-3.png")}}" alt="icon">
                </div>
            </a>
            <span>Home</span>
        </li>
        <li class="open">
            <a href="#">
                <div class="image-dark employee-dark  image">
                    <img src="{{asset("assets/images/sign-in/Home@3x-5.png")}}" alt="icon">
                </div>
                <div class="image-light employee-light active image">
                    <img src="{{asset("assets/images/sign-in/Home-light@3x-2.png")}}" alt="icon">
                </div>
            </a>
            <span>Requests</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark hrStaff-dark  active image">
                    <img src="{{asset("assets/images/sign-in/Home@3x-1.png")}}" alt="icon">
                </div>
                <div class="image-light  hrStaff-light image">
                    <img src="{{asset("assets/images/sign-in/Home-light@3x-4.png")}}" alt="icon">
                </div>
            </a>
            <span>HR Staff</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark calendar-dark active image">
                    <img src="{{asset("assets/images/sign-in/Home@3x-4.png")}}" alt="icon">
                </div>
                <div class="image-light  calendar-light image">
                    <img src="{{asset("assets/images/sign-in/Home-light@3x-1.png")}}" alt="icon">
                </div>
            </a>
            <span>Calendar</span>
        </li>
        <li>
            <a href="#">
                <div class="image-dark settings-dark active image">
                    <img src="{{asset("assets/images/sign-in/Home@3x-2.png")}}" alt="icon">
                </div>
                <div class="image-light  settings-light image">
                    <img src="{{asset("assets/images/sign-in/Home-light@3x-5.png")}}" alt="icon">
                </div>
            </a>
            <span>Settings</span>
        </li>

    </ul>
</div>
<div id="openslider" class="openslider">
    <div id="home" class="home  sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">
                Home
            </h2>
            <div class="image order-1 order-md-2">
                <img src="{{asset("assets/images/sign-in/Home-light@3x-3.png")}}" alt="icon">
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
            <h2 class="order-2 order-md-1">
                Requests
            </h2>
            <div class="image order-1 order-md-2">
                <img src="{{asset("assets/images/sign-in/Home-light@3x-2.png")}}" alt="icon">
            </div>
        </div>
        <ul>
            <li><a href="{{route('employees.index')}}">KPI <span>12</span> </a></li>
            <li><a class="open" href="{{route('employees.index')}}">Personal Certificate <span>1</span> </a></li>
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
                <img src="{{asset("assets/images/sign-in/Home-light@3x-1.png")}}" alt="icon">
            </div>
        </div>
        <ul>
            <li><a href="#">Welcome Note <span>2</span> </a></li>
            <li><a href="#">Separation Letter </a></li>
            <li><a href="#">Confirmation Letter <span>12</span> </a></li>
        </ul>
    </div>
    <div id="calendar" class="calendar sectionslider">
        <div class="title">
            <h2 class="order-2 order-md-1">
                Calendar
            </h2>
            <div class="image order-1 order-md-2">
                <img src="{{asset("assets/images/sign-in/Home-light@3x-4.png")}}" alt="icon">
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
                <img src="{{asset("assets/images/sign-in/Home-light@3x-5.png")}}" alt="icon">
            </div>
        </div>
        <ul>
            <li>
                <a href="#" id="edit">
                    <div class="iconSetting" id="editicon">
                        <i class="fa-solid fa-camera-retro"></i>
                    </div>
                    <p id="editphoto">
                        Edit Photo
                    </p>
                </a>
            </li>
            <li>
                <a href="#" id="log">
                    <div class="iconSetting" id="iconlog">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <p id="logout">
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


<div id="mainContent" class="content ">
    <header>
        <div class="logo">
            <div class="img-fluid">
                <img src="{{asset("assets/images/sign-in/Logos@3x.png")}}" alt="logos">
            </div>
            <div class="titleLogo">
                <p>Medgulf Construction Company WLL</p>
            </div>
        </div>
        <div class="account">
            <div class="image">
                <div class="ima-fluid">
                    <img src="{{asset("assets/images/sign-in/1718183412_1694698427_Mohamed1.jpg")}}" alt="Personal photo">
                </div>
            </div>
            <div class="name">
                <p>Ahmed Elsayed</p>
                <span>HR Supervisor</span>
            </div>
            <div class="arrow">
                <div class="ima-fluid">
                    <img onclick="openEdit()" src="{{asset("assets/images/sign-in/Arrow@3x-1.png")}}" alt="arrow-dowm">
                </div>
            </div>
            <div class="settingAccount">
                <ul>
                    <li>
                        <a href="#">
                            <div class="iconAccount">
                                <i class="fa-solid fa-camera-retro"></i>
                            </div>
                            <p>
                                Edit Photo
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="iconAccount" style="color: #EB0C0C ;">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                            <p>
                                Log out
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <article class="container">
            <section class="head">
                <div class="title">

                    <a href="{{route('employees.index')}}">
                        <p>My Personal Certificate</p>
                    </a>
                    <span>|</span>
                </div>
                <a href="{{route('employees.index')}}" class="image">
                    <div class="img-fluid">
                        <img src="{{asset("assets/images/sign-in/Back@3x.png")}}" alt="back arrow">
                    </div>
                </a>
            </section>

            <section class="dashboard_kpi">
                <div class="row gy-5">
                    <div class="col-12 titleKPI">
                        <h2>
                            Certificate Requests
                        </h2>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="textCard Certificates">
                                <div class="number">
                                    <span>6</span>
                                </div>

                                    <div class="textContent">
                                        <h4>English Certificates</h4>
                                        <p>Includes six certificates: Loan, Credit Card, Vehicle Loan, Embassy, With
                                            Salary, and Without Salary.</p>
                                    </div>

                            </div>
                            <a href="{{route('employees.EnglishCertificate')}}" class="buttonCard">
                                <button class="btn btnCard">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="textCard Certificates">
                                <div class="number">
                                    <span>6</span>
                                </div>
                                <div class="textContent">
                                    <h4>Arabic Certificates</h4>
                                    <p>Includes six certificates: Gate Pass Lost/Cancellation, Experience, QID Lost,
                                        Family Visit Visa, and Family Residency Visa.</p>
                                </div>
                            </div>
                            <a href="{{route('employees.ArabicCertificate')}}" class="buttonCard">
                                <button class="btn btnCard">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 titleKPI">
                        <h2>
                            My Certificate
                        </h2>
                    </div>


                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="textCard Certificates">
                                <div class="number">
                                    <span class="diff">5</span>
                                </div>
                                <div class="textContent">
                                    <h4>My Certificate</h4>
                                    <p>Access and manage your previously requested certificates with ease and
                                        efficiency.</p>
                                </div>
                            </div>
                            <a href="{{route('employees.MyCertificate')}}" class="buttonCard">
                                <button class="btn btnCard">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
{{--                    @if(isset($userpermission) )--}}
{{--                        @foreach ($userpermission as $userpermissionn)--}}
{{--                            @if($userpermissionn->permission ==  "CertificatesReviewer")--}}

                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="textCard Certificates">
                                            <div class="number">
                                                <span>6</span>
                                            </div>
                                            <div class="textContent">
                                                <h4>Review Certificate</h4>
                                                <p>Access to review and verify certificate requests, ensuring accuracy
                                                    and upholding standards.</p>
                                            </div>
                                        </div>
                                        <a href="{{route('employees.ReviewCertificates')}}" class="buttonCard">
                                            <button class="btn btnCard">
                                                View
                                            </button>
                                        </a>
                                    </div>
                                </div>

{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                    @if(isset($userpermission) )--}}
{{--                        @foreach ($userpermission as $userpermissionn)--}}
{{--                            @if($userpermissionn->permission == "CertificatesApproval")--}}

                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="textCard Certificates">
                                    <div class="number">
                                        <span>1</span>
                                    </div>
                                    <div class="textContent">
                                        <h4>Approval Certificate</h4>
                                        <p>After final approval, your signature and stamp will appear on the
                                            certificate, allowing the employee to print it.</p>
                                    </div>
                                </div>
                                <a href="{{route('employees.ApprovalCertificates')}}" class="buttonCard">
                                    <button class="btn btnCard">
                                        View
                                    </button>
                                </a>
                            </div>
                        </div>
{{--                    @endif--}}
{{--                        @endforeach--}}
{{--                        @endif--}}

                </div>
            </section>

        </article>
    </main>

</div>


<!-- bootstrap -->
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/all.min.js")}}"></script>

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js"
        integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- custom javaScript -->
<script src="{{asset("assets/js/KPI.js")}}"></script>
<script src="{{asset("assets/js/Personal_Certificate.js")}}"></script>
<script src="{{asset("assets/js/dashboard.js")}}"></script>

</body>
</html>
