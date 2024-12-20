<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم نمرات</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: right;
        }

        button, input,  select {
            font-size: 20px;
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        select, input[type="number"] {
            font-size: 18px;
            padding: 10px;
        }
        button {
            background-color: #432E54;
            color: white;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #605EA1;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body dir="rtl">
    <form action="score2.php" name="calcForm" method="GET">
        <label for="shScore">نمره شایستگی:</label><br>
        <select name="shScore" id="shScore" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select><br><br>

<label for="moScore">نمره مستمر:</label><br>
<input type="number" name="moScore" id="moScore" min="0" max="5" step="0.5" required><br><br>

<button type="button" onclick="checkScore();">محاسبه نمره پودمان</button>
<button type="reset">ورود مجدد</button>
</form>

<script>
function checkScore() {
    let moScore = document.querySelector("#moScore").value;

    if (moScore) {
        if (moScore >= 0 && moScore <= 5) {
            if (moScore % 0.5 === 0) {
                let sw = confirm("آیا از ارسال اطلاعات مطمئن هستید؟");
                if (sw)
                    document.calcForm.submit(); 
            } else {
                alert("نمره مستمر باید مضربی از 0.5 باشد.");
            }
        } else {
            alert("نمره مستمر باید عددی بین صفر تا 5 باشد.");
        }
    } else {
        alert("نمره مستمر باید وارد شود.");
    }
}
</script>
</body>
</html>