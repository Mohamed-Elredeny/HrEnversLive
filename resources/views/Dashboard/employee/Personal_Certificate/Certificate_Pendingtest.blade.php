<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>

    <!-- custom style -->
    <link rel="stylesheet" href="../../../assets/css/Leave_Requests.css">
    <link rel="stylesheet" href="../../../assets/css/Personal_Certificate.css">
    <link rel="stylesheet" href="../../../assets/css/KPI.css">
    <link rel="stylesheet" href="../../../assets/css/dashboard.css">

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
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/all.min.css">

</head>
<body>


    <div id="sideBar" class="sidebar">
        <ul>
            <li >
                <a href="#">
                    <div class="image-dark home-dark active image">
                        <img src="../../../assets/images/sign-in/Home@3x.png" alt="icon">
                    </div>
                    <div class="image-light home-light  image">
                        <img src="../../../assets/images/sign-in/Home-light@3x-3.png" alt="icon">
                    </div>
                </a>
                <span>Home</span>
            </li>
            <li class="open">
                <a href="#">
                    <div class="image-dark employee-dark  image">
                        <img src="../../../assets/images/sign-in/Home@3x-5.png" alt="icon">
                    </div>
                    <div class="image-light employee-light active image">
                        <img src="../../../assets/images/sign-in/Home-light@3x-2.png" alt="icon">
                    </div>
                </a>
                <span>Requests</span>
            </li>
            <li>
                <a href="#">
                    <div class="image-dark hrStaff-dark  active image">
                        <img src="../../../assets/images/sign-in/Home@3x-1.png" alt="icon">
                    </div>
                    <div class="image-light  hrStaff-light image">
                        <img src="../../../assets/images/sign-in/Home-light@3x-4.png" alt="icon">
                    </div>
                </a>
                <span>HR Staff</span>
            </li>
            <li>
                <a href="#">
                    <div class="image-dark calendar-dark active image">
                        <img src="../../../assets/images/sign-in/Home@3x-4.png" alt="icon">
                    </div>
                    <div class="image-light  calendar-light image">
                        <img src="../../../assets/images/sign-in/Home-light@3x-1.png" alt="icon">
                    </div>
                </a>
                <span>Calendar</span>
            </li>
            <li>
                <a href="#">
                    <div class="image-dark settings-dark active image">
                        <img src="../../../assets/images/sign-in/Home@3x-2.png" alt="icon">
                    </div>
                    <div class="image-light  settings-light image">
                        <img src="../../../assets/images/sign-in/Home-light@3x-5.png" alt="icon">
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
                    <img src="../../../assets/images/sign-in/Home-light@3x-3.png" alt="icon">
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
                    <img src="../../../assets/images/sign-in/Home-light@3x-2.png" alt="icon">
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
                    <img src="../../../assets/images/sign-in/Home-light@3x-1.png" alt="icon">
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
                    <img src="../../../assets/images/sign-in/Home-light@3x-4.png" alt="icon">
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
                    <img src="../../../assets/images/sign-in/Home-light@3x-5.png" alt="icon">
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
                            <img src="../../../assets/images/sign-in/Logos@3x.png" alt="logos">
                        </div>
                        <div class="titleLogo">
                            <p>Medgulf Construction Company WLL</p>
                        </div>
                    </div>
                @endif
                @if($employee->company_id=='trags')
                    <div class="logo">
                        <div class="img-fluid">
                            <img src="../../../assets/images/sign-in/Logos@3x-1.png" alt="logos">
                        </div>
                        <div class="titleLogo">
                            <p>TRAGS ENGINEERING COMPANY WLL</p>
                        </div>
                    </div>
                @endif
                @if($employee->company_id=='enjineering')
                    <div class="logo">
                        <div class="img-fluid">
                            <img src="../../../assets/images/sign-in/Logos@3x-2.png" alt="logos">
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
                        <img src="../../../assets/images/sign-in/1718183412_1694698427_Mohamed1.jpg" alt="Personal photo">
                    </div>
                </div>
                <div class="name">
                    <p>Ahmed Elsayed</p>
                    <span>HR Supervisor</span>
                </div>
                <div class="arrow">
                    <div class="ima-fluid">
                        <img onclick="openEdit()" src="../../../assets/images/sign-in/Arrow@3x-1.png" alt="arrow-dowm">
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
                <section class="head ">
                    <div class="title">
                        <a href="{{route('employee.index')}}">
                            <span>My Personal Certificate</span>
                        </a>
                        <p>Pending Certificate</p>
                        <span>|</span>
                    </div>
                    <a href="{{route('employee.index')}}" class="image">
                        <div class="img-fluid">
                            <img src="../../../assets/images/sign-in/Back@3x.png" alt="back arrow">
                        </div>
                    </a>
                </section>

                <section class="statistics labelSection">
                    <p>Show Info Employee</p>
                </section>
                <section class="statistics_Content ">
                    <div class="info Certificates">
                        <div class="image">
                            <div class="img-fluid">
                                <img src="../../../assets/images/sign-in/1718183412_1694698427_Mohamed1.jpg" alt="Personal photo">
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
                    </div>
                </section>

                <section class="a4_section" id="a4_section">
                    <div class="image">
                        <div class="img-fluid">

                                @if($employee->company_id=='medgulf')
                                    <img src="../../../assets/images/logos/header.png" alt="Medgulf Header">
                                @endif
                                @if($employee->company_id=='trags')
                                    <img src="../../../assets/images/logos/tragsEngHeader.jpg" alt="TragsEng Header">
                                @endif
                                @if($employee->company_id=='enjineering')
                                    <img src="../../../assets/images/logos/tragsHeader.png" alt="Trags Header">
                                @endif

                        </div>
                    </div>
{{--                    <div class="content_certificate">--}}
{{--                        <div class="header_certificate">--}}
{{--                            <h5>DATE: <span> X Date X </span></h5>--}}
{{--                            <h5>Ref No <span> X Number X </span>: Employee No. <span> X Number X </span> /CBQ.</h5>--}}
{{--                            <h5>The Manager</h5>--}}
{{--                            <p>--}}
{{--                                Commercial Bank of Qatar--}}
{{--                                <br>--}}
{{--                                State of Doha – Qatar--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="body_certificate">--}}
{{--                            <div>--}}
{{--                                <p>Dear Sir,</p>--}}

{{--                                <p>This is to certify that<span> X Mr. Name /Ms. Name X</span>, holder of <span>X Nationality X</span>  Passport # <span>X Number X</span> & QID / Visa  <span>X Number X</span> working in the capacity of <span>X Designation X</span> is a confirmed employee of Medgulf Construction Company. He joined the company on <span>X Date X</span> and still employed till date.</p>--}}

{{--                                <p>His Gross Salary per month is QAR. <span>X Number X</span> /-Amount in letters</p>--}}

{{--                                <p>To assist the above mentioned employee to obtain <span>X Credit Card OR Personal loan OR Car loan X</span> from your bank, we confirm that this monthly salary will continue to be paid to his bank account, account number <span>X Number X</span> effective next month.</p>--}}

{{--                                <p>If the above mentioned employee resigns or his employment is terminated by Medgulf, we will inform you accordingly and pay all amounts of End of services benefits due to him, if any, to his aforementioned bank account.</p>--}}

{{--                                <p>We confirm that both monthly salary and end of service dues, if any, will not be transferred to another bank before obtaining a written clearance Letter from your bank or by directive through Qatar courts. </p>--}}

{{--                                <p>The bank and above named employee fully understands that Medgulf Construction Company does not, in any way, hold itself responsible for any debits incurred by him and that the granting of credit or loan is the sole discretion of your Bank.</p>--}}

{{--                                <p>Yours truly,</p>--}}
{{--                            </div>--}}
{{--                            <h5>For Medgulf Construction Company W.L.L.</h5>--}}
{{--                        </div>--}}
{{--                        <div class="Footer_certificate">--}}
{{--                            <div class="Footer_certificate_photo">--}}
{{--                                <div class="image">--}}
{{--                                    <div class="img-fluid">--}}
{{--                                        <img src="../../../assets/images/logos/1717495704_Copy of Untitled Design.png" alt="Medgulf Header">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="image">--}}
{{--                                    <div class="img-fluid company">--}}
{{--                                        @foreach($employee as $emp)--}}
{{--                                            @if($emp->company_id=='medgulf')--}}
{{--                                                <img class="Medgulf"--}}
{{--                                                     src="../../../assets/images/logos/company_1_sign.png"--}}
{{--                                                     alt="Medgulf Header">--}}
{{--                                            @endif--}}
{{--                                            @if($emp->company_id=='trags')--}}
{{--                                                <img class="tragsEng"--}}
{{--                                                     src="../../../assets/images/logos/company_2_sign.png"--}}
{{--                                                     alt="tragsEng Header">--}}
{{--                                            @endif--}}
{{--                                            @if($emp->company_id=='enjineering')--}}
{{--                                                <img class="trags" src="../../../assets/images/logos/company_3_sign.png"--}}
{{--                                                     alt="trags Header">--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="Footer_certificate_content">--}}
{{--                                <h5>Name:</h5>--}}
{{--                                <h5>Position:</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <br>
                    <br>
                    <div class="content_certificate">
                        <h5 class="header_certificate">
                            <h5>DATE: <span> {{$certificate->date_submit}}</span></h5>
                            <br>
                           <h5> Ref No <span> {{$certificate->ref}}</span>   Employee No. {{$employee->empCode}}/CBQ/2023</h5>
                            <br><br>
                            <div class="text-right" dir="rtl">
                                السـيد/ مديرادارة شرطة مسيعيد المحترم
                                <br>
                                ادارة شرطة مسيعيد
                                <br>
                                وزارة الداخلية
                                <br>
                                تحية طيبة وبعد,,,
                                <br>
                                <br>
                                <h5 class="text-center font-weight-bold"> <b style="font-weight: bolder"><u>الموضوع :فقدان تصريح دخول</u></b></h5>
                                <br>
                                نود أن نحيط سيادتكم علما بأن
                                @if($employee->sex=="Male")السيد/ @else السيدة/ @endif
                                {{$employee->arabic_name}}

                                ،
                                {{$employee->arabic_nationality}}
                                الجنسية و الحامل لجواز
                                سفر رقم({{$employee->passportNo}}) و بطاقة شخصية رقم ({{$employee->visaNo}}) , يعمل لدينا و على كفالتنا
                                ، حيث أنه فقد تصريح الدخول الخاص به لمنطقة مسيعيد والذي مازال صالحاً،نرجو التكرم بمنحنا شهادة
                                تفيد بفقدان التصريح حتي يتسني لنا اصدار تصريح بدل فاقد.

                                <br>
                                وتفضلوا بقبول فائق الإحترام والتقدير.
                            </div>
                            <br>
                            @if($certificate->state=='21')
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-fluid d-block" src="{{asset("assets/images/Picture1.png")}}" style="height: 120px; border-radius: 5%;">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid d-block" src="{{asset("assets/images/Picture2.png")}}" style="height: 150px; margin: auto; border-radius: 5%;">
                                    </div>
                                </div>
                            @endif
                            <br>
                            عن شركة مدجلف للإنشاءات
                            <br>
                            ايلي القزي
                            <br>
                            <b style="font-weight: bolder">
                                مدير الموارد البشرية
                            </b>
                        </h5></div>

                    <div class="image footer">
                        <div class="img-fluid">

                                @if($employee->company_id=='medgulf')
                                    <img src="../../../assets/images/logos/footer.jpg" alt="Medgulf Footer">
                                @endif
                                @if($employee->company_id=='trags')
                                    <img src="../../../assets/images/logos/tragsEngFooter.jpg" alt="tragsEng Footer">
                                @endif
                                @if($employee->company_id=='enjineering')
                                    <img src="../../../assets/images/logos/tragsfooter.jpg" alt="trags Footer">
                                @endif

                        </div>
                    </div>
                </section>
{{--                @if($certificate->Emp_id!=$currentuserid)--}}
                <section class="buttonForEmployee buttonForEResponsev buttonForFirstApproval">
                    <div class="ContentDate">
                        <p>Date</p>
                        <span>{{$currentdate}}</span>
                    </div>
                    <div class="buttonFor">
                        <button class="btn btnFor btnForCertificate btnReview" id="btnReview">
                            Confirm Certificate
                        </button>
                        <button class="btn btnFor btnForCertificate btnReturn" id="btnReturn">
                            Return To Sender
                        </button>
                    </div>
                </section>
{{--                @endif--}}
            </article>
        </main>
    </div>

    <div class="overlayBoxForEmployee overlayBoxCertificate "></div>
    <form method="post" action="{{route('employee.ReviewerCertificateReturnToSender',$certificate->id)}}">

        @csrf
    <div class="boxReturnDan boxReturnDanFirst boxReturnDanCertificate">
        <div class="titleBox">
            <h2>
                Return Certificate To Sender
            </h2>
        </div>
        <div class="suptitleBox">
            <p>
                Here are 8 common reasons to return to sender, and you can select one or more as guides to amend:
            </p>
        </div>

            <div class="form-group">
                <input type="checkbox" value="reasonOne" name="reason[]" id="reasonOne">
                <label for="reasonOne">
                    Incomplete Information: The employee has not provided all the necessary details required for processing the certificate.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" value="reasonTwo" name="reason[]" id="reasonTwo">
                <label for="reasonTwo">
                    Invalid Purpose: The reason provided for the certificate request does not meet the criteria for issuance.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" value="reasonThree" name="reason[]" id="reasonThree">
                <label for="reasonThree">
                    Document Format Issue: The format requested for the certificate is not supported by the company's standard documentation.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" value="reasonFour" name="reason[]" id="reasonFour">
                <label for="reasonFour">
                    Request Outside of Policy: The certificate requested is outside the company's policy for issuance or the type of certificate is not provided.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reason[]" value="reasonFive" id="reasonFive">
                <label for="reasonFive">
                    Supporting Documents Missing: Any additional documents required to verify the certificate request are not attached.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reason[]" value="reasonSix" id="reasonSix">
                <label for="reasonSix">
                    Clarification Needed: Further details or clarification are needed to process the request effectively.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reason[]" value="reasonSeven" id="reasonSeven">
                <label for="reasonSeven">
                    Conflicting Requests: The employee has multiple overlapping or conflicting certificate requests.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="reason[]" value="reasonEight" id="reasonEight">
                <label for="reasonEight">
                    Incorrect Employee Data: The provided employee information is incorrect or does not match company records.
                </label>
            </div>

        <div class="reasonSpecify">
            <div class="titleSpecify">
                <p>
                    Reasons: <span>(Specify)</span>
                </p>
            </div>
            <textarea name="areaReasonSpecify" id="areaReasonSpecify" placeholder="Type Other Reason"></textarea>
        </div>
        <div class="buttonReason">
            <button class="btn ReasonBtn Return active BtnFirstReturn" type="submit">
                Return
            </button>
        </div>
    </div>
    </form>
    <form method="post" action="{{route('employee.ReviewerCertificateConfirm',$certificate->id)}}">
        @csrf
    <div class="boxReturnDan boxReturnDanFirst boxConfirmDanCertificate" style="height: fit-content !important;">
        <div class="titleBox titleCertificate">
            <h2>
                CONFIRM CERTIFICATE
            </h2>
        </div>
        <div class="suptitleBox suptitleCertificate">
            <p>
                Are you sure you have reviewed this certificate before confirming its issuance?
            </p>
        </div>

        <div class="reasonSpecify">
            <div class="titleSpecify">
                <p>
                    Remark
                </p>
            </div>
            <textarea name="areaReasonSpecify" id="areaReasonSpecify" placeholder="Remark"></textarea>
        </div>
        <div class="buttonReason buttonCertificate">
            <button class="btn ReasonBtn Return active BtnFirstReturn BtnFirstCertificate" type="submit">
                Yes
            </button>
        </div>
    </div>
    </form>
    <!-- bootstrap -->
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/all.min.js"></script>

    <!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js" integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom javaScript -->
    <script src="../../../assets/js/Personal_Certificate.js"></script>
    <script src="../../../assets/js/Certificate_Returned.js"></script>
    <script src="../../../assets/js/dashboard.js"></script>
    <script src="../../../assets/js/Certitcate_dashboard.js"></script>
    <script>

        const btnReturn = document.querySelector("#btnReturn");
        const btnReview = document.querySelector("#btnReview");
        const overlayBoxCertificate = document.querySelector(".overlayBoxCertificate");
        const boxReturnDanCertificate = document.querySelector(".boxReturnDanCertificate");
        const boxConfirmDanCertificate = document.querySelector(".boxConfirmDanCertificate");
        const FormboxDan = document.querySelectorAll(".FormboxDan input");
        const ReasonBtn = document.querySelector(".ReasonBtn");
        const BtnFirstCertificate = document.querySelector(".BtnFirstCertificate");

        btnReturn.addEventListener("click", () => {
            overlayBoxCertificate.classList.toggle("active");
            boxReturnDanCertificate.classList.toggle("active");
        });
        btnReview.addEventListener("click", () => {
            overlayBoxCertificate.classList.toggle("active");
            boxConfirmDanCertificate.classList.toggle("active");
        });
        overlayBoxCertificate.addEventListener("click", () => {
            overlayBoxCertificate.classList.remove("active");
            boxReturnDanCertificate.classList.remove("active");
            boxConfirmDanCertificate.classList.remove("active");
        });
        ReasonBtn.addEventListener("click", () => {
            overlayBoxCertificate.classList.remove("active");
            boxReturnDanCertificate.classList.remove("active");
        });
        BtnFirstCertificate.addEventListener("click", () => {
            overlayBoxCertificate.classList.remove("active");
            boxConfirmDanCertificate.classList.remove("active");
        });

        FormboxDan.forEach((input) => {
            input.addEventListener("change", () => {
                const checkedCount = Array.from(FormboxDan).filter(input => input.checked).length;

                if (checkedCount >= 1) {
                    ReasonBtn.classList.add("active");
                } else {
                    ReasonBtn.classList.remove("active");
                }
            });
        });

    </script>
</body>
</html>
