@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending_Approval')
@section('certificate_content_pending_approval')
    <div class="col-12 ar_text" style=" padding: 20px">

        <div class="text-right" dir="rtl">
            <h5>
                التاريخ: {{$certificate->date_submit}}
                <br>
                Ref: HRA-MG
            </h5>
        </div>
        <br><br>
        <div class="text-right " dir="rtl">
            <h5>
                من يهمه الامر
                <br>
                السلام عليكم ورحمة الله وبركاته
                <br>
                تحية طيبة وبعد,,,
                <br>
                <br>
            </h5>
            <h3 class="text-center font-weight-bold"><b style="font-weight: bold;display: inline; text-decoration: underline; text-underline-offset: 5px;"><u>افادة عمل</u></b></h3>
            <br><br>
            <h4>تفيد شركة أن
                @if($employee->sex=="Male")السيد/ @else السيدة/ @endif
                <span style="font-weight: bold;display: inline;"> {{ " " . $employee->arabic_name}}</span>،
                <span style="font-weight: bold;display: inline;"> {{$employee->arabic_nationality}}</span>
                الجنسية و الحامل لجواز
                سفر رقم (
                <span style="font-weight: bold;display: inline;">  {{$employee->passportNo}}</span>)
                و بطاقة شخصية رقم
                (<span style="font-weight: bold;display: inline;">  {{$employee->visaNo}}</span>)
                ، يعمل لدينا و على كفالتنا
                بمهنة

                <span style="font-weight: bold;display: inline;"> {{$employee->arabic_designation}} </span>
                منذ تاريخ
                <span style="font-weight: bold;display: inline;"> {{$employee->joiningDate}}</span>
                يزال على رأس
                عمله.
                <br> <br></h4>
            <h4>
                أعطيت له هذه الأفادة بطلب من المعني دون أدنى مسؤولية على <span style="font-weight: bold;display: inline;">

                @if ($employee->company_id == "medgulf")
                        شركة مدجلف للإنشاءات
                    @elseif ($employee->company_id == "trags")
                        شركة تراجز للهندسة الكهربائية وتكييف الهواء
                    @else  شركة الخدمات التجارية والتوكيلات المحدودة
                    @endif

            </span></h4>

            <br>
            <h4>
                وتفضلوا بقبول فائق الإحترام والتقدير.</h4>
        </div>
        <br>
        <h5>

            <div class="col-3" style="display: inline">

                عن شركه
                <span style="font-weight: bold;display: inline">
                       @if ($employee->company_id == "medgulf")
                        شركة مدجلف للإنشاءات
                    @elseif ($employee->company_id == "trags")
                        شركة تراجز للهندسة الكهربائية وتكييف الهواء
                    @else  شركة الخدمات التجارية والتوكيلات المحدودة
                    @endif
                    </span>
                <br><br>
                <b style="padding-left: 50px">
                    ايلي القزي</b>
                <br><br>
                <b style="font-weight: bold">
                    مدير الادارة و الموارد البشرية للمجموعة
                </b>
                <br><br>
                <div  style="font-size: x-small;">
                    <b style="padding-left: 50px">
                        33393081</b>
                </div>


            </div>



        </h5>
    </div>
@endsection
