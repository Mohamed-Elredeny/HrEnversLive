@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending')
@section('certificate_content')
    <div class="col-12 ar_text" style=" padding: 20px">
        <div class="text-right" dir="rtl">
            <h5>
                التاريخ:
                <span style="display: inline;">{{$certificate->date_submit}}</span>
            <br>
            Ref No  {{$employee->empCode}}/CBQ/2024
                </h5>
        </div>
        <br><br>

        <div class="text-right" dir="rtl">
            <h5>
            السـيد/ مديرادارة شرطة
                <p style="word-spacing: 20px;"> مسيعيد المحترم</p>
            <br>
            مدينة مسيعيد الصناعية
            <br>
            وزارة الداخلية
            <br>
            تحية طيبة وبعد,,,
            </h5>
            <br>
            <br>
            <h3 class="text-center font-weight-bold"><b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;"><u>الموضوع : طلب الغاء تصريح دخول</u></b>
            </h3>
            <br>
            <h4>
            نرجوا من سيادتكم التكرم بالغاء تصريح الدخول الخاص
            @if($employee->sex=="Male")السيد/ @else السيدة/ @endif
            <span style="font-weight: bold;display: inline;"> {{$employee->arabic_name}}</span>
            ،
            <span style="font-weight: bold;display: inline;">  {{$employee->arabic_nationality}}</span>
            الجنسية و الحامل لجواز
            سفر رقم (
            <span style="font-weight: bold;display: inline;"> {{$employee->passportNo}}</span>
            ) و بطاقة شخصية رقم
            (<span style="font-weight: bold;display: inline;">{{$employee->visaNo}}</span>
            ) ، يعمل لدينا و على كفالتنا.
            <br><br>
            وتفضلوا بقبول فائق الإحترام والتقدير.
            </h4>
        </div>
        <br>

            <div class="row">
                <div class="col-6">
                    <h5>
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
                    </h5>
                </div>

            </div>

        <h5>
            <b style="padding-left: 20px">
        ايلي القزي</b>
            <br><br>
        <b style="font-weight: bold">
            مدير الموارد البشرية
        </b>
     <br><br>
        <div  style="font-size: x-small;">
           <b style="padding-left: 20px"> 33393081</b>
        </div>

        </h5>
    </div>
@endsection
