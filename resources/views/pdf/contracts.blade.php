<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تنزيل تقرير PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        section {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .pdf-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }
        .pdf-button:hover {
            background-color: #45a049;
        }
        .contract-details {
            margin-top: 30px;
            font-size: 16px;
        }
        .contract-details p {
            line-height: 1.8;
        }
        .contract-details .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>تقرير تنفيذ عمل</h1>
    </header>

    <section>
        <h2>تفاصيل العقد:</h2>
        <div class="contract-details">
            <p><span class="bold">اسم المصنع:</span> مصنع السواتر للبلاستيك</p>
            <p><span class="bold">رقم العقد:</span> 996633</p>
            <p><span class="bold">تاريخ العقد:</span> 01/01/2025</p>
            <p><span class="bold">العميل:</span> محمد زين الدين</p>
            <p><span class="bold">رقم الجوال (العميل):</span> 0593069690</p>
            <p><span class="bold">الممثل عن المصنع:</span> بسام الكحلوت</p>
            <p><span class="bold">رقم عرض السعر:</span> 0145</p>
            <p><span class="bold">تاريخ عرض السعر:</span> 01/01/2025</p>
            <p><span class="bold">إجمالي المبلغ:</span> 33060 ريال</p>
            <p><span class="bold">الدفعة الأولى:</span> 75% عند توقيع العقد</p>
            <p><span class="bold">الدفعة الثانية:</span> 25% عند الانتهاء من الأعمال</p>
            <p><span class="bold">مدة التنفيذ:</span> 35 يوم</p>
            <p><span class="bold">ملاحظات:</span> لا توجد ملاحظات إضافية</p>
        </div>

        <button class="pdf-button" onclick="generatePDF()">تنزيل PDF</button>
    </section>
</body>
</html>
