<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            flex-direction: column;
        }
        .calculator-container {
            background-color: #D1A6D1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #5e2a8c; 
            width: 400px;
            text-align: center;
        }
        h1 {
            font-family: Arial, sans-serif;
            color: #4B0082; 
        }
        input[type="number"], select {
            padding: 8px;
            margin: 10px 0;
            border-radius: 5px;
            width: 100%;
            border: 1px solid #5e2a8c;
        }
        input[type="button"], input[type="reset"] {
            background-color: #5e2a8c;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        input[type="button"]:hover, input[type="reset"]:hover {
            background-color: #7a4b9c;
        }
        .result-container {
            background-color: #D1A6D1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #5e2a8c;
            width: 400px;
            text-align: center;
            margin-top: 50px; 
        }
        .result-container h1 {
            color: #4B0082; 
        }
        .result {
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="calculator-container">
    <h1>Calculator</h1>
    <form id="calculatorForm" action="" method="POST">
        <table>
            <tr>
                <td><label for="num1">Number 1:</label></td>
                <td><input type="number" id="num1" name="num1" required></td>
            </tr>
            <tr>
                <td><label for="num2">Number 2:</label></td>
                <td><input type="number" id="num2" name="num2" required></td>
            </tr>
            <tr>
                <td><label for="operation">Operation:</label></td>
                <td>
                    <select id="operation" name="operation">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </td>
            </tr>
        </table>

        <br>
        <input type="button" value="Calculate" onclick="confirmCalculation()">
        <input type="reset" value="Reset">
    </form>
</div>

<script>
    function confirmCalculation() {
        var num1 = document.getElementById("num1").value;
        var num2 = document.getElementById("num2").value;
        var operation = document.getElementById("operation").value;
        var confirmAction = confirm("Are you sure you want to perform the calculation?");

        if (confirmAction) {
            document.getElementById("calculatorForm").submit();
        } else {
            return false;
        }
    }
</script>

<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = "";
    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $result = "Error! Cannot divide by zero.";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }
    ?>
    <div class="result-container">
        <h1>Calculation Result</h1>
        <div class="result">
            <?php
            echo "Calculation result: " . $num1 . " " . $operation . " " . $num2 . " = " . $result;
            ?>
        </div>
    </div>
    <?php
}
?>

</body>
</html>
