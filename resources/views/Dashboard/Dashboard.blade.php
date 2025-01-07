<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>


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
                        <img src="{{asset("assets/images/sign-in/Home@3x.png")}}" alt="icon">
                    </div>
                    <div class="image-light home-light active image">
                        <img src="{{asset("assets/images/sign-in/Home-light@3x-3.png")}}" alt="icon">
                    </div>
                </a>
                <span>Home</span>
            </li>
            <li>
                <a href="#">
                    <div class="image-dark employee-dark active image">
                        <img src="{{asset("assets/images/sign-in/Home@3x-5.png")}}" alt="icon">
                    </div>
                    <div class="image-light employee-light image">
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
        <div id="home" class="home open sectionslider">
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
        <div id="employee" class="employee sectionslider">
            <div class="title">
                <h2 class="order-2 order-md-1">
                    Requests
                </h2>
                <div class="image order-1 order-md-2">
                    <img src="{{asset("assets/images/sign-in/Home-light@3x-2.png")}}" alt="icon">
                </div>
            </div>
            <ul>
                <li><a href="#">KPI <span>12</span> </a></li>
                <li><a href="#">Personal Certificate <span>1</span> </a></li>
                <li><a href="{{route('employee.leaves.index')}}">Leave Requests <span>6</span> </a></li>
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
        <div id="calendar"  class="calendar sectionslider">
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
                        <p>Home</p>
                        <span>|</span>
                    </div>
                    <div class="image" onclick="backStep()">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Back@3x.png")}}" alt="back arrow">
                        </div>
                    </div>
                </section>
                <section class="info">
                    <div class="image">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/1718183412_1694698427_Mohamed1.jpg")}}" alt="Personal photo">
                        </div>
                    </div>
                    <div class="content_Info">
                        <div class="title">
                            <p>Welcome, <span>Ahmed Muhammed Elsayed</span> to your 360HR paltform account</p>
                        </div>
                        <div class="infolist">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Position\ Title
                                    </h2>
                                    <p>
                                        HR Supervisor
                                    </p>
                                </div>
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Department\ Project
                                    </h2>
                                    <p>
                                        HR Department
                                    </p>
                                </div>
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Total Years Of Experience
                                    </h2>
                                    <p>
                                        1 years, 4 months
                                    </p>
                                </div>
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Employer Number
                                    </h2>
                                    <p>
                                        101121
                                    </p>
                                </div>
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Year Of Evaluation
                                    </h2>
                                    <p>
                                        2023
                                    </p>
                                </div>
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Project Number
                                    </h2>
                                    <p>
                                        1103
                                    </p>
                                </div>
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Project Number
                                    </h2>
                                    <p>
                                        1103
                                    </p>
                                </div>
                                <div class="col-4 col-md-3">
                                    <h2>
                                        Date Of Joining
                                    </h2>
                                    <p>
                                        1\3\2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="alert_info">

                    <div class="text">
                        <div class="newsline">
                            <p>
                                Dear Mohamed, Please complete your <span>KPI Digi</span> Form to evaluate your performance.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="news">
                    <div class="content_news">
                        <div class="title">
                            NEWS
                        </div>
                        <div class="suptitle">
                            Have a look at our quotes of the week and know more about your companny
                        </div>
                    </div>
                    <div class="slider_image">
                        <button class="prev" onclick="prevSlide()">
                            <img src="{{asset("assets/images/sign-in/Arrow@3x.png")}}" alt="arrow left">
                        </button>
                        <div class="slider-container">

                            <div class="slides">
                                <div class="slideone">
                                </div>
                                <div class="slide">
                                    <img src="{{asset("assets/images/sign-in/new1.jpg")}}" alt="Image 1">
                                </div>
                                <div class="slide">
                                    <img src="{{asset("assets/images/sign-in/new2.png")}}" alt="Image 2">
                                </div>
                                <div class="slide">
                                    <img src="{{asset("assets/images/sign-in/new3.jpg")}}" alt="Image 3">
                                </div>
                                <div class="slide">
                                    <img src="{{asset("assets/images/sign-in/new1.jpg")}}" alt="Image 1">
                                </div>
                                <div class="slide">
                                    <img src="{{asset("assets/images/sign-in/new2.png")}}" alt="Image 2">
                                </div>
                                <div class="slide">
                                    <img src="{{asset("assets/images/sign-in/new3.jpg")}}" alt="Image 3">
                                </div>
                            </div>

                        </div>
                        <button class="next" onclick="nextSlide()">
                            <img src="{{asset("assets/images/sign-in/Arrow@3x.png")}}" alt="arrow right">
                        </button>

                        <div class="dots">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>
                            <span class="dot" onclick="currentSlide(6)"></span>
                        </div>
                    </div>
                </section>
                <section class="employee section_Com">
                    <div class="title">
                        <p>EMPLOYEE</p>
                    </div>
                    <div class="content_employee">
                        <div class="suptitle">
                            <p>
                                Consolidate your digital assets effortlessly. Access all your important files and documents in one convenient location.
                            </p>
                            <span>
                                How may we assist you today? Please select your need from the icons
                            </span>
                        </div>
                    </div>
                    <div class="row gy-5 logo_employee">
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/1.png")}}" alt="KPI">
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-md-3">
                            <a href="#">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/2.png")}}" alt="Certificate Request">
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/5.png")}}" alt="Hr Expenses"> ">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <a href="{{route('employee.leaves.index')}}">
                                <div class="image">
                                    <div class="img-fluid">
                                        <img src="{{asset("assets/images/sign-in/4.png")}}" alt="Leaves">
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-4 col-md-3">
                            <a href="">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/6.png")}}" alt="Certificate Request">
                                </div>
                            </div></a>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/7.png")}}" alt="training center">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="hr_staff section_Com">
                    <div class="title">
                        <p>HR STAFF</p>
                    </div>
                    <div class="content_employee">
                        <div class="suptitle">
                            <p>
                                Centralize and organize your entire HR department’s documentation. Easily access employee records, contracts, performance reviews, and more from a single, secure platform.
                            </p>
                            <span>
                                How may we assist you today? Please select your need from the icons
                            </span>
                        </div>
                    </div>
                    <div class="row gy-5 logo_employee">
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/8.png")}}" alt="Welcome Note">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/9.png")}}" alt="Separation letter">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="../assets/images/sign-in/12.png" alt="Certificate letter">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/11.png")}}" alt="Certificate letter">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/10.png")}}" alt="Certificate letter">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="take_Charge">
                    <div class="texttake">
                        <div class="title">
                            <p>Take Charge of Your Time</p>
                        </div>
                        <div class="supTitle">
                            <p>
                                Effortlessly schedule meetings, manage leaves, set reminders, and stay organized with ease. Your time, your control.
                            </p>
                        </div>
                    </div>
                    <div class="butt">
                        <button class="btn" onclick="addEventBtn()">
                            <div class="icon">
                                <i class="fa-solid  fa-plus"></i>
                            </div>
                            <p>
                                Create
                            </p>
                        </button>
                    </div>
                </section>
                <section class="Fullcalendar">
                    <div id="fullCalendar"></div>
                </section>
            </article>
        </main>
    </div>
    <div class="addEvent" id="modalAddEvent">
        <form>
            <div class="iconx" onclick="closeEvent()">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="form-group">
                <label for="eventTitle" id="labelTitle">
                    Title
                </label>
                <input type="text" placeholder="Event Title" class="form-control" id="eventTitle">
            </div>
            <div class="form-group">
                <label for="eventDetails" id="labelDetails">
                    Details
                </label>
                <input type="text" placeholder="Event Details" class="form-control" id="eventDetails">
            </div>
            <div class="form-group">
                <label for="eventDate" id="labelDate">
                    Date
                </label>
                <input type="date" placeholder="Event Date" class="form-control" id="eventDate">
            </div>
        </form>
        <div class="butt w-100 d-flex align-items-center">
            <button class="btn d-flex align-items-center mx-auto" id="submit-event-btn">
                <p>
                    Submit
                </p>
                <div class="icon">
                    <i class="fa-solid fa-paper-plane"></i>
                </div>
            </button>
        </div>
    </div>
    <div class="overlay" id="overlayEvent" onclick="closeEvent()"></div>

    <!-- bootstrap -->
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/all.min.js")}}"></script>

    <!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js" integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom javaScript -->
    <script src="{{asset("assets/js/dashboard.js")}}"></script>

</body>
</html>
