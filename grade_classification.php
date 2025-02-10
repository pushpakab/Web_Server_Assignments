<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Classification</title>
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
    <h1 style="text-align: center" color: #006400;>Grades Classifier</h1><br><br>
        <form method="POST" action="">
            <label for="grades">Enter your Grades (0-100)</label>
            <input type="text" name="grades" id="grades" required>
            <button type="submit">Classify Grades</button>
        </form>

        <div class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $grades = $_POST["grades"];
                    if ($grades >=90)
                    {
                        echo"Your grade is A";
                    }
                    else if ($grades >= 80 && $grades <= 90)
                    {
                        echo "Your grade is B";
                    }
                    else if ($grades >= 70 && $grades <= 80)
                    {
                        echo "Your grade is C";
                    }
                    else if ($grades >= 60 && $grades <= 70)
                    {
                        echo "Your grade is D";
                    }
                    else if ($grades >= 50 && $grades <= 60)
                    {
                        echo "Your grade is D";
                    }
                    else 
                    {
                        echo "Your grade is F, you failed";
                    }
                }
            ?>
        </div>
</body>
</html>