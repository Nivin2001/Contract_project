
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استعلام العقود</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

</head>
<body>
    <div class="container">
           <!-- شريط العنوان -->
<div class="header-bar">
    <div class="title">استعلام</div>
    <div class="buttons">
        <form action="{{ route('contracts.generatePdf', ['contractId' => $contracts->pluck('id')->implode(',')]) }}" method="GET" style="display: inline;">
            @csrf
            <button type="submit">PDF</button>
        </form>
 
        <button onclick="printPage()">طباعة</button>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger">خروج</button>
        </form>
    </div>
</div>
        <!-- شريط البحث -->
        <div class="search-bar">
            <form action="{{ route('contracts.search') }}" method="GET" style="display: flex; flex-wrap: wrap; gap: 10px;">

                <div>
                    <label>الاسم:</label>
                    <select name="name" >
                        <option value="">اختر الاسم</option>
                        @foreach($names as $name)
                            <option value="{{ $name }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label>رقم عرض السعر:</label>
                    <input type="text" name="price_quote_number">
                </div>
                <div>
                    <label>تاريخ من:</label>
                    <input type="date" name="contract_from_date">
                </div>

                <div>
                    <label>تاريخ إلى:</label>
                    <input type="date" name="contract_to_date">
                </div>

                <div>
                    <button type="submit">🔍</button>
                </div>
            </form>
        </div>

        <!-- الجدول -->
        <table>
            <thead>
                <tr>
                    <th>الاجراءات</th>
                    <th>رقم العقد</th>
                    <th>العميل</th>
                    <th>جوال العميل</th>
                    <th>تاريخ العقد</th>
                    <th>مدة التنفيذ</th>
                    <th>اسم ممثل سواتر</th>
                    <th>رقم عرض السعر</th>
                    <th>التاريخ</th>
                    <th>الإجمالي</th>
                    <th>المدفوع</th>
                    <th>المتبقي</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contracts as $contract)
                <tr>
                    <td class="actions">
                        <button onclick="window.location.href='{{ route('contracts.edit', $contract->id) }}'">تعديل</button>
                        <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">حذف</button>
                        </form>
                    </td>
                    <td>{{ $contract->contract_number }}</td>
                    <td>{{ $contract->guarantor_2 }}</td>
                    <td>{{ $contract->phone_2 }}</td>
                    <td>{{ $contract->contract_date }}</td>
                    <td>{{ $contract->work_duration }}</td>
                    <td>{{ $contract->representative_1 }}</td>
                    <td>{{ $contract->price_quote_number }}</td>
                    <td>{{ $contract->start_date }}</td>
                    <td>{{ $contract->total_value }}</td>
                    <td>{{ $contract->paid_amount }}</td>
                    <td>{{ $contract->remaining_amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- عرض الإجماليات -->
        <div class="totals">
            <p>إجمالي المدفوع: {{ $contracts->sum('paid_amount') }} ريال</p>
            <p>إجمالي المتبقي: {{ $contracts->sum('remaining_amount') }} ريال</p>
        </div>
    </div>

  @include('partials.script')
</body>
</html>
