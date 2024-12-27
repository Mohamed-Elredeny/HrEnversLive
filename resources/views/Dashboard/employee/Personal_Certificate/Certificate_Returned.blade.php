<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset("assets/css/Personal_Certificate.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/KPI.css")}}">
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
            <li >
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
                <li><a href="../KPI/index.html">KPI <span>12</span> </a></li>
                <li><a class="open" href="index.html">Personal Certificate <span>1</span> </a></li>
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


    <div id="mainContent" class="content content_responsev">
        <header>
            @foreach($employee as $emp)
                @if($emp->company_id=='medgulf')
                    <div class="logo">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Logos@3x.png")}}" alt="logos">
                        </div>
                        <div class="titleLogo">
                            <p>Medgulf Construction Company WLL</p>
                        </div>
                    </div>
                @endif
                @if($emp->company_id=='trags')
                    <div class="logo">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Logos@3x-1.png")}}" alt="logos">
                        </div>
                        <div class="titleLogo">
                            <p>TRAGS ENGINEERING COMPANY WLL</p>
                        </div>
                    </div>
                @endif
                @if($emp->company_id=='enjineering')
                    <div class="logo">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Logos@3x-2.png")}}" alt="logos">
                        </div>
                        <div class="titleLogo">
                            <p>TRADING AND AGENCY SERVICES LIMITED COMPANY WLL</p>
                        </div>
                    </div>
                @endif
            @endforeach
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
                <section class="head ReturnReasons">
                    <div class="buttonReturnCert">
                        <div class="buttonRCert">
                            <button class="btn  btnCertificateReasons">
                                Return Reasons
                            </button>
                        </div>
                    </div>
                    <a href="{{route('employee.index')}}" class="image">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Back@3x.png")}}" alt="back arrow">
                        </div>
                    </a>
                </section>
                <section class="a4_section" id="a4_section">
                    <div class="image">
                        <div class="img-fluid">
                            @if($emp->company_id=='medgulf')
                                <img src="{{asset("assets/images/logos/header.png")}}" alt="Medgulf Header">
                            @endif
                            @if($emp->company_id=='trags')
                                <img src="{{asset("assets/images/logos/tragsEngHeader.jpg")}}" alt="TragsEng Header">
                            @endif
                            @if($emp->company_id=='enjineering')
                                <img src="{{asset("assets/images/logos/tragsHeader.png")}}" alt="Trags Header">
                            @endif
                        </div>
                    </div>
                    @yield('Certificate_Content_Return')

                    <div class="image footer">
                        <div class="img-fluid">
                            @foreach($employee as $emp)
                                @if($emp->company_id=='medgulf')
                                    <img src="{{asset("assets/images/logos/footer.jpg")}}" alt="Medgulf Footer">
                                @endif
                                @if($emp->company_id=='trags')
                                    <img src="{{asset("assets/images/logos/tragsEngFooter.jpg")}}" alt="tragsEng Footer">
                                @endif
                                @if($emp->company_id=='enjineering')
                                    <img src="{{asset("assets/images/logos/tragsfooter.jpg")}}" alt="trags Footer">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            </article>
        </main>

    </div>
    <div class=" overlayCertificate overlayReturnReasonsSta"></div>
    <div class=" boxCertificateReasons boxReturnReasonsta boxReturnDan">
        <div class="titleBox">
            <h2>
                Return Certificate To Sender
            </h2>
        </div>
        <div class="suptitleBox">

            @php
                // Define all possible reasons with their labels
                $allReasons = [
                    'reasonOne' => 'Incomplete Information: The employee has not provided all the necessary details required for processing the certificate.',
                    'reasonTwo' => 'Invalid Purpose: The reason provided for the certificate request does not meet the criteria for issuance.',
                    'reasonThree' => 'Document Format Issue: The format requested for the certificate is not supported by the company\'s standard documentation.',
                    'reasonFour' => 'Request Outside of Policy: The certificate requested is outside the company\'s policy for issuance or the type of certificate is not provided.',
                    'reasonFive' => 'Supporting Documents Missing: Any additional documents required to verify the certificate request are not attached.',
                    'reasonSix' => 'Clarification Needed: Further details or clarification are needed to process the request effectively.',
                    'reasonSeven' => 'Conflicting Requests: The employee has multiple overlapping or conflicting certificate requests.',
                    'reasonEight' => 'Incorrect Employee Data: The provided employee information is incorrect or does not match company records.',
                ];
                $selectedReasons = json_decode($certificate->returnReasons, true); // Decode selected reasons
            @endphp
            @php
                $selectedReasons = $selectedReasons ?? [];
            @endphp
            @foreach ($allReasons as $reasonKey => $reasonLabel)
                <div class="form-group">
                    <div style="display: flex ;align-items: center; gap: 5px;">
                    <input type="checkbox" name="reasonSta" disabled id="{{ $reasonKey }}" {{ in_array($reasonKey, $selectedReasons) ? 'checked' : '' }}>
                    <label for="{{ $reasonKey }}">{{ $reasonLabel }}
                    </label></div>
                </div>
            @endforeach
        </div>



        <div class="reasonSpecify">
            <div class="titleSpecify">
                <p>
                    Reasons: <span>(Specify)</span>
                </p>
            </div>
            <p name="areaReasonSpecify" class="textareaPra" id="areaReasonSpecify" placeholder="Type Other Reason">
                {{$certificate->review_remark}}
            </p>
        </div>

    </div>


    <!-- bootstrap -->
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/all.min.js")}}"></script>

    <!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js" integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom javaScript -->
    <script src="{{asset("assets/js/Personal_Certificate.js")}}"></script>
    <script src="{{asset("assets/js/Certificate_Returned.js")}}"></script>
    <script src="{{asset("assets/js/KPI.js")}}"></script>
    <script src="{{asset("assets/js/dashboard.js")}}"></script>
    <script>

    </script>
</body>
</html>
