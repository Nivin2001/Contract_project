<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عقد تنفيذ عمل</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif; /* تغيير الخط إلى Cairo */
            direction: rtl;
            text-align: justify;
            margin: 20px;
            line-height: 1.8;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .logo img {
            width: 100px;
        }

        h1, h2, h3 {
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
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="شعار المصنع">
        </div>
        <div class="header-info">
            <h1>مصنع السواتر للبلاستيك</h1>
            <p>لإنتاج الخشب البلاستيكي</p>
            <p>ترخيص صناعي رقم: 411223494</p>
        </div>
    </header>

    <section class="content-section">
    <p>بعون الله وتوفيقه تم الاتفاق بمدينة <strong>الرياض</strong> في يوم <strong>{{ $contract->start_date }}</strong> والموافق <strong>{{ \Carbon\Carbon::parse($contract->contract_date)->format('d/m/Y') }}</strong> بين كل من:</p>
    <ul>
        <li><strong>الطرف الأول:</strong> مصنع السواتر للبلاستيك، ومقره الرياض، جوال رقم: 0554472017.</li>
        <li><strong>الطرف الثاني:</strong> {{ $contract->representative_1 }}، ومقره جدة، جوال رقم: {{ $contract->phone_1 }}.</li>
    </ul>
    <p>وذلك للاتفاق على تنفيذ <strong>مظلة</strong> و<strong>جلسة</strong> مستخدمًا في ذلك الأخشاب البلاستيكية وفق الشروط التالية:</p>
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
        <li>لون الأخشاب: بيج.</li>
    </ul>
    </section>

    <section class="content-section">
    <h3>ثالثًا</h3>
    <p>تلبيس الأعمدة والفريم الرئيسي كالتالي:</p>
    <p>لا يوجد.</p>
    </section>

    <section>
    <h3>رابعًا: المساحة</h3>
    <ul>
        <li>تبلغ المساحة الإجمالية المتفق عليها مبدئيًا {{ $contract->total_area }} متر مربع.</li>
        <li>قابلة للزيادة والنقصان والعبرة في التمتير النهائي على الطبيعة على أن يبلغ الطرف الثاني بأي تعديل مقترح أثناء التنفيذ.</li>
    </ul>
    </section>

    <section>
    <h3>خامسًا: </h3>
    <p>اتفق الطرفان أن يكون سعر المتر المربع {{ $contract->price_per_square_meter }} بقيمة إجمالية قدرها {{ $contract->total_value }} ريال.</p>
    <ul>
        <li>الدفعة الأولى: {{ $contract->paid_amount }} عند دفع العقد.</li>
        <li>الدفعة الثانية: {{ $contract->remaining_amount }} عند الانتهاء من أعمال الهيكل الحديدي ودهانه وإبلاغ الطرف الثاني بالتمتير النهائي.</li>
    </ul>
    </section>

    <section>
    <h4>سادسًا: التزامات يوفرها الطرف الثاني بالموقع</h4>
    <ul>
        <li>توفير التيار الكهربائي بالموقع، وفي حال عدم توفرها، يقوم الطرف الثاني بتوفير مولدات كهربائية على أن تحسب التكلفة الإجمالية على الطرف الثاني.</li>
        <li>في حال العمل بالدورات المتكررة، يوفر الطرف الثاني قيمة الرافعة لعمل المواد (حديد، بوية، أخشاب).</li>
        <li>إذا كان العمل خارج مدينة الرياض، يوفر الطرف الثاني السكن الملازم للعمال.</li>
    </ul>
    </section>

    <section>
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
    <p>اتفق الطرفان على الانتهاء من تنفيذ هذا العمل خلال {{ $contract->work_duration }} من تاريخ استعلام الدفعة الاولى على ان يبدأ العمل بالموقع خلال ١٠ أيام.</p>

    <h3>عاشرًا: عرض الأسعار</h3>
    <p>عرض الأسعار رقم {{ $contract->price_quote_number }} وتاريخ {{ \Carbon\Carbon::parse($contract->start_date)->format('d/m/Y') }} جزء لا يتجزأ من العقد.</p>

    <h3>إحدى عشر: ملاحظات</h3>
    <p>{{ $contract->notes ?? 'لا يوجد ملاحظات.' }}</p>

    <p>والله الموفق.</p>
    </section>

    <footer>
        <div class="signature">
            <p>الطرف الأول: ________</p>
            <p>الطرف الثاني: ________</p>
            <p>تاريخ التوقيع: {{ \Carbon\Carbon::parse($contract->contract_date)->format('d/m/Y') }}</p>
        </div>
    </footer>

    <section id="bank-details">
    <h3>رقم حسابها في بنك الرياض</h3>
    <p>رقم الحساب: [أدخل الرقم هنا] مقابل الآيبان: [أدخل الآيبان هنا]</p>

    <h3>رقم حسابنا في بنك الأهلي</h3>
    <p>رقم الحساب: [أدخل الرقم هنا] مقابل الآيبان: [أدخل الآيبان هنا]</p>
    </section>

    <section>
        <a href="{{ route('contracts.downloadPdf', $contract->id) }}">Download PDF</a>
    </section>
</body>
</html>
