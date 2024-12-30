@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending')
@section('certificate_content')
    <style>
        .content_certificate .body_certificate h4{
            font-size: 16px;
            font-family: 'Times New Roman';
        }
        .content_certificate .body_certificate {
            padding-left: 20px;
            font-family: 'Times New Roman';
        }
    </style>

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
            <h4>
                 السـيد/ مديرادارة شرطة مسيعيد المحترم
                <br>
                ادارة شرطة مسيعيد
                <br>
                وزارة الداخلية
                <br>
                تحية طيبة وبعد,,,

            </h4> <br>
            <br>
            <h3 class="text-center font-weight-bold" style="padding-bottom: 2px">
                <b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;">الموضوع
                        : فقدان تصريح
                        دخول</b></h3>
            <br><br><h4>
                نود أن نحيط سيادتكم علما بأن
                @if($employee->sex=="Male")
                    السيد/
                @else
                    السيدة/
                @endif
                <span style="font-weight: bold;display: inline;"> {{$employee->arabic_name}}</span>

                ،
                <span style="font-weight: bold;display: inline;">{{$employee->arabic_nationality}}</span>

                الجنسية و الحامل لجواز
                سفر رقم (
                <span style="font-weight: bold;display: inline;font-family: 'Times New Roman'"> {{$employee->passportNo}}</span>)
                و بطاقة شخصية رقم
                ( <span style="font-weight: bold;display: inline;font-family: 'Times New Roman;"> {{$employee->visaNo}}</span>
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
        <div class="row">
            <h5>
                <div class="col-6">

                    <span style="font-weight: bold;display: inline;">
                         @if ($employee->company_id == "medgulf")
                            عن شركة مدجلف للإنشاءات
                        @elseif ($employee->company_id == "trags")
                           عن شركة تراجز للهندسة الكهربائية وتكييف الهواء
                        @else
                          عن شركة الخدمات التجارية والتوكيلات المحدودة
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
            </div>
        </div>


@endsection
