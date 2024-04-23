<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    $courses = $_GET['courses'];
    $gender = $_GET['g'];
    $country = $_GET['country'];

    echo "Name: " . $name;
    echo "<br>Courses: ";
    foreach ($courses as $c) {
        echo $c . ", ";
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input type="text" name="name" placeholder="your name">
        <br><br>
        <label>Courses</label>
        <input type="checkbox" name="courses[]" value="web">web
        <input type="checkbox" name="courses[]" value="php">PHP

        <br><br>
        <label>Gender</label>
        <input type="radio" name="g" value="m">male
        <input type="radio" name="g" value="f">female

        <br><br>
        <label>Country</label>
        <select name="country">
            <option value="">Select country</option>
            <option value="nepal">Nepal</option>
            <option value="india">India</option>
            <option value="china">China</option>
        </select>


        <br><br>
        <button name="submit">Submit</button>
    </form>
</body>

</html>