{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>برنامج العقود</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d3b66;
            color: #ffffff;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .dashboard {
            margin-top: 50px;
        }
        .option-card {
            background-color: #065a82;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            color: white;
        }
        .option-card:hover {
            transform: scale(1.05);
            background-color: #0a83b3;
        }
        .option-card img {
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>برنامج العقود</h1>
        <div class="container d-flex justify-content-center flex-wrap mt-4">
            <div class="option-card col-md-3">
                <a href="{{ route('contracts.create') }}" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="تسجيل عقد">
                    <h3>تسجيل عقد</h3>
                </a>
            </div>
            <div class="option-card col-md-3">
                <a href="{{ route('contracts.index') }}" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="العقود السابقة">
                    <h3>العقود السابقة</h3>
                </a>
            </div>
            <div class="option-card col-md-3">
                <a href="{{ route('contracts.index') }}" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="استعلام">
                    <h3>استعلام</h3>
                </a>
            </div>
            <div class="option-card col-md-3">
                <a href="{{ route('logout') }}" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="خروج">
                    <h3>خروج</h3>
                </a>
            </div>
        </div> --}}
    {{-- </div>
</body>
</html> --}}

<html lang="ar"> <!-- هنا تم تعديل اللغة لتكون "ar" للغة العربية -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>برنامج العقود</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d3b66;
            color: #ffffff;
            text-align: center;
            font-family: Arial, sans-serif;
            direction: rtl; /* تم إضافة هذه الخاصية لجعل اتجاه النص من اليمين لليسار */
        }
        .dashboard {
            margin-top: 50px;
        }
        .option-card {
            background-color: #065a82;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            color: white;
        }
        .option-card:hover {
            transform: scale(1.05);
            background-color: #0a83b3;
        }
        .option-card img {
            width: 80px;
            height: 80px;
        }
        button {
            background-color: #0a83b3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #065a82;
        }

        .card-container {
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            gap: 10px;
        }
        .option-card {
            flex: 1 1 calc(25% - 10px); /* لضبط العرض على 4 بطاقات */
            min-width: 200px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>برنامج العقود</h1>
        <div class="container card-container">
            <div class="option-card">
                <a href="{{ route('contracts.create') }}" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="تسجيل عقد">
                    <h3>تسجيل عقد</h3>
                </a>
            </div>
            <div class="option-card">
                <a href="{{ route('contracts.index') }}" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="العقود السابقة">
                    <h3>العقود السابقة</h3>
                </a>
            </div>
            <div class="option-card">
                <a href="{{ route('contracts.search') }}" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="استعلام">
                    <h3>استعلام</h3>
                </a>
            </div>
            <div class="option-card">
                <a href="#" style="text-decoration: none; color: white;">
                    <img src="https://via.placeholder.com/80" alt="خروج">
                    <h3>خروج</h3>
                </a>

            </div>
        </div>
    </div>
</body>
</html>
