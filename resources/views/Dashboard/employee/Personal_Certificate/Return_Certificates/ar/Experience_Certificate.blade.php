@extends('Dashboard.employee.Personal_Certificate.Certificate_Returned')
@section('Certificate_Content_Return')
    @foreach($employee as $emp)
        <div class="content_certificate">

            <div class="header_certificate">

                <div class="text-right" dir="rtl">
                    <h6>
                      <span style="display: inline;color:#a39e9e">
                    التاريخ: {{$certificate->date_submit}}
                    <br>
                    Ref: HRA-MG
                      </span>
                    </h6>
                    <br><br>
                    <h5>
                        لمن يهمه الامر
                        <br>
                        السلام عليكم ورحمة الله وبركاته
                        <br>
                        تحية طيبة وبعد,,,
                        <br>
                        <br>
                    </h5>
                </div>

                <div class="body_certificate">

                    <div class="text-right " dir="rtl">



                        <h3 class=" text-center font-weight-bold"><b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;"><u>افادة عمل</u></b></h3>
                        <br><br>
                        <h4>تفيد شركة أن
                            @if($emp->sex=="Male")السيد/ @else السيدة/ @endif
                            <span style="font-weight: bold;display: inline;"> {{ " " . $emp->arabic_name}}</span>،
                            <span style="font-weight: bold;display: inline;"> {{$emp->arabic_nationality}}</span>
                            الجنسية و الحامل لجواز
                            سفر رقم (
                            <span style="font-weight: bold;display: inline;">  {{$emp->passportNo}}</span>)
                            و بطاقة شخصية رقم
                            (<span style="font-weight: bold;display: inline;">  {{$emp->visaNo}}</span>)
                            ، يعمل لدينا و على كفالتنا
                            بمهنة

                            <span style="font-weight: bold;display: inline;"> {{$emp->arabic_designation}} </span>
                            منذ تاريخ
                            <span style="font-weight: bold;display: inline;"> {{$emp->joiningDate}}</span>
                            يزال على رأس
                            عمله.
                            <br> <br></h4>
                        <h4>
                            أعطيت له هذه الأفادة بطلب من المعني دون أدنى مسؤولية على

                            @if ($emp->company_id == "medgulf")
                                شركة مدجلف للإنشاءات
                            @elseif ($emp->company_id == "trags")
                                شركة تراجز للهندسة الكهربائية وتكييف الهواء
                            @else  شركة الخدمات التجارية والتوكيلات المحدودة
                            @endif

                        </h4>

                        <br>
                        <h4>
                            وتفضلوا بقبول فائق الإحترام والتقدير.</h4>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <h5>

                        <span style="font-weight: bold;display: inline;">
                            <p>
                         @if ($emp->company_id == "medgulf")
                                    عن شركة مدجلف للإنشاءات</p>
                            @elseif ($emp->company_id == "trags")

                                <p>      عن شركة تراجز للهندسة الكهربائية وتكييف الهواء</p>
                            @else
                                <p>      عن شركة الخدمات التجارية والتوكيلات المحدودة </p>
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

            </div></div>
    @endforeach
@endsection
