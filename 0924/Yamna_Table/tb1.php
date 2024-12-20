<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ساخت جدول</title>
    <style>
        body {
            padding: 20px; 
        }
        table {
            margin: 0 auto; 
        }
        td { 
            text-align: center; 
        }
        select, input[type="text"], input[type="number"] { 
            width: 200px; 
            padding: 5px; 
            margin: 10px 30px; 
        }
        input[type="submit"], input[type="reset"] {
            padding: 10px 20px;
            background-color: #432E54;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #605EA1;
        }
    </style>
</head>
<body dir="rtl">

<h1>ساخت جدول</h1>
<form action="tb2.php" method="GET">
    <label for="rows">تعداد ردیف‌ها:</label>
    <input type="number" id="rows" name="row" required><br>
    <label for="cols">تعداد ستون‌ها:</label>
    <input type="number" id="cols" name="col" required><br>
    <label for="cell_width">پهنای هر سلول:</label>
    <input type="number" id="cell_width" name="cellWidth" required><br>
    <label for="cell_height">ارتفاع هر سلول:</label>
    <input type="number" id="cell_height" name="cellHeight" required><br>
    <label for="bg_color">رنگ پس‌زمینه:</label>
    <select name="bgcolor" id="bg_color">
        <option value="lightblue">آبی کم‌رنگ</option>
        <option value="gray">خاکستری</option>
        <option value="plum">بادمجونی</option>
        <option value="lime">سبز لیمویی</option>
        <option value="pink">صورتی</option>
    </select><br><br>

    <input type="submit" name="submit" value="ارسال">
    <input type="reset" value="بازنشانی">
</form>

</body>
</html>