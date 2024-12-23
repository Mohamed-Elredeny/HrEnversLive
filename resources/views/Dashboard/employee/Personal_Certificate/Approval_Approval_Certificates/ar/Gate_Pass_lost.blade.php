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

            <div class="text-right" dir="rtl">
                <h5>
                    التاريخ: {{$certificate->date_submit}}
                    <br>
                    Ref No : {{$emp->empCode}}/CBQ/2024
                </h5>
            </div>

            <br><br>
            <div class="text-right" dir="rtl">
                <h5>
                    السـيد/ مديرادارة شرطة مسيعيد

                    <br>
                    ادارة شرطة مسيعيد
                    <br>
                    وزارة الداخلية
                    <br>
                    تحية طيبة وبعد,,,

                </h5> <br>
                <br>
                <h3 class="text-center font-weight-bold"><b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;">الموضوع
                            : فقدان تصريح
                            دخول</b></h3>
                <br><br><h4>
                    نود أن نحيط سيادتكم علما بأن
                    @if($emp->sex=="Male")
                        السيد/
                    @else
                        السيدة/
                    @endif
                    <span style="font-weight: bold;display: inline;"> {{$emp->arabic_name}}</span>

                    ،
                    <span style="font-weight: bold;display: inline;"> {{$emp->arabic_nationality}}</span>

                    الجنسية و الحامل لجواز
                    سفر رقم (
                    <span style="font-weight: bold;display: inline;">7654567 {{$emp->passportNo}}</span>)
                    و بطاقة شخصية رقم
                    ( <span style="font-weight: bold;display: inline;">786546 {{$emp->visaNo}}</span>
                    ) ،
                    <br><br>يعمل لدينا و على كفالتنا
                    ، حيث أنه فقد تصريح الدخول الخاص به لمنطقة مسيعيد والذي مازال صالحاً، نرجو التكرم بمنحنا شهادة
                    تفيد بفقدان التصريح حتي
                    <br><br>
                    يتسني لنا اصدار تصريح بدل فاقد.

                    <br><br><br>
                    وتفضلوا بقبول فائق الإحترام والتقدير.
                </h4></div>
            <br>
            <br><br>
            <div class="row">
                <h5>
                    <div class="col-6">
                        عن
                        <span style="font-weight: bold;display: inline;">
                         @if ($emp->company_id == "medgulf")
                                شركة مدجلف للإنشاءات
                            @elseif ($emp->company_id == "trags")
                                شركة تراجز للهندسة الكهربائية وتكييف الهواء
                            @else
                                شركة الخدمات التجارية والتوكيلات المحدودة
                            @endif
                    </span>
                        <br><br>
                            <?php
                            $elie = \App\Models\Employee::where('emailWork', 'elie.azzi@ensrv.com')->first();
                            ?>

                    </div>
                </h5>

            </div>
            <div class="col-3" style="display: inline">
                <h5>
                    <b style="padding-left: 50px">
                        ايلي القزي</b>
                    <br><br>

                    <b style="font-weight: bold">
                        مدير الادارة و الموارد البشرية للمجموعة
                    </b>
                    <br>
                    <br>
                    <b style="padding-left: 40px">33393081</b>
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

            </div>

        </div>
    @endforeach
@endsection
