<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV</title>

    <!-- custom style -->
    <link rel="stylesheet" href="{{("assets/css/Personal_Certificate.css")}}">
    <link rel="stylesheet" href="{{("assets/css/KPI.css")}}">
    <link rel="stylesheet" href="{{("assets/css/dashboard.css")}}">

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
    <link rel="stylesheet" href="{{("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{("assets/css/all.min.css")}}">

</head>
<body>


    <div id="sideBar" class="sidebar">
        <ul>
            <li >
                <a href="#">
                    <div class="image-dark home-dark active image">
                        <img src="{{("assets/images/sign-in/Home@3x.png")}}" alt="icon">
                    </div>
                    <div class="image-light home-light  image">
                        <img src="{{("assets/images/sign-in/Home-light@3x-3.png")}}" alt="icon">
                    </div>
                </a>
                <span>Home</span>
            </li>
            <li class="open">
                <a href="#">
                    <div class="image-dark employee-dark  image">
                        <img src="{{("assets/images/sign-in/Home@3x-5.png")}}" alt="icon">
                    </div>
                    <div class="image-light employee-light active image">
                        <img src="{{("assets/images/sign-in/Home-light@3x-2.png")}}" alt="icon">
                    </div>
                </a>
                <span>Requests</span>
            </li>
            <li>
                <a href="#">
                    <div class="image-dark hrStaff-dark  active image">
                        <img src="{{("assets/images/sign-in/Home@3x-1.png")}}" alt="icon">
                    </div>
                    <div class="image-light  hrStaff-light image">
                        <img src="{{("assets/images/sign-in/Home-light@3x-4.png")}}" alt="icon">
                    </div>
                </a>
                <span>HR Staff</span>
            </li>
            <li>
                <a href="#">
                    <div class="image-dark calendar-dark active image">
                        <img src="{{("assets/images/sign-in/Home@3x-4.png")}}" alt="icon">
                    </div>
                    <div class="image-light  calendar-light image">
                        <img src="{{("assets/images/sign-in/Home-light@3x-1.png")}}" alt="icon">
                    </div>
                </a>
                <span>Calendar</span>
            </li>
            <li>
                <a href="#">
                    <div class="image-dark settings-dark active image">
                        <img src="{{("assets/images/sign-in/Home@3x-2.png")}}" alt="icon">
                    </div>
                    <div class="image-light  settings-light image">
                        <img src="{{("assets/images/sign-in/Home-light@3x-5.png")}}" alt="icon">
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
                    <img src="{{("assets/images/sign-in/Home-light@3x-3.png")}}" alt="icon">
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
                    <img src="{{("assets/images/sign-in/Home-light@3x-2.png")}}" alt="icon">
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
                    <img src="{{("assets/images/sign-in/Home-light@3x-1.png")}}" alt="icon">
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
                    <img src="{{("assets/images/sign-in/Home-light@3x-4.png")}}" alt="icon">
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
                    <img src="{{("assets/images/sign-in/Home-light@3x-5.png")}}" alt="icon">
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
            <div class="logo">
                <div class="img-fluid">
                    <img src="{{("assets/images/sign-in/Logos@3x.png")}}" alt="logos">
                </div>
                <div class="titleLogo">
                    <p>Medgulf Construction Company WLL</p>
                </div>
            </div>
            <div class="account">
                <div class="image">
                    <div class="ima-fluid">
                        <img src="{{("assets/images/sign-in/1718183412_1694698427_Mohamed1.jpg")}}" alt="Personal photo">
                    </div>
                </div>
                <div class="name">
                    <p>Ahmed Elsayed</p>
                    <span>HR Supervisor</span>
                </div>
                <div class="arrow">
                    <div class="ima-fluid">
                        <img onclick="openEdit()" src="{{("assets/images/sign-in/Arrow@3x-1.png")}}" alt="arrow-dowm">
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
                        <a href="{{route('employee.index')}}">
                            <span>My Personal Certificate</span>
                        </a>
                        <p>Approval Certificates</p>
                        <span>|</span>
                    </div>
                    <a href="{{route('employee.index')}}" class="image">
                        <div class="img-fluid">
                            <img src="{{("assets/images/sign-in/Back@3x.png")}}" alt="back arrow">
                        </div>
                    </a>
                </section>

                <section class="name_page">
                    <p>
                        Approval Certificates
                    </p>
                </section>
                <section class="table_section table_Certificate th_td_last_child border-white table_responsev">
                    <table class="w-100">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Type</th>
                                <th>Employee Remark</th>
                                <th>Submission Date</th>
                                <th>Reviewer Name</th>
                                <th>Review Date</th>
                                <th>Reviewer Remarks</th>
                                <th>Approval Name</th>
                                <th>Approval Date</th>
                                <th>Approval Remarks</th>
                                <th>Status</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($certificatesapproval as $certificateapproval)
                            <tr class="Approval_Certificate" style="display:table-row ;">
                                <td>{{ \App\Models\Employee::find($certificateapproval->Emp_id)->empName ?? '' }}</td>
                                <td>{{$certificateapproval->ref}}</td>
                                <td>{{$certificateapproval->remark}}</td>
                                <td>{{$certificateapproval->date_submit}}</td>
                                <td>{{$certificateapproval->review_name}}</td>
                                <td>{{$certificateapproval->review_date}}</td>
                                <td>{{$certificateapproval->review_remark}}</td>
                                <td>{{$certificateapproval->approval_name}}</td>
                                <td>{{$certificateapproval->approval_date}}</td>
                                <td>{{$certificateapproval->approval_remark}}</td>
                                <td>
                                    <div class="statu">
                                        <div class="image">
                                            <div class="img-fluid">
                                                <img src="{{("assets/images/sign-in/Evaluated@3x.png")}}" alt="Evaluated">
                                            </div>
                                        </div>
                                        <p>
                                            Approval
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('employee.CertificateApprovalApproval',$certificateapproval->id)}}">
                                        <button class="btn">
                                            show
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @foreach($certificatespending as $certificatepending)
                            <tr class="Pending_Certificate" style="display:table-row ;">
                                <td>{{ \App\Models\Employee::find($certificatepending->Emp_id)->empName ?? '' }}</td>
                                <td>{{$certificatepending->ref}}</td>
                                <td>{{$certificatepending->remark}}</td>
                                <td>{{$certificatepending->date_submit}}</td>
                                <td>{{$certificatepending->review_name}}</td>
                                <td>{{$certificatepending->review_date}}</td>
                                <td>{{$certificatepending->review_remark}}</td>
                                <td>{{$certificatepending->approval_name}}</td>
                                <td>{{$certificatepending->approval_date}}</td>
                                <td>{{$certificatepending->approval_remark}}</td>
                                <td>
                                    <div class="statu">
                                        <div class="image">
                                            <div class="img-fluid">
                                                <img src="{{("assets/images/sign-in/Pending@3x.png")}}" alt="Pending">
                                            </div>
                                        </div>
                                        <p>
                                            Pending To Approve
                                        </p>
                                    </div>
                                </td>
                                <td>

                                    <a href="{{route('employee.CertificatePendingApproval',$certificatepending->id)}}">
                                        <button class="btn">
                                            show
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        @foreach($certificatesreturn as $certificatereturn)

                            <tr class="Returned_Certificate" style="display:table-row ;">
                                <td>{{ \App\Models\Employee::find($certificatereturn->Emp_id)->empName ?? '' }}</td>
                                <td>{{$certificatereturn->ref}}</td>
                                <td>{{$certificatereturn->remark}}</td>
                                <td>{{$certificatereturn->date_submit}}</td>
                                <td>{{$certificatereturn->review_name}}</td>
                                <td>{{$certificatereturn->review_date}}</td>
                                <td>{{$certificatereturn->review_remark}}</td>
                                <td>{{$certificatereturn->approval_name}}</td>
                                <td>{{$certificatereturn->approval_date}}</td>
                                <td>{{$certificatereturn->approval_remark}}</td>
                                <td>
                                    <div class="statu">
                                        <div class="image">
                                            <div class="img-fluid">
                                                <img src="{{("assets/images/sign-in/Returned@3x.png")}}" alt="Returned">
                                            </div>
                                        </div>
                                        <p>
                                            Returned To Review
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('employee.CertificateReturned',$certificatereturn->id)}}">
                                        <button class="btn">
                                            show
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="overlay overlayKpi" onclick="overlayBoxTable()"></div>
                </section>
            </article>
        </main>

    </div>

    <!-- bootstrap -->
    <script src="{{("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{("assets/js/all.min.js")}}"></script>

    <!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/index.global.js" integrity="sha512-3I+0zIxy2IkeeCvvhXUEu+AFT3zAGuHslHLDmM8JBv6FT7IW6WjhGpUZ55DyGXArYHD0NshixtmNUWJzt0K32w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom javaScript -->
    <script src="{{("assets/js/Personal_Certificate.js")}}"></script>
    <script src="{{("assets/js/KPI.js")}}"></script>
    <script src="{{("assets/js/dashboard.js")}}"></script>

</body>
</html>
