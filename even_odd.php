<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
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
    <h1 style="text-align: center">Number is Even or Odd?</h1>
        <form method="POST" action="">
            <label for="number">Enter any Number</label>
            <input type="text" id="number" name="number" required>
            <button type="submit">Check</button>
        </form>
    <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $number = $_POST['number'];

                if ($number % 2 == 0) 
                {
                    echo "The number ".$number. " is Even";
                } 

                else 
                {
                    echo "The number " .$number. " is Odd";
                }
            }
        ?>
    </div>
</body>
</html>
