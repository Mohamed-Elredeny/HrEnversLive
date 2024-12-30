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
{{--            @foreach($employee as $emp)--}}
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
                @if($employee->company_id=='trags')
                    <div class="logo">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Logos@3x-1.png")}}" alt="logos">
                        </div>
                        <div class="titleLogo">
                            <p>TRAGS ENGINEERING COMPANY WLL</p>
                        </div>
                    </div>
                @endif
                @if($employee->company_id=='enjineering')
                    <div class="logo">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Logos@3x-2.png")}}" alt="logos">
                        </div>
                        <div class="titleLogo">
                            <p>TRADING AND AGENCY SERVICES LIMITED COMPANY WLL</p>
                        </div>
                    </div>
                @endif
{{--            @endforeach--}}
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
                            <button class="print_button" onclick="previewPrint()">
                                <i class="fa-solid fa-print"></i>
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
{{--                            @foreach($employee as $emp)--}}
                                @if($employee->company_id=='medgulf')
                                    <img src="{{asset("assets/images/logos/header.png")}}" alt="Medgulf Header">
                                @endif
                                @if($employee->company_id=='trags')
                                    <img src="{{asset("assets/images/logos/tragsEngHeader.jpg")}}" alt="TragsEng Header">
                                @endif
                                @if($employee->company_id=='enjineering')
                                    <img src="{{asset("assets/images/logos/tragsHeader.png")}}" alt="Trags Header">
                                @endif
{{--                            @endforeach--}}
                        </div>
                    </div>
{{--                    <div class="container mt-4">--}}
                   @yield('certificate_content_approval')
{{--                    </div>--}}
                    <div class="image footer">
                        <div class="img-fluid">
{{--                            @foreach($employee as $emp)--}}
                                @if($employee->company_id=='medgulf')
                                    <img src="{{asset("assets/images/logos/footer.jpg")}}" alt="Medgulf Footer">
                                @endif
                                @if($employee->company_id=='trags')
                                    <img src="{{asset("assets/images/logos/tragsEngFooter.jpg")}}" alt="tragsEng Footer">
                                @endif
                                @if($employee->company_id=='enjineering')
                                    <img src="{{asset("assets/images/logos/tragsfooter.jpg")}}" alt="trags Footer">
                                @endif
{{--                            @endforeach--}}
                        </div>
                    </div>
                </section>
            </article>
        </main>


    </div>
    <div class=" overlayCertificate "></div>
    <div class=" boxCertificateReasons">
        <div class="titleBox">
            <h2>
                (KPI) Return Request
            </h2>
        </div>
        <div class="suptitleBox">
            <p>
                Here are six common reasons to cancel a KPI, and you can select one or more as guides for employees to improve:
            </p>
        </div>
        <form class="FormboxReturnDan FormboxReturnsta">
            <div class="form-group">
                <input type="checkbox" name="reasonSta" disabled checked id="reasonStaOne">
                <label for="reasonStaOne">
                    Weighting Update: If there is a need to change the importance or weighting assigned to the KPI in the overall evaluation.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reasonSta" disabled id="reasonStaTwo">
                <label for="reasonStaTwo">
                    Need for Adjustments: When significant changes or modifications are required to make the KPI more effective or aligned with goals.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reasonSta" disabled checked id="reasonStaThree">
                <label for="reasonStaThree">
                    Incorrect Manager Approval: If the KPI was not approved or authorized by the responsible manager.                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reasonSta" disabled id="reasonStaFour">
                <label for="reasonStaFour">
                    Unrealistic Results: When the expected results set for the KPI are impractical or require adjustments.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reasonSta" disabled checked id="reasonStaFive">
                <label for="reasonStaFive">
                    Unclear Objectives: If the KPI lacks clear and well-defined objectives that can be effectively measured.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reasonSta" disabled id="reasonStaSix">
                <label for="reasonStaSix">
                    Outdated: When the KPI is no longer aligned with the objectives.
                </label>
            </div>
        </form>
        <div class="reasonSpecify">
            <div class="titleSpecify">
                <p>
                    Reasons: <span>(Specify)</span>
                </p>
            </div>
            <p name="areaReasonSpecify" class="textareaPra" id="areaReasonSpecify" placeholder="Type Other Reason">
                input
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
        function previewPrint() {
            var sectionToPrint = document.getElementById("a4_section").outerHTML; // استخدام المعرف الصحيح
            var previewWindow = window.open("", "", "width=1200,height=650"); // فتح نافذة جديدة لمعاينة المحتوى

            previewWindow.document.write(`
                <html>
                    <head>
                        <!-- google font Syne-->
                        <link rel="preconnect" href="https://fonts.googleapis.com">
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                        <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

                        <title>Print Preview</title>
                        <style>
                            :root{
                                /* color */
                                --main-color: #0F3464;
                                --main-light-color: #5C96FE;
                                --main-blue-color: #1758ad;
                                --main-extra-light-color: #e7faff;
                                --danger-color: #EB0C0C;
                                --success-color: #61F899 ;
                                --success-dark-color:#42b26b ;
                                --orange-color: #e1322d;
                                --orange-light-color: #f06561;
                                --gray-color: #696969;
                                --gray-light-color: #f4f0f0;
                                --gray-text-color: #999999;
                                --white-text-color: #D9D9D9;
                                --white-color: #fff;
                                --dark-color: #181818;

                                /* radius */
                                --radius-full: 50%;
                                --radius-border: 50rem;
                            }
                            body{
                                display: flex;
                                justify-content: space-around;
                                align-items: start;
                                font-family: "Syne", sans-serif;
                            }
                            .a4_section {
                                width: 210mm;
                                /*height: 287mm;*/
                                background-color: var(--white-color);
                                border: 1px solid var(--main-color);
                                border-radius: 10px;
                                margin-inline: auto;
                                height:auto;
                                margin-block-start: 20px;
                                padding: 20px;
                                box-sizing: border-box;
                                position: relative;
                            }

                            .a4_section .image{
                                margin: -12px;
                            }
                            .a4_section .image.footer{
                                 display: flex;
                                bottom: 10px;
                                left: 0;
                                margin: 0px;
                                padding: 0px 8px;
                            }
                            .a4_section .image .img-fluid img{
                                width: 100%;

                            }
                            .a4_section .content_certificate{
                                margin-block-start: 30px;
                            }
                            .a4_section .content_certificate{
                                color: var(--dark-color);
                                font-family: "Syne";
                                font-size: 12px;
                                font-weight: 500;
                                line-height: 18px;
                                padding-block: 2px;
                            }
   .a4_section .content_certificate .header_certificate h5{
                                color: var(--dark-color);
                                font-family: "Syne";
                                font-size: 12px;
                                font-weight: 500;
                                line-height: 18px;
                                padding-block: 2px;
                            }
                        .a4_section .content_certificate .header_certificate h6{
                                color: var(--dark-color);
                                font-family: "Syne";
                                font-size: 12px;
                                font-weight: 500;
                                line-height: 18px;
                                padding-block: 2px;
                            }
                            .a4_section .content_certificate .header_certificate h5 span{

                                display: inline;
                            }
                            .a4_section .content_certificate p{
                                color: var(--dark-color);
                                font-family: "Syne";
                                font-size: 8px;
                                font-weight: 500;
                                line-height: 18px;
                            }
                            .a4_section .content_certificate .body_certificate{
                                padding-block: 5px;
                            }
                            .a4_section .content_certificate .body_certificate p span{

                                display: inline;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo{

                                  padding-left:60px;
                                   padding-right: 60px;
                                justify-content: space-between;
                                align-items: center;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image {
                                position: relative;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image .img-fluid img{
                                width: 125px;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image .img-fluid.company img.tragsEng{
                                width: 170px;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image .img-fluid.company img.trags{
                                width: 650px;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image .img-fluid.company img.Medgulf{
                                width: 240px;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image .img-fluid.company:has(.tragsEng) {
                                position: absolute;
                                top: -120px;
                                right: 100px;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image .img-fluid.company{
                                position: absolute;
                                top: -190px;
                                right: -100px;
                            }
                            .a4_section .content_certificate .Footer_certificate .Footer_certificate_content{
                                padding-block-start: 5px;
                            }
                            .buttonPrint{
                                background-color: #0F3464;
                                outline: none;
                                border: none;
                                color: #fff;
                                font-size: 32px;
                                padding: 10px 20px;
                                border-radius: 15px;
                                transition: all .3s ease-in-out;
                            }
                            .buttonPrint:hover{
                                background-color: #5C96FE;
                            }
                            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                                margin-top: 0;
                                margin-bottom: .5rem;
                                font-weight: 500;
                                line-height: 1.2;
                                color: var(--bs-heading-color, inherit);
                            }
                            @media print {
                                button {
                                    display: none;
                                }
                                .a4_section {
                                    border: none;
                                    width: 230mm;
                                    height: 317mm;
                                }
                                .a4_section:has(.Medgulf) .content_certificate .Footer_certificate .Footer_certificate_content{
                                    padding-block-start: 20px;
bottom:30px
                                }
                                .a4_section:has(.Medgulf) .content_certificate h5{
                                    font-size: 16px;
                                    line-height: 24px;
                                }
                                .a4_section:has(.Medgulf) .content_certificate p{
                                    font-size: 14px;
                                    line-height: 22px;
                                }
                                .a4_section:has(.trags) .content_certificate .Footer_certificate .Footer_certificate_content{
                                    padding-block-start: 20px;
                                }
                                .a4_section:has(.trags) .content_certificate h5{
                                    font-size: 18px;
                                    line-height: 26px;
                                }
                                .a4_section:has(.trags) .content_certificate p{
                                    font-size: 16px;
                                    line-height: 24px;
                                }
                                .a4_section .content_certificate .Footer_certificate .Footer_certificate_photo .image .img-fluid.company:has(.trags) {
                                    position: absolute;
                                    top: -170px;
                                    right: -100px;
                                }
                                .a4_section:has(.trags) {
                                    width: 230mm;
                                    height: 317mm;
                                }
                                .a4_section:has(.tragsEng) {
                                    width: 220mm;
                                    height: 287mm;
                                }
                                @page {
                                    margin: 0; /* تعيين الهامش إلى لا شيء */
                                }
                            }
                        </style>
                    </head>
                    <body>
                        ${sectionToPrint}

                        <button class="buttonPrint" onclick="window.print()">Print</button>
                    </body>
                </html>
            `);
            previewWindow.document.close(); // إغلاق المستند
            previewWindow.focus(); // التركيز على نافذة المعاينة
        }
    </script>
</body>
</html>
