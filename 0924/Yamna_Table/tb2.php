<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتیجه جدول</title>
    <style>
        body {
            padding: 50px;
            font-size: 20px;
        }
        table, td, th {
            border: 1px solid #ccc;
            border-collapse: collapse;
            text-align: center;
            padding: 10px 15px;
        }
        .table-container {
            text-align: center;
            margin-top: 30px;
        }
        table {
            margin: 0 auto;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body dir="rtl">

<?php
if(isset($_GET['row']) && !empty($_GET['row']) &&
   isset($_GET['col']) && !empty($_GET['col']) &&
   isset($_GET['cellWidth']) && !empty($_GET['cellWidth']) &&
   isset($_GET['cellHeight']) && !empty($_GET['cellHeight']) &&
   isset($_GET['bgcolor']) && !empty($_GET['bgcolor'])) {

    $rows = $_GET['row'];
    $cols = $_GET['col'];
    $cellWidth = $_GET['cellWidth'];
    $cellHeight = $_GET['cellHeight'];
    $bgcolor = $_GET['bgcolor'];

    echo "<div class='table-container'>";
    echo "<h2>جدول ایجاد شده:</h2>";
    echo "<table style='background-color: $bgcolor;'>";

    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            echo "<td style='width: {$cellWidth}px; height: {$cellHeight}px;'></td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";

} else {
    echo "<p class='error'>خطا: یکی از فیلدها مقدار ندارد یا درست تعریف نشده است!</p>";
}
?>

</body>
</html>
