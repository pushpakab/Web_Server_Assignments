<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #e0ffe0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: auto;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #006400;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #228B22;
        }
        .result {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
            font-size: 25px;
            color:red;
        }
    </style>
</head>
<body>
<h1 style="text-align: center" color: #006400;>Leap Year Detector</h1>
        <form method="POST" action="">
            <label for="year">Enter a Year</label>
            <input type="text" name="year" id="year" required>
            <button type="submit">Check</button>
        </form>

        <div class="result">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $year = $_POST["year"];

                    if(($year % 4 == 0) && ($year % 100 !=0 || $year % 400 == 0))
                    {
                        echo "".$year. " is a Leap Year";
                    }
                    else
                    {
                        echo "".$year. " is Not a Leap Year";
                    }
                }

            ?>
        </div>
</body>
</html>