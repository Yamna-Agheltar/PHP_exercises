<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
            flex-direction: column;
            text-align: center;
        }

        .dice-container {
            display: flex;
            gap: 50px;
            justify-content: center;
            margin-bottom: 20px;
        }

        .dice {
            width: 100px;
            height: 100px;
            border-radius: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .green {
            background-color: green;
        }

        .red {
            background-color: red;
        }

        img {
            width: 100%; 
            height: auto;
        }

        .result {
            margin-top: 20px;
        }

        .result img {
            width: 150px; 
            margin-top: 10px;
        }

        button {
            padding: 10px 30px;
            background-color: blueviolet;
            color: white;
            font-size: 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
   <?php
   $n1 = rand(1, 6);
   $n2 = rand(1, 6);
   $color1 = ($n1 === $n2) ? "green" : "red";
   $color2 = ($n1 === $n2) ? "green" : "red";
   ?>

   <div class="dice-container">
       <div class="dice <?php echo $color1; ?>">
            <?php
            switch($n1){
                case 1:
                    echo "<img src='images/1.png'>"; 
                    break;
                case 2:
                    echo "<img src='images/2.png'>"; 
                    break;
                case 3:
                    echo "<img src='images/3.png'>"; 
                    break;
                case 4:
                    echo "<img src='images/4.png'>"; 
                    break;
                case 5:
                    echo "<img src='images/5.png'>"; 
                    break;
                case 6:
                    echo "<img src='images/6.png'>"; 
                    break;
            }
            ?>
       </div>
       <div class="dice <?php echo $color2; ?>">
         <?php
            switch($n2){
                case 1:
                    echo "<img src='images/1.png' alt='dice 1'>"; 
                    break;
                case 2:
                    echo "<img src='images/2.png' alt='dice 2'>"; 
                    break;
                case 3:
                    echo "<img src='images/3.png' alt='dice 3'>"; 
                    break;
                case 4:
                    echo "<img src='images/4.png' alt='dice 4'>"; 
                    break;
                case 5:
                    echo "<img src='images/5.png' alt='dice 5'>"; 
                    break;
                case 6:
                    echo "<img src='images/6.png' alt='dice 6'>"; 
                    break;
            }
         ?>
       </div>
   </div>
   <div class="result">
       <?php
       if ($n1 === $n2) {
           echo "<img src='images/win.jfif' alt='Win'>";
       } else {
           echo "<img src='images/fail.jfif' alt='Fail'>";
       }
       ?> 
         </div>
   <form action="switch.php">
       <button type="submit">Start Game</button>
   </form>
</body>
</html>
