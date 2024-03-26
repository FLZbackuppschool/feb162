<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida2</title>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
</head>
<body>
<?php include ('../foothead/header.php');
echo "<h1> This webpage takes 3 out of users animals and replace some of it.</h1>"
?>
 
<form name="form" method="post">
<form method="post">
    <label for="animal1">Animal 1:</label>
    <input type="text" placeholder="Enter your first animal" name="animals[]" id="animal1"><br>
    <label for="animal2">Animal 2:</label>
    <input type="text"placeholder="Enter your second animal" name="animals[]" id="animal2"><br>
    <label for="animal3">Animal 3:</label>
    <input type="text" placeholder="Enter your third animal" name="animals[]" id="animal3"><br>
    <input type="submit" name="submit" value="Perform Actions">
</form>
<?php
 if (isset($_POST['submit'])) {

    // a. Sparar djuren som är inmatade i formuläret till arrayen $farmAnimals
    $farmAnimals = $_POST['animals'];

    // b. Skriver ut arrayen i råformat med funktionen print_r
    echo "Input array:\n";
    print_r($farmAnimals);

    // c. Ersätter djuret på tredje platsen med djuret "Struts"
    $farmAnimals[2] = "Struts";

    // d. Lägger till ett fjärde djur "Alpacka" sist i arrayen
    $farmAnimals[] = "Alpacka";

    // e. Tar bort det första elementet helt från arrayen
    array_shift($farmAnimals);

    // f. Skriver ut arrayen i råformat med funktionen print_r
    echo "\n arrya looks like this \n";
    print_r($farmAnimals);

    // g. Skriver ut elementet som finns på andra platsen i arrayen
    echo "\n second position: " . $farmAnimals[1];

   
}
?>
<?php include ('../foothead/footer.php');?>
</body>
</html>