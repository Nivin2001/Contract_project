<?php
$total_value = old('total_value', $contract->total_value ?? 0);
$paid_amount = old('paid_amount', $contract->paid_amount ?? 0);
$remaining_amount = $total_value - $paid_amount;
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>نموذج العقد</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container">
    <!-- Header -->
    <div class="header">
      <div class="contract-number">رقم العقد: {{ old('contract_number', $contract->contract_number ?? '01236') }}</div>
      <div class="buttons">
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger">خروج</button>
        </form>

        <button>طباعة</button>
        <button onclick="window.location.href='{{ route('contracts.pdf', ['id' => $contract->id]) }}'" class="btn btn-primary">PDF</button>
        <button>إضافة / تعديل</button>
      </div>
    </div>

    <form action="{{ route('contracts.store') }}" method="POST">
      @csrf
      <div class="form-section">
        <!-- بيانات العقد -->
        <div>
          <label>رقم العقد:</label>
          <input type="text" name="contract_number" value="{{ old('contract_number', $contract->contract_number ?? '') }}" required>
        </div>

        <div>
          <label>تم الاتفاق بمدينة:</label>
          <input type="text" name="city" value="{{ old('city', $contract->city ?? '') }}" required>
        </div>

        <div>
          <label>في يوم:</label>
          <input type="date" name="contract_date" value="{{ old('contract_date', $contract->contract_date ?? '') }}" required>
        </div>

        <!-- الطرف الأول -->
        <div>
          <label>الطرف الأول:</label>
          <input type="text" value="باسم مصنع السواتر للبلاستيك لصناعة وتنفيذ المظلات والسواتر" readonly>
        </div>

        <div>
          <label>يمثله:</label>
          <input type="text" name="representative_1" value="{{ old('representative_1', $contract->representative_1 ?? '') }}" required>
        </div>

        <div>
          <label>جوال رقم (كفيل أول):</label>
          <input type="text" name="phone_1" value="{{ old('phone_1', $contract->phone_1 ?? '') }}" required>
        </div>

        <!-- الطرف الثاني -->
        <div>
          <label>الكفيل الثاني:</label>
          <input type="text" name="guarantor_2" value="{{ old('guarantor_2', $contract->guarantor_2 ?? '') }}" required>
        </div>

        <div>
          <label>المدينة:</label>
          <input type="text" name="city_2" value="{{ old('city_2', $contract->city_2 ?? '') }}" required>
        </div>

        <div>
          <label>الحي:</label>
          <input type="text" name="neighborhood" value="{{ old('neighborhood', $contract->neighborhood ?? '') }}" required>
        </div>

        <div>
          <label>جوال رقم (كفيل ثاني):</label>
          <input type="text" name="phone_2" value="{{ old('phone_2', $contract->phone_2 ?? '') }}" required>
        </div>

        <div>
          <label>بتنفيذ:</label>
          <input type="text" name="implementation" value="{{ old('implementation', $contract->implementation ?? '') }}" required>
        </div>

        <!-- تفاصيل العقد -->
        <div>
          <label>نوع الخشب المستخدم:</label>
          <input type="text" name="wood_type" value="{{ old('wood_type', $contract->wood_type ?? '') }}" required>
        </div>

        <div>
          <label>تلبيس الأعمدة والفريم الرئيسي كالتالي:</label>
          <input type="text" name="column_cladding" value="{{ old('column_cladding', $contract->column_cladding ?? '') }}" required>
        </div>

        <div>
          <label>تبلغ المساحة الإجمالية:</label>
          <input type="text" name="total_area" value="{{ old('total_area', $contract->total_area ?? '') }}" required>
        </div>

        <div>
          <label>سعر المتر المربع:</label>
          <input type="text" name="price_per_square_meter" value="{{ old('price_per_square_meter', $contract->price_per_square_meter ?? '') }}" required>
        </div>

        <div>
          <label>بقيمة إجمالية قدرها:</label>
          <input type="text" name="total_value" value="{{ old('total_value', $contract->total_value ?? '') }}" required>
        </div>

        <div>
          <label>مدة تنفيذ العمل:</label>
          <input type="text" name="work_duration" value="{{ old('work_duration', $contract->work_duration ?? '') }}" required>
        </div>

        <div>
          <label>تاريخ البداية:</label>
          <input type="date" name="start_date" value="{{ old('start_date', $contract->start_date ?? '') }}" required>
        </div>

        <div>
          <label>عرض الأسعار رقم:</label>
          <input type="text" name="price_quote_number" value="{{ old('price_quote_number', $contract->price_quote_number ?? '') }}" required>
        </div>

        <div>
          <label>المدينة:</label>
          <input type="text" name="quote_city" value="{{ old('quote_city', $contract->quote_city ?? '') }}" required>
        </div>

        <div class="notes-section">
          <label>ملاحظات:</label>
          <textarea name="notes">{{ old('notes', $contract->notes ?? '') }}</textarea>
        </div>

        <!-- الحقول الحسابية -->
        <div>
          <label>المبلغ الكلي:</label>
          <input type="text" name="total_value" value="{{ old('total_value', $contract->total_value ?? '') }}" required>
        </div>

        <div>
          <label>المبلغ المدفوع:</label>
          <input type="text" name="paid_amount" value="{{ old('paid_amount', $contract->paid_amount ?? '') }}" required>
        </div>

        <div>
          <label>المبلغ المتبقي:</label>
          <input type="text" name="remaining_amount" value="{{ $remaining_amount }}" readonly>
        </div>

        <div class="summary">
          <table>
            <thead>
              <tr>
                <th>التاريخ</th>
                <th>المبلغ المسدد</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01/01/2025</td>
                <td>{{ $paid_amount }}</td>
              </tr>
              <tr>
                <td>---</td>
                <td>0.00</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2">المبلغ الكلي: {{ $total_value }} | المبلغ المدفوع: {{ $paid_amount }} | المبلغ المتبقي: {{ $remaining_amount }}</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- إرسال البيانات -->
      <div class="form-section">
        <button type="submit">حفظ العقد</button>
      </div>

    </form>
  </div>
</body>
</html>
