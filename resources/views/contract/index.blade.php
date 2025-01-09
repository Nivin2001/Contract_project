


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>العقود السابقة</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

</head>
<body>
    <div class="container">
        <div class="header">
            <div class="search-bar">
                <form action="{{ route('contracts.search') }}" method="GET" style="display: flex;">
                    <input type="text" name="query" placeholder="ابحث عن عقد..." required>
                    <button type="submit">🔍</button>
                </form>
            </div>
            <h1>العقود السابقة</h1>
            <div>
                <button onclick="window.location.href='{{ route('contracts.create') }}'">إضافة عقد جديد</button>
                <button onclick="printPage()">طباعة</button>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">خروج</button>
                </form>
            </div>
        </div>

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
    {{-- @include('partials.script') --}}
</body>
</html>
