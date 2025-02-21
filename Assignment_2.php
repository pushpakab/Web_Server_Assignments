
<html>
<!-- Problem 1 -->
<H1>String Manipulation</H1>
<form action="index.php">
    <p>Write here: <input type="text" name="userStr"></p>
    <p><input type="submit" value="Submit" name="submit1"></p>
</form>


<?php
function string_manipulation()
{
    echo "String Manipulation<br><br>";
    $userString = strtoupper($_REQUEST["userStr"]);

    if (!str_contains($userString, "PHP")) {
        print("PHP word doesnt exist");
    } else {
        echo strtr($userString, " ", "_");
        echo "<br>Done<br><br>";
    }
}

if (isset($_REQUEST["submit1"])) {
    string_manipulation();
}
?>

<!-- Problem 2 -->
<H1>Form Validation</H1>
<form action="index.php">
    <p>Name: <input type="text" name="name" required></p>
    <p>Email: <input type="email" name="email" required></p>
    <p>Age: <input type="int" name="age"></p>
    <p><input type="submit" value="submit" name="submit2"></p>
</form>

<?php
function form_validation()
{
    echo " Form Validation <br><br>";
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $age = $_REQUEST["age"];

    if ((strlen($name)) < 3) {
        echo "<br>Name must be at least 3 characters<br>";
    } else if (!empty($age) && !is_numeric($age)) { 
        echo "<br>Age must be a number if provided<br>";
    } else {
        echo "Done";
    }
}

if (isset($_REQUEST["submit2"])) {
    form_validation();
}

?>

<!-- Problem 3 -->
<H1>Increment/Decrement Operations</H1>
<?php
$initialValue = 10;
echo "Initial value: $initialValue<br>";

$initialValue++;
echo "Value post addition (++): $initialValue<br>";

$initialValue--;
echo "Value post decrement (--): $initialValue<br>";
?>

<!-- Problem 4 -->
<H1>Switch Case for Days of the Week</H1>
<form action="index.php">
    <p>Write a number to know the day: <input type="text" name="day"></p>
    <p><input type="submit" value="Submit" name="submit3"></p>
</form>
<?php
 
function Days_Number()
{
    $day = $_REQUEST['day'];
    $weekArray = array(
        "1" => "Monday",
        "2" => "Tuesday",
        "3" => "Wednesday",
        "4" => "Thursday",
        "5" => "Friday",
        "6" => "Saturday",
        "7" => "Sunday"
    );

    if (isset($weekArray[$day])) { 
        echo "Today is $weekArray[$day]";
    } else {
        echo "Invalid Input";
    }
}

if (isset($_REQUEST["submit3"])) {
    Days_Number();
}
?>

<!-- Problem 5 -->
<H1>Pricing System</H1>
<form action="index.php">
<p>Base price: $10</p>
<p>Age: <input type="text" name="age" required></p>
<p>
        <label>
            <input type="checkbox" name="student" value="true">
            student
        </label>
</p>
<p><input type="submit" value="submit" name="submit5"></p>
</form>

<?php

function Ticket()
{
    $age = $_REQUEST["age"];
    $finalPrice = 10;
    $isStudent = isset($_REQUEST['student']) ? true : false; 

    if ($age<12)
    {
    $finalPrice = ($finalPrice/2);
    }

    if($age >= 60)
    {
        $finalPrice = (($finalPrice/100)*70); 
        if($isStudent)
        {
            $finalPrice = (($finalPrice/100)*80);
        }
        echo "Ticket Price: $finalPrice";
    }
}

if (isset($_REQUEST["submit5"]))
{
    Ticket();
}

?>


<!-- Problem 6 -->
<H1>Pass by Value vs. Pass by Reference</H1>
<?php
$num1 = 10;
$num2 = 10;
function passByValue($num1) //pass by value
{
    $num1 = $num1 * 2;
    return $num1;
}

function passByReference(&$num2)  //pass by reference
{
    $num2 = $num2 * 2;
}
echo "Original Value: 10 <br><br>";

echo "Pass by value " . passByValue($num1);
echo "<br>We keep the original number: $num1";

passByReference($num2);
echo "<br><br>If we use pass by reference then we change the original number: $num2";

?>

<!-- Problem 7 -->
<H1>Loop with Conditions</H1>
<?php
for ($i = 1; $i <= 20;$i++){
    if (($i % 3)==0){
        echo "Fizz";
    }
    if (($i % 5)==0){
        echo "Buzz";
    }
    if (!(($i % 3)==0) && !(($i % 5)==0)){
        echo $i;
    }
    echo "<br>";
}
?>

<!-- Problem 8 -->
<h1>Returning Values from Functions</h1>
<?php
$value1 = 10;
$value2 = 10;

function calculateAreaOfRectangle($value1, $value2){
$area = $value1 * $value2;
return $area;
}

function calculatePerimeterOfRectangle($value1, $value2){
    $perimeter = 2 * ($value1 + $value2);
    return $perimeter;
}

echo "Original values of $value1 & $value2 <br>";
echo "Area of : " . calculateAreaOfRectangle($value1, $value2);
echo "<br> Perimeter of : " . calculatePerimeterOfRectangle($value1, $value2);
?>

<!-- Problem 9 -->
<h1>Bill Splitter</h1>
<form action="index.php">
    <p>Total Bill: <input type="text" name="totalBill" required></p>
    <p>Number of people: <input type="text" name="people" required></p>
    <p>Tip: <input type="text" name="tip"></p>
    <p><input type="submit" value="Submit" name="submit7"></p>
</form>

<?php
if (isset($_REQUEST["submit7"]))
{

    $billTotal = $_REQUEST["totalBill"];
    $noOfPeople = $_REQUEST["people"];
    $tipPercentage = $_REQUEST["tip"];

    if (empty($tipPercentage)) 
    {
        $tipPercentage = 10;  
    }

    function addition($billTotal,$noOfPeople,$tipPercentage)
    {
        $billTotal += ($billTotal / 100) * $tipPercentage;
        $billTotal = $billTotal/$noOfPeople;
        return $billTotal;
    }

    echo "Each person will pay: $" . addition($billTotal,$noOfPeople,$tipPercentage);

}
?>
</html>