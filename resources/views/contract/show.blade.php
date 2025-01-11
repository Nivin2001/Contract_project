<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عقد تنفيذ عمل</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            direction: rtl;
            text-align: justify;
            margin: 20px;
            line-height: 1.8;
            background-color: #f9f9f9;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid blue;
            padding-bottom: 10px;
        }
        .header-right, .header-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: blue;
        }
        .logo img {
            width: 100px;
        }
        section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1, h2, h3, h4 {
            color: #333;
            text-align: center;
        }
        footer .signature p {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <div class="header-right">
            <h1>مصنع السواتر</h1>
            <p>إنتاج الخشب البلاستيك</p>
            <p>ترخيص صناعي رقم: 411223494</p>
        </div>

        <div class="logo">
            <img src="{{ asset('images/logo.JPG') }}" alt="Swatir Factory Logo">
        </div>

        <div class="header-left">
            <h1>Swatir Factory</h1>
            <p>Plastic Wood Production</p>
            <p>Industrial License No: 411223494</p>
        </div>
    </header>

    <section>
        <h2>اتفاقية تنفيذ العمل</h2>
        <p>بعون الله وتوفيقه تم الاتفاق بمدينة <strong>{{ $contract->city }}</strong> في يوم <strong>{{ $contract->contract_date }}</strong> والموافق <strong>{{ $contract->contract_date }}</strong> بين كل من:</p>
        <ul>
            <li><strong>الطرف الأول:</strong> مصنع السواتر للبلاستيك، ومقره الرياض، جوال رقم: 0554472017.</li>
            <li><strong>الطرف الثاني:</strong> {{ $contract->guarantor_2 }}, ومقره {{ $contract->city_2 }}, جوال رقم: {{ $contract->phone_2 }}.</li>
        </ul>
        <p>وذلك للاتفاق على تنفيذ <strong>{{ $contract->implementation }}</strong> مستخدمًا في ذلك الأخشاب البلاستيكية وفق الشروط التالية:</p>
    </section>
<section style="margin-bottom: 20px; padding: 15px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px;">
    <h3 style="color: #333;">ثانيًا: الخامات المستخدمة</h3>
    <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 10px;">الأخشاب المستخدمة بمقاس: 5 سم.</li>
        <li style="margin-bottom: 10px;">لون الأخشاب: <strong>{{ $contract->wood_type }}</strong></li>
    </ul>
</section>

<section style="margin-bottom: 20px; padding: 15px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px;">
    <h3 style="color: #333;">ثالثًا: أعمال تلبيس الأعمدة والفريمات</h3>
    <p style="margin: 10px 0;">تلبيس الأعمدة والفريم الرئيسي كالتالي:</p>
    <p style="margin: 10px 0;"><strong>{{ $contract->column_cladding }}</strong></p>
</section>

<section style="margin-bottom: 20px; padding: 15px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px;">
    <h3 style="color: #333;">رابعًا: المساحة</h3>
    <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 10px;">تبلغ المساحة الإجمالية المتفق عليها مبدئيًا <strong>{{ $contract->total_area }} متر مربع</strong>.</li>
        <li style="margin-bottom: 10px;">قابلة للزيادة والنقصان والعبرة في التمتير النهائي على الطبيعة على أن يبلغ الطرف الثاني بأي تعديل مقترح أثناء التنفيذ.</li>
    </ul>
</section>

<section style="margin-bottom: 20px; padding: 15px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px;">
    <h3 style="color: #333;">خامسًا: السعر وطرق الدفع</h3>
    <p style="margin: 10px 0;">اتفق الطرفان أن يكون سعر المتر المربع <strong>{{ $contract->price_per_square_meter }} ريال</strong> بقيمة إجمالية قدرها <strong>{{ $contract->total_value }} ريال</strong>.</p>
    <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 10px;">الدفعة الأولى: ٧٥% عند دفع العقد.</li>
        <li style="margin-bottom: 10px;">الدفعة الثانية: ٢٥% عند الانتهاء من أعمال الهيكل الحديدي ودهانه وإبلاغ الطرف الثاني بالتمتير النهائي.</li>
    </ul>
</section>

<section style="margin-bottom: 20px; padding: 15px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px;">
    <h4 style="color: #333;">سادسًا: التزامات الطرف الثاني</h4>
    <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 10px;">توفير التيار الكهربائي بالموقع، وفي حال عدم توفرها، يقوم الطرف الثاني بتوفير مولدات كهربائية على أن تحسب التكلفة الإجمالية على الطرف الثاني.</li>
        <li style="margin-bottom: 10px;">في حال العمل بالدورات المتكررة، يوفر الطرف الثاني قيمة الرافعة لعمل المواد (حديد، بوية، أخشاب).</li>
        <li style="margin-bottom: 10px;">إذا كان العمل خارج مدينة الرياض، يوفر الطرف الثاني السكن الملازم للعمال.</li>
    </ul>
</section>

<section style="margin-bottom: 20px; padding: 15px; background-color: #fff; border: 1px solid #ddd; border-radius: 5px;">
    <h3 style="color: #333;">سابعا: الضمان</h3>
    <p style="margin: 10px 0;">يضمن الطرف الأول جودة العمل لمدة ٧ سنوات، التي تشمل:</p>
    <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 10px;">عدم تكسر المادة.</li>
        <li style="margin-bottom: 10px;">عدم تشققها.</li>
        <li style="margin-bottom: 10px;">عدم تغير اللون.</li>
    </ul>
    <p style="margin: 10px 0;">علماً بأن هذا الضمان لا يشمل:</p>
    <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 10px;">الكوارث الطبيعية لا سمح الله.</li>
        <li style="margin-bottom: 10px;">العبث وسوء الاستخدام.</li>
        <li style="margin-bottom: 10px;">تدخل طرف ثالث.</li>
    </ul>
    <p style="margin: 10px 0;">شريطة إحضار أصل العقد.</p>
</section>

<section id="maintenance">
    <h2>ثامناً: الصيانة</h2>
    <p>في حال رغبة الطرف الثاني في عمل صيانة سنوية، تضاف 15% من قيمة العقد لكل عام.</p>
</section>

<section id="contract-terms">
    <h3>تاسعًا: مدة التنفيذ</h3>
    <p>اتفق الطرفان على الانتهاء من تنفيذ هذا العمل خلال <strong>{{ $contract->work_duration }}</strong> من تاريخ استعلام الدفعة الاولى على ان يبدأ العمل بالموقع خلال ١٠ أيام.</p>

    <h3>عاشرًا: عرض الأسعار</h3>
    <p>عرض الأسعار رقم <strong>{{ $contract->price_quote_number }}</strong> وتاريخ <strong>{{ $contract->start_date }}</strong> جزء لا يتجزأ من العقد.</p>

    <h3>إحدى عشر: ملاحظات</h3>
    <p>{{ $contract->notes }}</p>

    <p>والله الموفق.</p>
</section>

<footer>
    <div class="signature">
        <p>الطرف الأول: ________</p>
        <p>الطرف الثاني: ________</p>
        <p>تاريخ التوقيع: {{ $contract->contract_date }}</p>
    </div>
</footer>

<section id="company-info" style="margin-top: 20px; padding: 15px; background-color: #f5f5f5; border: 1px solid #ccc; border-radius: 5px;">
    <h3 style="color: blue; font-size: 18px; margin-bottom: 10px;">معلومات الشركة</h3>
    <hr style="border: 1px solid blue; margin-bottom: 10px;">
    <p style="color: blue; font-size: 16px; margin: 5px 0;">اسم الشركة: مصنع السواتر للبلاستيك</p>
    <p style="color: blue; font-size: 16px; margin: 5px 0;">العنوان: الرياض، المملكة العربية السعودية</p>
    <p style="color: blue; font-size: 16px; margin: 5px 0;">رقم الهاتف: 0554472017</p>
    <p style="color: blue; font-size: 16px; margin: 5px 0;">البريد الإلكتروني: info@swatir.com</p>
</section>


  <!-- داخل صفحة contract.show -->
<a href="{{ route('contracts.generatePdf', $contract->id) }}" class="btn btn-primary">تحميل الـ PDF</a>
