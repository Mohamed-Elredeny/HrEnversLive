@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')

{{--    @foreach($employee as $emp)--}}

            <div class="content_certificate">

                <div class="header_certificate">
            <div class="text-right" dir="rtl">
                <h6 >
                <span style="display: inline;color:#a39e9e">
                    التاريخ:     {{$certificate->date_submit}}
                    <br>
                   Ref: HRA-MG
                </span> </h6>
            </div>
                </div>
            <br>

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
                <h3 class="text-center font-weight-bold"> <b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;"><u>الموضوع : بلاغ فقدان بطاقة شخصية</u></b></h3>
                <br><br><h4>
                    نحيطكم علماً بأن
                    @if($employee->sex=="Male")السيد/ @else السيدة/ @endif
                    <span style="font-weight: bold;display: inline">{{$employee->arabic_name}}</span>
                    ،
                    يحمل بطاقة شخصية قطرية رقم  (
                    <span style="font-weight: bold;display: inline;"> {{$employee->visaNo}}</span>
                    )،
                    <span style="font-weight: bold;display: inline;">{{$employee->arabic_nationality}}  </span> الجنسية، قد فقد بطاقته الشخصية ونرجو منكم اتخاد الاجراءات اللازمة ليتسنى لنا
                    اكمال الاجراءات المتعلقة لدى سيادتكم.

                    <br><br>
                    وتفضلوا بقبول فائق الإحترام والتقدير.
                </h4>
            </div><br>
                <div class="row">
                    <div class="col-6">
                        <h5>

                        <span style="font-weight: bold;display: inline;">
                         @if ($employee->company_id == "medgulf")
                                عن شركة مدجلف للإنشاءات
                            @elseif ($employee->company_id == "trags")
                                عن شركة تراجز للهندسة الكهربائية وتكييف الهواء
                            @else
                                عن شركة الخدمات التجارية والتوكيلات المحدودة
                            @endif
                    </span>

                            <br>
                                <?php
                                $elie = \App\Models\Employee::where('emailWork', 'elie.azzi@ensrv.com')->first();
                                ?>
                        </h5>


                    </div>

                </div>
            </div>

            <br><br>
            <div class="Footer_certificate">
                <div class="Footer_certificate_photo">

                    <div class="image" >
                        <div class="img-fluid">
                            <img
                                src="{{asset('assets/images/logos')}}/{{$employee->signature??""}}"
                                alt="Medgulf Header">
                        </div>
                    </div>

                    <div class="image" >
                        <div class="img-fluid company">
                            @if ($employee->company_id == "medgulf")
                                <img class="Medgulf" src="{{asset("assets/images/logos/company_1_sign.png")}}"  alt="Medgulf Header">
                            @elseif ($employee->company_id == "trags")
                                <img class="trags" src="{{asset("assets/images/logos/company_3_sign.png")}}"  alt="tragsEng Header">
                            @elseif ($employee->company_id == "engineering")
                                <img class="tragsEng" src="{{asset("assets/images/logos/company_2_sign.png")}}"  alt="trags Header">
                            @endif
                        </div>
                    </div>
                </div>
                <br><br>
                <h5>
                    <b style="padding-left: 20px">
                        ايلي القزي</b>
                    <br><br>
                    <b style="font-weight: bold">
                        مدير الموارد البشرية
                    </b>
                    <br>
                    <div  style="font-size: x-small;">
                        <b style="padding-left: 20px"> 33393081</b>
                    </div>
                </h5>

            </div>

            </div>

{{--    @endforeach--}}
@endsection
