<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #div{
            background-color: black;
            width: 400px;
            border-radius: 10px;
            margin-left: 36%;
            height: 350px;
        }
        label{
            color: white;
        }

        form {
            align-items: center;
            justify-items: center;
            text-align: center;
            max-width: 400px;
            padding-top: 20px;
        }
        input, select, button {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1
        {
            text-align: center;
        }
        button{
            background-color: #FC8B19;
            font-weight: bold;
            font-size: 20px
        }
        option{
            background-color: #FC8B19;
        }
        .error {
            text-align: center;
            color: red;
            font-size: 60px;
        }
        .result {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
            font-size: 45px;
            color:black;
        }
    </style> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        #div {
            background-color: black;
            width: 400px;
            border-radius: 10px;
            padding: 20px;
            box-sizing: border-box;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        label {
            color: white;
            margin-bottom: 5px;
            display: block;
            text-align: center;
            width: 100%;
        }

        input, select, button {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #FC8B19;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e67b0d;
        }

        select option {
            background-color: white;
        }

        .result {
            text-align: center;
            font-weight: bold;
            margin-top: 30px;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <h1>Calculator</h1>
    <div id="div">
        <form method="POST" action="" class="form" >
            <label for="number1">Enter First Number</label>
            <input type="text" id="number1" name="number1" required><br>
            <label for="number2">Enter Second Number</label>
            <input type="text" id="number2" name="number2" required><br>
            <label for="operation">Select Operation:</label><br>
            <select id="operation" name="operation" required>
                <option value="">Select operation</option>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>

            <button type="submit">Calculate</button>
        </form>
    </div>
    <div class="result">  
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            $operation = $_POST['operation'];

            $error = "";
            $result = "";

            if (!is_numeric($num1) || !is_numeric($num2)) 
            {
                $error = "Both the inputs must be numbers";
            } 
            else 
            {
                $num1 = (float)$num1;
                $num2 = (float)$num2;

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        $operationSymbol = "+";
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        $operationSymbol = "-";
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        $operationSymbol = "*";
                        break;
                    case "divide":
                        if ($num2 == 0) 
                        {
                            $error = "You cannot divide by zero";
                        } 
                        else 
                        {
                            $result = $num1 / $num2;
                            $operationSymbol = "/";
                        }
                        break;
                    default:
                        $error = "Invalid operation selected";
                }
            }

            if ($error) 
            {
                echo "<p class='error'>$error</p>";
            } 
            else 
            {
                echo "<p  class='result'>Result: $num1 $operationSymbol $num2 = $result</p>";
            }
        }
        ?>
    </div> 
</body>
</html>