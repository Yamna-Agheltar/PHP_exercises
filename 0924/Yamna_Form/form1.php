<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم اطلاعات دانش‌آموز</title>
    <style>
        body {
            padding: 20px;
        }
        table {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        td {
            padding: 10px;
            text-align: right;
        }
        input[type="text"] {
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="button"] {
            padding: 10px 30px 10px 30px;
            margin-right: 660px;
            margin-top: 20px;
            background-color: #432E54;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="button"]:hover {
            background-color: #605EA1;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body dir="rtl">
    <h1 style="text-align:center;">فرم اطلاعات دانش‌آموز</h1>
    <form action="form2.php" method="GET" id="studentForm">
        <table>
            <tr><td>نام:</td><td><input type="text" name="first_name" id="first_name"></td></tr>
            <tr><td>نام خانوادگی:</td><td><input type="text" name="last_name" id="last_name"></td></tr>
            <tr><td>معدل:</td><td><input type="text" name="grade" id="grade"></td></tr>
        </table>
        <input type="button" value="بررسی وضعیت" onclick="check_empty()">
    </form>
    <script>
        function check_empty() {
            var first_name = document.getElementById("first_name").value;
            var last_name = document.getElementById("last_name").value;
            var grade = document.getElementById("grade").value;

            if (first_name === '' || last_name === '' || grade === '') {
                alert('تمام فیلدها باید پر شوند');
                return false;
            }

            if (isNaN(grade) || grade < 0 || grade > 20) {
                alert('معدل باید یک عدد بین 0 و 20 باشد');
                return false;
            }

            var r = confirm("از صحت اطلاعات اطمینان دارید؟");
            if (r === true) {
                window.location.href = 'form2.php?first_name=' + encodeURIComponent(first_name) + '&last_name=' + encodeURIComponent(last_name) + '&grade=' + encodeURIComponent(grade);
            }
        }
    </script>
</body>
</html>
