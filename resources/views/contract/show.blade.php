
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
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .header-left, .header-right {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .logo {
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        .logo img {
            width: 100px;
        }

        h1, h2, h3, h4 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        .content-section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }

        .signature {
            margin-top: 30px;
            text-align: center;
        }

        #bank-details, #company-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #bank-details h3, #company-info h3 {
            color: #2B2B2B;
            font-size: 18px;
            margin-bottom: 10px;
        }

        #bank-details p, #company-info p {
            color: #000;
            font-size: 16px;
            margin: 5px 0;
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
            <img src="logo.png" alt="Swatir Factory Logo">
        </div>
        <div class="header-left">
            <h1>Swatir Factory</h1>
            <p>Plastic Wood Production</p>
            <p>Industrial License No: 411223494</p>
        </div>
    </header>


    <section class="content-section">
        <h2>اتفاقية تنفيذ العمل</h2>
        {{-- <p><strong>{{ $contract->contract_number }}</strong></p> --}}
        <p>بعون الله وتوفيقه تم الاتفاق بمدينة <strong>{{ $contract->city }}</strong> في يوم <strong>{{ $contract->contract_date }}</strong> والموافق <strong>{{ $contract->contract_date }}</strong> بين كل من:</p>
        <ul>
            <li><strong>الطرف الأول:</strong> مصنع السواتر للبلاستيك، ومقره الرياض، جوال رقم: 0554472017.</li>
            <li><strong>الطرف الثاني:</strong> {{ $contract->guarantor_2 }}, ومقره {{ $contract->city_2 }}, جوال رقم: {{ $contract->phone_2 }}.</li>
        </ul>
        <p>وذلك للاتفاق على تنفيذ <strong>{{ $contract->implementation }}</strong> مستخدمًا في ذلك الأخشاب البلاستيكية وفق الشروط التالية:</p>
    </section>

    <section class="content-section">
        <h3>مواصفات العمل أولا الحديد والدهانات</h3>
        <ul>
            <li>صنفرة الحديد.</li>
            <li>دهان وجهين أساس ضد الصدأ لضمان الحماية من التآكل.</li>
            <li>دهان وجهين دوكو للتشطيب النهائي بمظهر عالي الجودة.</li>
        </ul>
    </section>

    <section class="content-section">
        <h3>ثانيًا:</h3>
        <ul>
            <li>الأخشاب المستخدمة بمقاس: 5 سم.</li>
            <li>لون الأخشاب: <strong>{{ $contract->wood_type }}</strong></li>
        </ul>
    </section>

    <section class="content-section">
        <h3>ثالثًا</h3>
        <p>تلبيس الأعمدة والفريم الرئيسي كالتالي:</p>
        <p><strong>{{ $contract->column_cladding }}</strong></p>
    </section>

    <section class="content-section">
        <h3>رابعًا: المساحة</h3>
        <ul>
            <li>تبلغ المساحة الإجمالية المتفق عليها مبدئيًا <strong>{{ $contract->total_area }} متر مربع</strong>.</li>
            <li>قابلة للزيادة والنقصان والعبرة في التمتير النهائي على الطبيعة على أن يبلغ الطرف الثاني بأي تعديل مقترح أثناء التنفيذ.</li>
        </ul>
    </section>

    <section class="content-section">
        <h3>خامسًا:</h3>
        <p>اتفق الطرفان أن يكون سعر المتر المربع <strong>{{ $contract->price_per_square_meter }} ريال</strong> بقيمة إجمالية قدرها <strong>{{ $contract->total_value }} ريال</strong>.</p>
        <ul>
            <li>الدفعة الأولى: ٧٥% عند دفع العقد.</li>
            <li>الدفعة الثانية: ٢٥% عند الانتهاء من أعمال الهيكل الحديدي ودهانه وإبلاغ الطرف الثاني بالتمتير النهائي.</li>
        </ul>
    </section>

    <section class="content-section">
        <h4>سادسًا: التزامات يوفرها الطرف الثاني بالموقع</h4>
        <ul>
            <li>توفير التيار الكهربائي بالموقع، وفي حال عدم توفرها، يقوم الطرف الثاني بتوفير مولدات كهربائية على أن تحسب التكلفة الإجمالية على الطرف الثاني.</li>
            <li>في حال العمل بالدورات المتكررة، يوفر الطرف الثاني قيمة الرافعة لعمل المواد (حديد، بوية، أخشاب).</li>
            <li>إذا كان العمل خارج مدينة الرياض، يوفر الطرف الثاني السكن الملازم للعمال.</li>
        </ul>
    </section>

    <section class="content-section">
        <h3>سابعا: الضمان</h3>
        <p>يضمن الطرف الأول جودة العمل لمدة ٧ سنوات، والتي تشمل:</p>
        <ul>
            <li>عدم تكسر المادة.</li>
            <li>عدم تشققها.</li>
            <li>عدم تغير اللون.</li>
        </ul>
        <p>علماً بأن هذا الضمان لا يشمل:</p>
        <ul>
            <li>الكوارث الطبيعية لا سمح الله.</li>
            <li>العبث وسوء الاستخدام.</li>
            <li>تدخل طرف ثالث.</li>
        </ul>
        <p>شريطة إحضار أصل العقد.</p>
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

    <section id="bank-details">
        <h3>رقم حسابها في بنك الرياض</h3>
        <p>رقم الحساب: [أدخل الرقم هنا] مقابل الآيبان: [أدخل الآيبان هنا]</p>

        <h3>رقم حسابنا في بنك الأهلي</h3>
        <p>رقم الحساب: [أدخل الرقم هنا] مقابل الآيبان: [أدخل الآيبان هنا]</p>
    </section>

    <section id="company-info">
        <h3>معلومات الشركة</h3>
        <p>اسم الشركة: مصنع السواتر للبلاستيك</p>
        <p>العنوان: الرياض، المملكة العربية السعودية</p>
        <p>رقم الهاتف: 0554472017</p>
        <p>البريد الإلكتروني: info@swatir.com</p>
    </section>
</body>
</html>

    <a href="{{ route('generate.pdf', $contract->id) }}" class="btn btn-primary">تحميل التقرير</a>
