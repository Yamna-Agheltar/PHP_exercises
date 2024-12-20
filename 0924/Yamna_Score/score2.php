<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتیجه نمرات</title>
    <style>
        body {
            padding: 50px;
            font-size: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            text-align: right;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        td, th {
            padding: 10px 15px;
            border: 1px solid #ccc;
            text-align: center;
        }
        .red {
            color: red;
        }
        .green {
            color: green;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .result-text {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body dir="rtl">

<?php
// دریافت داده‌ها از URL
if (isset($_GET['shScore']) && isset($_GET['moScore'])) {
    $shScore = $_GET['shScore'];
    $moScore = $_GET['moScore'];
    
    // محاسبه نمره پودمان
    $poodScore = ($shScore * 5) + $moScore;
    
    // تعیین وضعیت قبولی یا مردودی
    $status = ($poodScore >= 12) ? "<span class='green'>قبول</span>" : "<span class='red'>مردود</span>";
?>

<div class="container">
    <h1>نتیجه نمرات</h1>

    <table>
        <tr>
            <th>نمره شایستگی</th>
            <th>نمره مستمر</th>
            <th>نمره پودمان</th>
        </tr>
        <tr>
            <td><?php echo $shScore; ?></td>
            <td><?php echo $moScore; ?></td>
            <td><?php echo $poodScore; ?></td>
        </tr>
    </table>

    <p class="result-text">با توجه به نمره پودمان، هنرجو این درس را <?php echo $status; ?> شده است.</p>
</div>

<?php 
} else {
    echo "<p>خطا: اطلاعات ناقص است!</p>";
}
?>

</body>
</html>
