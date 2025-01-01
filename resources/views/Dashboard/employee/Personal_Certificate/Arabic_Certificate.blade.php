<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset("assets/css/Leave_Requests.css")}}">
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
                <li><a class="open" href="{{route('employee.index')}}">Personal Certificate <span>1</span> </a></li>
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
            @if($employee->company_id=='medgulf')
                <div class="logo">
                    <div class="img-fluid">
                        <img src="{{asset("assets/images/sign-in/Logos@3x.png")}}" alt="logos">
                    </div>
                    <div class="titleLogo">
                        <p>Medgulf Construction Company WLL</p>
                    </div>
                </div>
            @endif
            @if($employee->company_id=='engineering')
                <div class="logo">
                    <div class="img-fluid">
                        <img src="{{asset("assets/images/sign-in/Logos@3x-1.png")}}" alt="logos">
                    </div>
                    <div class="titleLogo">
                        <p>TRAGS ENGINEERING COMPANY WLL</p>
                    </div>
                </div>
            @endif
            @if($employee->company_id=='trags')
                <div class="logo">
                    <div class="img-fluid">
                        <img src="{{asset("assets/images/sign-in/Logos@3x-2.png")}}" alt="logos">
                    </div>
                    <div class="titleLogo">
                        <p>TRADING AND AGENCY SERVICES LIMITED COMPANY WLL</p>
                    </div>
                </div>
            @endif

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

        @if(session()->has('errorcertificate'))
            <div>
                <div class="alert alert-danger">
                    {{session()->get('errorcertificate')}}
                </div>
            </div>
        @endif
        <main>
            <article class="container">
                <section class="head">
                    <div class="title">

                        <a href="{{route('employee.index')}}">
                            <span>My Personal Certificate</span>
                        </a>
                        <p>Arabic Certificate</p>
                        <span>|</span>
                    </div>

                    <a href="{{route('employee.index')}}" class="image">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Back@3x.png")}}" alt="back arrow">
                        </div>
                    </a>

                </section>
                <br>
        <form method="post" action="{{route('employee.ArabicCertificateSubmit')}}">
            @csrf

                <section class="Certificate_Type">
                    <div class="title_Type">Please, Select Certificate Type:</div>
                    <label for="radio-card-1" class="radio-card col-md-4" >
                        <input type="radio" style="display: none;border: 2px solid #007bff; border-radius: 8px;" name="item_id_arabic" value="GATE PASS LOST" id="radio-card-1"/>
                    <div class="item_type">
                        <div class="name_item_type">
                            <p>GATE PASS LOST</p>
                        </div>
                        <div class="image">
                            <div class="img-fluid"><img class="gray_Evaluated" src="{{asset("assets/images/sign-in/Evaluated@3x.png")}}" alt="Evaluated"></div>
                        </div>
                    </div>
                    </label>
                    <label for="radio-card-2" class="radio-card col-md-4" >
                        <input type="radio" style="display: none" name="item_id_arabic" value="GATE PASS CANCELLATION" id="radio-card-2"/>
                    <div class="item_type">
                        <div class="name_item_type">
                            <p>GATE PASS CANCELLATION</p>
                        </div>
                        <div class="image">
                            <div class="img-fluid"><img class="gray_Evaluated" src="{{asset("assets/images/sign-in/Evaluated@3x.png")}}" alt="Evaluated"></div>
                        </div>
                    </div>
                    </label>
                    <label for="radio-card-3" class="radio-card col-md-4" >
                        <input type="radio" style="display: none" name="item_id_arabic" value="EXPERIENCE CERTIFICATE" id="radio-card-3"/>
                    <div class="item_type">
                        <div class="name_item_type">
                            <p>EXPERIENCE CERTIFICATE</p>
                        </div>
                        <div class="image">
                            <div class="img-fluid"><img class="gray_Evaluated" src="{{asset("assets/images/sign-in/Evaluated@3x.png")}}" alt="Evaluated"></div>
                        </div>
                    </div>
                    </label>
                    <label for="radio-card-4" class="radio-card col-md-4" >
                        <input type="radio" style="display: none" name="item_id_arabic" value="FAMILY VISIT FISA REQUEST" id="radio-card-4"/>
                    <div class="item_type">
                        <div class="name_item_type">
                            <p>FAMILY VISIT FISA REQUEST</p>
                        </div>
                        <div class="image">
                            <div class="img-fluid"><img class="gray_Evaluated" src="{{asset("assets/images/sign-in/Evaluated@3x.png")}}" alt="Evaluated"></div>
                        </div>
                    </div>
                    </label>
                    <label for="radio-card-5" class="radio-card col-md-4" >
                        <input type="radio" style="display: none" name="item_id_arabic" value="FAMILY RESIDENCY VISA REQUEST" id="radio-card-5"/>
                    <div class="item_type">
                        <div class="name_item_type">
                            <p>FAMILY RESIDENCY VISA REQUEST</p>
                        </div>
                        <div class="image">
                            <div class="img-fluid"><img class="gray_Evaluated" src="{{asset("assets/images/sign-in/Evaluated@3x.png")}}" alt="Evaluated"></div>
                        </div>
                    </div></label>

                    <label for="radio-card-6" class="radio-card col-md-4" >
                        <input type="radio" style="display: none" name="item_id_arabic" value="QID LOST" id="radio-card-6"/>
                    <div class="item_type">
                        <div class="name_item_type">
                            <p>QID LOST</p>
                        </div>
                        <div class="image">
                            <div class="img-fluid"><img class="gray_Evaluated" src="{{asset("assets/images/sign-in/Evaluated@3x.png")}}" alt="Evaluated"></div>
                        </div>
                    </div>
                    </label>

                    <div class="RemarkCertificate">
                        <p>Remark</p>
                        <textarea name="TextareaRemarkCertificate" id="TextareaRemarkCertificate" placeholder="Remark"></textarea>
                    </div>
                </section>
                <section class="button_Certificate">
                    <button class="btn submitCertificate" type="submit">
                        Submit
                    </button>
                </section>
        </form>
            </article>
        </main>

    </div>

    <div id="approve-popup" class="overlayPopupOverlay hidden">
        <div class="popupPolicy popupApprove">

            <h2>Are you sure you want to submit the request?</h2>
            <div class="w-100 d-flex justify-content-end">
                <button id="approve-close-popup" class="btn btnClose btnYes  mt-3">Confirm</button>
                <button id="approve-close-popup" class="btn btnClose   mt-3">Cancel</button>
            </div>
        </div>
    </div>
    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js" integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js" integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/all.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.15.2/sweetalert2.min.js" integrity="sha512-gtx8/kJpAsm7drqGdR5bl6CQtb+zzNY2wfWdzAe7wt0vCgFph7fX2ubCyxZn9CEGE/I9xasdwkaVPaKQGlq1Lw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- custom javaScript -->
    <script src="{{asset("assets/js/Personal_Certificate_Arabic.js")}}"></script>
    <script src="{{asset("assets/js/KPI.js")}}"></script>
    <script src="{{asset("assets/js/dashboard.js")}}"></script>
    <script>
        const buttons = document.querySelector(".submitCertificate");
        const popupOverlay = document.getElementById("approve-popup");
        const closeButton = document.getElementById("approve-close-popup");
        console.log(buttons);
        console.log(popupOverlay);
        console.log(closeButton);
        buttons.addEventListener("click", () =>
        {


                // popupOverlay.classList.remove('hidden');
                event.preventDefault();
                Swal.fire({
                    title: 'CONFIRM CERTIFICATE?',
                   html: "Please review your selection and remarks. <br> If correct, click Confirm to proceed.",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Confirm!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Submitted !',
                            text: 'Your certificate has been sent to HR for review .',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(()=>{
                            document.querySelector("form").submit();
                        });

                    }
                });});


        closeButton.addEventListener('click', () => {
            popupOverlay.classList.add('hidden');
        });

        popupOverlay.addEventListener('click', (e) => {
            if (e.target === popupOverlay) {
                popupOverlay.classList.add('hidden');
            }
        });

    </script>

</body>
</html>
