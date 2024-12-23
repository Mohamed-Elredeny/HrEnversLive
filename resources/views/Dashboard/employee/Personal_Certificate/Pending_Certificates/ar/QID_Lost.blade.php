@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending')
@section('certificate_content')
    <div class="col-12 ar_text" style="padding: 20px">
        <div class="text-right" dir="rtl">
            <h5>
                التاريخ:
                <span style="display: inline;">{{$certificate->date_submit}}</span>
            <br>
            Ref No:  {{$employee->empCode}}/CBQ/2024
            </h5>
        </div>
        <br><br>

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
            <h2 class="text-center font-weight-bold"> <b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;"><u>الموضوع : بلاغ فقدان بطاقة شخصية</u></b></h2>
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
        </div><br><br>
            <div class="row">
                <h4>
                    <div class="col-6">
                    عن شركه
                    <span style="font-weight: bold;display: inline;">
                         @if ($employee->company_id == "medgulf")
                            شركة مدجلف للإنشاءات
                        @elseif ($employee->company_id == "trags")
                            شركة تراجز للهندسة الكهربائية وتكييف الهواء
                        @else  شركة الخدمات التجارية والتوكيلات المحدودة
                        @endif
                    </span>
                    <br>
                    <?php
                    $elie = \App\Models\Employee::where('emailWork', 'elie.azzi@ensrv.com')->first();
                    ?>
                    </div></h4>
            </div>
        <br><br>
        <h4>
            <b style="padding-left: 40px"> ايلي القزي</b>
        <br><br>
        <b style="font-weight: bold">
            مدير الادارة و الموارد البشرية للمجموعة
        </b>
            <br><br>
        <div class="text-right" dir="ltr" style="font-size: x-small;">
            <b style="padding-left: 40px"> 33393081</b>
        </div>

        </h4>
    </div>
@endsection
