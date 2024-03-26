<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uppgift feb 16</title>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
<?php

include ('../foothead/header.php');
?>
<body>
    <?php 
    echo "<h1>Welcome to this webpage</h1>". "<br>";
    echo "<p1>this webpage takes users name and writes it down in difrent way</p1>". "<br>";
    echo "<p1>Denna text är genererad med utskriftskommandot i PHP</p1>". "<br>";
    ?>

    <form name="form" method="post">
    
        <input type="text" placeholder="Enter your name plz:" name="subject"  id="Name" >
        <input type="submit" name="submit" value="Submit">
        
    </form>

    
    <?php 
    if (isset($_POST['submit'])) {
        // Check if the form is submitted or not and in these case function  isset () determines if the user has pressed submit button or not 
    
        $strName = isset($_POST['subject']) ? $_POST['subject'] : ""; //subject in this senario if the string is set it will return the an empty string
        //Name is super global variable 
        //iset is a function. taht checks whenever the variable is set or not.
        //wich means that it has to be declared and its not going to be NUll (O)
        echo " Hej! kul att se dig: " . $strName . "<br>"; //
        //? is a conditional opirator in php 
        //subject  identifis and retrieve the value entered into the text input field named "subject" when the form is submitted.
        
    }
    echo "<p> revesed string :</p>" .strrev($strName);
    echo "<p> string with Upper case letters:</p>" .strtoupper($strName);
    echo "<p> string with Lower case letters:</p>" .strtolower($strName);
    echo "<p> string with Len case :</p>" .strlen($strName);
    

     include ('../foothead/footer.php');?>

</body>
</html>
