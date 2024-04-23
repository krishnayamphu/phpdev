<?php
$nameErr = $genderErr = $countryErr = "";
$name = $gender = $country = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = trim($_POST['name']); // "<>aradfa<>"
        $name = stripslashes($name);
        $name = htmlspecialchars($name);
    }
    if (empty($_POST['g'])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST['g'];
    }

    if (empty($_POST['country'])) {
        $countryErr = "Country is required";
    } else {
        $country = $_POST['country'];
    }
}
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    $courses = $_GET['courses'];
    $gender = $_GET['g'];
    $country = $_GET['country'];

    echo "Name: " . $name;
    echo "<br>Gender: " . $gender;
    echo "<br>Country: " . $country;
    echo "<hr>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <?php
    echo "Input Data: <br>";
    echo $name . "<br>" . $gender . "<br>" . $country;
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="name" placeholder="your name"><?php echo $nameErr; ?>
        <br><br>
        <label>Gender</label><?php echo $genderErr; ?>
        <input type="radio" name="g" value="m">male
        <input type="radio" name="g" value="f">female

        <br><br>
        <label>Country</label><?php echo $countryErr; ?>
        <select name="country">
            <option value="">Select country</option>
            <option value="nepal">Nepal</option>
            <option value="india">India</option>
            <option value="china">China</option>
        </select>


        <br><br>
        <button name="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>