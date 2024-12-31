<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSRV sign-in</title>

    <link rel="stylesheet" href="{{asset("assets/css/sign_in.css")}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    .logos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .radio-card {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
    @media (max-width: 768px) {
        .radio-card {
            margin-bottom: 15px;
        }
    }

</style>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@if(session()->has('message'))
    <div>
        <div class="alert alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            {{session()->get('message')}}

        </div>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<header>
    <div class="container">
        <div class="img-fluid">
            <img src="{{asset("assets/images/ensrv.png")}}" alt="logo">
        </div>
    </div>
</header>

<div id="content">
    <main>
        <article>
            <!-- hero section -->
            <section class="hero">
                <div class="top container">
                    <div class="content">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/HR_360_logo.png")}}" alt="">
                        </div>

                        <div class="title" style="color:var(--dark-color)">

                                Your One-Stop HR Solutions

                        </div>
                        <br>

                        <div class="title">
                            Welcome to your one-stop hub for
                            HR resources and tools.
                        </div>
                        <div class="subtitle">
                            Explore our comprehensive library of resources,
                            connect with colleagues,
                            and stay updated on the latest HR trends and best practices.
                        </div>
                        <div class="text-center">
                            <button class="btn" onclick="toggle()">
                                Sign In
                            </button>
                        </div>
                    </div>
                    <div class="image">
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/331@3x.png")}}" alt="build">
                        </div>

                        <p class="span text-1">It’s all digitalized now!</p>
                        <p class="span text-2">Don’t waste your time<br>with paper work</p>
                        <p class="span text-3">Easy Access!</p>
                    </div>
                </div>

            </section>
            <!-- hero section -->


            <!-- popup sign -->

            <div class="popup " id="sign">
                <div class="left">
                    <div class="image">
                        <img src="{{asset("assets/images/sign-in/PopUp_SHape@3x.png")}}" alt="shape">
                        <div class="image-loge">
                            <img src="{{asset("assets/images/sign-in/HR_360_logo.png")}}" alt="logo photo">
                        </div>
                    </div>

                </div>
                <div class="signin">
                    <div class="head">
                        <div class="nav">

                            <p class="signdiff active" id="signInId" onclick="SignIn()">Sign In</p>
                            |
                            <p class="" id="SignUpId" onclick="SignUp()">Sign Up</p>
                        </div>
                        <div class="img-fluid">
                            <img src="{{asset("assets/images/sign-in/Sign_IN_Icon@3x.png")}}">
                        </div>
                    </div>
                    <div class="content diff " id="diff">
                        <p class="text">
                            Sign In
                            <br>
                            Please click on your company's logo to log in.
                        </p>
                        <div class="card-list">


                            <div class="card" onclick="medgulfSignIn()">
                                <div class="image">
                                    <img src="{{asset("assets/images/logos/MEDGULF-logo.png")}}"   alt="logo medgulf">
                                </div>
                                <div class="content">
                                    <p>
                                        Sign in with Medgulf Construction
                                    </p>
                                </div>
                            </div>

                            <div class="card" onclick="TragsSignIn()">

                                <div class="image">
                                    <img src="{{asset("assets/images/logos/4.jpg")}}" alt="logo Trags">
                                </div>
                                <div class="content">
                                    <p>
                                        Sign in with Trags Trading
                                    </p>
                                </div>
                            </div>

                            <div class="card" onclick="EngineeringSignIn()">

                                <div class="image">
                                    <img src="{{asset("assets/images/logos/3.jpg")}}" alt="logo Trags Engineering">
                                </div>
                                <div class="content">
                                    <p>
                                        Sign in with Trags Engineering
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="down d-flex align-item-center">
                            <p class="new">
                                New to 360 HR platform ENSRV?
                            </p>
                            <button onclick="SignUp()" class="btn d-flex align-item-center">
                                <div class="content">
                                    Registor now
                                </div>
                                <div class="img-fluid">
                                    <img src="{{asset("assets/images/sign-in/Double_Up@3x.png")}}" alt="arrow">
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="content signLogo medgulfSignin" id="medgulfSignin">

                        <div onclick="SignIn()" style=" position: absolute; top: 10px;left: 10px;cursor: pointer;display: inline-flex;align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"  style=" margin-right: 5px;">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M19 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H19v-2z"/>
                            </svg></div>

                        <div class="image">
                            <div class="img-fluid">
                                <img src="{{asset("assets/images/logos/MEDGULF-logo.png")}}" alt="logo medgulf">
                            </div>
                        </div>

                        <div class="content">
                            <div class="error1 error">
                                    <p>
                                       <br>

                                    </p>
                            </div>

                            <form class="formlogo1 formlogo" method="Post" action="{{route('signinpageMedgulf')}}"
                                  id="signinmedgulf">
                                @csrf

                                <input type="email" placeholder="Work Email" class="form-control" name="emailMedgulf" id="emailMedgulf">
                                <div class="password">
                                    <input type="password" placeholder="Password" class="form-control"
                                           name="PasswordMedgulf" id="PasswordMedgulf">
                                    <div class="iconPassword active iconPasswordOpen" id="openEyeMedgulf">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class=" iconPassword" id="closeEyeMedgulf">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </div>
                                </div>

                                <div class="forget" onclick="forgetPass()">
                                    <p>Forget Password?</p>
                                </div>
                                <button class="btn d-flex align-items-center btnn1 btnForm1" type="submit">
                                    <p>
                                        Sign In
                                    </p>
                                    <i class="fa fa-arrow-alt-circle-right"></i>
                                </button>
                            </form>
                            <div class="down">
                                <p class="new">
                                    New to 360 HR platform ENSRV?
                                </p>
                                <button onclick="SignUp()" class="btn d-flex align-item-center  ">
                                    <div class="content">
                                        Registor now
                                    </div>
                                    <div class="img-fluid">
                                        <img src="{{asset("assets/images/sign-in/Double_Up@3x.png")}}" alt="arrow">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="content signLogo TragsSignin" id="TragsSignin">
                        <div onclick="SignIn()" style=" position: absolute; top: 10px;left: 10px;cursor: pointer;display: inline-flex;align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"  style=" margin-right: 5px;">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M19 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H19v-2z"/>
                            </svg></div>
                        <div class="image">
                            <div class="img-fluid">
                                <img src="{{asset("assets/images/logos/Trags.png")}}" alt="logo Trags">
                            </div>
                        </div>
                        <div class="content">
                            <div class="error2 error">
                                <p>
                                    <br>

                                </p>
                            </div>
                            <form class="formlogo2 formlogo" method="Post" action="{{route('signinpageTrags')}}"
                                  id="signintrags">
                                @csrf
                                <input type="email" placeholder="Work Email" class="form-control" name="emailTrags"
                                       id="emailTrags">
                                <div class="password">
                                    <input type="password" placeholder="Password" class="form-control"
                                           name="PasswordTrags" id="PasswordTrags">
                                    <div class="iconPassword active iconPasswordOpen" id="openEyeTrags">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class=" iconPassword" id="closeEyeTrags">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </div>
                                </div>
                                {{--                            </form>--}}
                                <div class="forget" onclick="forgetPass()">
                                    <p>Forget Password?</p>
                                </div>
                                <button class="btn d-flex align-items-center btnn2 btnForm2">
                                    <p>
                                        Sign In
                                    </p>
                                    <i class="fa fa-arrow-alt-circle-right"></i>
                                </button>
                            </form>
                            <div class="down">
                                <p class="new">
                                    New to 360 HR platform ENSRV?
                                </p>
                                <button onclick="SignUp()" class="btn d-flex align-item-center  ">
                                    <div class="content">
                                        Registor now
                                    </div>
                                    <div class="img-fluid">
                                        <img src="{{asset("assets/images/sign-in/Double_Up@3x.png")}}" alt="arrow">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="content signLogo EngineeringSignin" id="EngineeringSignin">
                        <div onclick="SignIn()" style=" position: absolute; top: 10px;left: 10px;cursor: pointer;display: inline-flex;align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"  style=" margin-right: 5px;">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M19 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H19v-2z"/>
                            </svg></div>
                        <div class="image">
                            <div class="img-fluid">
                                <img src="{{asset("assets/images/logos/tragsentity2.png")}}" alt="logo Engineering">
                            </div>
                        </div>
                        <div class="content">
                            <div class="error3 error">
                                <p>
                                     <br>

                                </p>
                            </div>
                            {{--                            <form class="formlogo3 formlogo">--}}
                            <form class="formlogo2 formlogo" method="Post" action="{{route('signinpageEnjineering')}}"
                                  id="signinenjineering">
                                @csrf
                                <input type="email" placeholder="Work Email" class="form-control"
                                       name="emailEngineering" id="emailEngineering">
                                <div class="password">
                                    <input type="password" placeholder="Password" class="form-control"
                                           name="PasswordEngineering" id="PasswordEngineering">
                                    <div class="iconPassword active iconPasswordOpen" id="openEyeEngineering">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class=" iconPassword" id="closeEyeEngineering">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </div>
                                </div>
                                {{--                            </form>--}}
                                <div class="forget" onclick="forgetPass()">
                                    <p>Forget Password?</p>
                                </div>
                                <button class="btn d-flex align-items-center btnn3 btnForm3">
                                    <p>
                                        Sign In
                                    </p>
                                    <i class="fa fa-arrow-alt-circle-right"></i>
                                </button>
                            </form>
                            <div class="down">
                                <p class="new">
                                    New to 360 HR platform ENSRV?
                                </p>
                                <button onclick="SignUp()" class="btn d-flex align-item-center   ">
                                    <div class="content">
                                        Registor now
                                    </div>
                                    <div class="img-fluid">
                                        <img src="{{asset("assets/images/sign-in/Double_Up@3x.png")}}" alt="arrow">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="content forget forgetSignin" id="forget">
                        {{--                        <form method="POST" id="passwordresett">--}}
                        {{--                            @csrf--}}
                        <div class="content first active" id="forgetFirst">

                            <input type="text" placeholder="Enter Your Email" class="form-control" name="codeemail"
                                   id="codeForget">

                            <button class="btn d-flex align-items-center " type="submit">
                                <p>
                                    Send Code
                                </p>
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </div>
                        {{--                        </form>--}}
                        {{--                        <form method="POST" id="confirmcodeform">@csrf--}}
                        <div class="content sec" id="forgetSec">

                            <input type="text" placeholder="Enter Code" class="form-control" name="Entercode"
                                   id="codeForget">

                            <button class="btn d-flex align-items-center" type="submit">
                                <p>
                                    Confirm Code
                                </p>
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </div>
                        {{--                        </form>--}}
                        {{--                        <form method="POST" action="{{route('resetpasswordpost')}}" id="forgetThirdform">@csrf--}}
                        <div class="content Thir" id="forgetThir">

                            <input type="password" placeholder="New Password" class="form-control"
                                   name="newpassword" id="password">
                            <input type="password" placeholder="Confirm New Password" class="form-control"
                                   name="Cpassword" id="Cpassword">

                            <button class="btn d-flex align-items-center" type="submit">
                                <p>
                                    Confirm Password
                                </p>
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </div>
                        {{--                        </form>--}}
                    </div>


                    <div class="content signup " id="signup">
                        <div class="first" id="firstSignUp">
                            <div class="prag">
                                <h2>
                                    Rules of System Access:
                                </h2>
                                <p>
                                    We are focused on maintaining the highest security standards to ensure that only
                                    authorized employees have access to our platform. To achieve this, we have
                                    established
                                    mandatory identity checks that must be completed during the login process
                                </p>
                            </div>
                            <div class="prag">
                                <h2>
                                    Email Verification:
                                </h2>
                                <p>
                                    After you begin the login process, a verification email will be sent to
                                    your registered company email address. To continue, you must confirm your email by
                                    reset this code.
                                </p>
                            </div>
                            <div class="prag">
                                <h2>
                                    Employee Number:
                                </h2>
                                <p>
                                    It's crucial to enter your employee number accurately. This
                                    mandatory step is used to store your details in our system.
                                </p>
                            </div>
                            <div class="prag">
                                <h2>
                                    Credential Details:
                                </h2>
                                <p>
                                    Your username and password should never be shared with anyone.
                                    Doing so violates our HR policy and may result in disciplinary action from HR.
                                </p>
                            </div>
                            <div class="checkdiv">
                                <input type="checkbox" name="checD" id="checkD">
                                <label for="checkD">
                                    <p>
                                        I confirm that I have read and understood the rules for system access.
                                    </p>
                                </label>
                            </div>
                            <div class="butt">
                                <button onclick="Procced()" class="btn d-flex align-item-center" id="buttonProcced">
                                    <div class="content">
                                        Procced
                                    </div>
                                    <div class="img-fluid">
                                        <img src="{{asset('assets/images/sign-in/Double_Up@3x.png')}}" alt="arrow">
                                    </div>
                                </button>
                            </div>
                        </div>


                        <form action="{{route('signuppage')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="second " id="secondSignUp">

                                <div class="text">
                                    <p>Register <br> Please click on your company's logo.</p>
                                </div>
                                <div class="logos" style="display: flex; justify-content: center; align-items: center;gap :5px ">
                                    <!-- Card 1 -->
                                    <label for="radio-card-1"  style="cursor: pointer;">
                                        <input type="radio" name="company_id" value="engineering" id="radio-card-1" hidden>
                                        <div class="image logoscom" style="display: flex; justify-content: center; align-items: center;">
                                            <img src="{{asset('assets/images/logos/tragsentity2.png')}}" alt="logo trags" class="img-fluid" style="max-width: 100%; height: auto;">
                                        </div>
                                    </label>

                                    <!-- Card 2 -->
                                    <label for="radio-card-2"  style="cursor: pointer;">
                                        <input type="radio" name="company_id" value="medgulf" id="radio-card-2" hidden>
                                        <div class="image logoscom" style="display: flex; justify-content: center; align-items: center;">
                                            <img src="{{asset('assets/images/logos/MEDGULF-logo.png')}}" alt="logo medgulf" class="img-fluid" style="max-width: 100%; height: auto;">
                                        </div>
                                    </label>

                                    <!-- Card 3 -->
                                    <label for="radio-card-3"  style="cursor: pointer;">
                                        <input type="radio" name="company_id" value="trags" id="radio-card-3" hidden>
                                        <div class="image logoscom" style="display: flex; justify-content: center; align-items: center;">
                                            <img src="{{asset('assets/images/logos/Trags.png')}}" alt="logo engineering" class="img-fluid" style="max-width: 100%; height: auto;">
                                        </div>
                                    </label>
                                </div>

                                <input type="text" placeholder="Employee Number" class="form-control"
                                       name="employee_numberr" id="employee_number">
                                <input type="email" placeholder="Work Email" class="form-control" name="work_email"
                                       id="work_email">
                                <input type="text" placeholder="Mobile Number" class="form-control" name="mobile_number"
                                       id="mobile_number">
                                <input type="password" placeholder="Password" class="form-control"
                                       name="Password_signUp" id="Password_signUp">
                                <input type="password" placeholder="Confirm Password" class="form-control"
                                       name="confirm_password" id="confirm_password">

                                <div class="butt d-flex justify-content-between">
                                    <button type="button" class="btnup d-flex align-item-center">
                                        <div class="content">
                                            <label for="myFile" class="custom-file-label">
                                                Personal Photo
                                                <div class="image active" id="upload">
                                                    <div class="img-fluid">
                                                        <img src="{{ asset('assets/images/sign-in/Arrow@3x.png') }}"
                                                             alt="upload">
                                                    </div>
                                                </div>
                                                <div class="image" id="checkup">
                                                    <div class="img-fluid">
                                                        <img src="{{ asset('assets/images/sign-in/Evaluated@3x.png') }}"
                                                             alt="upload">
                                                    </div>
                                                </div>
                                            </label>
                                            <input id="myFile" name="filenameimg" type="file" style="display: none">
                                        </div>
                                    </button>


                                    <button type="submit" class="btn d-flex align-item-center">
                                        <div class="content">
                                            Sign Up
                                        </div>
                                        <div class="img-fluid">
                                            <img src="{{asset("assets/images/sign-in/Double_Up@3x.png")}}" alt="arrow">
                                        </div>
                                    </button>
                                </div>
                                <div class="alreadyAccount">
                                    <p onclick="SignIn()">
                                        Already have an account?
                                    </p>
                                </div>
                            </div>
                        </form>


                        <div class="three " id="threeSignUp">
                            <div class="text">
                                <h2>
                                    Security Step to Login
                                </h2>
                                <p>
                                    Please note that a verification email has been sent to your
                                    registered email. To continue,
                                    confirm your email by clicking the blue link in the email.
                                    <br>
                                <div class="text pb-2">
                                    <p>
                                            <span>
                                                If you don’t receive the email due to high demand, please wait
                                            </span>
                                        30 minutes
                                        <span>
                                                and then try again by clicking
                                            </span>
                                        'Register Now.'
                                    </p>
                                </div>
                                </p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <div class="overlay " id="over" onclick="toggle()"></div>

            <!-- popup sign -->

        </article>
    </main>
</div>

<script>
    function logvisable1() {
        document.getElementById('logform').style.display = 'block';
        <?php
//            $entity =1;
        ?>
        document.getElementById('join').innerHTML =
            `<p class="text-left">
                                                    You have <img class="img-fluid d-inline" style="width: 70px" src="{{asset("assets/images/hr360.png")}}"> Platform Account? <a class="" href=""> Log In now</a>
                                                </p>
                                                <p class="text-left">
                                                    <a class="" href="">Forgot Password</a>
                                                </p>`;
    }

    function logvisable2() {
        document.getElementById('logform').style.display = 'block';
{{--        <?php--}}
{{--//            $entity =2;--}}
{{--        ?>--}}
        document.getElementById('join').innerHTML = `<p class="text-left">
{{--                                                    You have <img class="img-fluid d-inline" style="width: 70px" src="{{asset("assets/images/hr360.png")}}"> Platform Account? <a class="" href=""> Log In now</a>--}}
                                                </p>
                                                <p class="text-left">
                                                    <a class="" href="}">Forgot Password</a>
                                                </p>`;
    }

    function logvisable3() {
        document.getElementById('logform').style.display = 'block';

        document.getElementById('join').innerHTML = `<p class="text-left">
                                                    You have <img class="img-fluid d-inline" style="width: 70px" src="{{asset("assets/images/hr360.png")}}"> Platform Account? <a class="" href=""> Log In now</a>
                                                </p>
                                                <p class="text-left">
                                                    <a class="" href="">Forgot Password</a>
                                                </p>`;
    }
</script>
<script src="{{asset("assets/js/sign_in.js")}}"></script>

<!-- bootstrap -->
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/all.min.js")}}"></script>

<script type="text/javascript"></script>

</body>
</html>
