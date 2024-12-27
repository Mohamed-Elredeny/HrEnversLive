@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')
    <style>
        .row {
            display: flex; /* Enables Flexbox */
            justify-content: space-between; /* Adds space between the two items */
            align-items: center; /* Aligns items vertically */
        }

        .imagee {
            max-width: 150px; /* Restricts the width of each item */
            text-align: center; /* Centers the content inside the imagee container */
        }

        .img-fluid img {
            max-width: 100%; /* Ensures imagees are responsive */
            height: auto;
        }

    </style>
    @foreach($employee as $emp)
        <div class="col-12 ar_text" style=" padding: 20px">
            <div class="content_certificate">

                <div class="header_certificate">
            <div class="text-right" dir="rtl">
                <h5>
                    التاريخ:     {{$certificate->date_submit}}
                    <br>
                    Ref: HRA-MG
                </h5>
            </div>
                    <br></div>
                <div class="body_certificate">
            <div class="text-right" dir="rtl">
                <h5>
                    السيد مديرادارة الجوازات وشؤون
                    <p style="word-spacing: 10px;">الوافدين المحترم</p>
                    <br>
                    السلام عليكم ورحمة الله وبركاته
                    <br>
                    تحية طيبة وبعد,,,
                    <br>
                    <br>
                </h5>
                <h2 class="text-center font-weight-bold"><b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;"><u>طلب الموافقة على تأشيرة زيارة
                            عائلية</u></b></h2>
                <br>
                <h5>
                    تفيد
                    <span style="font-weight: bold;display: inline;">
              @if ($emp->company_id == "medgulf")
                            شركة مدجلف للإنشاءات
                        @elseif ($emp->company_id == "trags")
                            شركة تراجز للهندسة الكهربائية وتكييف الهواء
                        @else  شركة الخدمات التجارية والتوكيلات المحدودة
                        @endif
            </span>
                    بأن
                    @if($emp->sex=="Male")السيد/ @else السيدة/ @endif
                    <span style="font-weight: bold;display: inline;">  {{$emp->arabic_name}}</span>

                    ،
                    <span style="font-weight: bold;display: inline;">  {{$emp->arabic_nationality}}</span>
                    الجنسية و الحامل لجواز
                    سفر رقم (
                    <span style="font-weight: bold;display: inline;">{{$emp->passportNo}}</span>
                    ) و بطاقة شخصية رقم
                    <span style="font-weight: bold;display: inline">{{$emp->visaNo}}</span>(
                    ) يعمل لدينا و على كفالتنا
                    بمهنة(
                    <span style="font-weight: bold;display: inline;"> {{$emp->arabic_designation}}</span>
                    ) ويتاقضى راتبا شهرياً قدره

                    <span style="font-weight: bold;display: inline;">{{$emp->total_salary}}</span>
                    ريال قطري
                    <br>
                    <br>
                    حيث لا مانع لدينا من عمل تاشيرة زيارة عائلية لعائلته تحت كفالته الشخصية دون ادنى مسؤولية على
                    الشركة وهي غير مسؤولة عن بقائها داخل البلاد.
                    <br> <br>
                    وتفضلوا بقبول فائق الإحترام والتقدير.
                </h5>
            </div>

            <div class="row">
                <div class="col-6">
                    <h5>
                        عن شركه
                        <span style="font-weight: bold;display: inline;">
                        @if ($emp->company_id == "medgulf")
                                شركة مدجلف للإنشاءات
                            @elseif ($emp->company_id == "trags")
                                شركة تراجز للهندسة الكهربائية وتكييف الهواء
                            @else  شركة الخدمات التجارية والتوكيلات المحدودة
                            @endif
                    </span>
                        <br>
                            <?php
                            $elie = \App\Models\Employee::where('emailWork', 'elie.azzi@ensrv.com')->first();
                            ?>
                    </h5>
                </div>

            </div>

            <h5>
                <b style="padding-left: 50px">ايلي القزي </b>
                <br><br>
                <b style="font-weight: bold">
                    مدير الادارة و الموارد البشرية للمجموعة
                </b>
                <br><br>
                <b style="padding-left: 50px"> 33393081</b>
                <div  style="font-size: x-small;">

                </div>
            </h5>
            <div class="Footer_certificate">
                <div class="Footer_certificate_photo">
                    <div class="row" >
                        <div class="col-6">
                            <div class="imagee" >
                                <div class="img-fluid">
                                    <img
                                        src="{{asset('assets/images/logos')}}/{{$emp->signature??""}}"
                                        alt="Medgulf Header">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="imagee" >
                                <div class="img-fluid company">
                                    @if ($emp->company_id == "medgulf")
                                        <img class="Medgulf" src="{{asset("assets/images/logos/company_1_sign.png")}}"  alt="Medgulf Header">
                                    @elseif ($emp->company_id == "trags")
                                        <img class="tragsEng" src="{{asset("assets/images/logos/company_2_sign.png")}}"  alt="tragsEng Header">
                                    @else
                                        <img class="trags" src="{{asset("assets/images/logos/company_3_sign.png")}}"  alt="trags Header">
                                    @endif
                                </div>
                            </div></div></div>
                </div>
            </div>

                </div></div>
        </div>

    @endforeach
@endsection
