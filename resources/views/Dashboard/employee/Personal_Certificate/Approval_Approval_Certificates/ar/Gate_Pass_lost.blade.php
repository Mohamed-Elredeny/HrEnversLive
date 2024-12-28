@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')



    @foreach($employee as $emp)
        <div class="content_certificate"  >
            <div class="header_certificate">
                <div class="text-right" dir="rtl">
                    <h6 >

                <span style="display: inline;color:#a39e9e">التاريخ:{{$certificate->date_submit}}
                <br>
                Ref No : HRA-MG</span>
                    </h6>
                </div></div>

            <br>  <div class="body_certificate" >
                <div class="text-right" dir="rtl">
                    <h5 >
                        السـيد/ مديرادارة شرطة مسيعيد
                        <p style="word-spacing: 20px;"> المحترم</p>
                        <br>
                        ادارة شرطة مسيعيد
                        <br>
                        وزارة الداخلية
                        <br>
                        تحية طيبة وبعد,,,

                    </h5> <br>
                    <br>
                    <h3 class="text-center font-weight-bold" style="padding-bottom: 2px">
                        <b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;">الموضوع
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
                        <span style="font-weight: bold;display: inline;">{{$emp->arabic_nationality}}</span>

                        الجنسية و الحامل لجواز
                        سفر رقم (
                        <span style="font-weight: bold;display: inline;font-family: 'Times New Roman'"> {{$emp->passportNo}}</span>)
                        و بطاقة شخصية رقم
                        ( <span style="font-weight: bold;display: inline;font-family: 'Times New Roman;"> {{$emp->visaNo}}</span>
                        ) ،
                        يعمل لدينا و على كفالتنا
                        ، حيث أنه فقد تصريح الدخول الخاص به لمنطقة مسيعيد والذي مازال صالحاً، نرجو التكرم بمنحنا شهادة
                        تفيد بفقدان التصريح  حتي

                        يتسني لنا اصدار و تصريح بدل فاقد.

                        <br><br><br>
                        وتفضلوا بقبول فائق الإحترام والتقدير.
                    </h4></div>
                <br>
                <br><br>
                <h5>
                            <span style="font-weight: bold;display: inline;">
                         @if ($emp->company_id == "medgulf")
                                    عن شركة مدجلف للإنشاءات
                                @elseif ($emp->company_id == "trags")
                                   عن شركة تراجز للهندسة الكهربائية وتكييف الهواء
                                @else
                                 عن شركة الخدمات التجارية والتوكيلات المحدودة
                                @endif
                    </span>
                </h5>

                </div>
            <div class="Footer_certificate">
                <div class="Footer_certificate_photo">

                    <div class="image" >
                        <div class="img-fluid">
                            <img
                                src="{{asset('assets/images/logos')}}/{{$emp->signature??""}}"

                                alt="Medgulf Header">
                        </div>
                    </div>

                    <div class="image" >
                        <div class="img-fluid company">
                            @if ($emp->company_id == "medgulf")
                                <img class="Medgulf" src="{{asset("assets/images/logos/company_1_sign.png")}}"  alt="Medgulf Header">
                            @elseif ($emp->company_id == "trags")
                                <img class="tragsEng" src="{{asset("assets/images/logos/company_2_sign.png")}}"  alt="tragsEng Header">
                            @else
                                <img class="trags" src="{{asset("assets/images/logos/company_3_sign.png")}}"  alt="trags Header">
                            @endif

                        </div></div>


                </div>



            </div>
            <div class="col-3" style="display: inline">
                <h4>
                    <b style="padding-left: 50px">
                        ايلي القزي</b>
                    <br><br>

                    <b style="font-weight: bold">
                        مدير الادارة و الموارد البشرية للمجموعة
                    </b>
                    <br>
                    <br>
                    <b style="padding-left: 40px; font-family: 'Times New Roman'">33393081</b>
                </h4>

            </div>
                <br>

        </div>
    @endforeach
@endsection





