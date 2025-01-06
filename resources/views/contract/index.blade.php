<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h2>العقود</h2>

        <!-- نموذج البحث -->
        <form action="{{ route('contracts.index') }}" method="GET">
            <input type="text" name="search" placeholder="بحث عن العقد" value="{{ request('search') }}">
            <button type="submit">بحث</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>رقم العقد</th>
                    <th>تاريخ العقد</th>
                    <th>الطرف الأول</th>
                    <th>الطرف الثاني</th>
                    <th>القيمة الإجمالية</th>
                    <th>المبلغ المدفوع</th>
                    <th>المبلغ المتبقي</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contracts as $contract)
                    <tr>
                        <td>{{ $contract->contract_number }}</td>
                        <td>{{ $contract->contract_date }}</td>
                        <td>{{ $contract->party1->name }}</td>
                        <td>{{ $contract->party2->name }}</td>
                        <td>{{ $contract->total_value }}</td>
                        <td>{{ $contract->paid_amount }}</td>
                        <td>{{ $contract->remaining_amount }}</td>
                        <td>
                         
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
